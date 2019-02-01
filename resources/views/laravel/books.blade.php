


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
<?php   
                       $n=1;
                        ?>
   
            @foreach($allbooks as $book)
            
              <div class="row">
    			       <div class="column">
    			           <div class="card" style="height: 400px;width: 280px">
                        <div class="card-body">
                          <img class="card-img-top" src="{{url('uploads/'.$book->filename)}}" alt="{{$book->filename}}" style="height: 200px;width: 200px">
                          <h4 class="card-title">Book No: {{ $book->id}}</h4>
                          <p class="card-text">
                          <strong>{{ $book->Title}}</strong> <br>by <i>{{ $book->Author}}</i>
                          </p>
                       
    
                    <?php 

                    
    $bookss=\App\book::find($n);
       
    $bookss->tags()->sync($n); 

    ?>
    @foreach($bookss->tags as $tag[$n])

          <a href="http://my-project.local/laravel/books" class="badge badge-primary">{{$tag[$n]->name}}</a> 
          
    @endforeach

              <?php $n++;

              ?>
              <br>
            

                           <a href="http://my-project.local/laravel/borrow" class="btn btn-primary">Borrow</a>
                        <a href="{{ url('/laravel/edit', $book->id) }}" class="btn btn-default">Edit</a>
                                      <form action="{{ url('/laravel/destroy', $book->id) }}" method="POST"
                                              style="display: inline"
                                              onsubmit="return confirm('Are you sure?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                         </div>
                      </div>
                </div>
              </div>
            
          
	
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
                
                
 
 


@endforeach

@endsection
