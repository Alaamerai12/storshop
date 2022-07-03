@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <h2>Edit new product</h2>
  
    @if($errors->count())
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </ul>

      </div>
    @endif
<form action="{{url('/products/'.$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row form-group">
        <label class="col-2 col-form-label">name</label>
        <div class="col-10">
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
        </div>

    </div>
    <div class="row form-group">
        <label class="col-2 col-form-label">price</label>
        <div class="col-10">
        <input type="number" name="price" class="form-control"  value="{{$product->price}}">
        </div>

    </div>
    <div class="row form-group">
        <label class="col-2 col-form-label">description</label>
        <div class="col-10">
        <textarea name="description"  class="form-control">{{$product->description}}</textarea>
        </div>

    </div>
    <div class="row form-group">
        <label for="" class="col-2 col-form-label">category</label>
    <div class="col-10">
   <select name="category" id="" class="form-control">
@foreach ($categories as $category)
  <option {{$category->id == $product->category->id ?'selected': ''}} value="{{$category->id}}">
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
        @if($product->image)
        <img src="{{asset('storage/'.$product->image)}}"  alt="" width="80px">
        @endif
   
    </div>
</div>
    <input type="submit" value="edit" class="btn btn-primary">
</form>
</div> -->


<section >

        
    <div class="about" >
    <div class="container-images">
            <img src="{{asset('image/create.png')}}" alt="">
        </div>
     <div  class="card-body">
     <h2>Edit new product</h2>
     @if($errors->count())
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{url('/products/'.$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row form-group">
        <label class="col-2 col-form-label">name</label>
        <div class="col-10">
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
        </div>

    </div>
    <div class="row form-group">
        <label class="col-2 col-form-label">price</label>
        <div class="col-10">
        <input type="number" name="price" class="form-control"  value="{{$product->price}}">
        </div>

    </div>
    <div class="row form-group">
        <label class="col-2 col-form-label">description</label>
        <div class="col-10">
        <textarea name="description"  class="form-control">{{$product->description}}</textarea>
        </div>

    </div>
    <div class="row form-group">
        <label for="" class="col-2 col-form-label">category</label>
    <div class="col-10">
   <select name="category" id="" class="form-control">
@foreach ($categories as $category)
  <option {{$category->id == $product->category->id ?'selected': ''}} value="{{$category->id}}">
  {{$category->name}}
  </option>
    @endforeach
  
</div>
</select>
   </div>
    </div>
   
<div class="row form-group">
    <label for="" class="col-2 col-form-label">Image</label>
  
       <p> <input type="file" name="image" class="form-control"><p>
        @if($product->image)
        <img src="{{asset('storage/'.$product->image)}}"  alt="" width="80px">
        @endif

</div>
   
    <button type="submit" value="edit" class="btn btn-primary">
                                    {{ __('edit') }}
                                </button>
</form>
</div> 
</section>

@endsection