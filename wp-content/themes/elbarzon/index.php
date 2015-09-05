<!DOCTYPE html>
<html ng-app="app">
<head>
	<base href="/elbarzon/">
	<title>AngularJS Demo Theme</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/app.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/MyFontsWebfontsKit.css" />
	<?php wp_head(); ?>
</head>
<body>
	
	<div class="body">
		
	
		<div class="container clearfix">
			<section id="news">
			</section>
		</div>
		
		<header>
		</header>
		
		<div class="container clearfix">
			
			<section id="left-panel">
		
				<div class="small-3 columns">
		
					<div id="logo">
						<a href="/"><img width="150px" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="El Barzón Restaurant" /></a>
					</div>
					
				</div>
			
			
			
			</section>
		
			<div ng-view></div>
		</div>
	</div>

	<footer>
		&copy; <?php echo date( 'Y' ); ?>
	</footer>

</body>
</html>