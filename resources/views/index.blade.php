@extends('layouts.appIndex')
@section('content')
        <!--<div class="jumbotron text-center">
        <h1>This is Index page</h1>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>-->
<style>
  .jumbotron {
  margin: 0;
  position: absolute;
  top: 40%;
  
}
.modal-center{
    top: 50% !important;
    transform: translateY(-50%) !important;
}
</style>


<div style="background:#219e83 " class="jumbotron">
<div class="index-app-news spacial-features home-instant-quote">
    <div class="container quote">
      <div class="row quote-form">
        <div class="col-md-12">
            <div class="header">
              <h2 class="instant-quote-title" style="font-weight: bold">Get instant quote</h2>
            </div>
            <form class="row" method="get" action="{{ url('/indexQuote') }}">
            <div class="form-group col-12 col-md-3">
              <label for="pickupLocation">From</label>
              <input id="pickupLocation" name="pickupLocation" class="form-control" type="text" value="" placeholder="Postcode, Country or Street / City / Country" onfocus="clearPickupLocation()" onblur="clearPickupLocation()" required>
              <input id="pickupLat" name="pickupLat" type="hidden" />
              <input id="pickupLng" name="pickupLng" type="hidden" />
              <input id="pickupZipcode" name="pickupZipcode" type="hidden" />
              <input id="pickupCountry" name="pickupCountry" type="hidden" />
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="dropLocation">To</label>
              <input id="dropLocation" name="dropLocation" class="form-control" type="text" value="" placeholder="Postcode, Country or Street / City / Country" onfocus="clearDropLocation()" onblur="clearDropLocation()" required>
              <input id="dropLat" name="dropLat" type="hidden" />
              <input id="dropLng" name="dropLng" type="hidden" />
              <input id="dropZipcode" name="dropZipcode" type="hidden" />
              <input id="dropCountry" name="dropCountry" type="hidden" />
            </div>
            <div class="form-group col-12 col-md-3">
              <label for="deliveryItemType">Item</label>
              <select id="deliveryItemType" name="deliveryItemType" class="form-control" required>
                <!-- <option value="">(Package Type)</option> -->
                <option value="DOCUMENT">Document</option>
                <option value="PARCEL">Parcel</option>
                <option value="FOOD">Food</option>
                <option value="FLOWER">Flower</option>
                <option value="CHILL">Chill</option>
                <option value="FROZEN">Frozen</option>
                <option value="CAKE">Cake</option>
                <option value="BULKY">Bulky Packages (&gt;10 kg)</option>
                <option value="OTHER">Others</option>
                <option value="TASK">Task/Runner</option>
              </select>
            </div>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-center" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Volumetric Weight Calculation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="/weight/weight.jpg" >
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class="form-group col-12 col-md-2">
              <label for="deliveryWeight"  data-toggle="modal" data-target="#exampleModalCenter">Size <small>info</small> </label>
              <input id="deliveryWeight" name="deliveryWeight" v-model="form.deliveryWeight" type="number" step="0.5" min="0" class="form-control" required />
              <!-- <select id="deliveryWeight" name="deliveryWeight" class="form-control" required>
                <option value="0.5">0.5 kg</option>
                <option value="1">1 kg</option>
                <option value="2">2 kg</option>
                <option value="3">3 kg</option>
                <option value="4">4 kg</option>
                <option value="5">5 kg</option>
                <option value="6">6 kg</option>
                <option value="7">7 kg</option>
                <option value="8">8 kg</option>
                <option value="9">9 kg</option>
                <option value="10">10 kg</option>
                <option value="20">20 kg</option>
                <option value="30">30 kg</option>
                <option value="40">40 kg</option>
                <option value="50">50 kg</option>
                <option value="60">60 kg</option>
                <option value="70">70 kg</option>
              </select> -->
            </div>
            <div class="form-group" style="float:right;margin-top: 29px;">
              <button id="getQuoteBtn" type="submit" class="btn btn-info submit-quote" style="background-color:#000000">Quote</button>
        
             
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>

<script>
    function activatePlacesSearch(){
      var input = document.getElementById('pickupLocation');
      var autocomplete = new google.maps.places.Autocomplete(input);

       var input1 = document.getElementById('dropLocation');
      var autocomplete = new google.maps.places.Autocomplete(input1);
    }
   </script>
   <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_kQBK98xOeeDPSEZbZKUi0wn2-vDbWjU&libraries=places&region=my&callback=activatePlacesSearch"></script>
   {{-- <script>
       function activatePlaceSearch(){
         var input = document.getElementById('dropLocation');
         var autocomplete = new google.maps.places.Autocomplete(input);
       }
      </script>
      
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_kQBK98xOeeDPSEZbZKUi0wn2-vDbWjU&libraries=places&callback=activatePlaceSearch"></script> --}}

@endsection