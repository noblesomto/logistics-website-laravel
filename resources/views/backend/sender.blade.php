@include('backend.layouts.header')
@include('backend.layouts.nav')


<main id="main" class="main">

    <div class="pagetitle">
    <h1>Sender</h1>
  
    </div><!-- End Page Title -->
    
    <section class="section">
    <div class="row">
    <div class="col-lg-12">
    
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Sender Information</h5>
            @if(session('status'))
                <div class="alert alert-{{session('status')['type']}}">
                    {{session('status')['text']}}
                </div>
            @endif
            <!-- General Form Elements -->
            <form action="/admin/sender/{{ $user->order_id }}" method="POST" role="form" class="" enctype="multipart/form-data">
             @csrf 
             @method('PUT')
            
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Order Id</label>
                <div class="col-sm-10">
                    @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                <input type="text" class="form-control"  value="{{ $user->order_id }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                    @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                <input type="text" name="first_name" class="form-control"  value="{{ $user->first_name }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                    @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                <input type="text" name="last_name" class="form-control"  value="{{ $user->last_name }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                <input type="text" name="phone" class="form-control"  value="{{ $user->phone }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-10">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                <input type="email" name="email" class="form-control"  value="{{ $user->email }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Company</label>
                <div class="col-sm-10">
                    @if ($errors->has('company'))
                        <span class="text-danger">{{ $errors->first('company') }}</span>
                    @endif
                <input type="text" name="company" class="form-control" value="{{ $user->company }}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                <input type="text" name="address" class="form-control" value="{{ $user->address }}" required>
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">City</label>
                <div class="col-sm-10">
                    @if ($errors->has('city'))
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                <input type="text" name="city" class="form-control"  value="{{ $user->city }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">State</label>
                <div class="col-sm-10">
                    @if ($errors->has('state'))
                        <span class="text-danger">{{ $errors->first('state') }}</span>
                    @endif
                <input type="text" name="state" class="form-control"  value="{{ $user->state }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Country</label>
                <div class="col-sm-10">
                    @if ($errors->has('country'))
                        <span class="text-danger">{{ $errors->first('country') }}</span>
                    @endif
                <input type="text" name="country" class="form-control"  value="{{ $user->country }}" required>
                </div>
            </div>


    
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Update Sender</button>
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