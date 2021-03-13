<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Events\OrderEvent;
use App\Order;
use App\OrderAddon;
use App\OrderProduct;
use App\OrderProductVariant;
use App\Product;
use App\PromoCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Cart;
use PhpParser\Node\Expr\Array_;
use function Matrix\add;

class CartController extends Controller
{
    //

    public function index() {
        $content = Cart::getContent();
        $price = Cart::getTotal();

        return response()->json([
            'type' => 'success',
            'cart' => $content,
            'totalPrice' => $price,
        ]);
    }



    public function cartStoreInSession(Request $request) {
        $oldCart = Session::get('cart') ? Session::get('cart') : null;
        if ($oldCart) {
            foreach ($oldCart as $cart) {
                dd($cart);
            }
        }
        else {
            foreach ($request['cart'] as $item) {

                Session::put('cart', [
                    'id' => $item['id'],
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'stock' => $item['stock']
                ]);
            }


        }
//        $item = Product::find($request->id);
//        $cart = new Cart($oldCart);

//        Session::put('cart', $cart);
        return response(['data' => Session::get('cart')]);
    }

    public function store(Request $request) {
        $product = Product::where('id', $request->product)->with('media')->first();
        $price = (float)$product->price;

        if (count($request->variants) > 0) {
            foreach ($request->variants as $variant) {
                $price = (float)$variant['price'];
            }
        }

        if (count($request->addons) > 0) {
            foreach ($request->addons as $addon) {
                $price += (float)$addon['price'];
            }
        }
        if (count($product->media) > 0) {
            $image = $product->media[0]->path;
        }
        Cart::add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => (float)$price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'addons' => $request->addons,
                'variants' => $request->variants,
                'instruction' => $request->instruction,
                'image' => $image,
                'description' => $product->description,
            )
        ));
        $totalPrice = Cart::getTotal();
        $quantity =  Cart::getTotalQuantity();

        return response()->json([
            'message' => 'Product Added To Successfully',
            'type' => 'success',
            'quantity' => $quantity,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function getCart(Request $request) {
        $cart = Cart::get($request['product']);
        $quantity =  Cart::getTotalQuantity();

        if ($cart) {
            return response()->json([
                'type' => 'success',
                'quantity' => $quantity,
                'cart' => $cart,
            ]);
        }
        else {
            return response()->json([
                'type' => 'empty',
            ]);
        }

    }

    public function getAllCart() {
        $content = Cart::getContent();
        $totalPrice = Cart::getTotal();
        $cartTotalQuantity = Cart::getTotalQuantity();

        return response()->json([
            'type' => 'success',
            'cart' => $content,
            'totalPrice' => $totalPrice,
            'quantity' => $cartTotalQuantity,
        ]);
    }

    public function remove(Request $request) {
        Cart::remove($request->product);

        $content = Cart::getContent();
        $totalPrice = Cart::getTotal();
        $cartTotalQuantity = Cart::getTotalQuantity();

        return response()->json([
            'type' => 'success',
            'cart' => $content,
            'totalPrice' => $totalPrice,
            'quantity' => $cartTotalQuantity,
            'message' => 'Item Removed From Cart',
        ]);
    }


    public function createOrder(Request $request) {

        $trxid = time();
        $totalPrice = Cart::getTotal();
        if ($request['phone'] && $request['name']) {
            $customer = Customer::where('phone', $request['mobile'])->first();
            if (!$customer) {
                $customer = Customer::create([
                    'name' => $request['name'],
                    'phone' => $request['phone'],
                    'email' => $request['email'],
                ]);
            }
        }
        else {
            return response()->json([
                'type' => 'error',
                'message' => 'Enter Name and Phone.'
            ]);
        }

        $order = Order::create([
            'customer_id' => $customer['id'],
            'government_id' => $request['area']['government_id'],
            'area_id' => $request['area']['id'],
            'delivery_charges' => $request['area']['delivery_charges'],
            'total' => $totalPrice,
        ]);

        foreach (Cart::getContent() as $content) {
            $order_item = OrderProduct::create([
                'order_id' => $order->id,
                'item_id' => $content->id,
                'qty' => $content->quantity,
                'total' => $content->price,
                'note' => $content->attributes->instruction,
            ]);
            if ($content->attributes->addons){
                foreach ($content->attributes->addons as $addon) {
                    OrderAddon::create([
                        'order_id' => $order->id,
                        'order_item_id' => $order_item->id,
                        'product_id' => $content->id,
                        'addon_id' => $addon['id'],
                    ]);
                }
            }
            if ($content->attributes->variants){
                foreach ($content->attributes->variants as $variant) {
                    OrderProductVariant::create([
                        'order_id' => $order->id,
                        'product_id' => $content->id,
                        'variant_id' => $variant['id'],
                        'variant_head_id' => $variant['variant_head_id'],
                    ]);
                }
            }
        }
//        $order_message = "A new order with an id:  $order->id has been placed.";
//
//        event(new OrderEvent($order->id, $order_message));

        return response()->json([
            'customer_id' => $customer['id'],
            'order_id' => $order->id,
            'type' => 'success'
        ]);
    }

    public function updateOrder(Request $request) {
        $trx_id = time();

        $order = Order::where('id', $request['order_id'])->update([
            'note' => $request['additional'],
            'avanue' => $request['avenue'],
            'officeno' => $request['office'],
            'house' => $request['apartment'] ? $request['apartment'] : $request['house'] ,
            'floor' => $request['floor'],
            'building' => $request['building'],
            'street' => $request['street'],
            'block' => $request['block'],
            'trx_id' => $trx_id,
        ]);
        $order = Order::where('id', $request['order_id'])->first();
        Customer::where('id', $order->customer_id)->update([
            'type' => $request->address_type,
            'house' => $request->house,
            'block' => $request->block,
            'avanue' => $request->avenue,
            'building' => $request->building,
            'floor' => $request->floor,
            'officeno' => $request->office,
            'special_dir' => $request->additional,
            'street' => $request->street,
        ]);

        return response()->json([
            'type' => 'success',
            'message' => 'Order Create Successfully',
            'order_id' => $request['order_id'],
        ]);
    }

    public function increment(Request $request) {
        $quantity = (integer)$request->quantity + 1;
        Cart::update($request->id, array(
            'quantity' => 1,
            )
        );

        $content = Cart::getContent();
        $totalPrice = Cart::getTotal();
        $cartTotalQuantity = Cart::getTotalQuantity();
        return response()->json([
            'type' => 'success',
            'message' => 'Quantity Incremented Successfully',
            'cart' => $content,
            'totalPrice' => $totalPrice,
            'quantity' => $cartTotalQuantity,
        ]);
    }

    public function decrement(Request $request) {
        $quantity = (integer)$request->quantity - 1;
        Cart::update($request->id, array(
                'quantity' => -1,
            )
        );

        $content = Cart::getContent();
        $totalPrice = Cart::getTotal();
        $cartTotalQuantity = Cart::getTotalQuantity();
        return response()->json([
            'type' => 'success',
            'message' => 'Quantity Decremented Successfully',
            'cart' => $content,
            'totalPrice' => $totalPrice,
            'quantity' => $cartTotalQuantity,
        ]);
    }

    public function applyPromoCode (Request $request) {
        $promo = PromoCode::where('code', $request['coupon'])->first();

        if ($promo) {
            if(strtotime($promo->active_until) > strtotime(date("Y.m.d h:i:sa"))) {
                if ($promo->type === 'percentage') {
                    $condition = new \Darryldecode\Cart\CartCondition(array(
                        'name' => $promo->code,
                        'type' => 'promo',
                        'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                        'value' => '-'.$promo->percentage.'%',
                        'order' => 1 // the order of calculation of cart base conditions. The bigger the later to be applied.
                    ));
                }
                else {
                    $condition = new \Darryldecode\Cart\CartCondition(array(
                        'name' => $promo->code,
                        'type' => 'promo',
                        'target' => 'total', // this condition will be applied to cart's total when getTotal() is called.
                        'value' => '-'.$promo->amount,
                        'order' => 1 // the order of calculation of cart base conditions. The bigger the later to be applied.
                    ));
                }
                Cart::condition($condition);
                return response()->json(['type' => 'success', 'message' => 'Promo Applied Successfully', 'total' => Cart::getTotal()]);
            }
            else {
                return response()->json(['type' => 'error', 'message' => 'Promo Expire', 'total' => Cart::getTotal()]);
            }
        }

    }

}
