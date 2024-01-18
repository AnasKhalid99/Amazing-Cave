<?php /* Template Name: Homepage Template */ ?>

<?php

get_header();
do_action( 'wp_basis_index_before_content' );

?>

<?php 
		$base_url = home_url();
?>

	 <div class="intro-section3 container">

	 	
        <ul class="nav nav-pills">

           <?php 

		 		$repeater_rows = get_field('our_process');
		 		// Check if the repeater field has rows
				if ($repeater_rows) {
				    // Loop through each row
				    $sl = 0;
				    foreach ($repeater_rows as $row) {
				    	// 
				    	if($sl == '0'){
				    		$active = 'active';
				    	}else{
				    		$active = '';
				    	}

				    	echo '<li class="'.$active.'"><a data-toggle="pill" href="#home'.$sl.'">'.$row['process_tab']['process_heading'].'</a></li>';

				    	$sl = $sl + 1;
				    }
				}

		 	?>

        </ul>
    
      <div class="tab-content">

      	<?php 

		 		$repeater_rows = get_field('our_process');
		 		// Check if the repeater field has rows
				if ($repeater_rows) {
				    // Loop through each row
				    $sl = 0;
				    foreach ($repeater_rows as $row) {
				    	// 
				    	if($sl == '0'){
				    		$active = 'active';
				    	}else{
				    		$active = '';
				    	}

				    	echo '
				    	<div id="home'.$sl.'" class="tab-pane fade in '.$active.'">
				            <h3>'.$row['process_tab']['process_sub_heading'].'</h3>
				            <p>'.$row['process_tab']['process_description'].'</p>
			          	</div>';

				    	$sl = $sl + 1;
				    }
				}

		 	?>
    	</div>

    </div>

    </div>

    <div class="background-wrapper2">


    <div class="intro-section4 container" style="padding: 120px 0px;">

        <h2><?php echo get_field('methods_heading'); ?></h2>

        <div class="intro-section4-row ">
            <div class="intro-section4-box1 col-sm-6">

                <h2><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/Group-6.png"> <?php echo get_field('method_1_heading'); ?></h2>
                <p> <?php echo get_field('method_1_description'); ?> </p>

            </div>

            <div class="col-sm-1"></div>

            <div class="intro-section4-box2 col-sm-5">

                <h2><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/Group-12.png"> <?php echo get_field('method_2_heading'); ?></h2>
                <p> <?php echo get_field('method_2_description'); ?> </p>

            </div>
        </div>

    </div>

      <div class="intro-section5 container" >
          <h1> <?php echo get_field('center_comment'); ?> </h1>
      </div>

      <div class="intro-section6 container" >
        <div class="intro-section5-row row">
             <div class="intro-section5-box1 col-sm-8">

             

                  <div class="main">
                      <div class=" slider-nav">
	                        <?php 

						 		$repeater_rows = get_field('review_images');
						 		// Check if the repeater field has rows
								if ($repeater_rows) {
								    // Loop through each row
								    
								    foreach ($repeater_rows as $row) {
										echo '<div class="slickimage"><img src="'.$row['review_image'].'" /></div>';
									}
								}

						 	?>
                      </div>
                      <div class="allreviews">
                        <span>All Reviews</span>
                      </div>
                      <div class="action">
                        <a href="javascript:void(0);" class="custom-prev"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/leftarrow.png"></a>
                        <a href="javascript:void(0);" class="custom-next"><img src="<?php echo $base_url ?>/wp-content/uploads/2024/01/rightarrow.png"></a>
                      </div>
                    </div>

             </div>

             <div class="intro-section5-box2 col-sm-3">
                  <span>About</span>

                  <p style="margin-top: 40px;">Why us</p>
                  <p>Experience</p>
                  <p>The Facts</p>

             </div>
          
        </div>
      </div>


<?php	
	
	do_action( 'wp_basis_index_after_content' );
	
get_sidebar();
get_footer();
