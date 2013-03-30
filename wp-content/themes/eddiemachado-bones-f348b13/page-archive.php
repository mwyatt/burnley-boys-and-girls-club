<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>
			
			<div id="content">
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class=" clearfix" role="main">

				    	<h1>All Posts</h1>

				        <?php wp_get_archives() ?>
			
    				</div> <!-- end #main -->
    
				    <?php //get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
