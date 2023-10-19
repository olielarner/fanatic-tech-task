<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fanatic
 */

$twitter  = get_field('twitter_footer_link', 'option');
$facebook = get_field('facebook_footer_link', 'option');
$linkedin = get_field('linkedin_footer_link', 'option');
$instagram = get_field('instagram_footer_link', 'option');
$twitter_icon = get_field('twitter_footer_icon', 'option');
$facebook_icon = get_field('facebook_footer_icon', 'option');
$linkedin_icon = get_field('linkedin_footer_icon', 'option');
$instagram_icon = get_field('instagram_footer_icon', 'option');

?>

<footer id="colophon" class="px-6 pt-16 pb-20 lg:px-0 bg-very-dark-purple font-heebo">
<div class="container flex flex-col justify-between mx-auto lg:flex-row">

		<div class="flex flex-col justify-end flex-1">
			<h3 class=" text-purple text-[35px] leading-[30px] font-extrabold mb-6">
				Source<br />
				Recruitment<span class=" text-lime-green">.</span>
			</h3>
			<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'fanatic' ); ?>">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'footer',
							'menu' => 'footer',
							'container' => false,
							'menu_class' => 'flex flex-col h-full justify-evenly ',
							'add_li_class'  => 'font-heebo leading-6 text-white hover:text-purple mb-4',
							'menu_id' => 'footer',
						));
					?>
			</nav>
		</div>
		<div class="flex flex-col justify-end flex-1">
			<p class="text-white text-base leading-6 mb-[15px] font-medium">Find us<span class="text-lime-green">.</span></p>
			<img class="max-w-[393px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/map.png" alt="map" />
		</div>

	
		<div class="flex items-end justify-start flex-1 pt-5  lg:pt-0 lg:justify-end">
			<?php if ($facebook) : ?>
			<a href="<?php echo esc_url($facebook); ?>" target="_blank"><img src="<?php echo esc_url($facebook_icon); ?>" alt="" class="w-2 mr-8"/></a>
			<?php endif; ?>
			<?php if ($twitter) : ?>
			<a href="<?php echo esc_url($twitter); ?>" target="_blank"><img src="<?php echo esc_url($twitter_icon); ?>" alt="" class="w-4 mr-8"/></a>
			<?php endif; ?>
			<?php if ($linkedin) : ?>
			<a href="<?php echo esc_url($linkedin); ?>" target="_blank"><img src="<?php echo esc_url($linkedin_icon); ?>" alt="" class="w-4 mr-8"/></a>
			<?php endif; ?>
			<?php if ($instagram) : ?>
			<a href="<?php echo esc_url($instagram); ?>" target="_blank"><img src="<?php echo esc_url($instagram_icon); ?>" alt="" class="w-4 mr-8"/></a>
			<?php endif; ?>
		</div>
		

</div>


</footer><!-- #colophon -->
