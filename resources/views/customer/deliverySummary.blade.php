@extends('layouts.app')
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
</style>
@section('content')

 
<script type="text/javascript">

    $(document).ready(function(){

             $('.btnprn').printPage();

    });
    </script>
     <div class="container2">
                <ul class="progressbar">
                    <li class="active">Price Checking</li>
                    <li class="active">Delivery Details</li>
                    <li class="active">Invoice</li>
                    <li>Request Submission</li>
            </ul>
            </div>
            <div class="col-md-10 col-md-offset-1" style="margin-top: 100px;">
           
                        <div class="card">
                                        <div class="card-header">
                                                <h5 class="card-title">Delivery Summary <div class="form-group" style="float:right">
                                                
                                                <a href="{{ url('/submit') }}"<button type="submit" class="btn btn-primary">Save
                                                        </button></a>
                                                    
                                        
                                                   
                                                     <a href="{{ url('/viewPrint') }}" class="btnprn btn"><button type="button"  class="btn btn-warning">Print</button></a>
                                                </h5>
                                        </div>
                                        <div class="card-body">
                                
                                
                                                    
                                                
                                            
                                              <div class="row">
                                                <div class="col-md-4">
                                                <div class="card">
                                                        <div class="card-body">
                                                                <h5 class="card-title">Sender</h5>
                                                <div>
                                                   <label for="id">Id</label>
                                                   <div> {{ $deliveryDetails->delivery_id }}</div>
                                               </div>
                                               
                                               <div>
                                               
                                                    <label for="id">Name</label>
                                                    <div> {{ $deliveryDetails->senderName }}</div>
                                                </div>
                                
                                                <div>
                                                   <label for="id">Address</label>
                                                   <div> {{ $deliveryDetails->senderAddress }}</div>
                                               </div>
                                               <div>
                                                    <label for="id">Email</label>
                                                    <div> {{ $deliveryDetails->senderEmail }}</div>
                                                </div>
                                                <div>
                                                        <label for="id">No. Tel</label>
                                                        <div> {{ $deliveryDetails->senderNoTel }}</div>
                                                </div>
                                                        </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="card">
                                                <div class="card-body">
                                                        <h5 class="card-title">Receiver</h5>
                                                <div>
                                                        <label for="id">Name</label>
                                                        <div> {{ $deliveryDetails->receiverName }}</div>
                                                </div>
                                                <div>
                                                        <label for="id">Address</label>
                                                        <div> {{ $deliveryDetails->receiverAddress }}</div>
                                                </div>
                                                <div>
                                                        <label for="id">Email</label>
                                                        <div> {{ $deliveryDetails->receiverEmail }}</div>
                                                </div>
                                                <div>
                                                        <label for="id">No. Tel</label>
                                                        <div> {{ $deliveryDetails->receiverNoTel }}</div>
                                                </div>
                                                </div>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="card">
                                                <div class="card-body">
                                                        <h5 class="card-title">Item</h5>
                                                <div>
                                                        <label for="id">Item</label>
                                                        <div> {{ $deliveryDetails->itemType }}</div>
                                                </div>
                                                <div>
                                                        <label for="id">Size</label>
                                                        <div> {{ $deliveryDetails->itemSize }}</div>
                                                </div>
                                                <div>
                                                        <label for="id">Note</label>
                                                        <div> {{ $deliveryDetails->itemNote }}</div>
                                                </div>
                                                </div>
                                        </div>
                                        </div>
                                              </div>
                                        </div>
                                       
                                
                    </div>
            
</div>

     


@endsection
 {{-- <tr><th>Id</th><th>Sender Name</th><th>Sender Address</th><th>Sender Email</th><th>Sender TelNo</th></tr>
                         <tr>
                             <td></td>
                             <td>{{ $deliveryDetails->senderName }}</td>
                             <td>{{ $deliveryDetails->senderAddress }}</td>
                             <td>{{ $deliveryDetails->senderEmail }}</td>
                             <td>{{ $deliveryDetails->senderNoTel }}</td>
                             
                         </tr>
                        
                        
                        <br>
                         <tr><th>Receiver Name</th><th>Receiver Address</th><th>Receiver Email</th><th>Receiver TelNo</th></tr>
                            <tr>
                                
                                <td>{{ $deliveryDetails->receiverName }}</td>
                                <td>{{ $deliveryDetails->receiverAddress }}</td>
                                <td>{{ $deliveryDetails->receiverEmail }}</td>
                                <td>{{ $deliveryDetails->receiverNoTel }}</td>
                            </tr>
                           
                            
                            <br>
                            <tr><th>Item</th><th>Size</th><th>Note</th></tr>
                        
                         
                                <tr>
                                    
                                    <td>{{ $deliveryDetails->itemType }}</td>
                                    <td>{{ $deliveryDetails->itemSize }}</td>
                                    <td>{{ $deliveryDetails->itemNote }}</td>
                                
                                </tr> --}}