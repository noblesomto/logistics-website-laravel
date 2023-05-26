@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>



<!-- about-me-area-start -->
<div class="about-me-area pt-125 pb-100">
    <div class="container">
        <div class="row mb-40">
            <div class="cl-xl-12 col-lg-12">
                <div class="about-me-single">
                    <div class="section-title pos-rel mb-30">
                        <span class="line">Order Details</span>

                    </div> 
                   @php if($order) {  @endphp

                    <div class="mt-30">
                        <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Freight Type</th>
                            <th scope="col">Package Type</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                      
                          <tr>
                            <td>{{ $order->order_id }}</td>
                            <td>{{ $order->freight_type }}</td>
                            <td>{{ $order->package_type }}</td>
                            <td>{{ $order->weight }}KG</td>
        
                            <td><a href="/order-details/{{ $order->order_id }}" class="btn btn-danger" >View Details</a></td>
                           
                            
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                </div>
                @php }else{ @endphp

                <h4> Package Was not found</h4>

                @php  } @endphp
            </div>

        </div>

    </div>
</div>
<!-- about-me-area-end -->





@include('frontend.layouts.footer')