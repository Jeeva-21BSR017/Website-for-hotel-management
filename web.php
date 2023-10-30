
<?php
/*
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HouseOwnerController;
use App\Http\Controllers\CustomerController;
use App\Models\custm;
use App\Http\Controllers\guestroomController;
use App\Models\guestavails;
use App\Models\booknow;
use App\Http\Controllers\BooknowController;
use App\Http\Controllers\Auth\RegisteredAdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageusersController;
use App\Http\Controllers\ShowController;
Route::view('register','auth.register');//This is view the register page of customer.
Route::post('store',[RegisteredUserController::class,'store']);//This is store the data in database of customer.
Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');//This is to get the main page of the customer  
Route::get('/rooms',[guestroomController::class,'rooms'])->name('customer.rooms');//This is get the guestroom availability form 
Route::post('/customer/store',[CustomerController::class, 'store'])->name('customer.store');//This is to store availability form data to the database.
Route::get('/booknow',[BooknowController::class,'booknow'])->name('customer.booknow');//This is to get the Room Booking of Customer.
Route::post('/booknow/store',[BooknowController::class,'store'])->name('booknow.store');//This is to store the Room Booking of Customer.
Route::view('adminregis','auth.adminregis');//This is a view of HouseOwner registration.
Route::post('store',[RegisteredAdminController::class,'store']);//This is to store the HouseOwner registered data. 
Route::get('/admin',[DashboardController::class,'dashboard'])->name('admin.dashboard');//This is get the HouseOwner Requirement.
Route::get('/manageusers',[ManageusersController::class,'manageusers'])->name('admin.manageusers');//This is get the ManageUsers by the HouseOwner.
Route::post('/admin/store',[DashboardController::class,'store'])->name('admin.store');//HouseOwner Requirement data to be store in database.
Route::get('/manageusers',[ShowController::class,'show'])->name('admin.manageusers');//To manage the User it uses showcontoller and access in the manageusers.
Route::get('/edit/{id}',[ShowController::class,'edit']);//It is to edit the customer Details by the House Owner.
Route::post('/update/{id}',[ShowController::class,'update']);//It is to update the customer Details by the House Owner.
Route::get('/delete/{id}',[ShowController::class,'delete']);//It is to delete the customer Details by the House Owner.
Route::post('/photo/{id}',[guestroomController::class,'photo']);//It is to access the photo in customer page.
*/