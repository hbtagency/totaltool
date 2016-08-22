<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<!--
<title><?php //wp_title( '-', true, 'right' ); ?></title>
-->
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<script>
    jQuery(document).ready(function(){
        var counter = 1;
        jQuery("#belowslider-three-cols").children().each(function(){
            var el = jQuery(this);
            setTimeout(function () { el.css('opacity',"1"); }, counter*300); 
            counter++;         
        });
        
        var windowHeight = window.innerHeight;
        var scrollTop = jQuery(window).scrollTop();
        var currentTop = 0;
        jQuery(".home-bar-img ").each(function(){
            currentTop = jQuery(this).offset().top;
            if(currentTop < (windowHeight + scrollTop - 100)){
                if(!jQuery(this).hasClass("visible")){
                    //Fade in image if window bottom hit element top
                    jQuery(this).addClass("visible");
                }
            }else{
                if(jQuery(this).hasClass("visible")){
                    //Fade in image if window bottom hit element top
                    jQuery(this).removeClass("visible");
                }
            }
        });
        
    });
    
    jQuery(window).scroll(function(){
        var windowHeight = window.innerHeight;
        var scrollTop = jQuery(window).scrollTop();
        var currentTop = 0;
        jQuery(".home-bar-img ").each(function(){
            currentTop = jQuery(this).offset().top;
            if(currentTop < (windowHeight + scrollTop - 100)){
                if(!jQuery(this).hasClass("visible")){
                    //Fade in image if window bottom hit element top
                    jQuery(this).addClass("visible");
                }
            }else{
                if(jQuery(this).hasClass("visible")){
                    //Fade in image if window bottom hit element top
                    jQuery(this).removeClass("visible");
                }
            }
        });
    });
</script>
<script src="https://use.typekit.net/ekw8mad.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

</head>
<body <?php body_class(); ?>>
      <header class="container">
        <nav class="row top_nav">
            <div class="logo col-sm-7">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/img/logo.jpg" alt="Insider"/></a>
            </div>
            <div class="free_to_join col-sm-5 hidden-xs" >
                <H2>FREE TO JOIN!</H2>
            </div>
            <!--    
            <div><?php //wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?></div>
            -->
        </nav>
      </header>
