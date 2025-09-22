<?php

namespace App\Exports;

use App\Models\PersonalPerforma;
use Maatwebsite\Excel\Concerns\FromCollection;

class PersonalPerformaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PersonalPerforma::select(
            'id',
            'title',
            'service',
            'staff_no',
            'designation',
            'posting',
            'dob',
            'property_return_date',
            'pay_level',
            'mobile',
            'email',
            'aadhaar',
            'pan',
            'event_brief',
            'justification',
            'expected_outcomes',
            'is_itu'
        )->get();
    }

    /**
     * Define Excel headings
     */
    public function headings(): array
    {
        return [
            'ID',
            'Title',
            'Service',
            'Staff No.',
            'Designation',
            'Posting',
            'Date of Birth',
            'Property Return Date',
            'Pay Level',
            'Mobile',
            'Email',
            'Aadhaar',
            'PAN',
            'Event Brief',
            'Justification',
            'Expected Outcomes',
            'ITU Meeting',
        ];
    }
}
