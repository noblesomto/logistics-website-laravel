<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Sender;
use App\Models\Reciever;
use App\Models\Location;

class AdminController extends Controller
{
    public function index()
    {   
        $title = "Admin Section -" . config('global.site_name');
        $orders = Order::count();
        $locations = Location::count();
        return view('backend.index', compact('title','orders','locations'));
    }

    public function new_order(Request $request)
    {   
        $title = "Create New Order - " . config('global.site_name');
        
        if ($request->isMethod('POST')) {
        $order_id = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 12);

        $request->validate([
            'freight_type' => 'required',
            'package_type' => 'required',
            'departure_date' => 'required',
            'arrival_date' => 'required',
            'departure_loc' => 'required',
            'arrival_loc' => 'required',
            'package_des' => 'required',
            'weight' => 'required',
            'num_stops' => 'required',
            'price' => 'required|numeric',
            'order_date' => 'required',
           ]);
    
        $post = Order::create([
            'freight_type'=> $request->input('freight_type'),
            'package_type'=> $request->input('package_type'),
            'departure_date'=> $request->input('departure_date'),
            'arrival_date'=> $request->input('arrival_date'),
            'departure_loc'=> $request->input('departure_loc'),
            'arrival_loc'=> $request->input('arrival_loc'),
            'package_des'=> $request->input('package_des'),
            'weight'=> $request->input('weight'),
            'num_stops'=> $request->input('num_stops'),
            'price'=> $request->input('price'),
            'order_date'=> $request->input('order_date'),
            'order_id'=> $order_id,
            'status'=> "0",
            'order_status'=> "Active",
        ]);

        $post = Sender::create([
            'order_id'=> $order_id,
        ]);

        $post = Reciever::create([
            'order_id'=> $order_id,
        ]);

        return redirect('/admin/sender/'.$order_id)->with('status', ['text'=>'Order Created, needs Sender Details','type'=>'success']);
        }
        
