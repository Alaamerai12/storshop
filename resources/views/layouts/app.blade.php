<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>ALAA</title>
 
    <link href="{{asset('Css/stylepage.css')}}" rel="stylesheet">
    <link rel="icon" href="{{asset('image/icon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <section class="home" id="home">
        <nav>
            <h2>Shopping<span>Stor</span></h2>
            <ul id="actions">
                <li><a href="/">Home</a></li>
                <li><a href="/products">Products</a></li>
                @guest
                <li><a href="{{ route('register') }}">Register</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                @else
                <li><a href="">  {{Auth::user()->name}}</a></li>
            
             
            </ul>
        <a href="{{ route('logout') }}" class="btn">Logout</a>
        @endguest
        <button id="menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        </nav>
        <div class="content">
            <div class="container-texts">
                <h4>Hello my world </h4>
                @guest
                <h1>Visitor <span>Dear</span></h1>
                @else
                <h1>{{Auth::user()->name}} <span>Dear</span></h1>
              
                @endguest
                <h3>Enjoy <span>shopping</span> for clothes</h3>
                <div class="social"><a href="" target="-blank"><img src="{{asset('image/tel.png')}}" alt=""></a>
                <a href="" target="-blank"><img src="{{asset('image/insta.png')}}" alt=""></a>
                <a href="" target="-blank"><img src="{{asset('image/fac.png')}}" alt=""></a>
                <a href="" target="-blank"><img src="{{asset('image/yout.png')}}" alt=""></a>
               </div>       
           
            </div>
            <div class="container-images">
                <img src="{{asset('image/tr.png')}}" alt="" class="shape">
                <img src="{{asset('image/shop1.png')}}" alt="" class="pic">
            </div>
        </div>
    </section>
    @yield('content')

    <footer>
        <div class="content-footer">
    
            <h2>Shopping <span>Stor</span></h2>
           
            <div class="social"><a href="" target="-blank"><img src="{{asset('image/tel.png')}}" alt=""></a>
                <a href="" target="-blank"><img src="{{asset('image/insta.png')}}" alt=""></a>
                <a href="" target="-blank"><img src="{{asset('image/fac.png')}}" alt=""></a>
                <a href="" target="-blank"><img src="{{asset('image/yout.png')}}" alt=""></a>
               </div>       
            <!-- <p>gggggg jjjjj jjjjj jjjjj</p> -->
            <p class="end">Follow us on social media</p>
          
        </div>
    </footer>
    <script src="{{asset('js/js.js')}}"></script>
  
</body>
</html>