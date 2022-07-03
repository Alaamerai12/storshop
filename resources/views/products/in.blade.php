@extends('layouts.app')

@section('content')
<!-- <div class="container ">

    
    <div class="row">
   
    
    <div class="col-xl-3 col-lg-6 mt-4">
        <div class="card mb-4">
        
          <img src="storage/{{$product->image}}" alt=""style="width:40px,height:30px" class="card-img-top">

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
   

    
    </div>

  </div> -->


  <section class="index-pr2">
<div class="box">

    <div class="col-xl-3 col-lg-6 mt-4" >
   
        <div class="card  mb-4" >
        
          <img src="{{asset('storage/'.$product->image)}}"  alt="" class="card-img-top" >

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
     
    
        <img src="{{asset('storage/'.$product->image)}}"  alt="" class="card-img-vew" >
        
  



    
    </div>

  </div>
  
</div>

</section>




@endsection