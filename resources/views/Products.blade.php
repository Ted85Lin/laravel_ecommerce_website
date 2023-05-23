
<html>
<head>
    <title> Products</title>
      <link href="{{asset('css/home.css')}}" rel="stylesheet" /> 
     <link href="{{asset('css/Products.css')}}" rel="stylesheet" /> 
     <script  type="text/javascript" src="{{asset('js/jquery.3.js')}}"></script>



  
    <style>
/* Style The Dropdown Button */
        input[type="text"], textarea {

  background-color : #f6f6f6;

}
.dropbtn {
    background-color: #f6f6f6;
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
    
        .btn{
    background-color:darksalmon;
    border: none;
    color: white;
            margin-top: 7px;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
            border-radius: 8px;
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
			<a href="#"> <li> <div class="dropdown">WOMEN
 
  <div class="dropdown-content">
    <a href="{{url('signin')}}">Pants</a>
    <a href="{{url('signup')}}">Shorts</a>
       <a href="{{url('logout')}}">Dresses </a>

  </div> </li></a>
		<a href="#"> <li> <div class="dropdown">MEN
  
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

	
</section>


<nav class="product-filter">
		<h1>All Categories</h1>
		
		<div class="sort">
			<div class="collection-sort">
				<label>Filter by:</label>
				<select>
		      <option value="/">All Categories</option>
		      <option value="/">2016</option>
		      <option value="/">jacket</option>
		      <option value="/">Jackets</option>
		      <option value="/">layers</option>
		      <option value="/">Obermeyer</option>
		      <option value="/">Roxy</option>
		      <option value="/">womens</option>
		   	</select>
			</div>
			
			<div class="collection-sort">
				<label>Sort by:</label>
				<select>
		      <option value="/">Featured</option>
		      <option value="/">Best Selling</option>
		      <option value="/">Alphabetically, A-Z</option>
		      <option value="/">Alphabetically, Z-A</option>
		      <option value="/">Price, low to high</option>
		      <option value="/">Price, high to low</option>
		      <option value="/">Date, new to old</option>
		      <option value="/">Date, old to new</option>
		    </select>
			</div>
		</div>
	</nav>
	  
	<section class="products">
      @foreach($products as $p)
		<div class="product-card">
           
			<div class="product-image">
				<img src="{{$p->imagePath}}">
			</div>
			<div class="product-info">
				<h5>{{$p->title}}</h5>
				<h6>${{$p->price}}</h6>
                 <a href="{{route('addtocart' ,['id' => $p->id])}}"><button class="btn"> Add to cart</button></a>
			</div>
		</div>
		
 @endforeach
        
		
		
		
	</section>

	
</body>
</html>

