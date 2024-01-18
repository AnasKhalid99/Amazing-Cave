<?php
/**
 * The Template for displaying the footer.
 * 
 * @package    WP Basis
 * @subpackage 
 * @since      06/12/2012  0.0.1
 * @version    01/21/2013
 * @author     fb
 */
?>

<?php 

      $base_url = home_url();

  ?>
		
<div class="intro-section7 container">

          <div class="subscibecolumn">

              <h1>Sign up for Newsletter...</h1>
              <a href="#">Subscribe</a>

          </div>

      </div>    

      <footer class="footer container-fluid ">
          <div class="row">

              <div class="col-sm-4">
                    <span>©Awesome Cave 2030</span>
              </div>

              <div class="col-sm-4">

                <ul>
                  <li>Terms & Conditions</li>
                  <li>Payment Policies</li>
                  <li>Payment</li>
                </ul>

              </div>

              <div class="col-sm-4">

                  <a href="#"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/facebook.png"></a>
                  <a href="#"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/instagram.png"></a>

              </div>

          </div>
      </footer>  


      <footer class="footer container-fluid footermenu">
          <div class="row">

              <div class="col-sm-12 col-xs-12">

                <ul>
                  <li>Terms & Conditions</li>
                  <li>Payment Policies</li>
                  <li>Payment</li>
                </ul>

              </div>


              <div class="col-sm-4 col-xs-6">
                    <span>©Awesome Cave 2030</span>
              </div>

            
              <div class="col-sm-4 col-xs-6">

                  <a href="#"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/facebook.png"></a>
                  <a href="#"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/instagram.png"></a>

              </div>

          </div>
      </footer>  

  </div> 
<?php wp_footer(); ?>


<script>
    $(document).ready(function(){
        $('.slider-nav').slick({
            centerMode: true,
            centerPadding: '60px', // Adjust this value as needed
            slidesToShow: 1, // Adjust the number of slides shown
			 responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px', // Adjust this value as needed
                        slidesToShow: 1 // Adjust the number of slides shown
                    }
                }
                // Add more responsive settings as needed
            ]
        });
    });
	
	$('.custom-prev').on('click', function(){
            $('.slider-nav').slick('slickPrev');
        });

        $('.custom-next').on('click', function(){
            $('.slider-nav').slick('slickNext');
        });

	
	

 $('a[data-slide]').click(function(e) {
   e.preventDefault();
   var slideno = $(this).data('slide');
   $('.slider-nav').slick('slickGoTo', slideno - 1);
 });
	
	
$(document).ready(function () {
    var menu = $('.menu-ul');
    var toggleButton = $('.toggleButton');
	var toggleButton2 = $('.togglepointer');
	var overlay = $('.overlay');
	var hiddenDiv = $('.menuwrapper');
	var popup = $('.modalwrape');
	
    toggleButton.click(function () {
        
        $('.toggleButton').toggleClass("active");
      	overlay.toggle();
	    $(".mainmenucomponent").animate({
            height: 'toggle',
            opacity: 'toggle'
        }, {
            duration: 500 // Set the desired duration for the animation
        });
		$('.fixedmenu').toggleClass('menu-hidden');

    
    });
	
	 $('.togglePopup').click(function () {
		overlay.toggle();
		popup.toggleClass('menu-hidden');	
		 $('.container').toggleClass('containerzindex');
		//hiddenDiv.toggleClass('menu-hidden');
    });
});	

</script>
	</body>
</html>
