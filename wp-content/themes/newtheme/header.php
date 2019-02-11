 <!DOCTYPE html>
 <html lang="en"> 
 <head>
 	<meta charset="utf-8">
 	<title>Test task</title>
 	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/main.css">
 </head>
 <body>
 <header><!-- <?php bloginfo('stylesheet_url');?> -->
		 	<div class="container-1">

				 	 <div class="container">

						<div class="row">
									<div class="col-lg-6 col-md-12 ">

										 		<div class="care">

															<img src="<?php echo get_template_directory_uri();?>/img/logo.png" class="logo">
												 			<h1>Psyhology <span class="care-grey">care</span></h1>

													 			<div class="slogan">

													 				<span>We care you & your family</span>

													 			</div>
										 		</div>
									</div>

						
									<div class="col-lg-6 col-md-12 ">

										 		<div class="contact">

											 				<button><span class="book">Book Appointment</span></button>

														 		<div class="call"><span class="call-us">Call us now</span>

														 			<img src="<?php echo get_template_directory_uri();?>/img/phone.png" class="phone">
														 			<div class="number"><span>1800 456 7890</span></div>

														 		</div>
												</div>

									</div>	
							</div>
					</div>
			</div>
 		
 		
 </header>
 <div class="con">
	<div class="row"></div>
				 <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0px;">
				   <div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

				    </button>

				  </div>

				   <div class=" navbar-collapse navbar-ex1-collapse collapse">
				    <?php

				         wp_nav_menu( array(
				            'menu'              => 'main-menu',
				            'depth'             => 2,
				            'container'         => 'div',
				            'container_class'   => 'navbar-ex1-collapse',
				            'container_id'      => 'navbar-ex1-collapse',
				            'menu_class'        => 'nav navbar-nav',
				            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				            'walker'            => new wp_bootstrap_navwalker())
				        );
				    ?>
				  </div>
				</nav>
</div>



 
			 
<!-- <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span> -->