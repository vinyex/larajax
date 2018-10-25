<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeReport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        //untuk GMT +7
        date_default_timezone_set('asia/bangkok');
        $format = 'Y/m/d';
        $now = date($format);
        $to = date($format, strtotime("+30 days"));
        $constraints = [
            'from' => $now,
            'to' => $to
        ];

        $employees = $this->getHiredEmployees($constraints);
        return view('system-mgmt/report/index', ['employees' => $employees, 'searchingVals' => $constraints]);
    }

    public function exportPDF(Request $request) 
    {
        $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];

        $employees = $this->getExportingData($constraints);
        $pdf = PDF::loadView('system-mgmt/report/pdf', ['employees' => $employees, 'searchingVals' => $constraints]);

        return $pdf->download('report_from_'. $request['from'].'_to_'.$request['to'].'.pdf');
    }

    public function search(Request $request) 
    {
        $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];

        $employees = $this->getHiredEmployees($constraints);
        return view('system-mgmt/report/index', ['employees' => $employees, 'searchingVals' => $constraints]);
    }

    private function getHiredEmployees($constraints) 
    {
        $employees = Employee::where('date_hired', '>=', $constraints['from'])
                        ->where('date_hired', '<=', $constraints['to'])
                        ->get();
        return $employees;
    }

    private function getExportingData($constraints) {
        return DB::table('employees')
        ->leftJoin('division', 'employees.division_id', '=', 'division.id')
        ->select('employees.nik', 'employees.nama_lengkap','employees.alamat_ktp', 'employees.birthdate', 'employees.date_hired', 'division.name as division_name')
        ->where('date_hired', '>=', $constraints['from'])
        ->where('date_hired', '<=', $constraints['to'])
        ->get()
        ->map(function ($item, $key) {
        return (array) $item;
        })
        ->all();
    }

    public function laporanExcel()
    {
      return Excel::download(new EmployeeReport, 'employees.xlsx');
    }
}
