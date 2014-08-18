<body class="<?php echo (($isFrontpage) ? ('front') : ('page')).' '.$active_alias.' '.$pageclass; ?>" data-spy="scroll" data-target="#site-nav" data-offset="112">
<!-- ==============================================
MAIN NAV
=============================================== -->
<div id="main-nav" class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<!-- ======= LOGO ========-->
			<jdoc:include type="modules" name="logo"/>
		</div>
		<div id="site-nav" class="navbar-collapse collapse">
			<jdoc:include type="modules" name="menu"/>
		</div><!--End navbar-collapse -->
	</div><!--End container -->
</div><!--End main-nav -->


<div id="wrap">
	<jdoc:include type="modules" name="sections" />

	<?php if ($this->countModules('teaserfull') || $this->countModules('teaserfullimage') ): ?>
		<!-- TEASER-->
		<div class="teaserfullwrap">
			<div id="teaserfull">
				<?php if ($this->countModules('teaserfullimage')): ?>
					<jdoc:include type="modules" name="teaserfullimage" style="teaserfullimage"/>
				<?php endif; ?>
				<div class="teaserborder"></div>
			</div>
		</div>
	<?php endif; ?>
	<?php if ($this->countModules('teaser') || $this->countModules('teaserimage') ): ?>
		<!-- TEASER-->
		<div class="teaserwrap">
			<div class="container">
				<div id="teaser">
					<?php if ($this->countModules('teaserimage')): ?>
						<jdoc:include type="modules" name="teaserimage" style="teaserimage"/>
					<?php endif; ?>
					<div class="container teasercontent">
						<?php if ($this->countModules('teaser')): ?>
							<div class="teaser">
								<div class="row">
									<jdoc:include type="modules" name="teaser" style="html5"/>
								</div>
							</div>
						<?php endif; ?>
					</div>
					<div class="teaserborder"></div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('top')): ?>
		<div class="container">
			<!-- TOP -->
			<div class="row top">
				<jdoc:include type="modules" name="top" style="html5"/>
			</div><!-- div.row -->
		</div>
	<?php endif;?>

	<?php $pos='user1'; ?>
	<?php if ($this->countModules($pos)): ?>
		<div class="fullwidth offerings">
			<div class="container">
				<div class="row <?php echo $pos; ?>">
					<jdoc:include type="modules" name="<?php echo $pos; ?>" style="html5"/>
				</div><!-- div.row -->
			</div>
		</div>
	<?php endif;?>

	<?php $pos='user2'; ?>
	<?php if ($this->countModules($pos)): ?>
		<div class="fullwidth comments">
			<div class="container">
				<div class="row <?php echo $pos; ?>">
					<jdoc:include type="modules" name="<?php echo $pos; ?>" style="html5"/>
				</div><!-- div.row -->
			</div>
		</div>
	<?php endif;?>

	<?php $pos='user3'; ?>
	<?php if ($this->countModules($pos)): ?>
		<div class="fullwidth designs">
			<div class="container">
				<div class="row <?php echo $pos; ?>">
					<jdoc:include type="modules" name="<?php echo $pos; ?>" style="html5"/>
				</div><!-- div.row -->
			</div>
		</div>
	<?php endif;?>

	<?php $pos='user4'; ?>
	<?php if ($this->countModules($pos)): ?>
		<div class="fullwidth respon">
			<div class="container">
				<div class="row <?php echo $pos; ?>">
					<jdoc:include type="modules" name="<?php echo $pos; ?>" style="html5"/>
				</div><!-- div.row -->
			</div>
		</div>
	<?php endif;?>

	<?php $pos='user5'; ?>
	<?php if ($this->countModules($pos)): ?>
		<div class="fullwidth contact">
			<div class="container">
				<div class="row <?php echo $pos; ?>">
					<jdoc:include type="modules" name="<?php echo $pos; ?>" style="html5"/>
				</div><!-- div.row -->
			</div>
		</div>
	<?php endif;?>

	<?php $pos='user6'; ?>
	<?php if ($this->countModules($pos)): ?>
		<div class="fullwidth gmap">
			<div class="container">
				<div class="row <?php echo $pos; ?>">
					<jdoc:include type="modules" name="<?php echo $pos; ?>" style="html5"/>
				</div><!-- div.row -->
			</div>
		</div>
	<?php endif;?>

	<?php if (($showonfrontpage && $isFrontpage) || !$isFrontpage) : ?>
		<div class="container">
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
						<?php if (!preg_match('/nocontent/',$pageclass)) {?>
							<!-- Component Start -->
							<jdoc:include type="component" />
							<!-- Component End -->
						<?php }?>

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
		</div>
	<?php endif; ?>

	<?php if ($this->countModules('bottom')): ?>
		<!-- BOTTOM -->
		<div class="row bottom">
			<jdoc:include type="modules" name="bottom" style="html5"/>
		</div><!-- div.row -->
	<?php endif;?>

	<?php if ($this->countModules('footer')): ?>
	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="row footer">
				<jdoc:include type="modules" name="footer" style="html5"/>
			</div><!-- .footer -->
		</div>
	</footer>
	<?php endif;?>

  	<jdoc:include type="modules" name="debug" />
</div>

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
