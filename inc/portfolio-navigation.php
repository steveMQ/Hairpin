<?php

  function getPostLinkIcon($direction) {
    return "<i class='fa fa-chevron-$direction'></i>";
  }

  function previousPortfolioLink() {
    if( get_previous_post() ) {
      previous_post_link('%link', getPostLinkIcon('left'));
    } else {
        $args = array('post_type' => 'portfolio', 'posts_per_page' => '1', 'order' => 'DESC');
        $first = new WP_Query($args);
        $first->the_post();
        echo '<a rel="prev" href="' . get_permalink() . '">' . getPostLinkIcon('left') . '</a>';
        wp_reset_query();
    };
  }

  function nextPortfolioLink() {
    if( get_next_post() ) {
      next_post_link('%link', getPostLinkIcon('right'));
    } else {
        $args = array('post_type' => 'portfolio', 'posts_per_page' => 1, 'order' => 'ASC');
        $last = new WP_Query($args);
        $last->the_post();
        echo '<a rel="next" href="' . get_permalink() . '">' . getPostLinkIcon('right') . '</a>';
        wp_reset_query();
    };
  }

?>
