<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Allmenus.Ge </title>
        @yield('header')
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/allmenus.css" rel="stylesheet">

</head>

<body>
    <!--HEADER-->
    <section id="hedbg">
        <div class="container">
            <a href="http://allmenus.ge/"><h1 class="text-center"><img src="../images/logo.png" style="margin-top:10px;" alt="logo"></h1></a>
           <a href="add"  class="btn btn-default">ობიექტის დამატება</a>
        </div>
    </section>
    <!--/HEADER-->



    <!--OBJECT-FULL-->
    <div class="container page">
        <!--Object-title-->

        <blockquote>
            <p>
                {{$get_search->name}}
                <small>{{$get_search->type}}</small>
            </p>
        </blockquote>
        <!--Object-title(END)-->
        <!--ROW-->
        <div class="row object-page">
            <div class="col-md-5 col-xs-12">
                <div id="image-for-carousel">
                    <!--SLIDER-->
                    <div class="fadeslider">

                        <!--IMAGE-->
                        <div class="slide"><img src="images/image.jpg" alt="" /></div>
                        <!--IMAGE(END)-->
                        <!--IMAGE-->
                        <div class="slide"><img src="images/image.png" alt="" /></div>
                        <!--IMAGE(END)-->

                        <div class="slideback"></div>
                        <div class="slidenext"></div>

                    </div>
                    <!--SLIDER(END)-->
                </div>
            </div>
            <!--Carousel(END)-->
            <div class="col-md-7 col-xs-12">
                <h4>ინფორმაცია</h4>
                <div class="information-about-object">
                    <div class="addres-icon"></div> <p>{{$get_search->adress}}</p>
                </div>
                <div class="information-about-object">
                    <div class="phone-icon"></div> <p>{{$get_search->phone}}</p>
                </div>
                <h4>აღწერა</h4>
                <p>{{$get_search->info}}</p>
               
                <button type="button" class="btn-slide" data-toggle="collapse" data-target="#slide-down-bg">დამატებითი ინფორმაცია</button>
                  <div id="slide-down-bg" class="collapse">
                    * ბარათიდ გადახდა (კი ან არა)<br>
                    * Live ბენდი (კი ან არა)<br>
                    * სტორტის ტრანილაცია (კი ან არა)<br>
                    * ალკოჰოლის შეტანა (კი ან არა)<br>
                    * ბარათით გადახდა (კი ან არა)<br>
                    * პარკინგი (კი ან არა)<br>
                    * სამუშაო საათები ( აქ დროები ჩაიწერება)<br>
                    * არამწეველთა ადგილი (კი ან არა)<br>
                    * Wi-fi (კი ან არა)<br>
                    * ადგილთა საერთო რაოდენობა (აქ ჩაიწერება ინფორმაცია)
                  </div> 
                   
            </div>
        </div>
        <!--ROW(END)-->
    </div>
    <!--OBJECT-fULL(END)-->

        </div> 
    </div>

    <!--ROW(END)-->
       
    <div id="buttonbackground">
     @foreach($get_cat as $catt)
    <a href="menu/{{$get_search->id}}/0"><div id="openmenubutton"></div></a>
     @endforeach
    </div>
<br> 
</div>
<!--OBJECT-fULL(END)-->


<!--FOOTER-->
<section id="footer">
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h4>ჩვენს შესახებ</h4>
                <p>
                    Allmenus.ge ეს არის უნიკალური, მომხმარებლის კომფორტზე ორიენტირებული კატალოგის ტიპის საიტი, სადაც განთავსებულია თბილისში არსებული კვების ობიექტების შესახებ ინფორმაცია. საიტის ნებისმიერ ვიზიტორს შესაძლებლობა ეძლევა მისთვის სასურველი ინფორმაციის მიხედვით კვების ობიექტების გაფილტვრა და მათზე ამომწურავი ინფრომაციის მიღება. მაგრამ საიტის მთავარი უპირატესობა - მასში ინტეგრირებული მენიუა, რომლის მეშვეობითაც შესაძლეელია სასურველი კერძების მონიშვნა, რაოდენობის მითითება და შერჩეული მენიუს ფასის ავტომატური დაანგარიშება..
                </p>
                
                <a href="#"><div id='facebook'></div></a>
                <a href="#"><div id='twitter'></div></a>
                <a href="#"><div id='google'></div></a>
            </div>
            <!--contact-->
            <div class="col-sm-6 col-xs-12">
                <h4>დაგვიკავშირდით</h4>

                <div class="left-inner-addon">
                <i class="glyphicon glyphicon-user color-icon"></i>
                <input type="text" class="form-info" placeholder="თქვენი სახელი..." />
                </div>

                <div class="left-inner-addon">
                <i class="glyphicon glyphicon-envelope color-icon"></i>
                <input type="text" class="form-info" placeholder="ელ.ფოსტა" />
                </div>

                <textarea class="form-control" rows="3"></textarea>
                <input class="btn btn-primary" type="submit" value="გაგზავნა">
            </div>
            <!--contact(end)-->
            <Br>
            
        </div>
        <hr>
        <p class="leftside">&copy; ყველა უფლება დაცულია</p>
        <p class="rightside">საიტი დამზადებულია <a href='www.respo.ge'>RESPO</a> - ს მიერ</p>
    </div>
</section>
<!--/FOOTER-->

<!-- javascript -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="../js/bootstrap.js"></script>

<script src='../js/allmenus.js'></script>





</body>
</html>












