@extends('layouts.app2')
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

/* .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
} */
table {
    counter-reset: rowNumber;
}

table tr:not(:first-child) {
    counter-increment: rowNumber;
}

table tr td:first-child::before {
    content: counter(rowNumber);
    min-width: 1em;
    margin-right: 0.5em;
    font-weight: bold;
}
.modal-center{
    top: 50% !important;
    transform: translateY(-50%) !important;
}




</style>
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                
            <div class="card" >
                <div class="card-header" style="background-color:#ce9201 !important"><h3>Delivery Request Approval</h3></div>

                <div class="card-body">
                        <div class="container">
                                        
                                <table class="table">
                                        
                                        <tr>
                                                <th>Delivery Request</th>
                                                <th></th>
                                                <th></th>
                                                
                                                
                                            </tr>
                                            @foreach ($approval as $approval)  
                                           <div class="modal fade" id="{{ $approval->delivery_id }}"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="padding-top:30px">
                                                    <div class="modal-dialog modal-lg modal-center" >
                                                            <div class="modal-content"  >
                                                                <div class="modal-body" >
                                                                        
                                                                <div class="card" >
                                                                        <div class="card-header">
                                                                        <h5 class="modal-title" id="exampleModalLongTitle">Order #{{$approval->delivery_id}}</h5>
                                                    
                                                                        <div class="card-body">
                                                                
                                                                                
                                                                            
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                <div class="card">
                                                                                        <div class="card-body">
                                                                                                <h5 class="card-title" style="color:#e01832">Sender</h5>
                                                                               
                                                                            
                                                                            <div>
                                                                            
                                                                                    <label for="Name" >Name</label>
                                                                                    <div> {{ $approval->senderName }}</div>
                                                                                </div>
                                                                
                                                                                <div>
                                                                                <label for="Address">Address</label>
                                                                                <div> {{ $approval->senderAddress }}</div>
                                                                            </div>
                                                                            <div>
                                                                                    <label for="Email">Email</label>
                                                                                    <div> {{ $approval->senderEmail }}</div>
                                                                                </div>
                                                                                <div>
                                                                                        <label for="No_tel">No. Tel</label>
                                                                                        <div> {{ $approval->senderNoTel }}</div>
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
                                                                                        <div> {{ $approval->receiverName }}</div>
                                                                                </div>
                                                                                <div>
                                                                                        <label for="id">Address</label>
                                                                                        <div> {{ $approval->receiverAddress }}</div>
                                                                                </div>
                                                                                <div>
                                                                                        <label for="id">Email</label>
                                                                                        <div> {{ $approval->receiverEmail }}</div>
                                                                                </div>
                                                                                <div>
                                                                                        <label for="id">No. Tel</label>
                                                                                        <div> {{ $approval->receiverNoTel }}</div>
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
                                                                                        <div> {{ $approval->itemType }}</div>
                                                                                </div>
                                                                                <div>
                                                                                        <label for="id">Size</label>
                                                                                        <div> {{ $approval->itemSize }}</div>
                                                                                </div>
                                                                                <div>
                                                                                        <label for="id">Note</label>
                                                                                        <div> {{ $approval->itemNote }}</div>
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

                                                            
                                                            </div>
   
                                             <tr>
                                                    
                                             <td style="font-weight:bold">
                                                
                                         #{{ $approval->delivery_id}}
   
                                            </td>
                                            <td>
                                                    {{ $approval->created_at}}
                                            </td>
                                             
        <!-- Button trigger modal -->   
                                               
                                                 <td>
                                                       
                                                     <div style="float:right">
                                                     <a href="#"><button class="btn btn-default" data-toggle="modal" data-target="#{{$approval->delivery_id}}" style="background-color:#1263e5;color:white">Details</button></a>    
                                                    <a href="/confirmation/{{$approval->delivery_id}}"><button class="btn btn-default" style="background-color:#101110;color:aliceblue" id="approveBtn">Accept</button></a>
                                                    
                                                </div>
                                                </td>
                                            
                                             </tr>
                                             @endforeach
                                </table>
                              </div>
                              
                              
                  </div>
                </div>
                
        </div>
            </div>
        </div>

        
    @endsection