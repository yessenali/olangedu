<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" ></script></head>
</head>
<body>

<header class="header"> 
        <div class="header_top">
            <div class="container">
                <div class="header_contacts">
                <a class="header_email" data-fancybox data-src="#modal" href="javascript:;" href="#">olangeducation@gmail.com</a>
                <a class="header_btn" href="#">Тегін консультация</a>
            </div>
         </div>
        </div>
        <div class="header_content">
            <div class="container">
                <div class="header_content-inner">
            <div class="header_logo">
                <a href="#">
                    <img src="img/logo.png" alt="logotype" width="145px" height="40px">
                </a>
            </div>   
            <nav class="menu">
                <ul>
                    <li><a href="index.blade.php">Негізгі бет</a></li>
                    <li><a class="aboutus" href="#">Біз жайлы</a></li>
                    <li><a href="courses.blade.php">Курстар</a></li>
                    <li><a href="private.blade.php">Жеке кабинет</a></li>
                    <li><nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           @switch($locale)
    								@case('en')
    								<img width="20" src="{{asset('img/eng.png')}}">
    								English
    								@break
    								@case('kz')
    								<img width="20" src="{{asset('img/kz.png')}}">
    								Kazakh
    								@break
                                    @default
                                    <img width="20" src="{{asset('img/kz.png')}}">
    								Kazakh

    						@endswitch
                            
    								<span class="caret"></span>
                        </a>
                        <div id="switch" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('img/en.png')}}"> English</a> <br>
                            <a class="dropdown-item" href="kz"><img width="20" src="{{asset('img/kz.png')}}"> Kazakh</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        </li>
                </ul>
            </nav>
        </div>
     </div>
    </div>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>