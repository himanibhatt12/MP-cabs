@component('mail::message')
# Ride Booked.

Dear {{$booking->customer->name}},

	Your Vehicle is booked for your journey. Below are the details for your journey.

@component('mail::table')
<table>
	<tr><td>Vehicle: </td><td>{{$booking->vehicle->maker->make}} {{$booking->vehicle->vehiclemodel->model}}</td></tr>
	<tr><td>Vehicle Licence Plate: </td><td>{{$booking->vehicle->license_plate}}</td></tr>
	<tr><td>Journey Date: </td><td>{{date('d-m-Y',strtotime($booking->pickup))}}</td></tr>
	<tr><td>Pickup Time: </td><td>{{date('g:i A',strtotime($booking->pickup))}}</td></tr>
	<tr><td>Pickup Address: </td><td>{{$booking->pickup_addr}}</td></tr>
	<tr><td>Destination Address: </td><td>{{$booking->dest_addr}}</td></tr>
	

</table>
@endcomponent

We Wish you a happy journey.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
