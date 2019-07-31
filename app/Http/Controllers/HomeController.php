<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = DB::table('cities')->get();
        $areas = DB::table('areas')->get();
        $addresses = Address::where('user_id', auth()->id())->orderBy('created_at', 'desc')->paginate(10);

        return view('home', compact('cities', 'areas', 'addresses'));
    }
}
