<?php

  function getPostLinkText($direction) {
    return "<i class='fa fa-chevron-$direction'></i>";
  }

  function getPreviousPortfolioLink() {
    if( get_adjacent_post(false, '', true) ) {
      previous_post_link('%link', getPostLinkText('left'));
    } else {
        $args = array('post_type' => 'portfolio', 'posts_per_page' => '1', 'order' => 'DESC');
        $first = new WP_Query($args);
        $first->the_post();
          echo '<a href="' . get_permalink() . '">' . getPostLinkText('left') . '</a>';
        wp_reset_query();
    };
  }

  function getNextPortfolioLink() {
    if( get_adjacent_post(false, '', false) ) {
      next_post_link('%link', getPostLinkText('right'));
    } else {
        $args = array('post_type' => 'portfolio', 'posts_per_page' => 1, 'order' => 'ASC');
        $last = new WP_Query($args);
        $last->the_post();
          echo '<a href="' . get_permalink() . '">' . getPostLinkText('right') . '</a>';
        wp_reset_query();
    };
  }

?>
