@extends('layouts.app3')
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
            <div class="card" style="background-color:#1fb1ef">
                <div class="card-header"><h3>Profile</h3></div>

                <div class="card-body">
                  
                    </div>
                  
                
                  </div>
                </div>
                </div>
            </div>
        
        <br>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
        <div class="card" style="background-color:#1fb1ef">
           
            <div class="card-header">
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
            <div class="modal-header">
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
              <div class="dropdown">
                    <button class="btn btn-primary " type="button" data-toggle="dropdown">Take action
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#">Send Warning</a></li>
                      <li><a href="#">Delete Rider</a></li>
                      
                    </ul>
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
    @endsection