@include('backend.layouts.header')
@include('backend.layouts.nav')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>

</div><!-- End Page Title -->

<section class="section">
  <div class="row">


    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">All Orders</h5>
          @if(session('status'))
                <div class="alert alert-{{session('status')['type']}}">
                    {{session('status')['text']}}
                </div>
            @endif

          <!-- Table with stripped rows -->
          <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Freight Type</th>
                <th scope="col">Package Type</th>
                <th scope="col">Price</th>
                <th scope="col">Departure Date</th>
                <th scope="col">Arrival Date</th>
                <th scope="col">Status</th>
                <th scope="col">View</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>
            <tbody>
            @foreach ( $orders as $row )
              <tr>
                <td>{{ $row->order_id }}</td>
                <td>{{ $row->freight_type }}</td>
                <td>{{ $row->package_type }}</td>
                <td>${{ number_format($row->price, 0, '.', ',') }} </td>
                <td>{{ $row->departure_date }}</td>
                <td>{{ $row->arrival_date }}</td>
                <td>{{ $row->order_status }}</td>
                <td><a href="/admin/view-order/{{ $row->order_id }}">View</a></td>
                <td>
                    @if( $row->order_status == "Active" )
                        <a class="btn" href="/admin/order-status/{{ $row->order_id }}/0" onclick="return confirm('Are you sure you want to Change Order Status?');">Mark Not Completed</a>
                    @else
                        <a class="btn" href="/admin/order-status/{{ $row->order_id }}/1" onclick="return confirm('Are you sure you want to delete Apartment?');">Mark Completed</a>
                    @endif  
                </td>
                
                
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>
          <!-- End Table with stripped rows -->
          <div class="row">
            <div class="col-lg-8 offset-md-2">
                {!! $orders->links() !!}
            </div>
          </div>

        </div>
      </div>

      



    </div>
  </div>
</section>

</main><!-- End #main -->
<script>
function myFunction() {
  confirm("Are you sure you want to delete?");
}
</script>
@include('backend.layouts.footer')