jQuery(".scroll").click(function(event){
         event.preventDefault();
         //calculate destination place
         var target = String(jQuery(this).attr("data-link"));
         var dest=0;
         if(jQuery(target).offset().top > jQuery(document).height()-jQuery(window).height()){
              dest=jQuery(document).height()-jQuery(window).height();
         }else{
              dest=jQuery(target).offset().top;
         }
         //go to destination
         jQuery('html,body').animate({scrollTop:dest}, 1000,'swing');
});

