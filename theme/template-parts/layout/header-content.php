<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fanatic
 */

 // Option Fields

$linkedin = get_field('linkedin_link', 'option');
$instagram = get_field('instagram_link', 'option');

$linkedin_icon = get_field('linkedin_icon_header', 'option');
$instagram_icon = get_field('instagram_icon_header', 'option');

?>

<header class="sticky top-0 header drop-shadow-[0_3px_20px_rgba(0,0,0,0.29)] z-50 bg-white hidden" role="banner">
            <div class="container mx-auto">
                <div class="flex flex-row items-center justify-between py-6 pl-0 row pr-14">
                    <div>
                        <a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-xl font-extrabold leading-4 header__logo text-purple font-heebo ">
						Source <br />Recruitment.
                        </a>
                    </div>
                    <div class="flex flex-row flex-1 max-w-[50%]">
                        <div class="flex flex-row w-full header__navigation">
                            <nav role="navigation" class="w-full">

								<?php
									wp_nav_menu(array(
										'theme_location' => 'main_menu',
										'menu' => 'main-menu',
										'container' => false,
										'menu_class' => 'flex flex-row h-full flex-1 justify-between items-center  text-base leading-6 font-medium',
                                        'add_li_class'  => 'text-dark-purple hover:text-purple relative',
										'menu_id' => 'main-menu',
									));
									?>
                            </nav>
                            <div class="flex items-center justify-between w-[82px] pl-8">
                                <?php if ($linkedin) : ?>
                                <a href="<?php echo esc_url($linkedin); ?>" target="_blank"><img src="<?php echo esc_url($linkedin_icon); ?>" alt="" class="w-4 text-bold"/></a>
                                <?php endif; ?>
                                <?php if ($instagram) : ?>
                                <a href="<?php echo esc_url($instagram); ?>" target="_blank"><img src="<?php echo esc_url($instagram_icon); ?>" alt="" class="w-4"/></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <a href="#" class="hidden nav-burger js-menu-toggle">
                            <span class="nav-burger__line"></span>
                            <span class="nav-burger__line"></span>
                            <span class="nav-burger__line"></span>
                        </a>                        
                    </div>
                </div>
            </div>
        </header>
