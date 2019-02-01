
@extends('layouts.app')

@section('content')

<div class="container">

  @if(isset($details))
  @foreach($allbooks as $book)
  
  @foreach($details as $user)
@if($user->id==$book->id)
  

    <div class="container">
  
            <div class="col-md-6 offset-md-3 book-desc">
              <div class="card">
                 <div class="card-body">
                  
                   <p class="card-text"><img class="card-img-top" src="{{url('uploads/'.$book->filename)}}" alt="{{$book->filename}}" style="height: 200px;width: 200px">
                          <h4 class="card-title">Book No: {{ $user->id}}</h4>
                          
                Book <strong>{{ $user->Title}}</strong> is written by <strong>{{ $user->Author}}</strong>
            </p>
            
       </div>
    </div>
</div></div></div>
@endif

@endforeach

@endforeach

                          
@endif
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@endsection
