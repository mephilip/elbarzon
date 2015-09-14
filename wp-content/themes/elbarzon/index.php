<!DOCTYPE html>
<html ng-app="app">
<head>
	<base href="/elbarzon/">
	<title>AngularJS Demo Theme</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/MyFontsWebfontsKit.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/icon-fonts/foundation-icons.css" />
	<?php wp_head(); ?>
</head>
<body>
	
	<div class="body">
		
	<div class="news-wrapper hide-for-small">
		<div class="container clearfix">
			<section id="news">
				<div class="row collapse">
					<div class="small-1 columns">
						<div id="news-before">
							<span><img src="<?php echo get_template_directory_uri() ?>/images/left-arrow.png" /></span>
						</div>
					</div>
					<div class="small-10 columns">
						<div class="row collapse">
							<div class="small-3  columns">
								<div class="row">
									<div class="small-12 medium-8 columns news-article">
										<span>El Barzon Wins Best Patio in Detroit</span>
									</div>
									<div class="small-12 medium-4 columns news-date">
										<span>08/27</span>
									</div>
								</div>
							</div>
							<div class="small-3 columns">
								<div class="row">
									<div class="small-12 medium-8 columns news-article">
										<span>El Barzon Wins Best Patio in Detroit</span>
									</div>
									<div class="small-12 medium-4 columns news-date">
										<span>08/27</span>
									</div>
								</div>
							</div>
							<div class="small-3 columns">
								<div class="row">
									<div class="small-12 medium-8 columns news-article">
										<span>El Barzon Wins Best Patio in Detroit</span>
									</div>
									<div class="small-12 medium-4 columns news-date">
										<span>08/27</span>
									</div>
								</div>
							</div>
							<div class="small-3 columns">
								<div class="row">
									<div class="small-12 medium-8 columns news-article">
										<span>El Barzon Wins Best Patio in Detroit</span>
									</div>
									<div class="small-12 medium-4 columns news-date">
										<span>08/27</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="small-1 columns">
						<div id="news-after">
							<span><img src="<?php echo get_template_directory_uri() ?>/images/right-arrow.png" /></span>
						</div>
					</div>
				</div>
			</section>
		</div>
		
	</div>
		
		<header>
		</header>
		
		<div class="body-wrap clearfix">
			
			<section id="header">
				
				<div class="row">
					
					<div class="root clearfix">
						<div class="wrapper-a clearfix">
							<div class="wrapper-b clearfix">
					
					<div class="small-4 columns">
						<div class="row">
				
							<div class="small-12 medium-12 columns">
								
								<div class="logo-wrapper">
									<div id="logo">
										<a href="/"><img width="200px" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="El Barzón Restaurant" /></a>
									</div>
								</div>
								
								<section id="left-nav">
							
							<div class="left-nav-wrapper">
						
									<div class="row collapse" data-equalizer>
										<div class="small-2  columns">
											<div class="left-gallery" data-equalizer-watch>
												<ul id="social-left">
													<li><img src="<?php echo get_template_directory_uri() ?>/images/btn-fb.png" alt="El Barzon Facebook" />
													</li>
													<li><img src="<?php echo get_template_directory_uri() ?>/images/btn-ig.png" alt="El Barzon Instagram" />
													</li>
													<li><img src="<?php echo get_template_directory_uri() ?>/images/btn-tw.png" alt="El Barzon Twitter" />
													</li>
												</ul>
											</div>
										</div>					
										<div class="small-10 columns">
											<div class="left-gallery" data-equalizer-watch>
												<ul class="gallery-left">
													<li><span>Menu »</span>
													</li>
													<li><span>About »</span>
													</li>
													<li><span>Reservations »</span>
													</li>
													<li><span>Press »</span>
													</li>
													<li><span>Contact Us »</span>
													<li><span>Gallery »</span>
													</li>
													<li><span>Location »</span>
													</li>
													<li><span>Parking »</span>
													</li>
													<li><span>Catering »</span>
													</li>
													<li><span>Employment »</span>
													</li>
												</ul>
											</div>
										</div>
										
										
									</div>
									
									
							</div>
						
						</section>
						

								
							</div>						
						</div>
					</div>
					
					<div class="small-12 medium-8 columns">
						<div class="idea-wrapper">
							<div class="idea">
								<p><i class="fi-info"></i>&nbsp;<u>What is El Barzón?</u></p>
								<p>El Barzon is an upscale Mexican & Italian fare in an intimate spot with a wood-beamed, covered patio.</p>
							</div>
						</div>
					</div>
				
				</div>
				
						</div>
					</div>
				</div>
			</section>
			
			<section id="body">
				
				<div class="row">
					
					<div class="small-4 columns">
						
											</div>
					
				</div>
			
			
			
			</section>
		
			<div ng-view></div>
		</div>
	</div>

<?php get_footer(); ?>