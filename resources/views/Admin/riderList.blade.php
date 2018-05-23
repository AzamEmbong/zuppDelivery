@extends('layouts.app3')
<style>
.modal-center{
    top: 50% !important;
    transform: translateY(-50%) !important;
}
</style>

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
    <div class="card" >
       
        <div class="card-header" style="background-color:#ce9201 !important">
          <h3> Rider List </h3>
        </div>
        
        
        <div class="card-body">
                
                
                <div class="container">
                                 
                        <table class="table">
                <tr>
                    <th>Rider ID</th>
                    <th></th>
                    
                    
                </tr>
                @foreach ($rider as $rider)
             
                <!-- Button trigger modal -->

  
  <!-- Modal -->

 
                <tr>
                    <td style="font-weight:bold">#{{$rider->id}} {{$rider->name}}</td>

                    <td>
                        <div style="float:right">
                            
                        <button type="button"  data-toggle="modal" data-target="#{{$rider->id}}" class="btn btn-default" style="background-color:white;font-weight:bold" >Details</button>
                       <a href="/terminate/{{$rider->id}}"> <button type="button"   class="btn btn-default" style="background-color:red;font-weight:bold" >Terminate</button></a>
                     
                        </div>
                    </td>
                    
                </tr>
                
                <div class="modal fade" id="{{$rider->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-center" role="document">
                          <div class="modal-content">
                            <div class="modal-header" style="background-color:#ce9201 !important">
                              <h5 class="modal-title" id="exampleModalLongTitle">#{{$rider->id}}</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                                    <div>
                                            <label for="rider_id">Rider ID</label>
                                            <div> {{ $rider->name }}</div>
                                    </div>
                                    <div>
                                            <label for="id">IC</label>
                                            <div> {{ $rider->IC }}</div>
                                    </div>
                                    <div>
                                            <label for="rider_id">Vehicle</label>
                                            <div> {{ $rider->vehicle }}</div>
                                    </div>
                                    <div>
                                            <label for="id">Plat No</label>
                                            <div> {{ $rider->plateNo }}</div>
                                    </div>
                                    {{-- <div>
                                            <label for="id">Note</label>
                                            <div> {{ $in->report }}</div>
                                    </div> --}}
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                      @endforeach
          
              
                        </table>
{{-- 
                        <div class="content">
                            {!! $input->render() !!}
                        </div> --}}
                </div>
              
              
          
         
        </div>
   
      </div>
            </div>
        </div>
    </div>
@endsection