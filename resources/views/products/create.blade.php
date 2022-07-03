@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <h2>Add new product</h2>
  
    @if($errors->count())
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </ul>

      </div>
    @endif
<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row form-group">
        <label class="col-2 col-form-label">name</label>
        <div class="col-10">
        <input type="text" name="name" class="form-control">
        </div>

    </div>
    <div class="row form-group">
        <label class="col-2 col-form-label">price</label>
        <div class="col-10">
        <input type="number" name="price" class="form-control">
        </div>

    </div>
    <div class="row form-group">
        <label class="col-2 col-form-label">description</label>
        <div class="col-10">
        <textarea name="description"  class="form-control"></textarea>
        </div>

    </div>
    <div class="row form-group">
        <label for="" class="col-2 col-form-label">category</label>
    <div class="col-10">
    <select name="category" id="" class="form-control">
@foreach ($categories as $category)
  <option value="{{$category->id}}">
  {{$category->name}}
  </option>
    @endforeach
  
</div>
</select>
   </div>
    </div>
   
<div class="row form-group">
    <label for="" class="col-2 col-form-label">Image</label>
    <div class="col-10">
        <input type="file" name="image" class="form-control">
    </div>
</div>
    <input type="submit" value="Add" class="btn btn-primary">
</form>
</div> -->

<section >

        
    <div class="about" >
    <div class="container-images">
            <img src="{{asset('image/create.png')}}" alt="">
        </div>
     <div  class="card-body">
     <h3>Add new product </h3>
     @if($errors->count())
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                       <div> <label  class="col-md-4 col-form-label text-md-end"></br>Name</label>
                      <p> <input type="text" name="name" class="form-control"></div></p>
                      
                   <div>   <label class="col-2 col-form-label">price</label>
      <p>  <input type="number" name="price" class="form-control"></div></p>
       <div> <label class="col-2 col-form-label">description</label>
    
       <p> <textarea name="description"  class="form-control"></textarea>    </div></p>  
      <div> <label for="" class="col-2 col-form-label">category</label>   
     <p> <select name="category" id="" class="form-control">
@foreach ($categories as $category)
  <option value="{{$category->id}}">
  {{$category->name}}
  </option>
    @endforeach
  

</select></div></p>
<div><label for="" class="col-2 col-form-label">Image</label>
  
<p><input type="file" name="image" class="form-control"></div></p>
     <div> 
     <button type="submit" class="btn btn-primary">
                                    {{ __('add') }}
                                </button>
   
    
    </div>

 
                             
</form>
</div>




    </div>
</section>

@endsection