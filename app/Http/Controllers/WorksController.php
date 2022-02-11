<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorksController extends Controller
{
    //
    public function index()
    {
        //         $works = DB::table('works')
        //             ->latest()
        //             ->limit(10)
        //             ->get();
        // 
        //         $works = Work::orderBy('created_at', 'desc')
        //             ->limit(10)
        //             ->get();

        $works = Work::latest()
            ->limit(10)
            ->get();

        return view('works.index', compact('works'));
    }





    public function show(Work $work)
    {
        return view('works.show', compact('work'));
    }
}

