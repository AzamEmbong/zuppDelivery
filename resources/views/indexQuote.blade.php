@extends('layouts.app')
@section('content')
<div style="background-color:#ce9201 !important" class="jumbotron">
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
                                 
                                 <p>You need to <a href="{{ route('login') }}" class="tooltip-test" title="Tooltip">Log In</a> or <a href="{{ url('/register') }}" >Register</a> to proceed</p>
                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                      </div>
                                    </div>
                                  </div>
                                </div>


                <div class="form-group" style="float:right">
        
         
                                <button class="btn btn-submit" data-toggle="modal" data-target="#login">Proceed</button>
                                
                        
                            
                </div>
        </div>
        
        </div>
        


@endsection