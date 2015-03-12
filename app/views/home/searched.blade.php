@extends('layout.default')
@section('content')

  
<!--OBJECTS-->
<section id='news-feed-object'>
    <div class="container">
        <div class="row col-lg-9">
            <h4>ძიების შედეგი: {{count($get_search)}}</h4>
             {{Form::open(array('url'=>'search'))}}
            <a href="#" onclick="$(this).closest('form').submit()"><h5>ყველა დაწესებულება</h5></a>
            {{Form::close()}}
            <div class="row">
             @foreach($get_search as $single)
                <!--SINGLE-->
                <div class="col-sm-3 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <a href="single/{{$single->id}}" class="btn-default-view">სრულად</a>
                        </div>
                        <img src="images/image.png" class="img-responsive">
                        <h1>{{$single->name}}</h1>
                        <h2>{{$single->type}}</h2>
                    </div>
                </div>
                <!--/SINGLE-->
                @endforeach 


            </div>

            <ul class="pagination">
                <li>{{$get_search->links()}}</li>
            </ul>

        </div><!--ROW/col/9(END)-->

        <div class="row col-md-3">
            <img src="images/advert2.png" class="img-responsive advertismant col-lg-12">
            <img src="images/advert2.png" class="img-responsive advertismant col-lg-12">
        </div>

    </div>
</section>
<!--/OBJECTS-->
   




    @stop