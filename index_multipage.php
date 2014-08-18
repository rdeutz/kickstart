
<body class="<?php echo (($isFrontpage) ? ('front') : ('page')).' '.$active->alias.' '.$pageclass; ?>">

	<div class="container">
		<?php if ($this->countModules('logo')): ?>
			<!-- Logo -->
			<div class="row logo">
				<jdoc:include type="modules" name="logo" style="html5"/>
			</div><!-- div.row -->
		<?php endif;?>

		<!-- RESPONSIVE MENU-->
		<?php if ($this->countModules('menu')): ?>
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?php echo $this->baseurl; ?>/"><?php echo $app->getCfg('sitename'); ?></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<jdoc:include type="modules" name="menu"/>
					<jdoc:include type="modules" name="search" />
				</div><!-- /.navbar-collapse -->
			</nav>
		<?php endif;?>

		<?php if ($this->countModules('top')): ?>
			<!-- TOP -->
			<div class="row top">
				<jdoc:include type="modules" name="top" style="html5"/>
			</div><!-- div.row -->
		<?php endif;?>

		<!-- CONTENT -->
		<div class="content">
			<div class="row">
				<?php if ($this->countModules('sidebar-a')): ?>
				<div class="col-md-4 col-lg-4 sidebar-a">
					<div class="row">
						<jdoc:include type="modules" name="sidebar-a" style="html5"/>
					</div>
				</div><!-- .sidebar-a -->
				<?php endif;?>

				<div class="<?php echo $contentclass; ?> middle">
					<?php if ($this->countModules('inner-top')): ?>
					<div class="row inner-top">
						<jdoc:include type="modules" name="inner-top" style="html5"/>
					</div><!-- .inner-top -->
					<?php endif;?>

					<jdoc:include type="message" />
					<!-- Component Start -->
					<jdoc:include type="component" />
					<!-- Component End -->

					<?php if ($this->countModules('inner-bottom')): ?>
					<div class="row inner-bottom">
						<jdoc:include type="modules" name="inner-bottom" style="html5"/>
					</div><!-- .inner-bottom -->
					<?php endif;?>
				</div><!-- .middle -->

				<?php if ($this->countModules('sidebar-b')): ?>
					<div class="col-md-4 col-lg-4 sidebar-b">
						<div class="row">
							<jdoc:include type="modules" name="sidebar-b" style="html5"/>
						</div>
					</div><!-- .sidebar-b -->
				<?php endif;?>
			</div><!-- div.row -->
		</div><!-- div.content -->

		<?php if ($this->countModules('bottom')): ?>
		<!-- BOTTOM -->
		<div class="row bottom">
			<jdoc:include type="modules" name="bottom" style="html5"/>
		</div><!-- div.row -->
		<?php endif;?>

		<?php if ($this->countModules('footer')): ?>
		<!-- FOOTER -->
		<footer>
			<div class="row footer">
				<jdoc:include type="modules" name="footer" style="html5"/>
			</div><!-- .footer -->
		</footer>
		<?php endif;?>

		<div class="row copyright">
			<div class="col-md-12 col-lg-12"><?php echo '&copy; '.date('Y').' - '.$app->getCfg('sitename');?></div>
		</div><!-- .copyright -->
	</div><!-- .container -->

  	<jdoc:include type="modules" name="debug" />

  	<?php if ($this->params->get('bootstrap')==1 && $this->params->get('bootstrapmenu')) : ?>
	<script type="text/javascript">
		(function($){
			$(document).ready(function(){
				// dropdown
			  	$('nav .menu > .deeper').addClass('dropdown');
			  	$('nav .menu > .deeper > a').addClass('dropdown-toggle');
				//$('nav .menu > .deeper > a').addClass('dropdown-toggle disabled'); allow click
				$('nav .menu > .deeper > a').attr('data-toggle', 'dropdown');
				$('nav .menu > .deeper > a').attr('href', '#');
			  	$('nav .menu > .deeper > a').append('<span  class="caret"></span>');
			  	$('nav .menu > .deeper > ul').addClass('dropdown-menu');
			});
	  	})(jQuery);
	</script>
  	<?php endif; ?>

    <?php if ($this->params->get('holder')==1) : ?>
        <script src="<?php echo $tpath.'/js/holder.js';?>"></script>
    <?php endif; ?>
</body>