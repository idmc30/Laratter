@extends('layouts.app')

@section('content')
<h1>{{$user->name}}</h1>
<form action="/{{$user->username}}/follow" method="POST">
	{{csrf_field()}}
	@if(session('success'))
	<span class="text-success">{{session('success')}}</span>
	@endif

	<button  class="btn btn-primary">Follow</button>
</form>
<div class="row">
   @foreach($user->messages as $message)
	<div class="col-6">
	     @include('message.message')	
	</div>
 
  @endforeach	

</div>


@endsection