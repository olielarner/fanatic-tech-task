<?php

add_filter('register_block_type_args', 'core_list_block_type_args', 10, 3);

function core_list_block_type_args($args, $name) {

    if ($name == 'core/list') {
        $args['render_callback'] = 'modify_core_list';
    }
    return $args;
}

function modify_core_list($attributes, $content) {

    $post_type = get_post_type();

    if ($post_type === 'post') {
        return '
            <div class="container mx-auto my-8 max-w-[822px] lg:px-0">
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


add_filter('register_block_type_args', 'core_list_item_block_type_args', 10, 3);

function core_list_item_block_type_args($args, $name) {
    if ($name == 'core/list-item') {
        $args['render_callback'] = 'modify_core_list_item';
    }
    return $args;
}

function modify_core_list_item($attributes, $content) {


    return '
        ' . $content . '
    ';
}
