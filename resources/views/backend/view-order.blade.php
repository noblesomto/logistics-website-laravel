@include('backend.layouts.header')
@include('backend.layouts.nav')


<main id="main" class="main">

    <div class="pagetitle">
    <h1>Order</h1>
  
    </div><!-- End Page Title -->
    
    <section class="section">
    <div class="row">
    <div class="col-lg-12">
    
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order Details</h5>
            @if(session('status'))
                <div class="alert alert-{{session('status')['type']}}">
                    {{session('status')['text']}}
                </div>
            @endif
       
        <div class="table-responsive">
          <table class="table table-striped">
              <tr>
                <th>Order ID:</th>
                <td><b>{{ $order->order_id }}</b></td>
              </tr>
              <tr>
                <th>Freight Type:</th>
                <td>{{ $order->freight_type }}</td>
              </tr>
              <tr>
                <th>Package Type:</th>
                <td>{{ $order->package_type }}</td>
              </tr>
              <tr>
                <th>Departure Date:</th>
                <td>{{ $order->departure_date }}</td>
              </tr>
              <tr>
                <th>Arrival Date:</th>
                <td>{{ $order->arrival_date }}</td>
              </tr>
              <tr>
                <th>Departure Location:</th>
                <td>{{ $order->departure_loc }}</td>
              </tr>
              <tr>
                <th>Arrival Location:</th>
                <td>{{ $order->arrival_loc }}</td>
              </tr>
              <tr>
                <th>Package Description:</th>
                <td>{{ $order->package_des }}</td>
              </tr>
              <tr>
                <th>Package Weight:</th>
                <td>{{ $order->weight }}</td>
              </tr>
              <tr>
                <th>Order Status:</th>
                <td>{{ $order->order_status }}</td>
              </tr>
              <tr>
                <th>Number of Stops till Destination:</th>
                <td>{{ $order->num_stops }}</td>
              </tr>
              <tr>
                <th>Order Price:</th>
                <td>${{ number_format($order->price, 0, '.', ',') }}</td>
              </tr>
              <tr>
                <th>Order Created Date:</th>
                <td>{{ $order->order_date }}</td>
              </tr>
              <tr>
                <th>Action:</th>
                <td><a class="btn btn-primary" href="/admin/edit-order/{{ $order->order_id }}">Edit Order</a> <a class="btn btn-danger" href="/admin/delete-order/{{ $order->order_id }}" onclick="return confirm('Are you sure you want to Delete This Order?');">Delete Order</a></td>
              </tr>
            </table>
        </div>
        </div>
        </div>


        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Sender  Details</h5>
       
        <div class="table-responsive">
          <table class="table table-striped">
            <tr>
                <th>Ref Number:</th>
                <td>{{ $sender->ref_number }}</td>
              </tr>
              <tr>
                <th>Name:</th>
                <td><b>{{ $sender->first_name }} {{ $sender->last_name }}</b></td>
              </tr>
              <tr>
                <th>Phone:</th>
                <td>{{ $sender->phone }}</td>
              </tr>
              <tr>
                <th>Email:</th>
                <td>{{ $sender->email }}</td>
              </tr>
              <tr>
                <th>Company:</th>
                <td>{{ $sender->company }}</td>
              </tr>
              <tr>
                <th>Address:</th>
                <td>{{ $sender->address }}</td>
              </tr>
              <tr>
                <th>City:</th>
                <td>{{ $sender->city }}</td>
              </tr>
              <tr>
                <th>State:</th>
                <td>{{ $sender->state }}</td>
              </tr>
              <tr>
                <th>Country:</th>
                <td>{{ $sender->country }}</td>
              </tr>
     
              <tr>
                <th>Action:</th>
                <td><a class="btn btn-primary" href="/admin/sender/{{ $sender->order_id }}">Edit Sender</a></td>
              </tr>
            </table>
        </div>
        </div>
        </div>

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Receiver Details</h5>
       
        <div class="table-responsive">
          <table class="table table-striped">
 
              <tr>
                <th>Name:</th>
                <td><b>{{ $receiver->first_name }} {{ $receiver->last_name }}</b></td>
              </tr>
              <tr>
                <th>Phone:</th>
                <td>{{ $receiver->phone }}</td>
              </tr>
              <tr>
                <th>Email:</th>
                <td>{{ $receiver->email }}</td>
              </tr>
              <tr>
                <th>Company:</th>
                <td>{{ $receiver->company }}</td>
              </tr>
              <tr>
                <th>Address:</th>
                <td>{{ $receiver->address }}</td>
              </tr>
              <tr>
                <th>City:</th>
                <td>{{ $receiver->city }}</td>
              </tr>
              <tr>
                <th>State:</th>
                <td>{{ $receiver->state }}</td>
              </tr>
              <tr>
                <th>Country:</th>
                <td>{{ $receiver->country }}</td>
              </tr>
     
              <tr>
                <th>Action:</th>
                <td><a class="btn btn-primary" href="/admin/receiver/{{ $receiver->order_id }}">Edit Receiver</a></td>
              </tr>
            </table>
        </div>
        </div>
        </div>


        <div class="card">
        <div class="card-body">
          <h5 class="card-title">All Locations</h5>
          @if(session('loc_status'))
                <div class="alert alert-{{session('loc_status')['type']}}">
                    {{session('loc_status')['text']}}
                </div>
            @endif
          <!-- Table with stripped rows -->
          <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Address</th>
                <th scope="col">State</th>
                <th scope="col">Country</th>
                <th scope="col">Date</th>
                <th scope="col">Comment</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ( $loc as $row )
              <tr>
                <td>{{ $row->order_id }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ $row->state }}</td>
                <td>{{ $row->country }}</td>
                <td>{{ $row->date }}</td>
                <td>{{ $row->comment }}</td>
                <td><a href="/admin/delete-location/{{ $order->order_id }}/{{ $row->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete Location?');">Delete</a></td>
               
                
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>
          <!-- End Table with stripped rows -->
        </div>
      </div>


        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Location</h5>
            
            
            <!-- General Form Elements -->
            <form action="/admin/new-location" method="POST" role="form" >
             @csrf 
    
            <input type="hidden" name="order_id" value="{{ $order->order_id }}">

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                    <input type="text" name="address" class="form-control" placeholder="" value="{{ old('address') }}" required>
                </div>
            </div>


            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">State</label>
                <div class="col-sm-10">
                    @if ($errors->has('state'))
                        <span class="text-danger">{{ $errors->first('state') }}</span>
                    @endif
                    <input type="text" name="state" class="form-control" placeholder="" value="{{ old('state') }}" required>
                </div>
            </div>

             <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Country</label>
                <div class="col-sm-10">
                    @if ($errors->has('country'))
                        <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                    <input type="text" name="country" class="form-control" placeholder="" value="{{ old('country') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-10">
                    @if ($errors->has('lat'))
                        <span class="text-danger">{{ $errors->first('lat') }}</span>
                    @endif
                    <input type="text" name="lat" class="form-control" placeholder="" value="{{ old('lat') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-10">
                    @if ($errors->has('long'))
                        <span class="text-danger">{{ $errors->first('long') }}</span>
                    @endif
                    <input type="text" name="long" class="form-control" placeholder="" value="{{ old('long') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Location Date</label>
                <div class="col-sm-10">
                    @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                    @endif
                <input type="date" name="date" class="form-control" placeholder="" value="{{ old('date') }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Comments</label>
                <div class="col-sm-10">
                    @if ($errors->has('comment'))
                        <span class="text-danger">{{ $errors->first('comment') }}</span>
                    @endif
                <textarea name="comment" rows="3" class="form-control" placeholder="">{{ old('comment') }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add Location</button>
                </div>
            </div>


            </form>
        </div>
        </div>
        </div>
    
    </div>
    
    </div>
    </section>
    
    </main><!-- End #main -->




    @include('backend.layouts.footer')