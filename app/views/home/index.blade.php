@extends('layout.default')


@section('content')
   

    <div class="container">
        <img src="images/advert.png" class="img-responsive advertismant1">
        <img src="images/advert.png" class="img-responsive advertismant2">
    </div>

    <!--OBJECTS-->
    <section id='news-feed-object'>
        <div class="container">
            <h4>პოპულარული ადგილები</h4>
             {{Form::open(array('url'=>'search'))}}
            <a href="#" onclick="$(this).closest('form').submit()"><h5>ყველა დაწესებულება</h5></a>
            {{Form::close()}}
            <div class="row">
                <!--SINGLE-->
                @foreach($vips as $vip)
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <a href="single/{{$vip->id}}" class="btn-default-view">სრულად</a>
                        </div>
                        <img src="images/image.png" class="img-responsive">
                        <h1>{{$vip->name}}</h1>
                        <h2>{{$vip->type}}</h2>
                    </div>
                </div>
                <!--/SINGLE-->

                @endforeach

            </div>
        </div>
    </section>
    <!--/OBJECTS-->


@stop