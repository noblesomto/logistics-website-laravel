@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBQDt0vpPgCIawWs_6ss-ULJSjZrvzuDI"></script>
<!-- about-me-area-start -->
<div class="about-me-area pt-30 pb-100">
    <div class="container">
        <div class="row mb-40">
            <div class="cl-xl-12 col-lg-12">
                <div class="about-me-single">
                    <div class="section-title pos-rel mb-30">
                        <span class="line">Package Location</span>

                    </div> 
                    <div class="mt-30">
                        <div id="map" style="width: 100%; height: 70vh;"></div>
                </div>
            </div>
            @php
                $progress = $loc_num /$num_stops * 100;
            @endphp

            <div class="progress-2 h-20 mt-30">
              <div class="progress-bar" role="progressbar" style="width: {{ $progress }}%; height: 25px; padding-right: 5px" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">{{ $loc->state }}</div>
            </div>

        </div>
    </div>

    <div class="row mb-40">
            <div class="cl-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                <h4>Package Location Details</h4>
                <!-- Table with stripped rows -->
                  <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">State</th>
                        <th scope="col">Country</th>
                        <th scope="col">Date</th>
                        <th scope="col">Comment</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ( $all_loc as $row )
                      <tr>
                        <td>{{ $row->order_id }}</td>
                        <td>{{ $row->state }}</td>
                        <td>{{ $row->country }}</td>
                        <td>{{ date('j F Y', strtotime($row->date)); }}</td>
                        <td>{{ $row->comment }}</td>
        
                        
                      </tr>
                    @endforeach
                      
                    </tbody>
                  </table>
                </div>
                  <!-- End Table with stripped rows -->
                  <div class="row mt-30">
                        <a  class="btn" href="/receipt/{{ $loc->order_id }}">View Reciept</a>
                    </div>
            </div>

        </div>
        

</div>
<!-- about-me-area-end -->



<script type="text/javascript">
function initialize() {
   var latlng = new google.maps.LatLng({{ $loc->lat }},{{ $loc->long }});
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: false,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var infowindow = new google.maps.InfoWindow();   
    google.maps.event.addListener(marker, 'click', function() {
      var iwContent = '<div id="iw_container">' +
      '<div class="iw_title"><b>Location</b> : Noida</div></div>';
      // including content to the infowindow
      infowindow.setContent(iwContent);
      // opening the infowindow in the current map and at the current marker location
      infowindow.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

@include('frontend.layouts.footer')