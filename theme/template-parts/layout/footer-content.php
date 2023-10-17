<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fanatic
 */

$twitter  = get_field('twitter_link', 'option');
$facebook = get_field('facebook_link', 'option');
$linkedin = get_field('linkedin_link', 'option');
$instagram = get_field('instagram_link', 'option');
$twitter_icon = get_field('twitter_icon', 'option');
$facebook_icon = get_field('facebook_icon', 'option');
$linkedin_icon = get_field('linkedin_icon', 'option');
$instagram_icon = get_field('instagram_icon', 'option');

?>

<footer id="colophon" class="pt-16 pb-20 bg-very-dark-purple font-heebo">
<div class="container mx-auto">

		<div>
		<h3 class=" text-purple text-[35px] leading-[30px] font-extrabold mb-6">
			Source<br />
			Recruitment<span class=" text-lime-green">.</span>
		</h3>
		<nav aria-label="<?php esc_attr_e( 'Footer Menu', 'fanatic' ); ?>">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'main_menu',
						'menu' => 'main-menu',
						'container' => false,
						'menu_class' => 'flex flex-col h-full justify-evenly ',
						'add_li_class'  => 'font-heebo leading-6 text-white hover:text-purple mb-4',
						'menu_id' => 'main-menu',
					));
				?>
		</nav>
		</div>
		

</div>


</footer><!-- #colophon -->
