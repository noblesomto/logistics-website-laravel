<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,firefox=1">
<meta name="viewport" content="width=1024">
<title>{{ $title }}</title>
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-print.min.css') }}" media="print" />
<link rel="stylesheet" href="{{ asset('frontend/css/print.css') }}">

<style>
 <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body {
  background: #FFF;
}

.container {
  max-width: 960px;
}

.pricing-header {
  max-width: 700px;
}
    </style>

</head>

<body><svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  

  <main>
    <div class="row">
    	<div class="col-8">
    		<div class="row border-bottom border-dark pb-3 mt-4">
    			 <div class="col-12 text-center">
			        <a href="{{ url('') }}"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="" /></a>
			      </div>
    		</div>
    		<div class="row mt-2">
				<span class="number">1</span><span class="bold-text">From </span> <span class="small-bold-italics pt-1">( Sender's information )</span>
			</div>
			<div class="row border-bottom border-dark mt-5">
				<div class="col-lg-6 col-6">
					<div>
						<span class="small-text">Date</span>
						<span class="bolder-text">{{ date('j F Y', strtotime($order->order_date)); }}</span>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">LOGIS</span>
					<span class="bolder-text">{{ $sender->ref_number }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<span class="small-text">Sender's Name</span>
					<span class="bolder-text">{{ $sender->first_name }} {{ $sender->last_name }}</span>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Phone</span>
					<span class="bolder-text">{{ $sender->phone }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<span class="small-text">Company</span>
					<span class="bolder-text">{{ $sender->company }}</span>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Address</span>
					<span class="bolder-text">{{ $sender->address }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<span class="small-text">City</span>
					<span class="bolder-text">{{ $sender->city }}</span>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">State/Province</span>
					<span class="bolder-text">{{ $sender->state }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<span class="small-text">Country</span>
					<span class="bolder-text">{{ $sender->country }}</span>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Zip</span>
					<span class="bolder-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-lg-6 col-6">
					<span class="number">2</span><span class="bold-text">To</span> <span class="small-bold-italics pt-1">( Receiver's information )</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<div>
						<span class="small-text">Receiver's Name</span>
						<span class="bolder-text">{{ $receiver->first_name }} {{ $receiver->last_name }}</span>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Phone</span>
					<span class="bolder-text">{{ $receiver->phone }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-12 col-12">
					<div>
						<span class="small-text">Email</span>
						<span class="bolder-text">{{ $receiver->email }}</span>
					</div>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-12 col-12">
					<div>
						<span class="small-text">Company</span>
						<span class="bolder-text">{{ $receiver->company }}</span>
					</div>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-12 col-12">
					<div>
						<span class="small-text">Address</span>
						<span class="bolder-text">{{ $receiver->address }}</span>
					</div>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<div>
						<span class="small-text">City</span>
						<span class="bolder-text">{{ $receiver->city }}</span>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">State/Province</span>
					<span class="bolder-text">{{ $receiver->state }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<div>
						<span class="small-text">Country</span>
						<span class="bolder-text">{{ $receiver->country }}</span>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Zip</span>
					<span class="bolder-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-lg-12 col-12">
					<span class="number">3</span><span class="bold-text">Shipment Information</span> 
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<div>
						<span class="small-text">Depature</span>
						<span class="bolder-text">{{ date('j F Y', strtotime($order->departure_date)); }}</span>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Arrival</span>
					<span class="bolder-text">{{ date('j F Y', strtotime($order->arrival_date)); }}</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-12 col-12">
					<div>
						<span class="small-text">Tras Route schedule</span>
						<span class="bolder-text">{{ $order->departure_loc }} - {{ $order->arrival_loc }}</span>
					</div>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-12 col-12">
					<div>
						<span class="small-text">Package Description</span>
						<span class="bolder-text">{{ $order->package_des }}</span>
					</div>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3">
				<div class="col-lg-6 col-6">
					<div>
						<span class="small-text">Weight</span>
						<span class="bolder-text">{{ $order->weight }} kg</span>
					</div>
				</div>
				<div class="col-lg-6 col-6">
					<span class="small-text">Package Type</span>
					<span class="bolder-text">{{ $order->package_type }}</span>
				</div>
			</div>

			<div class="row mt-2">
				<div class="col-lg-9 col-9">		
				</div>
				<div class="col-lg-3 col-3">
					<img src="{{ asset('frontend/img/logo/stamp.jpg') }}" alt="" />
				</div>
			</div>


    	</div>
    	<div class="col-4 border-left border-dark col-right">

    		<div class="row">
    			<div class="col-lg-12 col-12 receipt-title text-center border border-warning">
					<span>SENDERS RECEIPT</span>
				</div>
    		</div>

    		<div class="row my-4">
    			<div class="col-lg-12 col-12 text-center">
    				<span class="orange border border-warning">LOG:</span>
					<span class="orange border border-warning">{{ $order->order_id }}</span>
    			</div>
    			<div class="col-lg-12 col-12 text-center mt-4">
    				<span class="orange-text">
						Track your shipment with LOGIS <br> at {{  url('') }}/track-order
					</span>
    			</div>
    		</div>

    		<div class="row mt-3 pl-2">
				<div class="col-lg-12 col-12">
					<span class="number">4a</span><span class="bold-text">Express Package Service</span>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-12 col-12">
					<span class="orange-text">
						NOTE: Level of Priority is always considered
					</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-3 pl-3">
				<div class="col-lg-12 col-12">
					<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Economy</span><br>
					<input type="checkbox" name="" checked><span class="small-text">{{ config('global.site_name') }} Priority</span>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-12 col-12">
					<span class="number">4b</span><span class="bold-text">Express Freight Service</span>
				</div>
			</div>

			<div class="row mt-3 pl-3">
				<div class="col-lg-12 col-12">
					<input type="checkbox" name=""><span class="small-text"> Economy Freight</span>
					<input type="checkbox" name="" checked><span class="small-text"> Priority Freight</span>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-12 col-12">
					<div class="border-bottom border-4 border-dark"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-12">
					<span class="number">5</span><span class="bold-text">Packaging</span>
				</div>
			</div>

			<div class="row pl-3">
				<div class="col-lg-12 col-12 mt-10">
					<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Envelope</span><br>
					<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Box</span><br>
					<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Tube</span><br>
					<input type="checkbox" name="" checked><span class="small-text"> Tube</span>
				</div>
			</div>

			<div class="row border-bottom border-dark mt-2 mb-4 pl-3 pb-3">
				<div class="col-lg-12 col-12">
					<span class="bold-text">Express Cargo</span>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-12 col-12">
					<span class="number">6</span><span class="bold-text">Special Handling and Delivery Option</span>
				</div>
			</div>

			<div class="row mt-3">
    			<div class="col-lg-6 col-6">
    				<input type="checkbox" name=""><span class="small-text"> PICKUP at Location</span>
    			</div>
    			<div class="col-lg-6 col-6">
    				<input type="checkbox" name=""><span class="small-text"> SATURDAY Delivery</span>
    			</div>
    		</div>

    		<div class="row mt-3">
    			<div class="col-lg-6 col-6">
    				<input type="checkbox" name=""><span class="small-text"> SUNDAY Delivery</span>
    			</div>
    			<div class="col-lg-6 col-6">
    				<input type="checkbox" name="" checked><span class="small-text"> Normal</span>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col">
    				<div class="border-bottom border-dark">
    				
    			</div>
    			</div>
    		</div>

    		<div class="row mt-4">
    			<div class="col">
    				<span class="number">7</span><span class="bold-text">Agreement</span>
    			</div>
    		</div>

    		<div class="row mt-2">
    			<div class="col-12 border-bottom border-dark px-3">
    				<p class="small-text">
						This is to certify that {{ config('global.site_name') }} has collected the consignment described in this slip from the "Sender" and has accepted to deliver it to the "Receiver" address given by the sender. This Parcel is carrired under {{ config('global.site_name') }}. This agreement is herein Valid, Correct and binding to all parties. Alteration on this Airway bill of {{ config('global.site_name') }} after it is duely issued and accepted, renders parcel valueless, null and void.
					</p>
    			</div>
    		</div>

    		<div class="row mt-3">
    			<div class="col-lg-3 col-3">
    				
    			</div>
    			<div class="col-lg-9 col-9">
    				<div class="signature">
						<img src="{{ asset('frontend/img/logo/signature.jpg') }}" alt="" class="img-fluid" />
					</div>
    			</div>
    		</div>

    		<div class="row border-bottom border-dark">
    			<div class="col-lg-3 col-3">
    				
    			</div>
    			<div class="col-lg-9 col-9">
    				<div class="signature-text">
						<span class="small-text">Authorised Signature</span>
					</div>	
    			</div>
    		</div>
    	</div>
    
    </div>

    <div class="row mt-5">
    	<div class="col-12">
    		<div class="footer">
				<img src="{{ asset('frontend/img/logo/company.jpg') }}" alt="" />
			</div>
    	</div>
    </div>
    <div class="row mt-5 d-print-none">
    	<div class="col-12">
    		<div class="mt-10 back-btn">
				<a class="button" href="/order-details/{{ $order->order_id }}"> Go Back</a>
			</div>
    	</div>
    </div>

    
</div>



</body>
</html>
