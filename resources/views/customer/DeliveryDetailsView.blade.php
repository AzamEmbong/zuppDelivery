@extends('layouts.my')

@section('content')

 

<center>

<h1>Delivery Information </h1>

<table class="table" >
       

<tr><th>Id</th><th>Sender Name</th><th>Sender Address</th><th>Sender Email</th><th>Sender TelNo</th></tr>

 



 <tr>
     <td>{{ $deliveryDetails->delivery_id }}</td>
     <td>{{ $deliveryDetails->senderName }}</td>
     <td>{{ $deliveryDetails->senderAddress }}</td>
     <td>{{ $deliveryDetails->senderEmail }}</td>
     <td>{{ $deliveryDetails->senderNoTel }}</td>
     
 </tr>


<br>
 <tr><th>Receiver Name</th><th>Receiver Address</th><th>Receiver Email</th><th>Receiver TelNo</th></tr>

 

 
   
    <tr>
        
        <td>{{ $deliveryDetails->receiverName }}</td>
        <td>{{ $deliveryDetails->receiverAddress }}</td>
        <td>{{ $deliveryDetails->receiverEmail }}</td>
        <td>{{ $deliveryDetails->receiverNoTel }}</td>
    </tr>
   
    
    <br>
    <tr><th>Item</th><th>Size</th><th>Note</th></tr>

 
   
    
       
        <tr>
            
            <td>{{ $deliveryDetails->itemType }}</td>
            <td>{{ $deliveryDetails->itemSize }}</td>
            <td>{{ $deliveryDetails->itemNote }}</td>
        
        </tr>
       
    
        

</center>

@endsection