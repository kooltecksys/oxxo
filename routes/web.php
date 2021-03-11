<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mission;
use App\Models\DoneMission;
use App\Models\Prize;
use App\Models\Objective;
use App\Models\Order;
use App\Models\Points;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
// use Session;
use App\Models\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('/home', '/dashboard');
    Route::get('/dashboard', function() {
        return view('dashboard', [
            'mission' => Mission::first(),
            'prizes' => Prize::where('active', 1)->take(2)->get(),
        ]
    );
    })->name('dashboard');

    Route::get('/progress', function() {
        return view('progress', ['objectives' => Objective::all()]);
    })->name('progress');

    Route::view('/progress-detail', 'prodetail');
    
    Route::get('/missions', function() {
        return view('missions', [
            'missions' => Mission::all(), 
            'last' => Mission::firstOrFail(),
        ]);
    })->name('missions');

    Route::get('/missions/{id}', function($id) {
        return view('mission', ['mission' => Mission::findOrFail($id)]);
    });

    Route::get('/mission-done', function(Request $request) {
        $path = $request->file('upload')->store('public');
        return $path;
        // $missionDone = new DoneMission;
        // $missionDone->user_id = $request->user_id;
        // $missionDone->mission_id = $request->mission_id;
        // $missionDone->oxxo_id = $request->oxxo_id;
        // $missionDone->photo = $request->file('upload')->store('public/uploads');
        // $missionDone->latitude = $request->latitude;
        // $missionDone->longitude = $request->longitude;
        // $missionDone->points = $request->points;
        // $missionDone->save();
        // add transaction
        // $transaction = new Points;
        // $transaction->user_id = auth()->user()->id;
        // $transaction->transactions_id = $request->mission_id;
        // $transaction->out = 0;
        // $transaction->amount = $cart->total;
        // $transaction->save();
        // return redirect('/missions')-with('status', 'success');
    });

    Route::post('/missions-done', function(Request $request) {
        return $request->file('upload')->store('public');
        // $validatedData = $request->validate([
        //     'upload' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        // ]);

        

        // $missionDone = new DoneMission;
        // $missionDone->user_id = $request->user_id;
        // $missionDone->mission_id = $request->mission_id;
        // $missionDone->oxxo_id = $request->oxxo_id;
        // $missionDone->photo = $request->file('upload')->store('public/uploads');
        // $missionDone->latitude = $request->latitude;
        // $missionDone->longitude = $request->longitude;
        // $missionDone->points = $request->points;
        // $missionDone->save();
        // add transaction
        // $transaction = new Points;
        // $transaction->user_id = auth()->user()->id;
        // $transaction->transactions_id = $request->mission_id;
        // $transaction->out = 0;
        // $transaction->amount = $cart->total;
        // $transaction->save();
        // return redirect('/missions')-with('status', 'success');
    });

    Route::view('/oxxo', 'oxxo')->name('oxxo');
    Route::get('/prizes', function() {
        $latest = Prize::where('active', 1)->take(2)->get();
        $tech = Prize::where('category', 'tecnología')->take(3)->get();
        $home = Prize::where('category', 'hogar')->take(3)->get();
        $entertainment = Prize::where('category', 'entretenimiento')->take(3)->get();
        return view('prizes', [
                'latest' => $latest,
                'tech' => $tech,
                'home' => $home,
                'entertainment' => $entertainment,
        ]);
    })->name('prizes');

    Route::get('/prizes/{id}', function($id) {
        
        return view('prize', [
            'product' => Prize::findOrFail($id)
        ]);
    });
    Route::view('/profile', 'profile')->name('profile');

    Route::get('/invoice', function() {
        $transactions = auth()->user()->transactions;
        return view('invoice', ['transactions' => $transactions->reverse()]);
    })->name('invoice');

    Route::view('/terms', 'terms')->name('terms');
    Route::view('/contact', 'contact')->name('contact');
    
    Route::get('/orders', function() {
        $orders = auth()->user()->orders;
        return view('orders', ['orders' => $orders->reverse()]);
    })->name('orders');
    
    Route::get('/orders/{id}', function($id) {
        $order = Order::findOrFail($id);
        $ids = explode(',',$order->products);
        $products = [];
        foreach ($ids as $id) {
            array_push($products, Prize::findOrFail($id));
        }
        return view('order', [
            'order' => $order,
            'products' => $products,
        ]);
    });

    Route::get('/newOrder', function(Request $request) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        // $cart = $request->session()->get('cart');
        $ids = [];
        foreach($cart->items as $item) {
            array_push($ids, $item['id']);
        }
        
        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->products = join(',', $ids);
        $order->total = $cart->total;
        $order->save();
        // add transaction
        $transaction = new Points;
        $transaction->user_id = auth()->user()->id;
        $transaction->transaction_id = $order->id;
        $transaction->out = 1;
        $transaction->amount = $cart->total;
        $transaction->save();
        // delete session
        $cart->reset();
        $request->session()->put('cart', null);
        
        return redirect('/orders');
    });

    Route::get('/add-to-cart/{id}', function(Request $request, $id) {
        $product = Prize::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect('/cart');
    });

    Route::get('/remove-from-cart/{id}', function(Request $request, $id) {
        $product = Prize::findOrFail($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->remove($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect('/cart');
    });

    Route::get('/cart', function(Request $request) {
        // dd($request->session()->get('cart'));
        $transactions = auth()->user()->transactions;
        $points = $transactions->reduce(function($total, $item) {
            if ($item['out']) {
                return $total -= $item['amount'];
            } else {
                return $total += $item['amount'];
            }
        });

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        return view('cart', [
            'cart' => $cart,
            'points' => $points,
        ]);
    });
});

require __DIR__.'/auth.php';
