<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Date;
use Illuminate\Support\Facades\DB;

use App\Models\Agenda;

class LeavesController extends Controller
{


    public function attendanceDate() {

        $month = Date::select('month')->distinct()->get();
        $year = Date::select('year')->distinct()->get();

        // return view('admin.attendance', compact('year', 'month'));
    }


    public function index() {
        $attend = Agenda::all();
        return view('admin.attendance', compact('attend'));
    }

    // public function filterAttendance(Request $request)
    // {
    //     $month = $request->input('month');
    //     $year = $request->input('year');
    //     $day = $request->input('day');

    //     $filteredDates = Date::select($month, $year)->where('day', $day)->get();
    // }

    // public function index() {
    //     $date = Date::all();

    //     return view('admin.attendance', compact('date'));
    // }
}
