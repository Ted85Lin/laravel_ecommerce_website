<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Cart</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <style>
    .btn-primary
       {
           background-color: darksalmon;
           border-color: darksalmon;
       }
       .btn-primary:hover{
           background-color: burlywood;
              border-color: burlywood;
       }
       .media-heading{
           padding: 5px;
           font-size: 16px;
       }
    </style>
    </head>
    <body>
    <div class="container">
          @if(Session::has('cart'))
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                            <th> </th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                      
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach($products as $product)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$product['item']['imagePath']}}" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$product['item']['title'] }}</h4>
                            </div>
                        </div></td>
                        <td></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$product['qty'] }}">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>${{$product['price'] }}</strong></td>
                    
                        <td class="col-sm-1 col-md-1">
                        <a href="{{route('removefromcart' ,['id' => $product['item']['id']])}}" class="btn btn-danger">
                          Remove  </a></td>
                    </tr>
                    @endforeach
                   
                   
                  
                </tbody>
                <tfoot>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3>${{$totalPrice }}</h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                          <a href="{{url('products')}}" class="btn btn-primary">
                          Continue Shopping  </a>
                           
                        </td>
                        <td>
                        <a href="{{url('checkout')}}" class="btn btn-primary">
                          Checkout  </a></td>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
         @else
        <div class="col-sm-12 col-md-10 col-md-offset-1"> 
        <h2> No items in the cart </h2>
        </div>
         @endif
        </div>
    </body>
</html>