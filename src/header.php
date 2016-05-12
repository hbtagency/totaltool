<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php wp_title( '-', true, 'right' ); ?></title>
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
    });
</script>
  <script src="<?php echo get_site_url(); ?>/js/bootstrap.min.js"/>


</head>
<body <?php body_class(); ?>>
      <header class="container">
        <nav class="row top_nav">
            <div class="logo col-sm-7">
                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/img/logo.jpg" alt="Insider"/></a>
            </div>
            <div class="free_to_join col-sm-5 hidden-xs" >
                <a href="#"><H2>FREE TO JOIN!</H2></a>
            </div>
            <!--    
            <div><?php //wp_nav_menu( array( 'theme_location' => 'header', 'menu_id' => 'menu-header', 'menu_class' => 'menu-inline' ) ); ?></div>
            -->
        </nav>
      </header>
