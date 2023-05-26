<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Sender;
use App\Models\Reciever;
use App\Models\Location;
use App\Mail\QuoteMail;
use App\Mail\ContactMail;
use Mail;
use PDF;

class PageController extends Controller
{
    public function index()
    {   
        $title = config('global.site_name') . " | " . config('global.site_title');
        return view('frontend.index', compact('title'));
    }

    public function about()
    {   
        $title = "About Us  | " . config('global.site_name');
        return view('frontend.about', compact('title'));
    }

    public function services()
    {   
        $title = "Our Services  | " . config('global.site_name');
        return view('frontend.services', compact('title'));
    }

    public function sea_freight()
    {   
        $title = "Sea Freight  | " . config('global.site_name');
        return view('frontend.sea-freight', compact('title'));
    }

    public function air_freight()
    {   
        $title = "Air Freight  | " . config('global.site_name');
        return view('frontend.air-freight', compact('title'));
    }

    public function land_freight()
    {   
        $title = "Land Freight  | " . config('global.site_name');
        return view('frontend.land-freight', compact('title'));
    }

    public function warehousing()
    {   
        $title = "Warehousing  | " . config('global.site_name');
        return view('frontend.warehousing', compact('title'));
    }

    public function career()
    {   
        $title = "Career  | " . config('global.site_name');
        return view('frontend.career', compact('title'));
    }

    public function contact(Request $request)
    {   
        $title = "Contact Us | " . config('global.site_name');

        if ($request->isMethod('GET')) {
            return view('frontend.contact', compact('title'));
        }

         if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);


            $details = [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'subject' =>  $request->input('subject'),
                'message' => $request->input('message'),
            ];

            $admin_email = config('global.site_email');
            try {
                Mail::to($admin_email)->send(new ContactMail($details));
                return redirect("contact-us")->with('status', ['text'=>'Great! Your message was successfully sent, We will get back to you ASAP ','type'=>'success']);
            } catch (Throwable $e) {
                
                return redirect("contact-us")->with('status', ['text'=>'Error!, Email could not be sent now ','type'=>'danger']);
            }
        }
    }

    public function quote(Request $request)
    {   
        $title = "Request Quote | " . config('global.site_name');

        if ($request->isMethod('GET')) {
            return view('frontend.quote', compact('title'));
        }

         if ($request->isMethod('POST')) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'freight_type' => 'required',
                'email' => 'required|email',
                'departure' => 'required',
                'weight' => 'required',
                'delivery_mode' => 'required',
                'address' => 'required',
            ]);


            $details = [
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'freight_type' =>  $request->input('freight_type'),
                'departure' => $request->input('departure'),
                'weight' => $request->input('weight'),
                'delivery_mode' => $request->input('delivery_mode'),
                'address' => $request->input('address'),
            ];

            $admin_email = config('global.site_email');
            try {
                Mail::to($admin_email)->send(new QuoteMail($details));
                return redirect("quote")->with('status', ['text'=>'Great! Your Qute was successfully sent, We will get back to you ASAP ','type'=>'success']);
            } catch (Throwable $e) {
                
                return redirect("quote")->with('status', ['text'=>'Error!, Quote could not be sent now ','type'=>'danger']);
            }
        }
    }

    public function track_order(Request $request)
    {   
        $title = "Track Your Order | " . config('global.site_name');

            return view('frontend.track-order', compact('title'));
        
    }

    public function get_order(Request $request)
    {   
        $keyword = $request->input('order_id');
        $order = Order::where('order_id',$keyword)->first();
        $title = "Search - " . config('global.site_title');
        return view('frontend.order', compact('title','order'));
    }

    public function order_details($id)
    {   
        $loc = Location::where('order_id',$id)->orderBy("id", "desc")->limit(1)->first();
        $order = Order::where('order_id',$id)->first();
        $sender = Sender::where('order_id',$id)->first();
        $receiver = Reciever::where('order_id',$id)->first();
        $all_loc = Location::where('order_id',$id)->get();
        $num_stops = $order->num_stops;
        $loc_num = Location::where('order_id',$id)->count();
        $title = "Order Details On Map - " . config('global.site_title');
        return view('frontend.order-details', compact('title','loc','order','sender','receiver','all_loc','num_stops','loc_num'));
    }

    public function receipt3($id)
    {   
        $order = Order::where('order_id',$id)->first();
        $sender = Sender::where('order_id',$id)->first();
        $receiver = Reciever::where('order_id',$id)->first();
        $title = "Receipt - " . config('global.site_title');

        $pdf = PDF::loadView('frontend.receipt', compact('title','order','sender','receiver'));
        return $pdf->stream('receipt-'.$id.'.pdf');
     }

    public function receipt($id)
    {   
        $order = Order::where('order_id',$id)->first();
        $sender = Sender::where('order_id',$id)->first();
        $receiver = Reciever::where('order_id',$id)->first();
        $title = "Receipt - " . config('global.site_title');
        return view('frontend.receipt', compact('title','order','sender','receiver'));
    }


    public function receipt2($id)
    {   
        $order = Order::where('order_id',$id)->first();
        $sender = Sender::where('order_id',$id)->first();
        $receiver = Reciever::where('order_id',$id)->first();
        $title = "Receipt - " . config('global.site_title');
        return view('frontend.receipt-2', compact('title','order','sender','receiver'));
    }

    public function adminlogin(Request $request)
    {
        $title = "Admin Login | " . config('global.site_name');

        if ($request->isMethod('POST')) {
            $request->validate([
                'username' => 'required',
                'password' => 'required|min:4',
            ]);
            
            $username = $request->username;
            $password = $request->password;

            $login = Admin::where('username', $username)
               ->where('password', md5($password))
               ->first();
            if ($login) {
                $admin_id = $login->admin_id;
                $request->session()->put('admin_id', $admin_id);

               return redirect()->action([AdminController::class, 'index']);
            }
      
            return redirect("admin-login")->with('status',['text'=>'Error!, You are trying to use wrong credentials to login ','type'=>'danger']);
        }

        if ($request->isMethod('GET')) {
            return view('frontend.admin-login', compact('title'));
        }
    }
}
