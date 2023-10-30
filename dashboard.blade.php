<!--@if($errors->any())//This is to show the error in the form
<ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif
<html lang="en">
<style>
.booking-form { 
  width:600px;
  margin:-60;
  padding:120px;
}
div.line {
  margin:20px 0;
}
div.line2 {
  width:49%;
  display:inline-block;
  float:left;
  margin-left:1%;
}
label {
  display:block;
  font-family:'Nanum Gothic';
  padding-bottom:10px;
  font-size:1em;
}
input,select,textarea
 {
  border-radius:2px;
  border:2px solid #777;
  font-size:1em;
  font-family:'Nanum Gothic';
  width:100%;
  padding:10px;
}
textarea
{
  height:250px;
}
button 
{
  height: 50px;
  background: blue;
  border: none;
  color: white;
  font-size: 1em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
  padding: 0 12px;
}
button:hover
{
  background: #333;
}
*{
  margin: 0;
  padding: 0;
  outline: none;
  font-family: "Poppins", sans-serif;
}
body{
  display:flex; 
}
.sidebar{
    position:sticky;
    top:0;
    left:0;
    bottom:0;
    width: 250px;
    height:100vh;
    padding:0 1.7rem;
    color:#fff;
    overflow:hidden;
    transition:all 0.5s linear;
    background:rgba(113,99,186,255);
}
.sidebar:hover
{
    width:240px;
    transition:0.5s;
}
.logo{
  height: 80px;
  padding:16px;
}
.menu{
    height:88%;
    position:relative;
    list-style:none;
    padding:0;
}
.menu li{
    padding:1rem;
    margin:8px 0;
    border-radius:8px;
    transition:all 0.5s ease-in-out;
}
.menu li:hover,
.lines{
    background:#e0e0e058;
}
.menu a{
    color:#fff;
    font-size:14px;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:1.5rem;
}
.menu a span{
    overflow:hidden;
}
.menu a li{
    font-size:1.2rem;
}
</style>
    <head>//It shows the dashboard panel of HouseOwner
        <body>
            <div class="sidebar">
                <div class="logo"></div>
                    <ul class="menu">
                        <li class="lines">
                            <a href="#">
                                <i class="style1"></i>
                                <span>Admin DashBoard</span>
                            </a>
                         </li>   
                    <li>
                            <a href="manageusers">
                                <i class="style1"></i>
                                <span>Manage Users</span>
                            </a>
                         </li>   
                         <li>
                            <a href="#">
                                <i class="style1"></i>
                                <span>Manage Rooms</span>
                            </a>
                         </li>   
                         <li>
                            <a href="#">
                                <i class="style1"></i>
                                <span>Booking Status</span>
                            </a>
                         </li>   
                         <li>
                            <a href="#">
                                <i class="style1"></i>
                                <span>Settings</span>
                            </a>
                         </li>
                         </ul>  
                </div>
         <body>
<h2 style="color:rgba(113,99,186,255);margin: 2rem 0 1rem 0;padding-bottom: 3rem; font-size:32;">Hello Owner!!<h2> 
<form class="booking-form" action="{{ route('admin.store')}}" method="post" enctype="multipart/form-data"> \\where this is the HouseOwner Requiremnt form and it store in database so it provided with route.
  @csrf
  <div class="line">
    <label for="name">Room name</label>
    <input type="text" id="name" name="name" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="line">
    <label for="description">Description</label>
    <input type="text" id="description" name="description"required>
  </div>
  <div class="line2">
    <label for="">Minimum Booking Period</label>
    <input type="number" id="minbook" name="minbook"required>
  </div>
  <div class="line2">
    <label for="">Maximum Booking Period</label>
    <input type="number" id="maxbook" name="maxbook" required>
  </div>
  <div class="line">
    <label for="">Rent Amount</label>
    <input type="text" id="rentamt" name="rentamt" required>
  </div>
  <div class="line">
    <label for="">Upload Photo</label>
    <input type="file" id="photo" name="photo" required>
  </div>
  <center><button type="submit">Submit</button><center>
</form>-->