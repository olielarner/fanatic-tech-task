<?php

/**
 * Template for the Content Cards block.
 *
 * @package fanatic
 * @since 1.0.0
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'content-cards-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'content-cards';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

// ACF Fields
$content_cards                 = get_field('content_cards');

?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   
        <div class="w-full pb-2 lg:pb-[80px] container mx-auto relative -top-7">
            <?php if ($content_cards) : ?>
                <div class="!p-8 swiper card-swiper">
                    <div class="h-full swiper-wrapper">
                             <?php foreach ($content_cards as $card) :
                                $subheading = $card['subheading'];
                                $heading = $card['heading'];
                                $additional_copy = $card['copy'];
                                $image = $card['icon'];
                            ?>
                                <div class="relative w-1/3 bg-white rounded-3xl swiper-slide drop-shadow-card">
                                    
                                        <div class="flex flex-col justify-center px-10 pb-12 pt-9 lg:pt-14">
                                            <div class="flex flex-col font-heebo">
                                                <img src="<?php echo esc_url($image['url']); ?>" class="w-12 mt-0 mb-4 lg:mb-12" />
                                                <h2 class=" my-[10px] text-2xl lg:text-[30px] text-dark-purple font-bold leading-8 lg:leading-[44px]"><?php echo esc_html($heading); ?></h2>
                                                <p class="text-purple max-w-[75%] lg:max-w-[50%] text-lg lg:text-[22px] leading-6 lg:leading-7 font-medium m-0 mb-2 lg:mb-4"><?php echo esc_html($subheading); ?></p>
                                                <p class="pb-0 mt-2 mb-0 text-sm font-light leading-5 lg:leading-6 lg:text-base text-mid-grey"><?php echo wp_kses_post($additional_copy); ?></p>
                                            </div>
                                        </div>
                                  
                                </div>
                            <?php endforeach; ?> 
                    </div><!-- / .swiper-wrapper -->
                    
                </div>
            <?php endif; ?>
        
    </div>
</section>