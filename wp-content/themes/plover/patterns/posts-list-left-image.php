<?php
/**
 * Title: List of posts, left image
 * Slug: plover/posts-list-left-image
 * Categories: query, plover
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":43,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"name":"Plover: List of posts, left image","categories":["posts"],"patternName":"plover/posts-list-left-image"},"ploverBlockID":"090bf190-7f77-4edf-83d8-97a72d34c249","layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:query-no-results {"ploverBlockID":"4cc1634b-fa63-4fe1-a46b-a456a2ad2dde"} -->
	<!-- wp:paragraph {"align":"center","ploverBlockID":"d59d1e76-19e7-4537-8dd3-b236994fad9c","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<p class="has-text-align-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<?php esc_html_e( 'No posts were found.', 'plover' ); ?>
	</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:post-template {"ploverBlockID":"734f8cfd-9b7a-434c-8c33-d49b45224eb6","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
	
	<!-- wp:pattern {"slug":"plover/post-card-plain-left-image"} /-->

	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"var:preset|spacing|40","ploverBlockID":"8d6585d7-3f5e-4dd2-9975-2c3a76c1556b","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true"
		class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","ploverBlockID":"6ad2f71e-2d58-4716-970e-3b09868d081a","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"ploverBlockID":"d7bd4edc-ea7c-4fbe-a66b-1b82f4df9a4f"} /-->

	<!-- wp:query-pagination-numbers {"ploverBlockID":"52f2afd3-c2ed-482a-8f35-1cc70a0cb69d"} /-->

	<!-- wp:query-pagination-next {"ploverBlockID":"aa790089-fba2-43fd-8d3c-083e179d5336"} /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
