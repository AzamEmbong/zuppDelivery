@extends('layouts.app3')

@section('content')

        <div class="col-md-8 col-md-offset-4" style="margin-top: 100px;">
           
                <div class="card">
                      
                                <div class="card-header">
                                        <h5 class="card-title">{{$in->report_id}}<div class="form-group" ></h5>
                                        
                                        
                                        
                                </div>
                                <div class="card-body">
                                   
                                    <div>
                                        <label for="rider_id">Rider ID</label>
                                        <div> {{ $in->rider_id }}</div>
                                </div>
                                <div>
                                        <label for="id">Customer ID</label>
                                        <div> {{ $in->customer_id }}</div>
                                </div>
                                <div>
                                        <label for="id">Report</label>
                                        <div> {{ $in->report }}</div>
                                </div>
                        
                                            
                                        
                                    
                                </div>
                             
                                <div class="card-footer">
                                        <div style="float:right">
                                            
                                                
                                                <button type="button" class="btn btn-default" style="background-color:yellow;font-weight:bold" >Read</button>
                                                <button type="button" class="btn btn-default" style="background-color:red;font-weight:bold" >Warn Rider</button>
                                                <button type="button" class="btn btn-default" style="background-color:white;font-weight:bold" >Delete Rider Account</button>
                                               
                                     
                                        </div>
                                
            
                                </div>
                               
                        
            </div>
            </div>




@endsection