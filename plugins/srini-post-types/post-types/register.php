<?php

// Announcement Post Type
function srini_register_announcement_type() {
    $labels = array(
        'name' => __('Announcements', SRINIDOMAIN),
        'singular' => __('Announcement', SRINIDOMAIN),
        'featured_image' => __('Featured Image', SRINIDOMAIN),
        'set_featured_image' => __('Set Featured Image', SRINIDOMAIN),
        'remove_featured_image' => __('Remove Featured Image', SRINIDOMAIN),
        'use_featured_image' => __('Use Featured Image', SRINIDOMAIN),
        'archives' => __( 'Announcement Archive', SRINIDOMAIN),
        'add_new' => __('Add New Announcement', SRINIDOMAIN),
        'add_new_item' => __('Add New Announcement', SRINIDOMAIN),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'announcements',
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-bell',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('announcement', $args);
}

// Event Post Type
function srini_register_event_type() {
    $labels = array(
        'name' => __('Events', SRINIDOMAIN),
        'singular' => __('Event', SRINIDOMAIN),
        'featured_image' => __('Featured Image', SRINIDOMAIN),
        'set_featured_image' => __('Set Featured Image', SRINIDOMAIN),
        'remove_featured_image' => __('Remove Featured Image', SRINIDOMAIN),
        'use_featured_image' => __('Use Featured Image', SRINIDOMAIN),
        'archives' => __( 'Event Archive', SRINIDOMAIN),
        'add_new' => __('Add New Event', SRINIDOMAIN),
        'add_new_item' => __('Add New Event', SRINIDOMAIN),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'events',
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-tickets-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('event', $args);
}

// Learning Paths Post Type
function srini_register_learning_path_type() {
    $labels = array(
        'name' => __('Learning Paths', SRINIDOMAIN),
        'singular' => __('Learning Path', SRINIDOMAIN),
        'archives' => __( 'Learning Path Archive', SRINIDOMAIN),
        'add_new' => __('Add New Learning Path', SRINIDOMAIN),
        'add_new_item' => __('Add New Learning Path', SRINIDOMAIN),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'learning-paths',
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('learning-path', $args);
}

// Book Post Type
function srini_register_book_type() {
    $labels = array(
        'name' => __('Books', SRINIDOMAIN),
        'singular' => __('Book', SRINIDOMAIN),
        'featured_image' => __('Book Image', SRINIDOMAIN),
        'set_featured_image' => __('Set Book Image', SRINIDOMAIN),
        'remove_featured_image' => __('Remove Book Image', SRINIDOMAIN),
        'use_featured_image' => __('Use Book Image', SRINIDOMAIN),
        'archives' => __( 'Book Archive', SRINIDOMAIN),
        'add_new' => __('Add New Book', SRINIDOMAIN),
        'add_new_item' => __('Add New Book', SRINIDOMAIN),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'books',
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-book',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('book', $args);
}

// CD Post Type
function srini_register_cd_type() {
    $labels = array(
        'name' => __('CDs', SRINIDOMAIN),
        'singular' => __('CD', SRINIDOMAIN),
        'featured_image' => __('CD Image', SRINIDOMAIN),
        'set_featured_image' => __('Set CD Image', SRINIDOMAIN),
        'remove_featured_image' => __('Remove CD Image', SRINIDOMAIN),
        'use_featured_image' => __('Use CD Image', SRINIDOMAIN),
        'archives' => __( 'CD Archive', SRINIDOMAIN),
        'add_new' => __('Add New CD', SRINIDOMAIN),
        'add_new_item' => __('Add New CD', SRINIDOMAIN),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'cds',
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-format-audio',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('cd', $args);
}

// Article Post Type
function srini_register_article_type() {
    $labels = array(
        'name' => __('Articles', SRINIDOMAIN),
        'singular' => __('Article', SRINIDOMAIN),
        'featured_image' => __('Article Image', SRINIDOMAIN),
        'set_featured_image' => __('Set Article Image', SRINIDOMAIN),
        'remove_featured_image' => __('Remove Article Image', SRINIDOMAIN),
        'use_featured_image' => __('Use Article Image', SRINIDOMAIN),
        'archives' => __( 'Article Archive', SRINIDOMAIN),
        'add_new' => __('Add New Article', SRINIDOMAIN),
        'add_new_item' => __('Add New Article', SRINIDOMAIN),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => 'articles',
        'rewrite' => array('has_front' => true),
        'menu_icon' => 'dashicons-media-document',
        'supports' => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('article', $args);
}
