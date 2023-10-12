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
$content         = get_field('content');
$image           = get_field('image');
$attribution     = get_field('attribution');
$show_quote_mark = get_field('show_quote_mark');
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> lg:my-11 2xl:my-24">
    <div class="container grid gap-8 mx-auto md:grid-cols-3 xl:grid-cols-5">

        <div class="p-6 bg-white md:col-span-2 xl:col-span-3 rounded-2xl lg:p-8 2xl:py-16 2xl:px-14">

            <div class="content font-light my-6 lg:my-10 2xl:text-3xl 2xl:leading-[46px]">
                <?php echo $content; ?>
            </div>

            <?php if ($attribution) : ?>
                <div class="attribution lg:text-base 2xl:text-xl">
                    <?php echo $attribution; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($image) : ?>
            <div class="md:col-span-1 xl:col-span-2">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="object-cover w-full h-full rounded-2xl">
            </div>
        <?php endif; ?>

    </div>
</section>