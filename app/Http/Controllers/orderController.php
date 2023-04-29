<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class orderController extends Controller
{
    public function ordercreate(Request $request){
        $user = Auth::user();
        if (!Hash::check($request->input('pass'),$user->getAuthPassword())){
            return redirect()->back();
        }
        $prod= cart::where('user_id',$user->id)->get();
        foreach($prod as $obprod){
            order::create([
                'product_id'=>$obprod->product_id,
                'user_id'=>$user->id,
                'count'=>$obprod->count,
                'order_id'=>date('dmyhm').'-'.$user->id
            ]);
            $product=product::find($obprod->product_id);
            $product->count-= $obprod->count;
            $product->save();
        }
        cart::where('user_id',$user->id)->delete();
        return redirect(url('/catalog'));
    }
    public function showorder(){
        $user= Auth::user();
        $order=order::where('user_id',$user->id)->get();
        return view('order')
    }

}
