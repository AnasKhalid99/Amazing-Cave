<?php
/**
 * The Header for our WP Basis theme
 *
 * @package    WordPress
 * @subpackage WordPress_Basis_Theme
 * @since      2012-05-08  0.0.1
 * @version    2014-11-03
 * @author     Anas Khalid
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]--> 
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]--> 
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]--> 
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]--> 
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js" manifest="cache-manifest.manifest"><!--<![endif]--> 
	
	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		  <link rel="profile" href="http://gmpg.org/xfn/11">
		 <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		  <?php wp_head(); ?>
	
		  <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		  <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
		  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
		  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"/>
		
	</head>
	
	<body <?php body_class(); ?>>
	
	<div class="overlay"></div>
		
	<?php 

			$base_url = home_url();

	?>
	<div class="background-wrapper">
  <div class="header container-fluid">  

      <div class="header-row row">
          <div class="col-sm-6 col-lg-6 col-xs-6">
              <img src="<?php echo $base_url ?>/wp-content/uploads/2024/01//logo.png">
          </div>

          <div class="col-sm-6 col-lg-6 col-xs-6">
            <button type="button" class="callbutton togglePopup">Call/Enquire</button>
          </div>
      </div>
	  
	  <div class="modalwrape menu-hidden">
        <div class="modalwrapper">

            <button type="button" class="close togglePopup">
              <span aria-hidden="true">&times;</span>
            </button>
            
            <h5 class="modal-title">Your Perfect Partner <br /> for Pet relocation</h5>

            <form class="form">
                
                <div class="row">

                    <div class="form-group col-sm-6">
                        <input class="form-control" name="firstname" placeholder="Full name">
                    </div>

                    <div class="form-group col-sm-6">
                        <input class="form-control" name="firstname" placeholder="Last name">
                    </div>

                    <div class="form-group col-sm-12">
                        <input class="form-control" name="firstname" placeholder="Address">
                    </div>

                    <div class="form-group col-sm-6">
                        <input class="form-control" name="firstname" placeholder="E-mail">
                    </div>

                    <div class="form-group col-sm-6">
                        <input class="form-control" name="firstname" placeholder="Mobile number">
                    </div>

                    <div class="form-group col-sm-12">
                        <textarea class="form-control" placeholder="Message" style="height: 100px;"></textarea>
                    </div>

                    <div class="form-group col-sm-12">
                        <input type="submit" name="submit" value="Send" class="submitbutton">
                    </div>

                </div>

            </form>


        </div>
        
     
      </div>

  </div>

  <div class="intro-section container">
        <div class="intro-row row">
            <div class="col-sm-12 text-center">
              <h1 class="intro-heading"><?php echo get_field('header_heading'); ?></h1>
              <span class="intro-span1">Ethical dealings <br />with animals</span>
              <button class="rotatebutton" type="button"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01//rotate1.png" style="margin-top: 10px;">Export</button>
              <button class="rotatebutton" type="button">Import <img src="<?php echo $base_url ?>/wp-content/uploads/2024/01//rotate2.png" style="margin-bottom: 13px;"></button>
              <span  class="intro-span2">More personal <br />approach</span>
            </div>
        </div>
  </div>

  <div class="menu-ul menu-mobile">
        <ul>
            <li><a href="#">Relocations</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Reviews</a></li>
            <li><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01//navbar.png" class="pointer toggleButton togglepointer" ></li>
        </ul>
      </div>

  <div class="intro-section2 container">
      
      
	  
      <div class="menu-ul">
            
            <div class="mainmenucomponent menu-hidden">
                
                <ul class="mainmenu">
                    <?php
          
                        // Define the menu location
                        $menu_location = 'popup-main-menu';
                    
                        // Get the menu items for the specified location
                        $menu_items = wp_get_nav_menu_items($menu_location);
                    
                        // Loop through each menu item
                        foreach ($menu_items as $menu_item) {
                            echo '<li><a href="'.esc_url($menu_item->url).'">'.$menu_item->title.'</a></li>';
                        }
                    
                    ?>
                    
                    <li><a href="#" target="_blank" class="whatsapp_menu_link w-inline-block">
                            <img src="https://assets-global.website-files.com/6556475f907be2fd88f1af38/6556475f907be2fd88f1afcd_whatsapp.svg" loading="lazy" alt="" class="whatsapp_icon">
                            <div class="whatsapp_text text-color-green">
                                <strong>WhatsApp Us</strong>
                            </div>
                        </a>
                    </li>
                </ul>
    
                <ul class="submain">
                    <?php
      
                    // Define the menu location
                    $menu_location = 'popup-sub-menu';
                
                    // Get the menu items for the specified location
                    $menu_items = wp_get_nav_menu_items($menu_location);
                
                    // Loop through each menu item
                    foreach ($menu_items as $menu_item) {
                        echo '<li><a href="'.esc_url($menu_item->url).'">'.$menu_item->title.'</a></li>';
                    }
                
                ?>
                   
                </ul>
                
            </div>
         
          <ul class="fixedmenu" style="padding: 0px;margin-left: 11px;    margin-bottom: 0;">
              <?php
      
                // Define the menu location
                $menu_location = 'popup-fixed-menu';
            
                // Get the menu items for the specified location
                $menu_items = wp_get_nav_menu_items($menu_location);
            
                // Loop through each menu item
                foreach ($menu_items as $menu_item) {
                    echo '<li><a href="'.esc_url($menu_item->url).'" class="currentmenu">'.$menu_item->title.'</a></li>';
                }
            
            ?>
            
          
          </ul>
          
         <div class="hamburger_component pointer toggleButton" style="background-color: rgba(0, 0, 0, 0);" id="toggleButton togglepointer">
					<div class="hamburger_lines">
						<div class="hamburger_line-1" ></div>
						<div class="hamburger_line-2"></div>
					</div>
		 </div>
      </div>

      <div class="intro-section2-row row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6" style="text-align: right;">
            <span class="betterprice">Better <br />price</span>
            <img src="<?php echo $base_url ?>/wp-content/uploads/2024/01//tags.png" class="tagimage">
            <h2 style="text-align: left;"><?php echo get_field('intro_section_heading'); ?></h2>
            <p  style="text-align: left;"><?php echo get_field('intro_section_paragraph'); ?></p>
        </div>
      </div>
  </div>

   

