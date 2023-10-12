<?php

add_filter('register_block_type_args', 'core_paragraph_block_type_args', 10, 3);

function core_paragraph_block_type_args($args, $name) {

    if ($name == 'core/paragraph' || $name == 'core/html' || $name == 'core/table' || $name == 'core/image' || $name == 'core/citation' || $name === 'core/quote') {
        $args['render_callback'] = 'modify_core_paragraph';
    }
    return $args;
}

function modify_core_paragraph($attributes, $content) {

    // Get post type.
    $post_type = get_post_type();

    if ($post_type === 'post') {
        return '
            <div class=" mx-auto px-8 my-8 max-w-[822px] lg:px-0">
                ' . $content . '
            </div>
        ';
    }

    return '
    <div class="container mx-auto my-8">
        ' . $content . '
    </div>
    ';
}
