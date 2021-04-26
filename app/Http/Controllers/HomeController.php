<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Sell;
use App\Models\Buy;
use App\Models\Company;
use Illuminate\Http\Request;

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
        $data['totalclient']     = Client::all()->count();
        $data['totalCompany']    = Company::all()->count();
        $data['totalSell']       = Sell::all()->count();
        $data['totalBuy']        = Buy::all()->count();
        return view('home')->with($data);
    }
}
