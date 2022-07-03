@extends('layouts.app')

@section('content')

<!-- 
<div class="container ">
  <div class="row">
  @if(session('status'))
 <div class="alert alert-info">
  {{session('status')}}
 </div>
@endif 
  <div class="col-xl-3 col-lg-6 mt-4" >
    <form action="{{route('search')}}"  method="POST">
    @csrf
      <input type="text" name="q" id="q" class="form-control"  placeholder="search name">
      <button type="submit" class="btn btn-primary mt-2">search</button>
    </form>
</div>

  </div>
 
  
      @auth
      <a href='/products/create' class="btn btn-primary" >Add new product</a>@endauth
    <div class="row">
    @if(session('status'))
      <div class="alert alert-info">
        {{session('status')}}
      </div>
      @endif
      <div class="col-xl-2 col-lg-4 mt-4" >
    <h2>category</h2>
    <ul class="list-group">
      @foreach($categories as $category)
      <li class="List_group-item bg-secondary text-white">
       <a href="{{'/products?category_id=' . $category->id}}">{{$category->name}}</a>
      </li>
    @endforeach
    </ul>

</div>

@if($products->count())
    @foreach($products as $product)
    
    <div class="col-xl-3 col-lg-6 mt-4" >
   
        <div class="card mb-4" >
        
          <img src="storage/{{$product->image}}" alt="" class="card-img-top" >

          <div class="card-body">
            <h3 class="card-title">{{$product->name}}</h3>
            <p class="card-text text-muted">{{$product->description}}</p>
            <h2>
              <span class="card-text badge badge-success badge-lg">{{$product->price}}</span>
            </h2>
           
            <em> Category: <strong>{{$product->category->name}}</strong></em>
          </div>
       
         
          <div class="card-footer text-warning">&#9733; &#9733; &#9733; &#9733; &#9734; </div>
        <div class="card-footer">
          <a href='/products/{{"$product->id"}}' class="btn btn-info">view</a>
          <a href='/products/{{"$product->id"}}/edit' class="btn btn-warning">edit</a>
          <form action="/products/{{$product->id}}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete"class="btn btn-danager">
</form>
      
</div>
        </div>
        </div>
    @endforeach
@else
<div class="alert alert-warning">hhhkjlkhkfujtdjtgjf</div>
@endif  

    
    </div>
    <div class="d-flex justify-content-center">
    
    </div>

  </div>

 -->

<section  class="index-sec">
<div class="">
  @if(session('status'))
 <div class="alert alert-info">
  {{session('status')}}
 </div>
@endif 
<div class="col-xl-3 col-lg-6 mt-4" >
    <form action="{{route('search')}}"  method="POST">
    @csrf
      <input type="text" name="q" id="q" class="form-control"  placeholder="search name">
      <button type="submit" class="btn btn-primary mt-2">search</button>
    </form>
</div>


@auth
</br>  <a href='/products/create' class="btn btn-primary" >Add new product</a>@endauth
@if(session('status'))
      <div class="alert alert-info">
        {{session('status')}}
      </div>
      @endif
    
    

</section>
<section class="index-pr">

<div class="box">
<div class="col-xl-2 col-lg-4 mt-4" >
</br> <h2>category</h2>
    <ul class="list-group">
      @foreach($categories as $category)
      <li class="List_group-item bg-secondary text-white">
       <a href="{{'/products?category_id=' . $category->id}}">{{$category->name}}</a>
      </li>
    @endforeach
    </ul>

</div>
@if($products->count())
    @foreach($products as $product)
       
    <div class="col-xl-3 col-lg-6 mt-4" >
   
        <div class="card  mb-4" >
        
          <img src="storage/{{$product->image}}" alt="" class="card-img-top" >

          <div class="card-body">
            <h3 class="card-title">{{$product->name}}</h3>
            <p class="card-text text-muted">{{$product->description}}</p>
            <h2>
              <span class="card-text badge badge-success badge-lg">{{$product->price}}</span>
            </h2>
           
            <em> Category: <strong>{{$product->category->name}}</strong></em>
          </div>
       
         
          <div class="card-footer text-warning">&#9733; &#9733; &#9733; &#9733; &#9734; </div>
        <div class="card-footer">
</br><p> <a href='/products/{{"$product->id"}}' class="btn btn-info">view</a></p>
</br>   <p>  <a href='/products/{{"$product->id"}}/edit' class="btn btn-warning">edit</a></p>
          <form action="/products/{{$product->id}}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
          
</br> <button type="submit" class="btn btn-primary" value="Delete">
                                  {{ __('Delete') }}
                                </button>
</form>
      
</div>
        </div>
        </div>
     


    @endforeach
    
@else
<div class="alert alert-warning">hhhkjlkhkfujtdjtgjf</div>
@endif  

    
    </div>
    <div class="d-flex justify-content-center">
    
    </div>

  </div>
</div>
</section>

<section class="index-num">
 {{$products->links('products/my-paginate')}}

</section>

@endsection


