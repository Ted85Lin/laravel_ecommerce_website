<html>
    
<head>
<meta charset="utf-8">
<title>Login</title>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" /> 
    <link href="{{asset('css/jquery-ui.css')}}" rel="stylesheet" />
    <script  type="text/javascript" src="{{asset('js/jquery.3.js')}}"></script>
    <script  type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
    <script  type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <style>

        .fk{
        margin-left:  460px;
  
        margin-top: 100px; 
            
        }
          body{
            	background-color: #f6f6f6
        }
          .btn-primary
       {
           background-color: darksalmon;
           border-color: darksalmon;
       }
         .btn-primary:hover{
           background-color: burlywood;
              border-color: burlywood;
       }
         .s{
        font-size: 30px;
             padding-left: 9px;
        }
    </style>
    </head>
    <body>
        <form method="POST" action="{{url('signin')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <fieldset class="fk">
    <legend class="s">login</legend>
    <div class="form-group">
      <label for="exampleInputEmail1" class="col-sm-2 col-form-label" >Email address</label>
        <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
         <div class="col-sm-6">
      <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
     </div>
      
   
       
 <div class="col-sm-6 ">
     <div class="form-group">
    <button type="submit" class="btn btn-primary">Submit</button>
             </div>
     <p class="k">  Don't have an account <a href="{{route('signup')}}"> Sign up </a></p>
      </div>
 
  </fieldset>
</form>
    
        
    </body>
</html>