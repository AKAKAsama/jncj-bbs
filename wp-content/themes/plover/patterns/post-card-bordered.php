<?php
/**
 * Title: Bordered single post card
 * Slug: plover/post-card-bordered
 * Categories: post-template, plover
 */
?>

<!-- wp:group {"metadata":{"name":"Plover: Bordered single post card"},"ploverBlockID":"f29f99f3-2d96-454e-81f3-831179ec34ee","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"width":"1px"},"spacing":{"blockGap":"0"}},"borderColor":"neutral-200","layout":{"type":"default"},"boxShadow":"var:custom|boxShadow|small"} -->
<div class="wp-block-group has-border-color has-neutral-200-border-color"
    style="border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px">
    <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","ploverBlockID":"3a881f72-61cf-419d-88db-c61d6324d481","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

    <!-- wp:group {"ploverBlockID":"a9518c2c-ef06-4beb-b942-e9c7c1b04025","style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
    <div class="wp-block-group"
        style="margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
        <!-- wp:post-terms {"term":"category","ploverBlockID":"47d09f48-0bf0-4894-86ea-f9094e333c3f","style":{"color":{"text":"#f7f7f7"},"elements":{"link":{"color":{"text":"#f7f7f7"}}},"spacing":{"padding":{"top":"0.25rem","bottom":"0.25rem","left":"var:preset|spacing|2-x-small","right":"var:preset|spacing|2-x-small"},"margin":{"bottom":"var:preset|spacing|2-x-small"}},"border":{"radius":{"topLeft":"6px","topRight":"6px","bottomLeft":"6px","bottomRight":"6px"}}},"gradient":"primary","fontSize":"small"} /-->

        <!-- wp:post-title {"isLink":true,"ploverBlockID":"ced3ee03-28dd-43f4-9c47-ef17bd35f99e","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"3-x-large"} /-->

        <!-- wp:template-part {"slug":"post-meta-simpler"} /-->

        <!-- wp:post-excerpt {"excerptLength":24,"ploverBlockID":"16386640-e217-49ed-b879-9f31a1291a09","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"contrast-2","fontSize":"small"} /-->

        <!-- wp:spacer {"height":"0px","ploverBlockID":"6a02d4f8-7f4d-41f0-8261-0d4aca6154a0","style":{"layout":{"flexSize":"1em","selfStretch":"fixed"}}} -->
        <div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
