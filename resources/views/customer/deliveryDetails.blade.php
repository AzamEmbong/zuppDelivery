@extends('layouts.app')
@section('content')



<script type="text/javascript">

    $(document).ready(function(){

             $('.btnprn').printPage();

    });

</script>
<style>
     .container2 {
      width: 700px;
     
      margin: 20px auto;
    }
    .progressbar {
      counter-reset: step;
    }
    .progressbar li {
      list-style-type: none;
      width: 25%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
    }
    .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
    }
    .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
    }
    .progressbar li:first-child:after {
      content: none;
    }
    .progressbar li.active {
      color: green;
    }
    .progressbar li.active:before {
      border-color: #55b776;
    }
    .progressbar li.active + li:after {
      background-color: #55b776;
    }
        div.ex1 {
        padding: 25px;
        background-color: #112730;
        font-family: Courier;
	    color: white;
        margin: 0 auto;
        }
        
        div.ex2 {
        padding: 25px;
        background-color: #274c5b;
        font-family: Courier;
	    color: white;
        }

        div.ex3 {
        padding: 25px;
        background-color: #4b7f93;
        font-family: Courier;
	    color: white;
        }

        .jumbotron
{   
    width: 100%; /* make sure to define width to fill container */
    height: 1400px; /* define the height in pixels or make sure   */
                   /* you have something in your div with height */
                   /* so you can see your image */
    
    background-color: #a9e1f9;
     /* define the max width */
     /* define the max width */
 }
        </style>
<div class="container2">
        <ul class="progressbar">
            <li class="active">Price Checking</li>
            <li class="active">Delivery Details</li>
            <li>Invoice</li>
            <li>Request Submission</li>
    </ul>
    </div>
    <br>
<div class="jumbotron" style="margin-top: 93px">
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="{{ url('/addDetails') }}">
    {{ csrf_field() }}
    <!--SENDER-->
    <div class="ex1">
    <div class="form-group">
        <h3>Sender</h3>
      <label for="senderName">Name</label>
      <input type="text" class="form-control" id="senderName"  placeholder="Enter full name" name="sName" required>
      <small id="emailHelp" class="form-text text-muted"></small>
        
    </div>
    <div class="form-group">
        
      <label for="senderAddress">Address</label>
      <input type="textarea" class="form-control" id="senderAddress" placeholder="Enter address" name="sAddress" required>
    
    </div>
    <div class="form-group">
        
      <label for="senderEmail">Email</label>
      <input type="email" class="form-control" id="senderEmail" placeholder="Enter email" name="sEmail" required>
    
    </div>
    <div class="form-group">

      <label for="noTel">No. Tel</label>
      <input type="text" class="form-control" id="notel" placeholder="Enter telephone number" name="sNoTel" required>
    
    </div>
    </div>
<br>
<!--RECEIVER-->
<div class="ex2">
        <div class="form-group">
            <h3>Receiver</h3>
          <label for="receiverName">Name</label>
          <input type="text" class="form-control" id="senderName"  placeholder="Enter full name" name="rName" required>
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            
          <label for="receiverAddress">Address</label>
          <input type="textarea" class="form-control" id="receiverAddress" placeholder="Enter address" name="rAddress" required>
    
    </div>
        <div class="form-group">
          <label for="ReceiverEmail">Email</label>
          <input type="email" class="form-control" id="receiverEmail" placeholder="Enter email" name="rEmail" required>
        
    </div>
    <div class="form-group">
           
          <label for="noTel">No. Tel</label>
          <input type="text" class="form-control" id="notel" placeholder="Enter Telephone Number" name="rNoTel" required>
    
    </div>

    </div>
<br>
<!--Item-->
<div class="ex3">
        <div class="form-group">
            <h3>Item</h3>
          <label for="item">Item</label>
          <input type="text" class="form-control" id="item"  placeholder="Enter Item Type" name="iType" required>
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            
          <label for="sizeEst">Size Estimation</label>
          <input type="text" class="form-control" id="sizeEst" placeholder="Enter Size Estimation" name="iSize" required>
    
    </div>
        <div class="form-group">
          <label for="note">Note</label>
          <input type="text" class="form-control" id="note" placeholder="Note" name="iNote">
        </div>
    </div>

    
    <br>
<div class="form-group">
            
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>

               

                    

            </div>
        

   
  </form>

        </div>
</div>
</div>
{{-- <a href="{{ url('/viewPrint') }}" class="btnprn btn">Print Preview</a> --}}
<script>
        function activatePlacesSearch(){
          var input = document.getElementById('senderAddress');
          var autocomplete = new google.maps.places.Autocomplete(input);
    
           var input1 = document.getElementById('receiverAddress');
          var autocomplete = new google.maps.places.Autocomplete(input1);
        }
       </script>
       <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_kQBK98xOeeDPSEZbZKUi0wn2-vDbWjU&libraries=places&region=my&callback=activatePlacesSearch"></script>


@endsection