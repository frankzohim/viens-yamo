<?php

namespace App\Http\Controllers\Admin\Report;
use App\Http\Controllers\Controller;
use App\Services\Api\Messages\ReportService;
use Illuminate\Http\Request;

class ListReportController extends Controller
{
    

     public function index(){

        $reports = (new ReportService)->getReports();
        //dd($reports);
        return view('backend.reports.list', compact('reports'));
    }
}
