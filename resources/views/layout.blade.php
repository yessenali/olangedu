<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olang language courses</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,500&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,600" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .header_btn::before{
            content: "\f0b1";
        }
    </style>
</head>
<body>

<header class="header"> 
        <div class="header_top">
            <div class="container">
                <div class="header_contacts">
                <a class="header_email" data-fancybox data-src="#modal" href="javascript:;" href="#">olangeducation@gmail.com</a>
                <a class="header_btn" href="#">{{__("Жұмысқа орналасу")}}</a>
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
                    <li><a href="index.blade.php">{{__("Негізгі бет")}}</a></li>
                    <li><a class="aboutus" href="#">{{__("Біз жайлы")}}</a></li>
                    <li><a href="courses.blade.php">{{__("Курстар")}}</a></li>
                    <li><a href="private.blade.php">{{__("Жеке кабинет")}}</a></li>
                    <li><div class="li_nav">
                        <nav>
            <div id="navbarToggler">
                <ul >
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           @switch($locale)
    								@case('en')
    								<img width="20" src="{{asset('img/eng.jpg')}}">
    								English
    								@break
    								@case('kz')
    								<img width="20" src="{{asset('img/kz.png')}}">
    								Қазақ
    								@break
                                    @default
                                    <img width="20" src="{{asset('img/kz.png')}}">
    								Қазақ 

    						@endswitch
                            
    								<span class="caret"></span>
                        </a>
                        <div style="min-width: 111px !important;" id="switch" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img width="20" src="{{asset('img/en.jpg')}}"> English</a> <br>
                            <a class="dropdown-item" href="kz"><img width="20" src="{{asset('img/kz.png')}}"> Қазақ</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
</div>

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