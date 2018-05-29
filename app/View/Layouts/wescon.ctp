<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
      <TITLE>Acu&ntilde;a  Inmobiliario</TITLE>
      <META NAME="Description" CONTENT="Inmobiliaria con proyectos en Venta de Casas y departamentos en Lima -Chincha - Chiclayo
         ">
      <meta property="og:url" content="http://www.wescon.pe/" />
      <meta property="og:type"               content="website" />
      <title></title>
      <!-- inicio favicon  iphone retina, ipad, iphone en orden-->
      <link rel="icon" type="image/png" href="theme/uploads/favicon/256.png"/>
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="theme/uploads/favicon/114.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="theme/uploads/favicon/72.png">
      <link rel="apple-touch-icon-precomposed" href="theme/uploads/favicon/57.png">
      <!-- end favicon -->
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/jquery.bxslider.css'; ?>">
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/slick/slick.css'; ?>">
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/slick/slick-theme.css';?>">
      <link rel="stylesheet" type="text/css" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/styles.css';?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/blocks_styl.css';?>"/>
      <link rel="stylesheet" href="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/css/validationEngine.jquery.css';?>" type="text/css"/>
      <!--[if lt IE 9]><script src="static/js/html5.js"></script><script src="static/js/respond.js" type="text/javascript"></script>
      <link rel="stylesheet" type="text/css" href="http://www.wescon.pe/static/css/ie.css"/>
      <![endif]-->
   </head>
   <body class="">
      <!-- html solo para el menu responsive -->
      <div  class="menu-mobile-open icon-menu"></div>
      <div class="menu-mobile-close icon-close"></div>
      <div class="menu-overlay"></div>
      <!-- html solo para el menu responsive -->
      <div class="cnt-wrapper">
         <div class="wrapper">
            <!-- HEADER START -->
            <?php echo $this->Element('menu'); ?>
            <!-- HEADER END -->
			<!-- CONTENT START -->
            <?php echo $this->fetch('content'); ?>
            <!-- CONTENT END -->
         </div>
      </div>
      <!-- FOOTER START -->
      <?php echo $this->Element('footer'); ?>
      <!-- FOOTER END --><!-- contenedor del menu responsive -->
      <div class="menu-sidebar">
         <div class="menu-sidebar-cnt"></div>
      </div>
      <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery1.8.3.min.js'; ?>" type="text/javascript"></script>
	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.placeholder.js'; ?>" type="text/javascript"></script>
	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.validationEngine.js'; ?>" type="text/javascript"></script>
	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.validationEngine-es.js'; ?>" type="text/javascript"></script>
	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/main.js'; ?>" type="text/javascript"></script><!-- JSADD START -->
	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/jquery.bxslider.min.js'; ?>"></script>
	  <script src="<?php echo ENV_WEBROOT_FULL_URL.'theme/static/js/slick/slick.js'; ?>"></script><script>
         $(function(){
             $('.b1-slider').bxSlider({
                 mode:'vertical',
                 infinite:true,
                 controls:true,
                 auto:true,
                 nextText: '',
                 prevText: '',
                 variableWidth:true,
             });
         
			 $('.b2-slider').slick({
				 slidesToShow:4,
				 speed: 600,
				 slideToScroll:1,
				 responsive:[
					 {
						 breakpoint: 1500,
						 settings:{
							 slidesToShow:3,
							 slideToScroll:1,
						 }
					 },
					 {
						 breakpoint: 992,
						 settings:{
							 slidesToShow:2,
							 centerMode:true,
							 slideToScroll:1,
							 variableWidth:false,
						 }
					 },
					 {
						 breakpoint: 960,
						 settings:{
							 slidesToShow:1,
							 centerMode:true,
							 slideToScroll:1,
							 variableWidth:false,
						 }
					 }
				 ]
			 });
         
             $('.b4-slider').bxSlider({
                 mode:'vertical',
                 infinite:true,
                 controls:false,
                 auto:true,
                 variableWidth:true,
             });
         
             $('.b5-slider').bxSlider({
                 infinite:true,
                 controls:false,
                 auto:true,
                 pager:false,
                 variableWidth:true,
             });
         
             $('.b1-link a').click(function(e){
                 e.preventDefault();
                 var thref = $(this).attr('href');
                 $('body, html').animate({
                     scrollTop: $(thref).offset().top
                 }, 600);
             });
         
         
             $('.b3-play').click(function(e) {
                 e.preventDefault();
                 $('.b3-video').addClass('active');
                 $("#b3-iframe")[0].src += "&autoplay=1";
         
             });
             $("#form-home").submit(function(e) {
                 var valid = $(this).validationEngine('validate');
                 if (!valid){
                     return false;
                 }else{
                     return true;
                 };
             });
         });
      </script><!-- JSADD END --><script type="text/javascript">
         $(function() {
         	// :)
         	$('.b6-input input , .b6-input select, .b6-input textarea').on("load change paste keyup",function(){
         		var value = $(this).val();
         		if(value.length > 0 && value != "Default text"){
         			$(this).parent().addClass('active');
         		}
         		else{
         			$(this).parent().removeClass('active');
         		}
         	});
         	$("form").validationEngine('attach', {
         		promptPosition : "topLeft",
         		autoHidePrompt: true,
         		autoHideDelay: 3000,
         		binded: false,
         		scroll: false,
         		validateNonVisibleFields: true
         	}); 
         	
         });
      </script>
   </body>
</html>