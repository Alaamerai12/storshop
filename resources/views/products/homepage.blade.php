@extends('layouts.app')

@section('content')
    <section class="about">
        <div class="container-images">
            <img src="image/about.png" alt="">
        </div>
        <div class="container-text">
            <h1>About <span>Me</span></h1>
            <h5><span>Selling</span>Clothes</h5>
            <p>we offer you the most beautiful clothes and the latest fashion</p>
        </div>

    </section>
  
    <section class="services">
        <h1 class="text-center">Our<span>services</span></h1>
        <div class="box">
        <div class="card">
        <i class="fa-solid fa-money-check-dollar"></i>
            <h5>payment methods</h5>
            <p>pay on receipt or pay by paypal</p>
        </div>
        <div class="card">
        <i class="fa-solid fa-truck-fast"></i>
            <h5>shipping time</h5>
            <p>shipping time within one to four days</p>
        </div>
        <div class="card">
        <i class="fa-solid fa-person-walking-arrow-loop-left"></i>
            <h5>return and exchange</h5>
            <p>free returns and exchanges within three days of receipt</p>
        </div>
        <div class="card">
        <i class="fa-solid fa-coins"></i>
            <h5>free delivery of orders</h5>
            <p>free delivery for orders over 200 riyals</p>
        </div>
        </div>
    </section>
  
    <section class="skills">
    <div class="container-skills">
            <h1><span>shopping</span></h1>
           <div class="content-skills">
            <div class="skil">
                <img src="image/cloth-wom1.png" alt="">
                <img src="image/mancloth.png" alt="">
                <img src="image/childcloth.png" alt="">
                <img src="image/hom2.png" alt="">
               
            </div>
           </div>
        </div>

        <div class="container-images">
            <img src="image/online.png" alt="">
        </div>
      
    </section>
 
@endsection