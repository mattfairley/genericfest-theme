<?php //home.php is the main blog page ?>
<?php get_header(); ?>

<!-- carousel -->
<div class="carousel">
	<div class="container">	
		<!-- <h1 class="logo">GenericFest</h1> -->
		<img src="<?php echo get_template_directory_uri() . '/img/genericfest-logo.png' ?>"  alt="Generic Fest" class="logo">
		<!-- <h2 class="tagline">The greatest local event or festival</h2> -->
		<!-- down arrow <img src="" alt=""> -->
	</div>
</div>
<!-- general info -->
<div class="headline">
	<div class="container">
		<h2>Come join us!</h2>
		<img src="http://placecage.com/g/200/100" alt="" class="icon">
		<p class="info"><span class="event-name"><?php bloginfo( 'name' ); ?></span> is a 1-4 day festival or event taking place <span class="event-date">November 17-18</span> in your local area.</p>
	</div>
</div>


<div class="main">
  <div class="container">
	<h2 class="news">Latest news</h2>
    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>