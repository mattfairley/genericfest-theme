<?php //home.php is the main blog page ?>
<?php get_header(); ?>

<!-- carousel -->
<div class="carousel"></div>
<!-- general info -->
<div class="info">
	<div class="container">
		<img src="http://placecage.com/g/200/200" alt="" class="icon">
		<p class="info"><span class="event-name"><?php bloginfo( 'name' ); ?></span> is a 1-4 day festival or event taking place <span class="event-date">November 17-18</span> in your local area.</p>
	</div>
</div>


<div class="main">
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>