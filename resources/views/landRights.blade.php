@extends('layouts.app')

@section('content')
<div class="container">
<style>
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 210px;
            background-color: darkslategrey;
            padding-top: 0px;
            overflow-x: hidden;
            transition: all 0.3s;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
        .sidebar  img {
            width: 80px;
            height: 50px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .sidebar .dropdown {
            display: none;
            position: relative;
            background-color: darkslategrey;
            padding-left: 20px;
        }
        .sidebar .dropdown li a {
            display: block;
            padding: 5px;
            font-size: 16px;
        }
        .sidebar a:hover +.dropdown,
        .dropdown:hover {
            display: block;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
            }
        }
        h3 {text-align: center;}
        .links {text-align: center;}
        
    </style>
   <div class="sidebar"> 
        <hr>
        <div class="links">

        <img class="center" src="images/capture.jpeg" alt="Logo"> 
        <br><hr>
        <h3>User</h3>
        <hr>
        <a href="/redirects">Dashboard</a>
        <a  href="#">Applications</a>
            <ul class="dropdown">
                <li><a href="#">Change of land use</a></li>
                <li><a href="{{ route('landRights') }}">Transfer of land rights</a></li>
                <li><a href="#">Title deed</a></li>
            </ul>
        <a href="#">Notifications</a>
        <a href="#">Payments</a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header"><h3>Application For Transfer Of Rights Form</h3>
</div>
                <div class="card-body">
                <style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  color: black;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.theo {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  color: black;
}
</style>
<div class="container">

<br>

<div class="theo">
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
<form method="POST" action="/redirects">
        @csrf    
    <h4><b>Transferor Details</b></h4>
    <label for="transferorname">Full Name</label>
    <input type="text" id="transferorname" name="transferorname" pattern="[A-Za-z]+" required placeholder="Your name..">

    <label for="mstatus">Marital Status</label>
    <select type="text" id="mstatus" name="mstatus" required>
    <option value="" disabled selected>Select Marital Status:</option>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
          </select>

    <label for="transferoromang">ID No</label>
    <input type="number" maxlength="9" id="transferoromang" name="transferoromang" required placeholder="Your ID..">
    
    <label for="transferortelephone">Telephone No</label>
    <input type="number" maxlength="8" id="transferortelephone" name="transferortelephone" pattern="7[0-9]{7}" required placeholder="Your telephone no..">
    <br>
    <br>
    <label for="transferoraddress">Address</label>
    <input type="text" id="transferoraddress" name="transferoradddress" required placeholder="Your address..">

    <br>
    <br>
    <label for="transferorvillage">Village</label>
    <select type="text" id="transferorvillage" name="transferorvillage" required>
    <option value="" disabled selected>Select a village:</option>
            <option value="gaborone">Seronga</option>
            <option value="palapye">Palapye</option>
            <option value="mahalapye">Mahalapye</option>
            <option value="maun">Maun</option>
            <option value="serowe">Serowe</option>
            <option value="lobatse">Lobatse</option>
            <option value="mochudi">Mochudi</option>
            <option value="moshupa">Moshupa</option>
            <option value="molepolole">Molepolole</option>
            <option value="kasane">Kasane</option>
            <option value="gantsi">Gantsi</option>
            <option value="mogoditshane">Mogoditshane</option>
          </select>

    <label for="transferordistrict">District</label>
    <select type="text" id="transferordistrict" name="transferordistrict" required>
    <option value="" disabled selected>Select a district:</option>
            <option value="ghanzi">Ghanzi</option>
            <option value="chobe">Chobe</option>
            <option value="kgalagadi">Kgalagadi</option>
            <option value="kweneng">Kweneng</option>
            <option value="kgatleng">Kgatleng</option>
            <option value="south-east">South East</option>
            <option value="north-west">North West</option>
            <option value="north-east">North East</option>
            <option value="southern">Southern</option>
            <option value="central">Central</option>
            <option value="ngamiland">Ngamiland</option>
          </select>
    
    <label for="transferordate">Date</label>
    <input type="date" id="transferordate" name="transferordate" min="{{ date('Y-m-d', strtotime('+1 day'))}}" required placeholder="Select a date">
    <br><hr><br>
    <h4><b>Plot Details</b></h4>
    <label for="plotlocation">Plot Location</label>
    <input type="text" id="plotlocation" name="plotlocation"  required placeholder="Plot location (lot no, ward, village)">
    
    <label for="presentuse">Present Use</label>
    <select type="text" id="presentuse" name="presentuse" required>
    <option value="" disabled selected>Select Present Land Use:</option>
            <option value="residential">Residential</option>
            <option value="commercial">Commercial</option>
            <option value="agricultural">Agricultural</option>
            <option value="industrial">Industrial</option>
            <option value="recreational">Recreational</option>
    </select>
    <label for="leaseduration">Lease Duration</label>
    <input type="text" id="leaseduration" name="leaseduration"  required placeholder="Lease Duration..">
    <br>
    <hr>
    <h4><b>Transferee Details</b></h4>
    <label for="transfereename">Full Name</label>
    <input type="text" id="transfereename" name="transfereename" required placeholder="Transferee name..">

    <label for="transfereeomang">ID No</label>
    <input type="number" maxlength="9" id="transfereeomang" name="transfereeomang" required placeholder="Transferee ID..">
    
    <label for="dob">DOB</label>
    <input type="date" id="dob" name="dob" max="{{ date('Y-m-d', strtotime('+1 day'))}}" required placeholder="Select a date">
    
    
    <label for="transfereetelephone">Telephone No</label>
    <input type="number" maxlength="8" id="transfereetelephone" name="transfereetelephone" pattern="7[0-9]{7}" required placeholder="Transferee telephone no..">
    <br>
    <br>
    <label for="transfereeaddress">Address</label>
    <input type="text" id="transfereeaddress" name="transfereeaddress" required placeholder="Transferee Address..">

    <br>
    <br>
    <label for="transfereevillage">Village</label>
    <select type="text" id="transfereevillage" name="transfereevillage" required>
    <option value="" disabled selected>Select a village:</option>
            <option value="gaborone">Seronga</option>
            <option value="palapye">Palapye</option>
            <option value="mahalapye">Mahalapye</option>
            <option value="maun">Maun</option>
            <option value="serowe">Serowe</option>
            <option value="lobatse">Lobatse</option>
            <option value="mochudi">Mochudi</option>
            <option value="moshupa">Moshupa</option>
            <option value="molepolole">Molepolole</option>
            <option value="kasane">Kasane</option>
            <option value="gantsi">Gantsi</option>
            <option value="mogoditshane">Mogoditshane</option>
          </select>

    <label for="transfereedistrict">District</label>
    <select type="text" id="transfereedistrict" name="transfereedistrict" required>
    <option value="" disabled selected>Select a district:</option>
            <option value="ghanzi">Ghanzi</option>
            <option value="chobe">Chobe</option>
            <option value="kgalagadi">Kgalagadi</option>
            <option value="kweneng">Kweneng</option>
            <option value="kgatleng">Kgatleng</option>
            <option value="south-east">South East</option>
            <option value="north-west">North West</option>
            <option value="north-east">North East</option>
            <option value="southern">Southern</option>
            <option value="central">Central</option>
            <option value="ngamiland">Ngamiland</option>
          </select>
   
    <label for="date">Date</label>
    <input type="date" id="date" name="date" min="{{ date('Y-m-d', strtotime('+1 day'))}}" required placeholder="Select a date">
    <br>
    <br>
    <button type="submit" class="btn btn-primary"> Submit</button>
  </form>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
