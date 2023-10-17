<?php

/**
 * Template for the Text Card with Image Aside block.
 *
 * @package bunker
 * @since 1.0.0
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'text-image-and-cta-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'text-image-and-cta';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

// ACF Fields
$heading         = get_field('heading');
$subheading      = get_field('subheading');
$main_copy       = get_field('main_copy');
$image           = get_field('main_image');
$ctas             = get_field('cta');
$alignment       = get_field('alignment');


?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mb-[100px]">
    <div class="container pl-[130px] flex flex-row mx-auto">

        <div class="flex flex-col justify-center w-2/5 max-w-[397px] bg-white">
            <?php if ($heading) : ?>
                <h2 class="mt-0 mb-2 text-4xl leading-[52px] text-dark-purple font-heebo font-bold"><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <?php if ($subheading) : ?>
                <p class="text-[22px] font-heebo font-medium text-purple leading-8 m-0 pb-4"><?php echo esc_html($subheading); ?></p>
            <?php endif; ?>
            <?php if ($main_copy) : ?>
                <p class="mt-0 font-light leading-6 font-base text-mid-grey mb-9"><?php echo esc_html($main_copy); ?></p>
            <?php endif; ?>
            <?php if ($ctas) : ?>
                <div class="flex">
                <?php foreach($ctas as $cta) : ?>
                    <a href="<?php echo esc_url($cta['link']['url']); ?>" class="cta mr-4 font-heebo <?php if($cta['colour'] === 'transparent') echo 'clear-bg-purp-border'; ?>"><?php echo esc_html($cta['link']['title']); ?></a>
                <?php endforeach; ?>   
                </div>
            <?php endif; ?>
                
        </div>

        <?php if ($image) : ?>
            <div class="w-3/5 max-w-[685px] ml-[100px]">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="object-cover w-full h-full my-0 rounded-2xl">
            </div>
        <?php endif; ?>

    </div>
</section>