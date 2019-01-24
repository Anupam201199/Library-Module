@extends('layouts.app')

@section('content')
<div class="container">
        <div class="d-flex justify-content-between mb-3 flex-column flex-md-row">
          <h3 class="font-weight-light mb-0">Enter The Book

          </h3>
      </div>
      <form  method="POST" action="{{url('/laravel/books')}}"  enctype="multipart/form-data">
        {{csrf_field() }}

        <div class="card">
          <div class="card-body">
            Title<sup><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></sup>
            <input class="form-control" type="text" name="Title" placeholder="Enter a title for your question" id="Tit">
            <div class="form-group">
            <label for="exampleFormControlTextarea1" >Author<sup><i class="fa fa-asterisk text-danger" aria-hidden="true"></i></sup></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enter author of the book" rows="5" name="Author"></textarea>
            </div>
            <br>
            
    
     <label for="author">Cover:</label>
      <input type="file" class="form-control" name="bookcover">
            </div>
      </div>
      <input type="submit" name="submit" value="Enter the book">
      </form>
      
      
@endsection