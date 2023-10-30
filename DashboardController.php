<?php
/*
namespace App\Http\Controllers;
// This code is for the houseOwner contoller-->
use Illuminate\Http\Request;
use App\Models\dashboard;
class DashboardController extends Controller
{
    public function dashboard()//They can view the dashboard page
   {
      return view('admin.dashboard');
   }
   public function store(Request $request)// This is to store the house owner requirement
{
    $request->validate([
        'name'=>'required',//room name -standard,luxury
        'description'=>'required',//about room description-Feel comfort and trust worthy.
        'minbook'=>'required|integer',-choose minimum booking period-1
        'maxbook'=>'required|integer',-choose maximum booking period-2
        'rentamt'=>'required',//room cost-1900
        'photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:10240',//room photo
    ]);
    if ($request->hasFile('photo'))
    {
        $path=$request->file('photo')->store('photos');//This is to store the photo in our folder
    }
    dashboard::create([ //In dashboard it store the values
        'name'=>$request->name,
        'description'=>$request->description,
        'minbook'=>$request->minbook,
        'maxbook'=>$request->maxbook,
        'rentamt'=>$request->rentamt,
        'photo'=>$path ?? null,
    ]);
    return redirect()->route('admin.dashboard');//It redirect to the House owner page
}
}
*/