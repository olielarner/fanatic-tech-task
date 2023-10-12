<?php

/**
 * Template for the Home Hero block.
 *
 * @package bunker
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
   
        <div >
            <?php if ($slides) : ?>
                <div class="h-screen swiper max-h-[652px]">
                <div class="absolute z-10 swiper-pagination right-24 top-1/3"></div>
                    <div class="h-full swiper-wrapper">

                            <?php foreach ($slides as $slide) :
                                $subheading = $slide['subheading'];
                                $heading = $slide['heading'];
                                $additional_copy = $slide['additional_copy'];
                                $cta = $slide['cta'];
                                $image = $slide['image'];
                            ?>
                                <div class="swiper-slide">
                                    <div class="flex h-full">
                                        
                                        <div class="flex flex-col justify-center w-1/2 align-middle bg-gradient-to-br from-purple to-dark-purple">
                                            <div class="max-w-md mx-auto font-heebo">
                                            <p class="text-lime-green text-[22px] leading-7 font-medium m-0"><?php echo esc_html($subheading); ?></p>
                                            <h2 class=" my-4 text-[50px] text-white leading-none"><?php echo esc_html($heading); ?></h2>
                                            <p class="mb-0 text-[22px] font-medium text-white leading-7 mt-2 pb-7"><?php echo wp_kses_post($additional_copy); ?></p>
                                            <a href="<?php echo esc_url($cta['url']); ?>" class="text-base font-medium cta clear-bg "><?php echo esc_html($cta['title']); ?></a>
                                            </div>
                                        </div>
                                        <div class="w-1/2 h-full">
                                            <img src="<?php echo esc_url($image); ?>" class="object-cover w-full h-full m-0 aspect-square md:aspect-video" />
                                        </div>
                                    
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        
                       
                    </div><!-- / .swiper-wrapper -->
                    
                </div>
            <?php endif; ?>
        
    </div>
</section>