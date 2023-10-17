<?php

/**
 * Template for the Content Cards block.
 *
 * @package bunker
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
   
        <div class="w-full pb-[80px] container mx-auto relative -top-7">
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
                                    
                                        <div class="flex flex-col justify-center px-10 pb-12 pt-14">
                                            <div class="flex flex-col font-heebo">
                                                <img src="<?php echo esc_url($image['url']); ?>" class="w-12 mt-0 mb-12" />
                                                <h2 class=" my-[10px] text-[30px] text-dark-purple font-bold leading-[44px]"><?php echo esc_html($heading); ?></h2>
                                                <p class="text-purple max-w-[50%] text-[22px] leading-7 font-medium m-0 mb-4"><?php echo esc_html($subheading); ?></p>
                                                <p class="pb-0 mt-2 mb-0 text-base font-light leading-6 text-mid-grey"><?php echo wp_kses_post($additional_copy); ?></p>
                                            </div>
                                        </div>
                                  
                                </div>
                            <?php endforeach; ?> 
                    </div><!-- / .swiper-wrapper -->
                    
                </div>
            <?php endif; ?>
        
    </div>
</section>