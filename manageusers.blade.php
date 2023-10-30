<!--<html> //This page to manage the Customer Details
<style>
table{
    width:100%;
    border-collapse:collapse;
    margin-bottom:20px;
}
 td,th{
    padding:12px;
    text-align:left;
    border-bottom:1px solid #ddd;
}
th,td{
    background-color: #f2f2f2;
}
</style>
<div> //This is to display the database
  <table border="2">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>E-mail</th>
      <th>Phone Number</th>
      <th>Adults</th>
      <th>Children</th>
      <th>Check-in</th>
      <th>Check-out</th>
      <th>Room</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    @foreach($data as $cust) //where in controller it passes the data and it is access by here.
    <tr>
      <td>{{$cust->id}}</td>
      <td>{{$cust->name}}</td>
      <td>{{$cust->email}}</td>
      <td>{{$cust->phone}}</td>
      <td>{{$cust->adults}}</td>
      <td>{{$cust->children}}</td>
      <td>{{$cust->checkin}}</td>
      <td>{{$cust->checkout}}</td>
      <td>{{$cust->rooms}}</td>
      <td><a href="{{ url('edit',$cust->id)}}"class="btn btn-success">Edit</a></td>//This is to edit the HouseOwner details.
      <td><a href="delete/{{$cust->id}}"class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
</table>
</div>
</html>-->