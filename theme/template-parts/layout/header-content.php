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

<header class="sticky top-0 header drop-shadow-[0_3px_20px_rgba(0,0,0,0.29)] z-50 bg-white" role="banner">
            <div class="container mx-auto">
                <div class="flex flex-row items-center justify-between py-4 pl-5 pr-8 lg:py-6 lg:pl-0 row lg:pr-14">
                    <div>
                        <a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-xl font-extrabold leading-4 header__logo text-purple font-heebo ">
						Source <br />Recruitment.
                        </a>
                    </div>
                    <div class="menu-links overflow-hidden lg:overflow-visible bg-white lg:bg-transparent fixed w-screen h-0 top-20 lg:top-auto left-0 lg:h-auto lg:w-auto lg:left-auto transition-all duration-300 ease-in lg:relative flex flex-row flex-1 md:max-w-[75%] xl:max-w-[50%]">
                        <div class="flex flex-col items-center justify-center w-full lg:flex-row header__navigation">
                            <nav role="navigation" class="w-full">

								<?php
									wp_nav_menu(array(
										'theme_location' => 'main_menu',
										'menu' => 'main-menu',
										'container' => false,
										'menu_class' => 'flex flex-col lg:flex-row h-full flex-1 lg:justify-between items-center text-lg lg:text-base leading-6 font-medium',
                                        'add_li_class'  => 'text-dark-purple lg:hover:text-purple relative mb-6 lg:mb-0',
										'menu_id' => 'main-menu',
									));
									?>
                            </nav>
                            <div class="flex items-center justify-between w-[82px] mt-3 lg:mt-0 lg:pl-8">
                                <?php if ($linkedin) : ?>
                                <a href="<?php echo esc_url($linkedin); ?>" target="_blank"><img src="<?php echo esc_url($linkedin_icon); ?>" alt="" class="w-4 text-bold"/></a>
                                <?php endif; ?>
                                <?php if ($instagram) : ?>
                                <a href="<?php echo esc_url($instagram); ?>" target="_blank"><img src="<?php echo esc_url($instagram_icon); ?>" alt="" class="w-4"/></a>
                                <?php endif; ?>
                            </div>
                        </div>
                                           
                    </div>
                    <button class="flex flex-col justify-center w-8 h-8 lg:hidden nav-burger js-menu-toggle">
                            <span class="relative block w-full h-1 mb-1 transition-all opacity-100 nav-burger__line bg-purple hamburger-line-one"></span>
                            <span class="relative block w-full h-1 mb-1 transition-all nav-burger__line bg-purple hamburger-line-two"></span>
                            <span class="relative block w-full h-1 mb-1 transition-all nav-burger__line bg-purple hamburger-line-three"></span>
                    </button>     
                </div>
            </div>
        </header>
