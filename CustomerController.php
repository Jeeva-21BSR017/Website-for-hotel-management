<?php
/*
namespace App\Http\Controllers;
//This code is to check availability of rooms
use Illuminate\Http\Request;
use App\Models\adminuser;
use App\Models\guestavails;
class CustomerController extends Controller
{
   public function index()
   {
      return view('customer.index');
   }
   public function store(Request $request)// This is to store their input
    {
        $request->validate([
            'check_in'=>'required|date',//28-10-2023
            'check_out'=>'required|date',//29-10-2023
            'adults'=>'required|integer',//1
            'children'=>'required|integer',//2
        ]);

        guestavails::create([ //guestavails is to store the database in that model.
            'check_in'=>$request->input('check_in'),//28-10-2003
            'check_out'=>$request->input('check_out'),//29-10-2023
            'adults'=>$request->input('adults'),//1
            'children'=>$request->input('children'),//2
        ]);
        return redirect()->route('customer.index');
    }
}
*/