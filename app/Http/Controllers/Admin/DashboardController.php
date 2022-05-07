<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()

    {
        $countOfUsers=DB::table('users')->count();
        return view('admin.dashboard.index',compact('countOfUsers'));
    }

}
