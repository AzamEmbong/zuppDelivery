@extends('layouts.app')
<style type="text/css">
  .avatar{
    border-radius:50%;
    max-width: 100px; 
  }
  .card-body {
    font-family: "Lato", sans-serif;
}
.card-header {
    font-family: "Lato", sans-serif;
}

body {
    /* The image used */
    background-image: url("img_parallax.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.image{
  
  height: 100px;
    width: 100px;
}
.content {
  
  left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto; 
  width: 165px; /* Need a specific value to work */
}
.modal-center{
    top: 50% !important;
    transform: translateY(-50%) !important;
}
/* .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
} */


</style>
@section('content')

<div class="row">
    
{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <div class="col-md-6">
            <div class="card" >
                <div class="card-header" style="background-color:#ce9201 !important;font-weight:bold;font-size: 18px;">Profile</div>

                <div class="card-body">
                  <div class="col-md-4">
                    
                          <div class="col-sm-12">
                            <div class="row">
                              <div class="image">
                                @if(!empty($profile))
                                <img src="/storage/uploads/{{$profile->profile_pic}}" class="avatar" alt="">
                                @else
                                <img src="{{url('images/avatar.png')}}" class="avatar" alt="">
                                @endif
                            </div>
                          </div>
                      </div>
                    </div>
                  
                    <div class="col-md-6" >
                    <div class=" ">
                        @if(!empty($profile))
                            <label for="name">{{ __('Name') }}</label>
                            <output id="name">{{$profile->name}}</output>
                        @else
                        <h2></h2>
                        @endif
                    </div>
                   
                    <div class=" ">
                        @if(!empty($profile))
                            <label for="dob">{{ __('Dob') }}</label>
                            <output id="dob">{{$profile->dateOfBirth}}</output>
                        @else
                        <h2></h2>
                        @endif
                    </div>

                    <div class=" ">
                        @if(!empty($profile))
                            <label for="dob">{{ __('No. Tel') }}</label>
                                <output id="dob">{{$profile->noTel}}</output>
                        @else
                        <h2></h2>
                        @endif
                    </div>
                    </div>
                    
                    
                  
                
                 
                </div>
                <div class="card-footer">
                        <div style="float:right">
                                
                        <a href="/editProfile/{{$profile->id}}"><button type="button" class="btn btn-default" >Edit</button></a>
                      
                </div>
                        </div>

                </div>
            
        </div>

        @isset($input)

        <div class="col-md-6">
        <div class="card" >
            <div class="card-header" style="background-color:#ce9201 !important;font-weight:bold;font-size: 18px">
              Your Delivery Request
            </div>
            <div class="card-body">
                <div class="container">
                                     
                    <table class="table">
            <tr>
                <th>Order Number</th>
                <th></th>
            </tr>
            @foreach ($input as $in)
            <tr>
                    <div class="modal fade" id="{{ $in->delivery_id }}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top:30px">
                            <div class="modal-dialog modal-lg modal-center" >
                                    <div class="modal-content"  >
                                        <div class="modal-body" >
                                                
                                        <div class="card" >
                                                <div class="card-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Order #{{$in->delivery_id}}</h5>
                            
                                                <div class="card-body">
                                        
                                                        
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                        <div class="card">
                                                                <div class="card-body">
                                                                        <h5 class="card-title" style="color:#e01832">Sender</h5>
                                                       
                                                    
                                                    <div>
                                                    
                                                            <label for="Name" >Name</label>
                                                            <div> {{ $in->senderName }}</div>
                                                        </div>
                                        
                                                        <div>
                                                        <label for="Address">Address</label>
                                                        <div> {{ $in->senderAddress }}</div>
                                                    </div>
                                                    <div>
                                                            <label for="Email">Email</label>
                                                            <div> {{ $in->senderEmail }}</div>
                                                        </div>
                                                        <div>
                                                                <label for="No_tel">No. Tel</label>
                                                                <div> {{ $in->senderNoTel }}</div>
                                                        </div>
                                                                </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="card">
                                                        <div class="card-body">
                                                                <h5 class="card-title" style="color:#e01832">Receiver</h5>
                                                        <div>
                                                                <label for="id">Name</label>
                                                                <div> {{ $in->receiverName }}</div>
                                                        </div>
                                                        <div>
                                                                <label for="id">Address</label>
                                                                <div> {{ $in->receiverAddress }}</div>
                                                        </div>
                                                        <div>
                                                                <label for="id">Email</label>
                                                                <div> {{ $in->receiverEmail }}</div>
                                                        </div>
                                                        <div>
                                                                <label for="id">No. Tel</label>
                                                                <div> {{ $in->receiverNoTel }}</div>
                                                        </div>
                                                        </div>
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <div class="card">
                                                        <div class="card-body">
                                                                <h5 class="card-title" style="color:#e01832">Item</h5>
                                                        <div>
                                                                <label for="id">Type</label>
                                                                <div> {{ $in->itemType }}</div>
                                                        </div>
                                                        <div>
                                                                <label for="id">Size</label>
                                                                <div> {{ $in->itemSize }}</div>
                                                        </div>
                                                        <div>
                                                                <label for="id">Note</label>
                                                                <div> {{ $in->itemNote }}</div>
                                                        </div>
                                                        </div>
                                                </div>
                                                
                                                </div>
                                                    </div>
                                                </div>
                                                </div>
                                        
                            </div>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                <td>
                        <button type="button"  class="btn btn-default" style="background-color:#ce9201 !important;background-color:#219e83;font-weight:bold" data-toggle="modal" data-target="#{{$in->delivery_id}}">#{{$in->delivery_id}} </button>
                    
                        @if($in->status =='1')
                        <button disabled="disabled" class="btn btn-default">Processed</button>
                    @elseif($in->status =='2')
                        <button disabled="disabled" class="btn btn-default">Shipping</button>
                    @else 
                        <button disabled="disabled" class="btn btn-default">Shipped</button>
                    @endif</td>

                  <td>
                    {{-- modal submit --}}
                    

                    
     
                    <!-- the div that represents the modal dialog -->
                    <div class="modal fade"  role="dialog" id="1{{$in->delivery_id}}" >
                        <div class="modal-dialog modal-center">
                            <div class="modal-content">
                                <div class="modal-header"style="background-color:#ce9201 !important">
                                    
                                    <h4 class="modal-title">Report</h4>
                                </div>
                                    <div class="modal-body">
                                        
                                            
                                    <form  id="contact_form{{$in->delivery_id}}" action="{{action('PagesController@makeReport')}}" method="POST">
                                                {{ csrf_field()}}
                                                    <div class="form-group">
                                                      <label for="exampleFormControlInput1">Order Number</label>
                                                     
                                                      <input type="text" name="delivery_id" class="form-control" value="{{$in->delivery_id}}" id="exampleFormControlInput1" placeholder="#{{$in->delivery_id}}" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleFormControlSelect1">Rider ID</label>
                                                     
                                                      <input type="text" name="rider_id" class="form-control" value="{{$in->rider_id}}" placeholder="{{$in->rider_id}}" readonly/>
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="exampleFormControlTextarea1">Enter Your Report</label>
                                                      <textarea class="form-control" name="report" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                    
                                                    
                                                  </form>
                                          </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" id="submitForm" class="btn btn-default">Send</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- modal submit end --}}
                    <div style="float:right">
                        
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#1{{$in->delivery_id}}">Report</button>
                      <button type="button"  class="btn btn-default" style="font-weight:bold">Delete </button>
                    </div>
                      
                  </td>
               
            </tr>
            <script>
                $("#submitForm").on('click', function() {
                   $("#contact_form{{$in->delivery_id}}").submit();
               });</script>
            @endforeach
        </table>
       
       
            <div class="content">
                {!! $input->render() !!}
            </div>
       
               
         
        
            
                </div>
            </div>
          </div>
        </div> 
        

        {{-- new customer --}}
        @endisset
       
</div>
<br>
<!-- request -->
<div  style="background-color:#ce9201 !important" class="jumbotron">
    <div class="index-app-news spacial-features home-instant-quote">
        <div class="container quote">
          <div class="row quote-form">
            <div class="col-md-12">
                <div class="header">
                  <h2 class="instant-quote-title" style="font-weight: bold">Get instant quote</h2>
                </div>
                <form class="row" method="get" action="{{ url('/request') }}">
                    {{ csrf_field()}}
                <div class="form-group col-12 col-md-3">
                  <label for="pickupLocation">From</label>
                  <input id="pickupLocation" name="pickupLocation" class="form-control" type="text" value="" placeholder="Postcode, Country or Street / City / Country" onfocus="clearPickupLocation()" onblur="clearPickupLocation()" required>
                  
                </div>
                <div class="form-group col-12 col-md-3">
                  <label for="dropLocation">To</label>
                  <input id="dropLocation" name="dropLocation" class="form-control" type="text" value="" placeholder="Postcode, Country or Street / City / Country" onfocus="clearDropLocation()" onblur="clearDropLocation()" required>
                  
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
                <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
  </button> --}}
  
  <!-- Modal -->
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
                  <label for="deliveryWeight" onclick="showVolumetricInfo()" data-toggle="modal" data-target="#exampleModalCenter">Size <small>info</small></label>
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
                
                <div class="" style="float:right;margin-top: 29px;">
                  <button id="getQuoteBtn" type="submit" class="btn btn-info submit-quote" style="background-color:#000000" data-toggle="modal" data-target="#quoteDetails">Quote
                  
                </button>
                  
                 
                </div>
                <!-- Button trigger modal -->
  
  <!-- Modal -->
  
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
     

@endsection
