<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeExport implements FromCollection
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Employee::all();
    }
}
