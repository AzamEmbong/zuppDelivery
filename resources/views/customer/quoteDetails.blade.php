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
<div class="container2">
    <ul class="progressbar">
        <li class="active">Price Checking</li>
        <li>Delivery Details</li>
        <li>Invoice</li>
        <li>Request Submission</li>
</ul>
</div>

<br>

<div  class="jumbotron" style="background-color:#ce9201 !important;margin-top:115px">
        <div class="container">
                <div class="form-group">
            
            <h2>Quote </h2>
                        <br>
            <center>
            <table class="table" >
                  
            
                    <tr>
                            <th>Pick Up Location</th>
                            <th>Drop Location</th>
                            <th>Item</th>
                            <th>Size</th>
                            <th>Price</th>
                        </tr>
                        
                         <tr>
                             <td>{{ $inputLoc }}</td>
                             <td>{{ $dropLocation }}</td>
                             <td>{{ $item }}</td>
                             <td>{{ $size }}</td>
                             <td>{{ $price }}</td>     
                             
                         </tr>
            
                    
            </table>
            </center>
                </div>
                <div class="modal fade" id="login" tabindex="-1" role="dialog" >
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="login">Alert!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                <div class="modal-body">
                                 
                                 {{-- <p>You need to <a href="{{ route('login') }}" class="tooltip-test" title="Tooltip">Log In</a> or <a href="{{ route('register') }}" >Register</a> to proceed</p> --}}
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                      </div>
                                    </div>
                                  </div>
                                </div>


                                <div class="form-group" style="float:right">
        
         
                                        <a href="/deliveryDetails"><button class="btn btn-submit">Proceed</button></a>
                                        <a href="/home"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
                                
                                    
                                </div>
                                
                                </div>
        </div>
        
     
        



   
        


@endsection


