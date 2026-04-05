<?php
/**
 * Title: List of posts, 1 columns
 * Slug: plover/posts-list
 * Categories: query, plover
 * Block Types: core/query
 */
?>
<!-- wp:query {"queryId":21,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"name":"Plover: List of posts, 1 columns","categories":["posts","plover"],"patternName":"plover/posts-list"},"ploverBlockID":"2424d350-59b2-4ccb-a53b-c9806adf0f3d","layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:query-no-results {"ploverBlockID":"b58e70ef-9629-41c9-ba35-1723faef8bec"} -->
	<!-- wp:paragraph {"align":"center","ploverBlockID":"96d1ab57-8621-45af-ac60-7ac3fa619d8a","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<p class="has-text-align-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<?php esc_html_e('No posts were found.', 'plover'); ?>
	</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:post-template {"ploverBlockID":"891c4315-d473-4aa7-946a-7aa015325a49","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default","columnCount":3}} -->
	
	<!-- wp:pattern {"slug":"plover/post-card-with-middle-image"} /-->
	 
	<!-- wp:spacer {"height":"var:preset|spacing|x-large","ploverBlockID":"6d4f34cb-9970-467b-a5c6-c74ba0a40a80"} -->
	<div style="height:var(--wp--preset--spacing--x-large)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"var:preset|spacing|40","ploverBlockID":"d353e7c4-cd48-4196-b759-5f00439b614b","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true"
		class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","ploverBlockID":"e6fe524d-f0a8-4867-9bab-921c2bf0c54b","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"ploverBlockID":"c1b165eb-2f37-4613-b855-cc4f864716ac"} /-->

	<!-- wp:query-pagination-numbers {"ploverBlockID":"40a36a00-77c0-476d-b919-dbd1bfe70ad6"} /-->

	<!-- wp:query-pagination-next {"ploverBlockID":"bafa6c33-34a4-4f91-b760-e46de5d990c5"} /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
