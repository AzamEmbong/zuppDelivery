@extends('layouts.app')


@section('content')

 
<div class="jumbotron" style="background-color:#668796">
        <h5 class="display-4">Report Submission</h5>
        <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Date</label>
                  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Rider</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Enter Your Report</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
            
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
              </form>
      </div>



@endsection