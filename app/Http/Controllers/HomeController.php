<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;
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

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home',$leftmenu);
    }

    public function view_vehicles()
    {

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home.view_vehicles',$leftmenu);
    }

    public function view_invoices()
    {

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home.view_invoices',$leftmenu);
    }

    public function view_bids()
    {

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home.view_bids',$leftmenu);
    }

    public function view_dashboard()
    {

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home.view_dashboard',$leftmenu);
    }
    public function view_users()
    {

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home.view_users',$leftmenu);
    }

    public function view_customers()
    {

        $menu= new DataModel();
        $leftmenu = $menu->getmenu();
        // dd($leftmenu);
        return view('home.view_customers',$leftmenu);
    }



    
    
}
