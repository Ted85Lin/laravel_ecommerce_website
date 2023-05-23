<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Product;
use App\Order;
use Session;
use Auth;



class ProductController extends Controller
{
   public function getIndex(){
       $products = Product::all();
       return view('Products', ['products' => $products]);
   }
    
    public function addToCart(Request $req ,$id){
       $product = Product::find($id);
      $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product, $product->id);
        
        $req->session()->put('cart',$cart);
        
   
        return redirect('products');
   }
    
    public function removefromcart(Request $req, $id)
    {       $product = Product::find($id);
      $oldcart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        unset($cart->items[$id]);
     
     $cart->remove($product, $product->id);
         Session::put('cart', $cart);
         return back();
    }
    public function Cart(){
        if(!Session::has('cart') ){
            return view('shoppingCart');
            
        }
         $oldcart = Session::get('cart');
          $cart = new Cart($oldcart);
         return view('shoppingCart',['products'=> $cart->items, 'totalPrice'=>  $cart->totalPrice]);
    }
    
    public function checkout(){
          if(!Session::has('cart') ){
            return view('shoppingCart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $totalPrice = $cart->totalPrice;
        return view('checkout',['totalPrice'=> $totalPrice]);
        
    }
    
   public function  postcheckout(Request $req){
         if(!Session::has('cart') ){
            return view('shoppingCart');
        }
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        $totalPrice = $cart->totalPrice;
       
       // Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_Fc5iCK1FKpkwLB5H4oAAwgVO");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
    'amount' => $totalPrice * 100,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
    'capture' => false,
]);
       $order= new Order();
       $order->cart = serialize($cart);
       $order->address = $req->input('Address');
       $order->name = $req->input('name');
       $order->payment_id = $charge->id;
       
       Auth::user()->orders()->save($order);
       
       Session::forget('cart');
        
        return redirect('orders'); 
   }

}
