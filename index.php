<?php
  
  /**
  * @author      Jordi Sorts
  * @package     Plantilla per Semab
  * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
  * @copyright   © 2016 www.websdefutbol.com. All rights reserved.
  */
    
  defined('_JEXEC') or die;
    
  /* The following line gets the application object for things like displaying the site name */
  $app = JFactory::getApplication();
  include 'includes/params.php';

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>">
  <head>

    <?php include 'includes/header.php'; ?>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      jQuery(document).ready(function($){
        // browser window scroll (in pixels) after which the "back to top" link is shown
        var offset = 300,
        //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
        offset_opacity = 1200,
        //duration of the top scrolling animation (in ms)
        scroll_top_duration = 700,
        //grab the "back to top" link
        $back_to_top = $('.cd-top');

        //hide or show the "back to top" link
        $(window).scroll(function(){
          ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
            if( $(this).scrollTop() > offset_opacity ) { 
              $back_to_top.addClass('cd-fade-out');
            }
          });

        //smooth scroll to top
        $back_to_top.on('click', function(event){
        event.preventDefault();
        $('body,html').animate({
          scrollTop: 0 ,
          }, scroll_top_duration
          );
        });
      });
    </script>
	
  </head>

  <body>

      <!-- Logo -->
      <!-- <?php if($this->countModules('logo')) : ?> -->
        <div class="container-fluid fons-logotip" id="logo">
          <div class="row">
          	<div class="container">
              <div class="col-sm-12">
                <!-- <jdoc:include type="modules" name="logo" style="block" /> -->
				        <img src="./images/semab-projects.png" alt="" class="img-responsive center-block" style="max-height: 160px;">
              </div>
              </div>
          </div>
        </div>
      <!-- <?php endif; ?> -->
      <!-- Logo -->

      <!-- Menu -->
      <?php if($this->countModules('menu')) : ?>
        <div class="container-fluid" id="navegacio" data-spy="affix" data-offset-top="150">
          <div class="row">
            <div class="container" id="menu-principal">
              <nav class="navbar navbar-default">
                <div class="container-fluid" id="menu-principal">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <h3 class="text-center visible-xs titol-menu-mobil">Menu</h3>
                  </div>
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <jdoc:include type="modules" name="menu" style="block" />
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      <?php endif; ?>
      <!-- Menu -->

    <?php if($this->countModules('content-top')) : ?>
      <div class="container">
      <div class="row">
          <jdoc:include type="modules" name="content-top" style="block" />  
      </div>
      </div>
    <?php endif; ?>

    <div class="container" id="wrapper">
		
		

      <!-- Contingut principal -->
      <div class="row">
        <?php if($this->countModules('dreta')) : ?>
          <div class="col-sm-<?php  echo $rightcolgrid; ?>">
            <jdoc:include type="modules" name="dreta" style="block" />
          </div>
        <?php endif; ?>
        <div class="col-sm-<?php  echo (12-$leftcolgrid-$rightcolgrid); ?>">
			<jdoc:include type="message" />
          	<jdoc:include type="component" />
        </div>
        <?php if($this->countModules('esquerra')) : ?>
          <div class="col-sm-<?php  echo $leftcolgrid; ?>">
            <jdoc:include type="modules" name="esquerra" style="block" />
          </div>
        <?php endif; ?>
      </div>
      <!-- Contingut principal -->

      <!-- Peu -->
      <?php if($this->countModules('peu')) : ?>
        <div class="row">
          <div class="col-sm-12">
            <jdoc:include type="modules" name="peu" style="block" />
          </div>
        </div>
      <?php endif; ?>
      <!-- Peu -->

    </div>
	
    <a href="#0" class="cd-top cd-is-visible cd-fade-out fa fa-arrow-up">Top</a>

    <!-- Copyright -->
    <div class="container-fluid" id="peu">
      <div class="row">
        <div class="container">
          <div class="col-sm-12 text-center">
            <p class="peu">&copy; <?php echo date('Y'); ?> - <?php echo $app->getCfg('sitename'); ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright -->

  </body>
</html>
