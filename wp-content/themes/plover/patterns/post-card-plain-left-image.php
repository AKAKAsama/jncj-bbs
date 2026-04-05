<?php
/**
 * Title: Plain single post card, left image
 * Slug: plover/post-card-plain-left-image
 * Categories: post-template, plover
 */
?>

<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Plover: Plain single post card, left image"},"ploverBlockID":"b3ed9aa0-04f2-4d90-bff8-c98ba052e7c1","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|medium"}},"border":{"bottom":{"color":"var:preset|color|neutral-400","width":"1px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns are-vertically-aligned-center"
    style="border-bottom-color:var(--wp--preset--color--neutral-400);border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--medium)">
    <!-- wp:column {"verticalAlignment":"center","width":"33.33%","ploverBlockID":"1eae2e5c-2d91-465e-b85b-b6877e6e1937"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
        <!-- wp:post-featured-image {"isLink":true,"width":"","height":"100%","ploverBlockID":"0b6f44ff-330a-4932-affb-1f164758f2f8","style":{"border":{"width":"1px"}},"borderColor":"neutral-200"} /-->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"66.66%","ploverBlockID":"c48549a7-eef0-416e-bab3-93ce9ef7437e"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
        <!-- wp:group {"ploverBlockID":"b231955d-3938-4db6-aaaf-2db7d701bb32","style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0">
            <!-- wp:post-title {"isLink":true,"ploverBlockID":"48a1ed16-345f-41aa-8759-3ba5f6c7410c","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"fontSize":"3-x-large"} /-->

            <!-- wp:template-part {"slug":"post-meta-simpler"} /-->

            <!-- wp:post-excerpt {"excerptLength":24,"ploverBlockID":"f6342bf9-66e3-4615-a500-59fbe937db3d","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"contrast-2","fontSize":"small"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
