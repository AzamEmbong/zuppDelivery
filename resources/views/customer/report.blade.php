@extends('layouts.app')


@section('content')

 
<div class="col-md-6 offset-3">
    <div class="card" >
        <div class="card-header" style="background-color:#ce9201 !important;font-weight:bold;font-size: 18px;">Report/Feedback</div>
        @foreach($user as $n)
        <div class="card-body">
        <form action="{{url('/sendReport')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
           
          <label for="name">Name</label>
          <p>{{$n->name}}</p>
        
          </div>
          <div class="form-group">
            <label for="report">Report or Feedback</label><br>
            <textarea class="form-control" rows="5" id="report" name='report'></textarea>
          </div>
        </div>
    
        <div class="card-footer" >
        <div style="float:right">
            <button type="submit" class="btn btn-default" data-dismiss="modal">Submit</button>
        </div>
        </div>
        @endforeach
      </form>
        </div>
    
</div>




@endsection