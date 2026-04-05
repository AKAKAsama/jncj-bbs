<?php
/**
 * Title: Sample home page.
 * Slug: plover/page-home
 * Categories: plover-page
 * Block Types: core/post-content
 * Post Types: page
 * Template Types: home, front-page, index
 */
?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Site Wrap"},"ploverBlockID":"301a4c1b-c05d-4613-84cb-3448c31d5556","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignfull">
    <!-- wp:pattern {"slug":"plover/big-hero-header-dark"} /-->
    <!-- wp:pattern {"slug":"plover/features-with-icon-4-col"} /-->
    <!-- wp:pattern {"slug":"plover/featured-projects-3-col"} /-->

    <!-- wp:group {"ploverBlockID":"f57f5163-4938-4eef-acbc-7b6c4ca48776","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|2-x-large","bottom":"var:preset|spacing|2-x-large"},"blockGap":"var:preset|spacing|large"},"elements":{"link":{"color":{"text":"var:preset|color|neutral-950"}}}},"backgroundColor":"neutral-0","textColor":"neutral-950","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-neutral-950-color has-neutral-0-background-color has-text-color has-background has-link-color"
        style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--2-x-large);padding-bottom:var(--wp--preset--spacing--2-x-large)">
        <!-- wp:pattern {"slug":"plover/left-media-and-text"} /-->
        <!-- wp:pattern {"slug":"plover/right-media-and-text"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:pattern {"slug":"plover/dark-testimonials-4-col"} /-->
    <!-- wp:pattern {"slug":"plover/faq"} /-->
    <!-- wp:pattern {"slug":"plover/latest-3-posts"} /-->

    <!-- wp:template-part {"slug":"footer","area":"footer","tagName":"footer"} /-->
</main>
<!-- /wp:group -->

