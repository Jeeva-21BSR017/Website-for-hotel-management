<!--<html>  //This page is to edit the customer details by the Houseowner
<style>
.booking-form {
  width:500px;
  margin:0 auto;
  padding:50px;
  background:#fff;
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
  font-size:1.25em;
}

input,select,textarea
 {
  border-radius:2px;
  border:2px solid #777;
  box-sizing:border-box;
  font-size:1.25em;
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
  height:50px;
  background:blue;
  border:none;
  color:white;
  font-size:1.25em;
  font-family:'Nanum Gothic';
  border-radius:4px;
  cursor:pointer;
  padding:0 12px;
}
button:hover
{
  background:#333;
}
</style>
<form class="booking-form" action="{{url('update/'.$data->id)}}" method="post">//It is to edit and update the form
@csrf
  <div class="line">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="Jeeva" value="{{$data->name}}"pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="line">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" value="{{$data->email}}" placeholder="jeeva@gmail.com" required>
  </div>
  <div class="line">
    <label for="phone">Your Phone Number</label>
    <input type="tel" id="phone" name="phone" placeholder="9087654321" value="{{$data->phone}}" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>//In values database phone data id fetched using id.
  </div>
  <div class="line2">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="adults" value="{{$data->adults}}" placeholder="2" min="1" required>//In values database adults data id fetched using id.
  </div>
  <div class="line2">
    <label for="child">Children</label>
    <input type="number" id="child" name="children" value="{{$data->children}}"placeholder="2" min="0" required>
  </div>
  <div class="line2">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" value="{{$data->checkin}}" required>
  </div>
  <div class="line2">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" value="{{$data->checkout}}"required>
</div>
  <div class="line">
    <label for="room-selection">Select Room Preference</label>
    <select id="room-selection" name="rooms" value="{{$data->rooms}}" required>
        <option value="">Choose a Room from the List</option>
        <option value="standard">Standard</option>
        <option value="duluxe">Duluxe</option>
        <option value="luxury">Luxury</option>
    </select>
  </div>
  <center><button type="submit">Update</button><center>//After Edit Update the form 
</form>
</html>-->