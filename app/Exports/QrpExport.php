<?php

namespace App\Exports;

use App\Models\QrpForm;
use App\Models\Agency;
use App\Models\Country;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Events\AfterSheet;

class QrpExport implements FromCollection, WithHeadings, WithEvents
{
   protected $id;
    protected $filters = [];

    public function __construct($id = null, $filters = [])
    {
        $this->id = $id;
        $this->filters = $filters;
    }


public function collection()
{
    $agencies = Agency::pluck('name', 'id');
    $countries = Country::pluck('name', 'id');

    $query = QrpForm::with('officers');

    // ✅ Export single record
    if ($this->id) {
        $query->where('id', $this->id);
    }

    // ✅ Export with filters (for all visible in index)
    if (!empty($this->filters)) {
        if (!empty($this->filters['itu'])) {
            $query->where('agency', $this->filters['itu']);
        }

        if (!empty($this->filters['quarter'])) {
            $query->where('quarter', $this->filters['quarter']);
        }

        if (!empty($this->filters['nodal_id'])) {
            $query->where('created_by', $this->filters['nodal_id']);
        }

        if (!empty($this->filters['status'])) {
            $query->where('status', $this->filters['status']);
        } else {
            $query->where('status', 'Pending');
        }
    }

    $forms = $query->get();

        $data = [];
        $srno = 1;

        foreach ($forms as $form) {
            $firstOfficer = true;

            // Decode countries from JSON
            $countriii = json_decode($form->country, true) ?? [];
            $countryIds = collect($countriii)->pluck('country')->toArray();
            $CountryNames = [];
            foreach ($countryIds as $cid) {
                if (isset($countries[$cid])) {
                    $CountryNames[] = $countries[$cid];
                }
            }
            $countryStr = implode(', ', $CountryNames);

            if ($form->officers->isEmpty()) {
                // Case: No officers
                $row = [];
                $row[] = $srno++;
                $row[] = $agencies[$form->agency] ?? '';
                $row[] = $form->meeting_name ?? '';
                $row[] = $countryStr;
                $row[] = $form->invitation_letter ? 'Yes' : 'No';
                $row[] = $form->similar_meeting ?? '';
                $row[] = $form->meeting_from ?? '';
                $row[] = $form->meeting_to ?? '';
                $row[] = '';
                $row[] = '';
                $row[] = '';
                $row[] = '';
                $data[] = $row;
            } else {
                foreach ($form->officers as $officer) {
                    $row = [];

                    if ($firstOfficer) {
                        $row[] = $srno++;
                        $row[] = $agencies[$form->agency] ?? '';
                        $row[] = $form->meeting_name ?? '';
                        $row[] = $countryStr;
                        $row[] = $form->invitation_letter ? 'Yes' : 'No';
                        $row[] = $form->similar_meeting ?? '';
                        $row[] = $form->meeting_from ?? '';
                        $row[] = $form->meeting_to ?? '';
                    } else {
                        $row = array_fill(0, 8, '');
                    }

                    $row[] = $officer->mode ?? '';
                    $row[] = $officer->officer_name ?? '';
                    $row[] = $officer->justification ?? '';
                    $row[] = $officer->expected_outcome ?? '';

                    $data[] = $row;
                    $firstOfficer = false;
                }
            }
        }

        return collect($data);
    }

    public function headings(): array
    {
        return [
            'S.No',
            'Division/Unit',
            'Meeting Name',
            'Country',
            'Invitation Letter',
            'Meeting Before',
            'Start Date',
            'End Date',
            'Mode of Meeting',
            'Officer Name',
            'Justification',
            'Expected Outcome',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();

                foreach (range('A', 'L') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }

                $sheet->getStyle('A1:L1')->getFont()->setBold(true);
                $sheet->getStyle('A1:L1')->getAlignment()->setHorizontal('center');
            },
        ];
    }
}
