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
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
@extends('layout')
@section('content')
    
    <section class="slider">
        <div class="container">
            <div class="slider_inner">
                <div class="slider_item">
                    <div class="slider_item-content">
                    <div class="slider_title">
                        {{__("Olang онлайн курс платформасы")}}
                    </div>
                    <div class="slider_text">
                        
                    </div>
                    <a href="#consult" class="slider_btn default_btn">
                        {{__("Курсқа жазылу")}}
                    </a>
                    
                    </div>
            </div>

            <div class="slider_item">
                <div class="slider_item-content">
                <div class="slider_title">
                    {{__("Let's study together")}}
                </div>
                <div class="slider_text">
                   
                </div>
                <a href="#consult" class="slider_btn default_btn">
                    {{__("Get started")}}
                </a>
                
                </div>
        </div>

        <div class="slider_item">
            <div class="slider_item-content">
            <div class="slider_title">
                {{__("Онлайн образовательная платформа Оланг")}}
            </div>
            <div class="slider_text">
              
            </div>
            <a href="#consult" class="slider_btn default_btn">
            {{__("Записаться")}}
            </a>
            
            </div>
    </div>
        </div>
    </section>

    <!--Services-->
    <section class="services">
        <div class="container">
       <div class="services_items">
           <div class="services_item">
               <img src="img/icon-1.png" alt="" width="60px" height="60px">
               <div class="services_item-title">
               {{__("ТІЛ КУРСТАРЫ")}}
               </div>
               <div class="services_item-text">
                   {{__("Ағылшын, түрік, араб, орыс тілдерінде курстар")}}
               </div>

           </div>

           <div class="services_item">
            <img  src="img/icon-2.png"  alt="" width="60px" height="60px">
            <div class="services_item-title">
            {{__("ВИДЕО ПЛАТФОРМА")}}
            </div>
            <div class="services_item-text">
                {{__("Арнайы жазылған видео дәрістерді көру үшін жеке кабинетіңіз болады")}}
            </div>
            
        </div>

        <div class="services_item">
            <img src="img/icon-4.png" alt="" width="60px" height="60px">
            <div class="services_item-title">
                {{__("24/7")}}
            </div>
            <div class="services_item-text">
               {{__("Дәрістер күніне 24 сағат бойы ашық тұрады")}}
            </div>
            
        </div>
          </div>
       </div>
    </section>
    
    <!--About us-->
    <section class="about" id="aboutus">
        <div class="container">
            <div class="about_inner">
            <div class="about_title">
                {{__("Біз жайлы")}}
            </div>

            <div class="about_text">
                {{__("Оланг платформасы оқушылардың және студенттердің тілдік деңгейін көтеруге
                өз септігін тигізуде. Қазіргі таңда, ұстаздар тізбегін Қазақстанның 
                беделді ЖОО-н бітірген студенттер құрайды.
                Ұстаздарымыздың басым көпшілігі шетелде тәлім алған.")}}"
            </div>

            <a href="#" class="slider_btn default_btn">
                {{__("Толығырақ білу")}}
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
                  {{__("Курсқа жазылу жөніндегі хабарламаны жүктеңіз, немесе
                  Кез келген сұрағыңызды қойсаңыз болады.
                        7-8 сағаттың ішінде жауап қайтарылады")}}
                </div>
              </div>
              <div class="form__box">
                <form method="get">
                    <input id="indicator" type="hidden" name="state">
                  <div class="form__box-inner">
                    <div class="form__box-left">
                      <label>
                        E-mail
                        <input type="text" name="email">
                      </label>
                      <label>
                       {{__("Телефон номер")}}
                        <input type="text" name="phone_num">
                      </label>
                      <label>
                        {{__("Аты-жөні")}}
                        <input type="text" name="username">
                      </label>
                      <label>
                        {{__("Тақырыбы")}}
                        <select name="topic_of_msg">
                          <option>_________</option>
                          <option>{{__("Курсқа жазылу")}}</option>
                          <option>{{__("Жеңілдіктер")}}</option>
                          <option>{{__("Ұстаздар")}}</option>
                          <option>{{__("Тапсырмалар")}}</option>
                         <!--Мен Ағылшын тілі A1- топ курсына жазыламын-->
                        </select>
                      </label>
                    </div>
                    <div class="form__box-right">
                      <label>
                      {{__("Мәтін")}}
                        <textarea name="message"></textarea>
                      </label>
                      <button onclick="add()" class="about_btn default_btn" type="submit">{{__("Жүктеу")}}</button>
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
                    <a class="header_btn" href="#">{{__("Тегін консультация")}}</a>
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
        <form>
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Платформа жайында пікіріңіз">
        <input type="submit" value="Отправить">
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