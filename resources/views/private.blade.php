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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
@extends('layout')
@section('content')

    <form class="reg_private" >
        <h1 class="h1_reg" title="Тіркелу формасы">{{__("Тіркелу")}}</h1>
        <div class="group">
            <label class="label_reg" for="">{{__("Қолданушының аты")}}</label>
            <input class="input_reg" type="text">
        </div>
        <div class="group">
            <label class="label_reg" for="">{{__("Құпия сөз")}}</label>
            <input class="input_reg" type="password">
        </div>
        <div class="group">
            <label class="label_reg" for="">{{__("Қайта енгізіңіз")}}</label>
            <input class="input_reg" type="password">
        </div>
        <div class="group">
            <label class="label_reg" for="">Email</label>
            <input class="input_reg" type="email">
        </div>
        <div class="group">
            <center><button class="registration">{{__("Тіркелу")}}</button></center>
        </div>
    
    </form> <br><br>

  <!--About us-->
  <section class="about" id="aboutus">
        <div class="container">
            <div class="about_inner">
            <div class="about_title">
                {{ __("Біз жайлы")}}
            </div>

            <div class="about_text">
                {{ __("Оланг платформасы оқушылардың және студенттердің тілдік деңгейін көтеруге өз септігін тигізуде. Қазіргі таңда, ұстаздар тізбегін Қазақстанның беделді ЖОО-н бітірген студенттер құрайды. Ұстаздарымыздың басым көпшілігі шетелде тәлім алған")}}
            </div>

            <a href="#" class="slider_btn default_btn">
                {{ __("Толығырақ білу")}}
            </a>
        </div>
        </div>
    </section>

    <!--Free Consultation-->
    <section class="form" id="consult">
        <div class="container">
          <div class="form__inner">
            <div class="form__content">
              <div class="form__title-box">
                <div class="form__title">
                  {{__("Консультация алу")}}
                </div>
                <div class="form__text">
                  {{__("Курсқа жазылу жөніндегі хабарламаны жүктеңіз, немесе Кез келген сұрағыңызды қойсаңыз болады. 7-8 сағаттың ішінде жауап қайтарылады")}}
                </div>
              </div>
              <div class="form__box">
                <form method="post" action="http://localhost/olangedu/public/" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <!-- <input id="indicator" type="hidden" name="state"> -->
                  <div class="form__box-inner">
                    <div class="form__box-left">
                      <label>
                        E-mail
                        <input type="text" class="form-control" name="email">
                      </label>
                      <label>
                       {{__("Телефон номер")}}
                        <input type="text" class="form-control" name="phone_num">
                      </label>
                      <label>
                        {{__("Аты-жөні")}}
                        <input type="text" class="form-control" name="name">
                      </label>
                      <label>
                        {{__("Резюме")}}
                        <input type="file" class="form-control" name="photos[]"/>
                        <br/><br/>
                         <!--Мен Ағылшын тілі A1- топ курсына жазыламын-->
                      </label>
                    </div>
                    <div class="form__box-right">
                      <label>
                      {{__("Мәтін")}}
                        <textarea class="form-control" name="message"></textarea>
                      </label>
                      <input style="width: 100px; float:right; border-radius:20px; background-color:#ffc836;color:#fff;margin-top:2px" type="submit" value="Жүктеу"/>
                    </div>
                  </div>
                </form>
                <script>
                    // Solution adding user
                     function add(){
                         document.getElementById("indicator").value="add";
                     }
                 </script>

              </div>
            </div>
          </div>
        </div>
      </section>


    <!--Footer-->
    <footer class="footer">
        <div class="footer_content">
            <div class="container">
                <div class="footer_inner">
                <div class="footer_info">
                    <div class="footer_title">
                        {{__("Olang онлайн курс платформасы")}}
                    </div>
                    <div class="footer_text">
                        {{__("Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sapiente harum voluptates error, deserunt pariatur omnis quis quas ad tempora ex,
                        molestias.")}}
                    </div><br>
                    <a class="header_btn" href="#">{{__("Жұмысқа орналасу")}}</a>
                    <ul class="footer_list">
                        <br>
                        <li><a class="footer_email" href="#" data-fancybox data-src="#modal" href="javascript:;">olangeducation@gmail.com</a></li>
                        <li><a class="footer_adress" href="#">{{__("Жетісай а, Асанов 13 үй")}}</a></li>
                    </ul>
                </div>
                <div class="footer_map">
                    <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.kz/maps/29617/zheltysuy/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Жетысай</a>
                    <a href="https://yandex.kz/maps/geo/53168222/?from=tabbar&ll=68.323301%2C40.776075&source=serp_navig&utm_medium=mapframe&utm_source=maps&z=13" style="color:#eee;font-size:12px;position:absolute;top:14px;">Жетысай — Яндекс.Карты</a>
                    <iframe width="630px" height="250px" src="https://yandex.kz/map-widget/v1/-/CCUUn-bROD"  frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                </div>
                </div>
            </div>
        </div>
        <div class="footer_copy">
            <div class="container">
                <div class="footer_text">
                    © 2021 Created by Yessenali Zhanaidar.
                </div>
            </div>
        </div>
    </footer>

    <div id="modal">
        <form method="get" action="{{ url('mail/send') }}">
        <input type="text" placeholder="Email">
        <input class="form" type="text" placeholder="Платформа жайында пікіріңіз">
        <input type="submit" value="Отправить" class="btn btn-success">
        </form>

    </div>

   

      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>

    <!--for about us-->
    <script>
        function scrollTo(element){
            window.scroll({
                left: 0,
                top: element.offsetTop,
                behavior: "smooth"
            })
        }

        var a = document.querySelector('.aboutus');
        var b = document.querySelector('#aboutus');
        a.addEventListener('click', () =>{
            scrollTo(b);
        })
    </script>

    <!--for Consultation block-->
    <script>
        function scrollTo(element){
            window.scroll({
                left: 0,
                top: element.offsetTop,
                behavior: "smooth"
            })
        }

        var consult1 = document.querySelector('.header_btn');
        var consult2 = document.querySelector('#consult');
        consult1.addEventListener('click', () =>{
            scrollTo(consult2);
        })
    </script>

     <!--for Registr to cousrses-->
     <script>
        function scrollTo(element){
            window.scroll({
                left: 0,
                top: element.offsetTop,
                behavior: "smooth"
            })
        }

        var regist1 = document.querySelector('.slider_btn default_btn');
        var regist2 = document.querySelector('#consult');
        regist1.addEventListener('click', () =>{
            scrollTo(regist2);
        })
    </script>


@endsection
</body>
</html>