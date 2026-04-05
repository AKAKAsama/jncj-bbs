<?php
/**
 * Title: Plain single post card
 * Slug: plover/post-card-plain
 * Categories: post-template, plover
 */
?>
<!-- wp:group {"metadata":{"name":"Plover: Plain single post card"},"ploverBlockID":"fa199b25-62ac-4f51-acfd-9b2c6c2e3572","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","ploverBlockID":"a041910c-a59b-4149-987e-997592c5295c"} /-->

    <!-- wp:group {"ploverBlockID":"793d18a7-b890-47e0-b332-f49fb1435994","style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0">
        <!-- wp:spacer {"height":"0px","ploverBlockID":"9d524ba6-e4a7-4f9b-bcc3-a0ccf904b203","style":{"layout":{"flexSize":"1em","selfStretch":"fixed"}}} -->
        <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->

        <!-- wp:post-title {"isLink":true,"ploverBlockID":"86378256-f83f-472b-92c0-504140a950f4","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"fontSize":"3-x-large"} /-->

        <!-- wp:template-part {"slug":"post-meta-simpler"} /-->

        <!-- wp:post-excerpt {"excerptLength":24,"ploverBlockID":"42c18ef1-0be9-4f37-9ffa-50361f926dda","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"contrast-2","fontSize":"small"} /-->

        <!-- wp:spacer {"height":"0px","ploverBlockID":"6539f68c-f2ac-4037-aa69-1a59b143f6e6","style":{"layout":{"flexSize":"1em","selfStretch":"fixed"}}} -->
        <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
