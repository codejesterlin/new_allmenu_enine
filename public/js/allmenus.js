/**OBJECTS_HOVER**/
$("[rel='tooltip']").tooltip();    

$('.thumbnail').hover(
    function(){
        $(this).find('.caption').slideDown(250); 
    },
    function(){
        $(this).find('.caption').slideUp(250); 
    }
); 

$('.selectpicker').selectpicker();
/**OBJECTS_HOVER(END)**/




/**OBJECT_PAGE_SLIDER**/
$(function(){
    var i=1;
 	 	  for(var b=1;b<=$(".fadeslider .slide").length;b++){
      $(".slidelist").append("<div></div>")
    }
    		$(".slidelist div:nth-child(1)").addClass("active");
    function slider(){
      var l = $(".fadeslider .slide").length;
      if(i==l){i=0;}
      $(".fadeslider .slide").fadeOut(500);
      $(".slidelist div").removeClass("active");
      i++;
      $(".fadeslider .slide:nth-child("+i+")").fadeIn(500);
      $(".slidelist div:nth-child("+i+")").addClass("active");
      if(i >= l){i = 0;}
    }
  
    function sliderback(){
      var l = $(".fadeslider .slide").length;
      if(i==0){i=l+1;}
      $(".fadeslider .slide").fadeOut(500);
      $(".slidelist div").removeClass("active");
      i--;
      if(i <= 0){i = l;}
      $(".fadeslider .slide:nth-child("+i+")").fadeIn(500);
      $(".slidelist div:nth-child("+i+")").addClass("active");
    }
  	
    $(".slidenext").click(function(){
      slider();
    });
    $(".slideback").click(function(){
      sliderback();
    });
    var timer = setInterval(slider, 5000);
    $('.slideback,.slidenext').hover(function(ev){
        clearInterval(timer);
    }, function(ev){
        timer = setInterval( slider, 5000);
    });
  
})   
/**OBJECT_PAGE_SLIDER(END)**/


