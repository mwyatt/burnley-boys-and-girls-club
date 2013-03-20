			<footer class="footer" role="contentinfo">
			
				<div id="inner-footer" class="wrap clearfix">
					
<?php
// echo '<pre>';
// print_r(the_widget_instance('text-3'));
// print_r(the_widget_instance('text-4'));
// print_r(the_widget_instance('text-5'));
// echo '</pre>';
// exit;
?>


<?php if ($contact['address'] = explode("\n", get_the_widget_instance('text-3'))) : ?>
<!-- see all widgets and the ID -->
<!-- print_r(wp_get_sidebars_widgets()); -->
<!-- text-3 = Address -->
<!-- text-4 = Telephone -->
<!-- text-5 = Email Address -->

					<div class="contact">

						<p class="source-org copyright"><strong>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</strong></p>

						<div class="address">

	<?php foreach ($contact['address'] as $addressLine) : ?>

		<?php echo trim($addressLine); ?>
							
	<?php endforeach; ?>

						</div>

	<?php if ($contact['telephone'] = get_the_widget_instance('text-4')) : ?>

						<div class="telephone">
							
		<?php echo '<strong>Telephone: </strong>' . $contact['telephone']; ?>

						</div>
						
	<?php endif; ?>

	<?php echo (get_bloginfo('admin_email') ? '<div class="email"><a href="mailto:' . get_bloginfo('admin_email') . '" title="Email ' . get_bloginfo('admin_email') . '">' . get_bloginfo('admin_email') . '</a></div>' : ''); ?>

					</div>

<?php endif; ?>

					<nav role="navigation">
    					<?php bones_footer_links(); ?>
	                </nav>

					<nav role="navigation">
    					<?php bones_footer_links_2(); ?>
	                </nav>

	                <div class="partner">

	                	<a href="http://www.labgc.org.uk/Default.asp?" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-lbgc.png" alt="Lancashire Boys and Girls Clubs logo"></a>

	                	<a href="http://www.burnleyyouththeatre.com/index.htm" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-byt.png" alt="Burnley youth theatre logo"></a>

	                	<a href="http://www.brunshawactiongroup.com/Brunshaw_Action_Group/Home.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-bag.png" alt="Brunshaw action group logo"></a>

	                	<a href="http://www.lancsycs.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-yps.png" alt="Young peoples services logo"></a>

	                </div>
	                		
				</div> <!-- end #inner-footer -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
