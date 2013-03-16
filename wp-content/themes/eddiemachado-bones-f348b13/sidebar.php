				<div id="sidebar1" class="sidebar fourcol last clearfix" role="complementary">

<?php if ($gallery) : ?>
	<?php foreach ($gallery as $image) : ?>

					<a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" alt=""></a>

	<?php endforeach; ?>
<?php endif; ?>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>