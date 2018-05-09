@extends('layouts.app2')

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.stat-header {
    font-family: "Lato", sans-serif;
}
.stat-body {
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
.content {
  
  left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto; 
  width: 165px; /* Need a specific value to work */
}

.image{
  
  height: 100px;
    width: 100px;
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
    <div class="col-md-6">

      
            <div class="card" style="background-color:#B82121">
                <div class="card-header"><h3>Profile</h3></div>

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
                   <div class="row">
                        @if(!empty($profile))
                        <h2 class="lead" >{{$profile->name}}</h2>
                        @else
                        <h2></h2>
                        @endif
                    </div>
                   
                    <div class="row">
                        @if(!empty($profile))
                        <h2 class="lead">{{$profile->dateOfBirth}}</h2>
                        @else
                        <h2></h2>
                        @endif
                    </div>
                  
                
                  </div>
                </div>
                
           
    </div>
        <br>
        <div class="col-md-6">
        
        <div class="card" style="background-color:#B82121">
           
            <div class="card-header">
              <h3> Delivery Status </h3>
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
                        <td >
                                <button type="button" class="btn btn-default" style="background-color:white;font-weight:bold" data-toggle="modal" data-target="#{{$in->delivery_id}}">#{{$in->delivery_id}} </button>
                            
                                @if($in->status =='1')
                                <button disabled="disabled" class="btn btn-default">Processed</button>
                            @elseif($in->status =='2')
                                <button disabled="disabled" class="btn btn-default">Shipping</button>
                            @else 
                                <button disabled="disabled" class="btn btn-default">Shipped</button>
                            @endif</td>
                        <td>
                                <div style="float:right">
                                <div class="btn-group">
                                        
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background-color:#101110;color:aliceblue">
                                                Update </button>
                                        <ul class="dropdown-menu" role="menu" style="background-color:#101110">
                                          <li><a href="/updateStatus/{{$in->delivery_id}}" style="color:#f7652c">Processed</a></li>
                                          <li><a href="/updateStatus1/{{$in->delivery_id}}" style="color:#f7ed2c">Shipping</a></li>
                                          <li><a href="/updateStatus2/{{$in->delivery_id}}" style="color:#80c401">Shipped</a></li>
                                        
                                        </ul>
                                      </div>
                                
                                        
                                    {{-- <a href="/updateStatus/{{$in->delivery_id}}"><button class="btn btn-default" style="background-color:#101110;color:aliceblue" id="approveBtn">Update</button></a> --}}
                                </div>   
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="content">
                        {!! $input->render() !!}
                    </div>
                    </div>
             
            </div>
       
          </div>
            
        </div>
    </div>
    @endsection