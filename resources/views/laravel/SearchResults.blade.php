@extends('layouts.app')

@section('content')
<div class="container">
  @if(isset($details))
  
  @foreach($details as $user)
            <div class="col-md-6 offset-md-3 book-desc">
              <div class="card">
                 <div class="card-body">
                   <p class="card-text">
                Book <strong>{{ $user->Title}}</strong> is written by <strong>{{ $user->Author}}</strong>
            </p>
            
       </div>
    </div>
</div></div>

@endforeach
@endif
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@endsection
