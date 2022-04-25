<?php

// create podcast post types > MauFerrusca
function podcast_post_types()
{
  register_post_type('podcast', array(
    'public' => true,
    'labels' => array(
      'name' => 'Podcasts',
      'add_new_item'  => 'Add New Podcast',
      'edit_item'  => 'Edit Podcast',
      'all_items' => 'All Podcasts',
      'singular_name' => 'Podcast'

    ),
    'menu_icon' => 'dashicons-format-audio'
  ));
}

add_action('init', 'podcast_post_types');