        if ($request->isMethod('GET')) {
            return view('backend.new-order', compact('title'));
        }
    }

    public function sender(Request $request, $id)
    {   
        $title = "Sender Informantion | " . config('global.site_name');
        $user = Sender::where('order_id',$id)->first();

        if ($request->isMethod('PUT')) {
        
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required|min:6',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
               ]);

            $ref_number = "REF" . substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 15);

            $post = DB::table('senders')
                ->where('order_id', $id)
                ->update([
                    'first_name'=> $request->input('first_name'),
                    'last_name'=> $request->input('last_name'),
                    'phone'=> $request->input('phone'),
                    'email'=> $request->input('email'),
                    'city'=> $request->input('city'),
                    'address'=> $request->input('address'),
                    'state'=> $request->input('state'),
                    'country'=> $request->input('country'),
                    'company'=> $request->input('company'),
                    'ref_number'=> $ref_number,
            ]);

        return redirect('/admin/receiver/'.$id)->with('status', ['text'=>'Sender Information Updated, Create Receiver Details','type'=>'success']);
        }
        
        if ($request->isMethod('GET')) {
            return view('backend.sender', compact('title','user'));
        }
    }

    public function receiver(Request $request, $id)
    {   
        $title = "Receiver Informantion | " . config('global.site_name');
        $user = Reciever::where('order_id',$id)->first();

        if ($request->isMethod('PUT')) {
        
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'address' => 'required|min:6',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'city' => 'required',
                'state' => 'required',
                'country' => 'required',
               ]);


            $post = DB::table('recievers')
                ->where('order_id', $id)
                ->update([
                    'first_name'=> $request->input('first_name'),
                    'last_name'=> $request->input('last_name'),
                    'phone'=> $request->input('phone'),
                    'email'=> $request->input('email'),
                    'city'=> $request->input('city'),
                    'address'=> $request->input('address'),
                    'state'=> $request->input('state'),
                    'country'=> $request->input('country'),
            ]);

            $post = DB::table('orders')
                ->where('order_id', $id)
                ->update([
                    'status'=> "1",
            ]);

        return redirect('/admin/receiver/'.$id)->with('status', ['text'=>'Reciever Information Updated,','type'=>'success']);
        }
        
        if ($request->isMethod('GET')) {
            return view('backend.receiver', compact('title','user'));
        }
    }

    public function orders()
    {   
        $orders = Order::orderBy('created_at', 'desc')->paginate(20);
        $title = "All Orders | " . config('global.site_name');
        return view('backend.orders', compact('title', 'orders'));
    }

    public function order_status($id, $status)
    {   
        $post = DB::table('orders')
            ->where('order_id', $id)
            ->update([
                'order_status'=> $status,
            ]);
            return redirect("/admin/all-orders")->with('status',['text'=>'Order Status Changed','type'=>'success']);
      
    }


    public function edit_order(Request $request, $id)
    {   
        $title = "Edit Order | " . config('global.site_name');
        $order = Order::where('order_id',$id)->first();

        if ($request->isMethod('PUT')) {
            $request->validate([
                'freight_type' => 'required',
                'package_type' => 'required',
                'departure_date' => 'required',
                'arrival_date' => 'required',
                'departure_loc' => 'required',
                'arrival_loc' => 'required',
                'package_des' => 'required',
                'weight' => 'required',
                'num_stops' => 'required',
                'price' => 'required|numeric',
                'order_date' => 'required',
               ]);

                $post = DB::table('orders')
                    ->where('order_id', $id)
                    ->update([
                    'freight_type'=> $request->input('freight_type'),
                    'package_type'=> $request->input('package_type'),
                    'departure_date'=> $request->input('departure_date'),
                    'arrival_date'=> $request->input('arrival_date'),
                    'departure_loc'=> $request->input('departure_loc'),
                    'arrival_loc'=> $request->input('arrival_loc'),
                    'package_des'=> $request->input('package_des'),
                    'weight'=> $request->input('weight'),
                    'num_stops'=> $request->input('num_stops'),
                    'price'=> $request->input('price'),
                    'order_date'=> $request->input('order_date'),
                ]);

            return redirect('/admin/edit-order/'.$id)->with('status', ['text'=>'Order  Successfully Edited','type'=>'success']);
        }
        
        if ($request->isMethod('GET')) {
            return view('backend.edit-order', compact('title','order'));
        }
    }

  public function view_order($id)
    {   
        $order = Order::where('order_id',$id)->first();
        $sender = Sender::where('order_id',$id)->first();
        $receiver = Reciever::where('order_id',$id)->first();
        $loc = Location::where('order_id',$id)->get();
        $title = "View Orders | " . config('global.site_name');
        return view('backend.view-order', compact('title', 'order', 'sender', 'receiver', 'loc'));
    }

public function new_location(Request $request)
    {   
        $order_id = $request->input('order_id');
        $request->validate([
            'address' => 'required',
            'state' => 'required',
            'country' => 'required',
            'date' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'comment' => 'required',
           ]);
    
        $post = Location::create([
            'address'=> $request->input('address'),
            'state'=> $request->input('state'),
            'country'=> $request->input('country'),
            'order_id'=> $order_id,
            'date'=> $request->input('date'),
            'lat'=> $request->input('lat'),
            'long'=> $request->input('long'),
            'comment'=> $request->input('comment'),
        ]);

        return redirect('/admin/view-order/'.$order_id)->with('loc_status', ['text'=>'Location added','type'=>'success']);
        
    }

    public function delete_order($id) 
    {
        $order = Order::where('order_id', $id)->first();
        $order->delete();

        $sender = Sender::where('order_id', $id)->first();
        $sender->delete();

        $receiver = Reciever::where('order_id', $id)->first();
        $receiver->delete();

        $location = Location::where('order_id', $id)->first();
        $location->delete();

        return redirect('/admin/all-orders')->with('status', ['text'=>'Order Deleted','type'=>'success']);
    }

    public function delete_location($order_id, $id) 
    {
        $post = Location::where('id', $id)->first();
        $post->delete();
        return redirect('/admin/view-order/'.$order_id)->with('loc_status', ['text'=>'Location Deleted','type'=>'success']);

    }

    public function logout(Request $request)
    {   
        $request->session()->forget('admin_id');
        return redirect("admin-login")->with('status', ['text'=>'Logged out Successfully','type'=>'success']);
    }
}
