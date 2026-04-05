<?php
/**
 * Title: Single post card with border, shadow and background
 * Slug: plover/post-card-with-background
 * Categories: post-template, plover
 */
?>

<!-- wp:group {"metadata":{"name":"Plover: Single post card with border, shadow and background"},"ploverBlockID":"3e55d6ac-bd12-4fe0-998d-dffedc517127","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"12px","bottomRight":"12px"},"width":"1px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"neutral-0","borderColor":"neutral-400","layout":{"type":"default"},"boxShadow":"0px 9px 19px -8px rgba(0,0,0,0.1),0 4px 4px -10px rgba(0,0,0,0.1)"} -->
<div class="wp-block-group has-border-color has-neutral-400-border-color has-neutral-0-background-color has-background"
	style="border-width:1px;border-top-left-radius:12px;border-top-right-radius:12px;border-bottom-left-radius:12px;border-bottom-right-radius:12px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","ploverBlockID":"a2a3ab88-013c-4c14-8836-da6fc9e654d4","style":{"border":{"radius":{"topLeft":"12px","topRight":"12px","bottomLeft":"0px","bottomRight":"0px"}}}} /-->

	<!-- wp:group {"ploverBlockID":"f2eda63f-3922-42d2-a820-7c13a7192459","style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
	<div class="wp-block-group"
		style="margin-top:var(--wp--preset--spacing--20);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
		<!-- wp:post-title {"isLink":true,"ploverBlockID":"dd5cecdd-b63d-412c-af3b-91736a2f950d","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"},"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.5","textDecoration":"none"}},"fontSize":"2-x-large"} /-->

		<!-- wp:template-part {"slug":"post-meta-simpler"} /-->

		<!-- wp:post-excerpt {"excerptLength":24,"ploverBlockID":"4c2efa78-2dbe-4b96-bc86-c5dad8f2c410","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"contrast-2","fontSize":"small"} /-->

		<!-- wp:spacer {"height":"0px","ploverBlockID":"b212e718-e0b4-453d-a034-4006f0916063","style":{"layout":{"flexSize":"1em","selfStretch":"fixed"}}} -->
		<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
