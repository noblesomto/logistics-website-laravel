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
            <h5 class="card-title">New Order</h5>
            @if(session('status'))
                <div class="alert alert-{{session('status')['type']}}">
                    {{session('status')['text']}}
                </div>
            @endif
            <!-- General Form Elements -->
            <form action="/admin/edit-order/{{ $order->order_id }}" method="POST" role="form" >
             @csrf
             @method('PUT') 
    
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Freight Type</label>
                <div class="col-sm-10">
                    @if ($errors->has('freight_type'))
                        <span class="text-danger">{{ $errors->first('freight_type') }}</span>
                    @endif
                <select name="freight_type" class="form-select" aria-label="Default select example" required>
                    <option value="">Select Freight Type</option>
                      <option value="Air Freight" {{ ($order->freight_type =='Air Freight') ? "selected" : ""; }}>Air Freight</option>
                      <option value="Land Freight" {{ ($order->freight_type =='Land Freight') ? "selected" : ""; }}>Land Freight</option>
                      <option value="Sea Freight" {{ ($order->freight_type =='Sea Freight') ? "selected" : ""; }}>Sea Freight</option>
                      
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Package Type</label>
                <div class="col-sm-10">
                    @if ($errors->has('package_type'))
                        <span class="text-danger">{{ $errors->first('package_type') }}</span>
                    @endif
                <select name="package_type" class="form-select" aria-label="Default select example" required>
                    <option value="">Select Package Type</option>
                      <option value="Parcel" {{ ($order->package_type =='Parcel') ? "selected" : ""; }}>Parcel</option>
                      <option value="Box" {{ ($order->package_type =='Box') ? "selected" : ""; }}>Box</option>
                      <option value="Container" {{ ($order->package_type =='Container') ? "selected" : ""; }}>Container</option>
                      
                </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Departure Date</label>
                <div class="col-sm-10">
                    @if ($errors->has('departure_date'))
                        <span class="text-danger">{{ $errors->first('departure_date') }}</span>
                    @endif
                <input type="date" name="departure_date" class="form-control" placeholder="" value="{{ $order->departure_date }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Arrival Date</label>
                <div class="col-sm-10">
                    @if ($errors->has('arrival_date'))
                        <span class="text-danger">{{ $errors->first('arrival_date') }}</span>
                    @endif
                <input type="date" name="arrival_date" class="form-control" placeholder="" value="{{ $order->arrival_date }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Departure Location</label>
                <div class="col-sm-10">
                    @if ($errors->has('departure_loc'))
                        <span class="text-danger">{{ $errors->first('departure_loc') }}</span>
                    @endif
                <input type="text" name="departure_loc" class="form-control" placeholder="" value="{{ $order->departure_loc }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Arrival Location</label>
                <div class="col-sm-10">
                    @if ($errors->has('arrival_loc'))
                        <span class="text-danger">{{ $errors->first('arrival_loc') }}</span>
                    @endif
                <input type="text" name="arrival_loc" class="form-control" placeholder="" value="{{ $order->arrival_loc }}" required>
                </div>
            </div>
    
   
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Package Description</label>
                <div class="col-sm-10">
                    @if ($errors->has('package_des'))
                        <span class="text-danger">{{ $errors->first('package_des') }}</span>
                    @endif
                <textarea name="package_des" rows="3" class="form-control" placeholder="">{{ $order->package_des }}</textarea>
                </div>
            </div>
           
           <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Package Weight</label>
                <div class="col-sm-10">
                    @if ($errors->has('weight'))
                        <span class="text-danger">{{ $errors->first('weight') }}</span>
                    @endif
                <input type="text" name="weight" class="form-control" placeholder="" value="{{ $order->weight }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Number of Stops Till Delivery</label>
                <div class="col-sm-10">
                    @if ($errors->has('num_stops'))
                        <span class="text-danger">{{ $errors->first('num_stops') }}</span>
                    @endif
                <input type="number" name="num_stops" class="form-control" placeholder="" value="{{ $order->num_stops }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Freight Price</label>
                <div class="col-sm-10">
                    @if ($errors->has('price'))
                        <span class="text-danger">{{ $errors->first('price') }}</span>
                    @endif
                <input name="price" maxlength="11" pattern="[0-9]*" class="form-control" placeholder="eg 350" type="text" value="{{ $order->price }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Order Date</label>
                <div class="col-sm-10">
                    @if ($errors->has('order_date'))
                        <span class="text-danger">{{ $errors->first('order_date') }}</span>
                    @endif
                <input type="date" name="order_date" class="form-control" placeholder="" value="{{ $order->order_date }}" required>
                </div>
            </div>

    
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Edit Order</button>
                </div>
            </div>
    
            </form><!-- End General Form Elements -->
    
        </div>
        </div>
    
    </div>
    
    </div>
    </section>
    
    </main><!-- End #main -->




    @include('backend.layouts.footer')