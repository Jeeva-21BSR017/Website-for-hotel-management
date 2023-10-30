<?php
/*
namespace App\Http\Controllers;
                <!-- This code is for House where to edit,update,delete the user-->
use Illuminate\Http\Request;
use App\Models\booknow;
class ShowController extends Controller
{
    public function show()  <!--It display the database schema-->
    {
        $data=booknow::all();//It access all the data stored in the room booking.
        return view('admin.manageusers',compact('data'));//To pass the value use compact.
    }
    public function edit($id)  <!--It edits the user details-->
    {
        $data=booknow::find($id);//To retrieve data by using id.
        return view('admin.edit',compact('data'));
    }
    public function update(Request $request,$id) <!--It update the user details-->
    {
        $data=booknow::find($id);
        $data->name=$request->input('name');//jeeva
        $data->email=$request->input('email');//jeevaa.21bsr@kongu.edu
        $data->phone=$request->input('phone');//9865697423
        $data->adults=$request->input('adults');//1
        $data->children=$request->input('children');//2
        $data->checkin=$request->input('checkin');//28-10-2023
        $data-> checkout=$request->input('checkout');//29-10-2023
        $data->rooms=$request->input('rooms');
        $data->save();
        return redirect('admin');
    }
    public function delete($id)  <!--It deletes the user details-->
    {
        $data=booknow::find($id);
        $data->delete();
        return redirect('manageusers');
    }
}*/
