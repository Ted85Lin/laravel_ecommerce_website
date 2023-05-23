<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link href="{{asset('css/home.css')}}" rel="stylesheet" /> 

  
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: white;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
    
}
  .badge[data-badge]:after {
   content:attr(data-badge);
   font-size:.7em;
   background-color:darksalmon;
   color:white;
      
  
   height:18px;
   text-align:center;
   line-height:18px;
   border-radius:50%;
   box-shadow:0 0 1px ;
   margin-top: 7px;
   float:right;
      margin-left: 0px;
      width: auto;
min-width: 18px;
padding: 3px;
}
        

</style>

    
</head>

<body>
<section id="header">
	<div class="header"> 
	<input type="text" placeholder="Search anything">
		<a  href="#"> <img class="search" src="{{ asset('img/icons8-search-24.png') }}" width="24" height="24" alt=""/> </a>
		<div class="icons"> 
            <div class="dropdown">
  <button class="dropbtn"><img src="img/icons8-customer-32.png"/></button>
  <div class="dropdown-content">
    <a href="{{url('signin')}}">Sign in</a>
    <a href="{{url('signup')}}">sign up </a>
       <a href="{{url('logout')}}">logout </a>

  </div>
</div>
           
            
		<a class="shop" href="{{route('shoppingCart')}}"><img   src="{{ asset('img/icons8-shopping-cart-32.png') }}"/> 
            <span class="badge" data-badge='{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}'></span> 
            </a>
           </div>
        
	<h1 class="logo"> Hajaku</h1>
	</div>
	
	<div class="nav">
	<ul>
        	<a href="{{url('home1')}}"> <li> HOME </li></a>
			<a href="#"> 
                <li>
                <div class="dropdown">
 WOMEN
  <div class="dropdown-content">
    <a href="{{url('signin')}}">Pants</a>
    <a href="{{url('signup')}}">Shorts</a>
       <a href="{{url('logout')}}">Dresses </a>

  </div> </li></a>
		<a href="#"> <li> <div class="dropdown">
  MEN
  <div class="dropdown-content">
    <a href="{{url('products')}}">Jeans</a>
    <a href="{{url('signup')}}">Shirt </a>
       <a href="{{url('logout')}}"> Underwear</a>

  </div> </li></a>
	
		<a href="#"> <li> SHOES </li></a>
		<a href="#"> <li> ABOUT </li></a>
		<a href="#"> <li> CONTACTS </li></a>
	</ul>
	</div>
	<div class="banner">
		<a href="{{url('products')}}"><img src="img/test2_02.jpg"/></a>
	</div>
	
</section>
<section id="content">
	<div class="banner"> <img src="img/Untitled-2.jpg"></div>
	<div class="img"><img src="img/test4_03.jpg"></div>
	<div id="img1"><img src="img/test2_05.jpg"></div>
	<div id="banner1"><img src="img/ll-1.jpg"></div>
	<div class="show">
		<a href="#"> BEST SELLERS </a>
	<a href="#"> FEATURES </a>
	</div >
	<div class="imgi"><img src="img/1480985055735492990_thumbnail_800x.jpg"></div>
	<div class="imgi"><img src="img/1471481380093942559_thumbnail_800x.jpg"></div>
	<div class="imgi"><img src="img/1488529416345764928_thumbnail_800x.jpg"></div>
	<div class="imgi"><img src="img/15150296738365263783_thumbnail_800x.jpg"></div>
	<div > <img class="ban2" src="img/test4_02.jpg"></div>
	<div class="newarivals"><a> New Arrivals</a></div>
	<div class="ig1"><img src="img/15129795542680027631_thumbnail_800x.jpg"></div>
	<div class="ig1"><img src="img/15160830456878578331_thumbnail_800x.jpg"></div>
	<div class="ig1"><img src="img/15117670930055490235_thumbnail_800x.jpg"></div>
	<div class="ig1"><img src="img/15091573397534251701_thumbnail_800x.jpg"></div>
	
	<div class="info">
	. 
	<div class="ico"> <img src="img/icons8-truck-50.png">  </div>
	<div class="textinfo">
	FREE SHIPPING<br/><br/>
We provide you with fast and free delivery regardless of the product size and value.</div>
		<div class="ico"><img src="img/icons8-wallet-64.png"></div> 
		<div class="textinfo">
	MONEY BACK GUARANTEE<br/><br/>
30 Day Money Back Guarantee. In order to return the goods please follow our returns policy.
</div>
<div class="ico">
	<img src="img/icons8-phone-64.png"> </div>
 <div class="textinfo">
ONLINE SUPPORT <br/><br/>
Round-the-clock free hotline. </div>
</div>
<div class="subscribe"> Sign up to Receive 10% off your first order<br><br>
<input type="text" > <button> Subscribe </button>
</div>
</section>
<section id="footer">
    <div class="about">
    <li> ABOUT</li>
    <li><a href="#">About us</a></li>
    <li><a href="#"> Contact us</a></li>
    <li><a href="#">Privacy Policy</a></li>
    <li><a href="#">Terms of use </a></li>
            
    </div>
   
    <div class="customer">
    <li>CUSTOMER SUPPORT</li>
    <li><a href="#">Support Center</a></li>
    <li><a href="#"> Shipping info</a></li>
    <li><a href="#" href="#">Payments</a></li>
    <li><a href="#">Returns </a></li>
    </div>
    <div class="myaccount">
    <li> MY ACCOUNT</li>
    <li><a href="#">Sign in </a></li>
    <li><a href="#"> View cart</a></li>
    <li><a href="#">My whishlist</a></li>
    <li><a href="#">Track my order </a></li>
    </div>
    <div class="fllowus">
    <li>FOLLOW  US ON SOCIAL</li>
    <img src="img/icons8-facebook-32.png">
    <img src="img/icons8-twitter-32.png">
    <img src="img/icons8-instagram-32 (1).png">
    <img src="img/icons8-play-button-32.png">
    
    </div>
    
    <div class="s"> © 2018 Hajaku Store. All Rights Reserved.
</div>
	
</section>

</body>
</html>
