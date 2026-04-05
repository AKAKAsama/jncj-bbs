<?php
/**
 * Title: Single Post cover with primary gradient category
 * Slug: plover/post-cover-with-primary-gradient-category
 * Categories: post-template, plover
 */
?>

<!-- wp:cover {"metadata":{"name":"Plover: Single Post cover with primary gradient category"},"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","customGradient":"linear-gradient(0deg,rgb(8,11,25) 0%,rgba(23,23,26,0.11) 88%)","contentPosition":"bottom left","ploverBlockID":"3e83fda3-ee84-4db2-9d02-b44186ae1ab3","style":{"color":{"text":"#ffffff9e"},"spacing":{"padding":{"top":"24px","right":"24px","bottom":"24px","left":"24px"}},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-left has-text-color"
    style="border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;color:#ffffff9e;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px;min-height:100%">
    <span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient"
        style="background:linear-gradient(0deg,rgb(8,11,25) 0%,rgba(23,23,26,0.11) 88%)"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"ploverBlockID":"f640f1be-c5e7-41c2-97c8-5a62d8ed95b9","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:post-terms {"term":"category","ploverBlockID":"d889a6c5-ffe0-4ae8-8a42-6b92acfe1ef9","style":{"color":{"text":"#f3f3f3"},"elements":{"link":{"color":{"text":"#f3f3f3"}}},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"var:preset|spacing|2-x-small","right":"var:preset|spacing|2-x-small"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}}},"gradient":"primary","fontSize":"small"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-title {"isLink":true,"ploverBlockID":"0ffe865c-582a-4d0b-8478-3b935c86b214","style":{"elements":{"link":{"color":{"text":"#ffffffd9"},":hover":{"color":{"text":"var:preset|color|primary-active"}}}},"color":{"text":"#ffffffd9"},"typography":{"fontSize":"28px","textDecoration":"none"}}} /-->

        <!-- wp:group {"ploverBlockID":"08d6b2e5-1d13-4a13-ab7d-d8fca3b5ca91","style":{"spacing":{"blockGap":"var:preset|spacing|2-x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group">
            <!-- wp:post-author-name {"isLink":true,"ploverBlockID":"1194f1dd-30bf-4bbf-9800-cc4f3f4af8a3","style":{"elements":{"link":{":hover":{"color":{"text":"#ffffff"}}}},"typography":{"fontSize":"14px"}}} /-->

            <!-- wp:paragraph {"ploverBlockID":"0ad030ef-1580-4367-ad8f-447ffad54929","fontSize":"small"} -->
            <p class="has-small-font-size">/</p>
            <!-- /wp:paragraph -->

            <!-- wp:post-date {"isLink":true,"ploverBlockID":"3649cf86-a7ab-4bf4-b71e-9cd65a063232","style":{"elements":{"link":{":hover":{"color":{"text":"#ffffff"}}}},"typography":{"fontSize":"14px"}}} /-->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
