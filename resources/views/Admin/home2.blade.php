@extends('layouts.app3')
<style type="text/css">
  .avatar{

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
.modal-center{
    top: 50% !important;
    transform: translateY(-50%) !important;
}
.grid-container {

  grid-template-columns: auto auto auto auto;
  grid-template-rows: 300px 300px;
  grid-gap: 10px;
  padding: 10px;
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header" style="background-color:#ce9201 !important"><h3>Rider Registration Request</h3></div>

                <div class="card-body">
                    
                    
                    <div class="container">
                                     
                            <table class="table">
                    <tr>
                        <th>Rider</th>
                        <th></th>
                        
                        
                    </tr>
                    @foreach ($reg as $reg)
                  
                    <!-- Button trigger modal -->

      
      <!-- Modal -->
      <div class="modal fade" id="{{$reg->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-center" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ce9201 !important">
              <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                   
                <div class="row">
                    <div class="col-md-4">
                        <div>
                                <label for="name">name</label>
                                <br>
                                <output id="name"> {{ $reg->name }}</output>
                        </div>
                    
                        <div>
                                <label for="notel">Phone</label>
                                <br>
                                <output id="notel"> {{ $reg->noTel }}</output>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                                <label for="ic">Identification No.</label><br>
                                <output id="ic"> {{ $reg->IC }}</output>
                        </div>
                        <div>
                                <label for="vehicle">Vehile</label><br>
                                <output id="vehicle"> {{ $reg->vehicle }}</output>
                        </div>
                    </div>
                        <div class="col-md-4">
                        <div>
                            <label for="plate">Plate No.</label><br>
                            <output id="plate"> {{ $reg->plateNo }}</output>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                        <div class="col-md-4">
                                <div class="image">
                                        <div class="image">
                                                <label for="id">Profile Picture</label><br>
                                                <a href="/storage/licenses/{{$reg->profile_pic}}">
                                                <img src="/storage/licenses/{{$reg->profile_pic}}" class="avatar" alt="">
                                                </a>
                                              </div>
                            </div>    
                        
                               
                        {{-- <div>
                                <label for="name">name</label>
                                <br>
                                <output id="name"> {{ $reg->name }}</output>
                        </div>
                        <div>
                                <label for="notel">Phone</label>
                                <br>
                                <output id="notel"> {{ $reg->noTel }}</output>
                        </div>
                        <div>
                                <label for="ic">Identification No.</label><br>
                                <output id="ic"> {{ $reg->IC }}</output>
                        </div>
                        <div>
                                <label for="vehicle">Vehile</label><br>
                                <output id="vehicle"> {{ $reg->vehicle }}</output>
                        </div>
                        <div>
                            <label for="plate">Plate No.</label><br>
                            <output id="plate"> {{ $reg->plateNo }}</output>
                        </div> --}}
                    </div>
                    <div class="col-md-4">
                            <div class="image">
                                    <label for="id">Identification Card</label>
                                    <a href="/storage/IC/{{$reg->ICFile}}">
                                    <img src="/storage/IC/{{$reg->ICFile}}" class="avatar" alt="">
                                    </a>
                                  </div>
                    </div>
                    
                    <div class="col-md-4">
                        
                            <div class="image">
                                    <label for="id">License</label><br>
                                    <a href="/storage/licenses/{{$reg->license}}">
                                    <img src="/storage/licenses/{{$reg->license}}" class="avatar" alt="">
                                    </a>
                                  </div>
                        
                    </div>
                        </div> 
                </div>
               
                    

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="/approveReg/{{$reg->id}}"><button type="button" class="btn btn-primary">Approve Registration</button></a>
            </div>
          </div>
        </div>
      </div>
                    <tr>
                        <td style="font-weight:bold">#{{$reg->id}}</td>

                        <td>
                            <div style="float:right">
                                
                            <button type="button"  data-toggle="modal" data-target="#{{$reg->id}}" class="btn btn-default" style="background-color:white;font-weight:bold" >Read</button>
                                   
                         
                            </div>
                        </td>
                        
                    </tr>
                   
                    @endforeach
                  
                            </table>

                            {{-- <div class="content">
                                {!! $input->render() !!}
                            </div> --}}
                    </div>
                  
                  
              
             
            </div>
                  
                
                  </div>
                </div>
                </div>
            </div>
        
        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
        <div class="card" >
           
            <div class="card-header" style="background-color:#ce9201 !important">
              <h3> Reports </h3>
            </div>
            
            
            <div class="card-body">
                    
                    
                    <div class="container">
                                     
                            <table class="table">
                    <tr>
                        <th>Order Number</th>
                        <th></th>
                        
                        
                    </tr>
                    @foreach ($input as $in)
                  
                    <!-- Button trigger modal -->

      
      <!-- Modal -->
      <div class="modal fade" id="{{$in->report_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#ce9201 !important">
              <h5 class="modal-title" id="exampleModalLongTitle">Report #{{$in->report_id}}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <div>
                            <label for="rider_id">Rider ID</label>
                            <div> {{ $in->rider_id }}</div>
                    </div>
                    <div>
                            <label for="id">Customer ID</label>
                            <div> {{ $in->customer_id }}</div>
                    </div>
                    <div>
                            <label for="id">Note</label>
                            <div> {{ $in->report }}</div>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              {{-- <div class="dropdown">
                    <button class="btn btn-primary " type="button" data-toggle="dropdown">Take action
                    </button> --}}
                    {{-- <ul class="dropdown-menu">
                      <li><a href="#">Send Warning</a></li>
                      <li><a href="#">Delete Rider</a></li>
                      
                    </ul> --}}
                  </div>
              {{-- <a href="/readReport/{{$in->report_id}}"><button type="button" class="btn btn-primary">Take action</button></a> --}}
            </div>
          </div>
        </div>
      </div>
                    <tr>
                        <td style="font-weight:bold">#{{$in->report_id}}</td>

                        <td>
                            <div style="float:right">
                                
                            <button type="button"  data-toggle="modal" data-target="#{{$in->report_id}}" class="btn btn-default" style="background-color:white;font-weight:bold" >Read</button>
                                   
                         
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
        </div>
        <br>
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
            <div class="card" >
               
                <div class="card-header" style="background-color:#ce9201 !important">
                  <h3> feedbacks </h3>
                </div>
                
                
                <div class="card-body">
                        
                        
                        <div class="container">
                                         
                                <table class="table">
                        <tr>
                            <th>Order Number</th>
                            <th></th>
                            
                            
                        </tr>
                        @foreach ($feed as $f)
                      
                        <!-- Button trigger modal -->
    
          
          <!-- Modal -->
          
          <div class="modal fade" id="F{{$f->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header" style="background-color:#ce9201 !important">
                  <h5 class="modal-title" id="exampleModalLongTitle">feedback #{{$f->id}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div>
                                <label for="customer">Customer ID</label>
                                <div> {{ $f->customer_id }}</div>
                        </div>
                        <div>
                                <label for="id">Customer Name</label>
                                <div> {{ $f->name }}</div>
                        </div>
                        <div>
                                <label for="id">Report</label>
                                <div> {{ $f->report }}</div>
                        </div>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                  {{-- <div class="dropdown">
                        <button class="btn btn-primary " type="button" data-toggle="dropdown">Take action
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Send Warning</a></li>
                          <li><a href="#">Delete Rider</a></li>
                          
                        </ul>
                      </div> --}}
                  {{-- <a href="/readReport/{{$in->report_id}}"><button type="button" class="btn btn-primary">Take action</button></a> --}}
                </div>
              </div>
            </div>
          </div>
                        <tr>
                            <td style="font-weight:bold">#{{$f->id}}</td>
    
                            <td>
                                <div style="float:right">
                                    
                                <button type="button"  data-toggle="modal" data-target="#F{{$f->id}}" class="btn btn-default" style="background-color:white;font-weight:bold" >Read</button>
                                       
                             
                                </div>
                            </td>
                            
                        </tr>
                       
                        @endforeach
                      
                                </table>
    
                                <div class="content">
                                    {!! $feed->render() !!}
                                </div>
                        </div>
                      
                      
                  
                 
                </div>
           
              </div>
                    </div>
                </div>
            </div>
    @endsection