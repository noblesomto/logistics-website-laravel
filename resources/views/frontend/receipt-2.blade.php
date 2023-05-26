<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title }}</title>
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" media="all">
</head>
<body>
	<div class="container">
		<div class="page">
			<div class="col-left">
				<div class="logo">
					<a href="{{ url('') }}"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="" /></a>
				</div>
				<div class="sender">
					<div class="row">
						<span class="number">1</span><span class="bold-text">From</span> <span class="small-bold-italics">( Sender's information )</span>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Date</span>
								<span class="bolder-text">{{ date('j F Y', strtotime($order->order_date)); }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">LOGIS</span>
							<span class="bolder-text">{{ $sender->ref_number }}</span>
						</div>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Sender's Name</span>
								<span class="bolder-text">{{ $sender->first_name }} {{ $sender->last_name }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">Phone</span>
							<span class="bolder-text">{{ $sender->phone }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Company</span>
							<span class="bolder-text">{{ $sender->company }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Address</span>
							<span class="bolder-text">{{ $sender->address }}</span>
						</div>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">City</span>
								<span class="bolder-text">{{ $sender->city }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">State/Province</span>
							<span class="bolder-text">{{ $sender->state }}</span>
						</div>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Country</span>
								<span class="bolder-text">{{ $sender->country }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">Zip</span>
							<span class="bolder-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
					</div>
					
				</div>

				<div class="sender">
					<div class="row">
						<span class="number">2</span><span class="bold-text">To</span> <span class="small-bold-italics">( Receiver's information )</span>
					</div>

					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Receiver's Name</span>
								<span class="bolder-text">{{ $receiver->first_name }} {{ $receiver->last_name }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">Phone</span>
							<span class="bolder-text">{{ $receiver->phone }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Email</span>
							<span class="bolder-text">{{ $receiver->email }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Company</span>
							<span class="bolder-text">{{ $receiver->company }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Address</span>
							<span class="bolder-text">{{ $receiver->address }}</span>
						</div>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">City</span>
								<span class="bolder-text">{{ $receiver->city }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">State/Province</span>
							<span class="bolder-text">{{ $receiver->state }}</span>
						</div>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Country</span>
								<span class="bolder-text">{{ $receiver->country }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">Zip</span>
							<span class="bolder-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						</div>
					</div>
					
				</div>

				<div class="sender">
					<div class="row">
						<span class="number">3</span><span class="bold-text">Shipment Information</span> 
					</div>

					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Depature</span>
								<span class="bolder-text">{{ date('j F Y', strtotime($order->departure_date)); }}</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">Arrival</span>
							<span class="bolder-text">{{ date('j F Y', strtotime($order->arrival_date)); }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Tras Route schedule</span>
							<span class="bolder-text">{{ $order->departure_loc }} - {{ $order->arrival_loc }}</span>
						</div>
					</div>
					<div class="blocks">
						<div>
							<span class="small-text">Package Description</span>
							<span class="bolder-text">{{ $order->package_des }}</span>
						</div>
					</div>
					<div class="blocks">
						<div class="block-left">
							<div>
								<span class="small-text">Weight</span>
								<span class="bolder-text">{{ $order->weight }} kg</span>
							</div>
						</div>
						<div class="block-right">
							<span class="small-text">Package Type</span>
							<span class="bolder-text">{{ $order->package_type }}</span>
						</div>
					</div>
					<div class="stamp">
						<img src="{{ asset('frontend/img/logo/stamp.jpg') }}" alt="" />
					</div>

					
				</div>

			</div>
			<div class="col-right">
				<div class="receipt-title">
					<span>SENDERS RECEIPT</span>
				</div>
				<div class="track-btn">
					<span class="orange">LOG:</span>
					<span class="orange">{{ $order->order_id }}</span>
				</div>
				<div class="track-btn">
					<span class="orange-text">
						Track your shipment with LOGIS <br> at {{  url('') }}/track-order
					</span>
				</div>
				<div class="big-space"></div>
				<div class="sender">
					<div class="row">
						<span class="number">4a</span><span class="bold-text">Express Package Service</span>
					</div>
					<div class="blocks-2">
						<span class="orange-text">
							NOTE: Level of Priority is always considered
						</span>
						<div class="mt-10"></div>
						<div>
							<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Economy</span><br>
							<input type="checkbox" name="" checked><span class="small-text">{{ config('global.site_name') }} Priority</span>
						</div>
					</div>
				</div>

				<div class="sender">
					<div class="row">
						<span class="number">4b</span><span class="bold-text">Express Freight Service</span>
					</div>
					<div class="blocks-2">
					
						<div class="mt-10"></div>
						<div>
							<input type="checkbox" name=""><span class="small-text"> Economy Freight</span>
							<input type="checkbox" name="" checked><span class="small-text"> Priority Freight</span>
						</div>
					</div>
				</div>
		
				<div class="sender">
					<div class="hr"></div>
					<div class="row">
						<span class="number">5</span><span class="bold-text">Packaging</span>
					</div>
					<div class="blocks-2">
			
						<div class="mt-10"></div>
						<div>
							<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Envelope</span><br>
							<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Box</span><br>
							<input type="checkbox" name=""><span class="small-text">{{ config('global.site_name') }} Tube</span><br>
							<input type="checkbox" name="" checked><span class="small-text"> Tube</span>
						</div>
						<div class="mt-10">
							<span class="bold-text">Express Cargo</span>
						</div>
					</div>
				</div>

				<div class="sender">
					<div class="hr"></div>
					<div class="row">
						<span class="number">6</span><span class="bold-text">Special Handling and Delivery Option</span>
					</div>
					<div class="blocks-2">
						<div class="block-left">
							<div>
								<input type="checkbox" name=""><span class="small-text"> PICKUP at Location</span>
							</div>
						</div>
						<div class="block-right">
							<input type="checkbox" name=""><span class="small-text"> SATURDAY Delivery</span>
						</div>
					</div>

					<div class="blocks-2">
						<div class="block-left">
							<div>
								<input type="checkbox" name=""><span class="small-text"> SUNDAY Delivery</span>
							</div>
						</div>
						<div class="block-right">
							<input type="checkbox" name="" checked><span class="small-text"> Normal</span>
						</div>
					</div>
					
				</div>

				<div class="sender">
					<div class="mt-30"></div>
					<div class="hr"></div>
					<div class="row">
						<span class="number">7</span><span class="bold-text">Agreement</span>
					</div>
					<div class="blocks-2">
						<p class="small-text">
							This is to certify that {{ config('global.site_name') }} has collected the consignment described in this slip from the "Sender" and has accepted to deliver it to the "Receiver" address given by the sender. This Parcel is carrired under {{ config('global.site_name') }}. This agreement is herein Valid, Correct and binding to all parties. Alteration on this Airway bill of {{ config('global.site_name') }} after it is duely issued and accepted, renders parcel valueless, null and void.
						</p>
					</div>

					<div class="blocks-2">
						<div class="signature-section">
							<div class="signature">
								<img src="{{ asset('frontend/img/logo/signature.jpg') }}" alt="" />
							</div>
							<div class="signature-text">
								<span class="small-text">Authorised Signature</span>
							</div>	
							<div class="mt-10"></div>				
						</div>
					</div>


					
				</div>
				
			</div>
			<div class="footer">
				<img src="{{ asset('frontend/img/logo/company.jpg') }}" alt="" />
			</div>
			<div class="mt-10 back-btn">
				<a class="button" href="/order-details/{{ $order->order_id }}"> Go Back</a>
			</div>
			<div class="big-space"></div>
		</div>
		
	</div>

</body>
</html>