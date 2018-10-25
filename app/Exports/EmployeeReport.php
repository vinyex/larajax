<?php

namespace App\Exports;
use App\Employee;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class EmployeeReport implements FromView
{
    use Exportable;

    public function view(): View
    {
      	return view('system-mgmt.report.employees', [
        	'employees' => Employee::all()
      	]);
    }
}
