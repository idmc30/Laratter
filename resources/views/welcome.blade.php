@extends('layouts.app')

@section('content')               
   <div class="jumbotron text-center">
    <h1>Laratter</h1>
     <nav >
         <ul class="nav nav-pills">
             <li class="nav-item">
                 <a class="nav-link" href="/">Home</a>
             </li>
             
         </ul>   
     </nav>
       
   </div>
   <div class="row">
     <form action="/messages/create" method="post">
       <div class="form-group @if($errors->has('message')) has-danger @endif">
           {{ csrf_field() }}
          <input qtype="text" name="message" class="form-control" placeholder="Qué estas pensando?">
              {{-- @if ($errors->any()) --}}
                @if ($errors->has('message'))

                      @foreach($errors->get('message') as $error )
                      <div class="form-control-feedback">{{ $error }}</div>
                      @endforeach

              @endif 

       </div>



     </form>
   </div>
   <div class="row">
       @forelse($messages as $message)
         <div class="col-6">
             @include('message.message')
         </div>
         @empty
         <p>No hay mensajes destacados</p>
       @endforelse
       {{-- forelse  se usa cuando un array puede estar vacio --}}

       @if(count($messages))
       <div class="mt-2 mx-auto">
            {{ $messages->links() }}
       </div>
       @endif
   </div>

@endsection