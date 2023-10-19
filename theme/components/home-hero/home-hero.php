<?php

/**
 * Template for the Home Hero block.
 *
 * @package fanatic
 * @since 1.0.0
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-hero-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-hero';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

// ACF Fields
$slides                  = get_field('slides');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> ">
   
        <div class="w-full pb-16 lg:pb-[100px]">
            <?php if ($slides) : ?>
                <div class="h-screen swiper max-h-[652px]">
                <div class="absolute bottom-0 z-10 flex justify-center w-full lg:w-auto swiper-pagination lg:block lg:right-24 lg:top-1/3"></div>
                    <div class="h-full swiper-wrapper">

                            <?php foreach ($slides as $slide) :
                                $subheading = $slide['subheading'];
                                $heading = $slide['heading'];
                                $additional_copy = $slide['additional_copy'];
                                $cta = $slide['cta'];
                                $image = $slide['image'];
                            ?>
                                <div class="relative !flex flex-col-reverse !lg:block lg:flex-row swiper-slide">
                                    <div class="relative left-0 flex w-full lg:top-0 h-1/2 lg:h-full lg:absolute">
                                        
                                        <div class="hidden lg:flex flex-col pr-[123px] justify-center w-1/2 items-end bg-gradient-to-br from-purple to-dark-purple">
                                           
                                        </div>
                                        <div class="w-full h-full lg:w-1/2">
                                            <img src="<?php echo esc_url($image); ?>" class="object-cover w-full h-full m-0 aspect-square md:aspect-video" />
                                        </div>
                                    
                                    </div>

                                    <div class="lg:container pl-[5%] pr-[5%] relative flex h-full lg:mx-auto bg-gradient-to-br from-purple to-dark-purple lg:from-transparent lg:to-transparent">
                                        
                                        <div class="flex flex-col justify-center w-full lg:w-1/2">
                                            <div class="flex flex-col max-w-md font-heebo anim anim-fade">
                                                <p class="text-lime-green text-xs lg:text-[22px] leading-4 lg:leading-7 font-medium m-0"><?php echo esc_html($subheading); ?></p>
                                                <h2 class=" my-2 lg:my-4 text-3xl lg:text-[50px] text-white leading-none"><?php echo esc_html($heading); ?></h2>
                                                <p class="mb-0 text-sm lg:text-[22px] w-4/5 lg:w-full font-medium text-white leading-5 lg:leading-7 mt-2 pb-7"><?php echo wp_kses_post($additional_copy); ?></p>
                                                <a href="<?php echo esc_url($cta['url']); ?>" class="self-start text-base font-medium cta clear-bg "><?php echo esc_html($cta['title']); ?></a>
                                            </div>
                                        </div>
                                        <div class="hidden w-1/2 h-full lg:block">
                                           
                                        </div>
                                    
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        
                       
                    </div><!-- / .swiper-wrapper -->
                    
                </div>
            <?php endif; ?>
        
    </div>
</section>