<!-- <html lang="en">//This is customer page where they can check availability of rooms and book the rooms
<style>
*{
    font-family:'Poppins',sans-serif;
}
.h-font{
    font-family:'Merienda',cursive;
}
.custom-bg{
  background-color:#2eclac;
}
.custom-bg:hover{
  background-color:#279e8c;
}
.swiper-wrapper
{
  height:auto!important;
}
.availability-form{
  margin-top:-50px;
  z-index:2;
  position:relative;
}
</style>
<head>
<title>GuestRoom Booking</title> 
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</body>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">GuestRoom Booking</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="customer">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities">Facilities</a>
        </li>
      </ul>
      <div class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search for Rooms" aria-label="Search">
        <button class="btn btn-outline-success shadow-none" type="submit">Search</button>
    </div>  
  </div>
  </nav>
  <div class="container-fluid">
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/homebed-1.jpg" height="450px"width="1400px" />
      </div>
      <div class="swiper-slide">
        <img src="images/homebed-2.jpg" height="450px"width="1400px"/>
      </div>
      <div class="swiper-slide">
        <img src="images/homebed-3.jpg"height="450px"width="1400px" />
      </div>
    </div>
  </div>
  <div class="container availability-form">//Checking availability of rooms
    <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
            <h5 class="mb-4">Check Room Availability</h5>
            <form method="post" action="{{ route('customer.store') }}">
              @csrf
                <div class="row align-items-end">
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500;">Check-in</label>
                        <input type="date"class="form-control shadow-none"name="check_in">
                    </div>
                    <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500;">Check-Out</label>
                        <input type="date"class="form-control shadow-none" name="check_out">
                    </div>
                    <div class="col-lg-3 mb-3">
                    <label class="form-label" style="font-weight:500;"> Adult</label>
                    <select class="form-select shadow-none"name="adults">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                 <option value="3">Three</option>
                </select>
                  </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label" style="font-weight:500;">Children</label>
                    <select class="form-select shadow-none" name="children">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                 <option value="3">Three</option>
                </select>
                </div>
                <div class="col-lg-1 mg-lg-3 mt-2">
                  <button type="submit" class="btn btn-success text-white shadow-none custom-bg">Submit</button>
                </div>
              </div>
            </form>
</div>
</div>
</div>
//This is the rooms available and they can bookit
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
  <img src="mages/room-1.jpg" style="min-width:780px min-height:2500px"class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Standard Room</h5>
    <h6 class="mb-4">₹1600 per Night</h6>

    <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Rooms
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Bathroom
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      3 Sofa
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Balcony
    </span>
</div>

<div class="facilities mb-4">

  <h6 class="mb-1">Facilities</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
       Air Conditioner
    </span>
</div>
<div class="d-flex justify-content-evenly mb-2">
    <a href="booknow" class="btn btn-sm btn-success text-white custom-bg shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-otline-dark shadow-none">More details</a>
  </div>
</div>
    </div>
</div>


<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
  <img src="images/room-2.jpg"style="min-width:780px min-height:2500px" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Duluxe Room</h5>
    <h6 class="mb-4">₹2600 per Night</h6>

    <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      3 Rooms
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      3 Bathroom
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      3 Sofa
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Balcony
    </span>
</div>

<div class="facilities mb-4">

  <h6 class="mb-1">Facilities</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
       Air Conditioner
    </span>
</div>
<div class="d-flex justify-content-evenly mb-2">
    <a href="booknow" class="btn btn-sm btn-success text-white custom-bg shadow-none">Book Now</a>//when they click the booknow it redirects to the booking page
      <a href="#" class="btn btn-sm btn-otline-dark shadow-none">More details</a>
  </div>
</div>
    </div>
</div>


<div class="col-lg-4 col-md-6 my-3">
    <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
  <img src="images/room-3.jpg" style="min-width:780px min-height:2500px" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">Luxury Room</h5>
    <h6 class="mb-4">₹5000 per Night</h6>

    <div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      5 Rooms
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      5 Bathroom
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      6 Sofa
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      4 Balcony
    </span>
</div>

<div class="facilities mb-4">

  <h6 class="mb-1">Facilities</h6>
  <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
       Air Conditioner
    </span>
</div>
<div class="d-flex justify-content-evenly mb-2">
    <a href="booknow" class="btn btn-sm btn-success text-white custom-bg shadow-none">Book Now</a>
    <a href="#" class="btn btn-sm btn-otline-dark shadow-none">More details</a>
  </div>
</div>
    </div>
</div>

</div>
<div class="row">

    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
    </div>
</div>
  </div>
</div>
//This is the facilities providing 
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="https://static.vecteezy.com/system/resources/thumbnails/003/520/492/small/wifi-icon-illustration-isolated-wifi-hotspot-symbol-internet-signal-graphic-design-wireless-connection-concept-pictogram-wifi-network-line-symbol-wireless-network-outluine-element-vector.jpg" width="80px">
      <div class="mt-3">WiFi</div>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="https://cdn.vectorstock.com/i/preview-1x/98/58/heater-icon-vector-45359858.jpg" width="80px">
      <div class="mt-3">Heater</div>
</div>
<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="https://i.pinimg.com/564x/fd/10/d4/fd10d44d49f11a4419be5eb278c9ef61.jpg" width="80px">
      <div class="mt-3">AC</div>
</div>
    <div class="col-lg-12 text-center mt-5">
   <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
    </div>
  </div>
</div>
//To Enquiry the details about the Room
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Call Us</h2>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <center>
        <h5>.Feel Free to Call.</h5>
        <a href="tel:+919876540324" class="d-inline-block mb-2 text-decoration-none text-dark">
          +919876540324
       </a>
      </center>
      </div>
</div>
  </div>
</div>
<br><br><br>
<br><br><br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      pagination: {
        autoplay:{
            delay:3500,
            disableOnInteraction:false,
        }
      },
    });
  </script>
</body>
</html>  -->