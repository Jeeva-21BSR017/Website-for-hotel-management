<!-- @if($errors->any())  
<ul>
    {!! implode('',$errors->all('<li>:message</li>'))!!}
</ul>
@endif //This page if for HouseOwner Registration
<style>
body {
    font-family:Arial,sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
    background-color:#f9f9f9;
    background:url('https://img.freepik.com/free-vector/dark-black-background-design-with-stripes_1017-38064.jpg') no-repeat center center/cover;
}
form {
    background-color:#fff;
    max-width:400px;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 20px rgba(0, 0, 0, 0.1);
    text-align:center;
    transition:transform 0.3s ease;
    }
form:hover {
     transform:translateY(-5px);
}
label {
    display:block;
    margin-bottom:10px;
    font-weight:bold;
    color:#333;
}
input[type="text"]
{
    width:calc(100%-22px);
    padding:10px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:16px;
}
input[type="submit"] {
    background-color:#3498db;
    color:white;
    padding:12px 25px;
    border:none;
    border-radius:5px;
    font-size:18px;
    cursor:pointer;
    transition:background-color 0.3s ease;
}
input[type="submit"]:hover {
    background-color: #2980b9;
}
</style>
<form method="POST" action="/store">
    <h4 style="font-size:20px;color:#3498db;font-family:Arial,sans-serif;">Hello Admin!<h4>
    <label for=""class="color">Name<input type="text"name="name"></label><br>
    <label for=""class="color">E-mail<input type="text"name="email"></label><br>
    <label for=""class="color">MobileNumber<input type="text"name="mobilenums"></label><br>
    <input type="submit"value="Register">
    @csrf
</form> -->