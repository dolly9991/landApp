@extends('layouts.app')

@section('content')

<style>
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/bg.jpeg);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 100px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color:blue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.content{
  margin-top: 10%;
  max-width: 600px;
}
.content h1{
  font-size: 50px;
  color: #e32986;
}

.content p{
  margin: 10px 0 30px;
  color: #ffffff;
  animation-delay: 0.5s;
}
.content .registerbtn{
  padding: 15px 80px;
  font-size: 10px;
  animation-delay: 1s;
}

.animation{
  opacity: 0;
  transform: translateY(30px);
  animation: moveup 0.5s linear forwards;
}
@keyframes moveup{
  100%{
    opacity: 1;
    transform: translateY(30px);
  }
}
</style>
<div class="container">


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="{{ route('landRights') }}">Transfer Of Land Rights</a>
  <a href="#">Transfer Of Land</a>
</div>

<div class="content" id="main">
<h1 class="animation">Transforming <br> Land Management</h1>
      <p class="animation">land management system aims to balance competing interests, promote sustainable development, and ensure the equitable distribution of land resources for the benefit of present and future generations.</p>
      <span class="registerbtn" style="font-size:30px; color:blue; cursor:pointer" onclick="openNav()">&#9776; Click here for applications</span>
    </div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</div>


@endsection
