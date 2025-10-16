<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class MasterSheetExport implements FromArray, WithHeadings, WithEvents
{
    protected $officer;

    public function __construct($officer)
    {
        $this->officer = $officer;
    }

    public function array(): array
    {
        $officer = $this->officer;

        // Get country names from QRP form JSON
        $countries = \App\Models\Country::pluck('name', 'id');
        $countriii = json_decode($officer->qrpForm->country ?? '[]', true);
        $countryIds = collect($countriii)->pluck('country')->filter()->toArray();
        $countryNames = [];
        foreach ($countryIds as $cid) {
            if (isset($countries[$cid])) $countryNames[] = $countries[$cid];
        }
        $countryStr = implode(', ', $countryNames);

        return [[
            $officer->id,
            $officer->staff_no ?? '',
            $officer->officer_name ?? '',
            $officer->designation ?? '',
            $officer->qrpForm->calendar_year ?? '',
            $officer->delegation_proposed ?? '',
            $officer->qrpForm->meeting_name ?? '',
            ($officer->qrpForm->meeting_from ?? '').' - '.($officer->qrpForm->meeting_to ?? ''),
            $countryStr,
            optional($officer->profile)->title ?? '',
            optional($officer->profile)->date_of_birth ?? '',
            optional($officer->profile)->gender ?? '',
            $officer->cadre_clearance ?? '',
            $officer->grade ?? '',
            $officer->equivalent_rank ?? '',
            $officer->level_in_pay_matrix ?? '',
            $officer->office ?? '',
            $officer->expenditure_directorate ?? '',
            $officer->expenditure_wpc ?? '',
            $officer->expenditure_secretariat ?? '',
            $officer->expenditure_tec ?? '',
            $officer->expenditure_ncat ?? '',
        ]];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Staff No.',
            'Officer Name',
            'Designation',
            'Calendar Year',
            'Delegation Proposed',
            'Meeting',
            'Period',
            'Country',
            'Title',
            'Date of Birth',
            'Gender',
            'Cadre Clearance',
            'Grade',
            'Equivalent Rank',
            'Level',
            'Office',
            'Exp (Directorate)',
            'Exp (WPC)',
            'Exp (Secretariat)',
            'Exp (TEC)',
            'Exp (NCA-T)',
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                foreach (range('A', 'V') as $col) {
                    $sheet->getColumnDimension($col)->setAutoSize(true);
                }
                $sheet->getStyle('A1:V1')->getFont()->setBold(true);
                $sheet->getStyle('A1:V1')->getAlignment()->setHorizontal('center');
            },
        ];
    }
}
