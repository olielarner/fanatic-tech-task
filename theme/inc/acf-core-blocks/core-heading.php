<?php

add_filter('register_block_type_args', 'core_heading_block_type_args', 10, 3);

function core_heading_block_type_args($args, $name) {
    if ($name == 'core/heading') {

        $args['render_callback'] = 'modify_core_heading';
    }

    return $args;
}

function modify_core_heading($attributes, $content) {

    $className = '';

    // Get post type.
    $post_type = get_post_type();

    if ($post_type === 'post') {

        $className = 'max-w-[822px] lg:px-0';
    }

    if ($attributes['level'] === 2 || $attributes['level'] === 1) {
        return '
            <div class="container mx-auto my-8 font-bold font-display mb-6 text-2xl lg:mb-10 lg:text-[36px] lg:leading-[38px] 2xl:text-[64px] 2xl:leading-[68px] 2xl:mb-18 ' . $className . '">
            ' . $content . '
            </div>
        ';
    }

    if ($attributes['level'] === 3) {
        return '
            <div class="container mx-auto my-8 font-bold font-display mb-6 text-2xl lg:text-[36px] lg:leading-[38px] 3xl:text-[44px] 3xl:leading-[52px] ' . $className . '">
            ' . $content . '
            </div>
        ';
    }

    if ($attributes['level'] === 4) {
        return '
            <div class="container mx-auto my-8 font-bold font-display mb-6 text-2xl lg:text-[30px] lg:leading-[44px] ' . $className . '">
            ' . $content . '
            </div>
        ';
    }

    return '
        <div class="container mx-auto my-8 font-bold font-display mb-6 text-2xl lg:text-[20px] lg:leading-[34px] ' . $className . '">
        ' . $content . '
        </div>';
}
