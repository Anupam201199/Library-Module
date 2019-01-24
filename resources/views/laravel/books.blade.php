


@extends('layouts.app')

@section('content')
<div class="container">
    		
<form action="{{url('/laravel/search')}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search Books"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
              <i class="fa fa-search"></i>
                          
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form><br>
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
 
            @foreach($allbooks as $book)
            
              <div class="row">
    			       <div class="column">
    			           <div class="card" style="height: 370px;width: 250px">
                        <div class="card-body">
                          <img class="card-img-top" src="{{url('uploads/'.$book->filename)}}" alt="{{$book->filename}}" style="height: 200px;width: 200px">
                          <h4 class="card-title">Book No: {{ $book->ID}}</h4>
                          <p class="card-text">
                          <strong>{{ $book->Title}}</strong> <br>by <i>{{ $book->Author}}</i>
                          </p>
                          <a href="#" class="btn btn-primary">Borrow</a>
                        </div>
                      </div>
                </div>
              </div>
          
	

  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endforeach 
@endsection
