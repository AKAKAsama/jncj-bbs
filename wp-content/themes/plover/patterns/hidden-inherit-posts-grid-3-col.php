<?php
/**
 * Title: Inherit grid of posts, 3 columns
 * Slug: plover/hidden-inherit-posts-grid-3-col
 * Inserter: no
 */
?>
<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"ploverBlockID":"108c7886-6081-4e6c-8748-9b126b8d514e","align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">
	<!-- wp:query-no-results {"ploverBlockID":"bd30f584-8d0c-478b-8f34-e67261af500d"} -->
	<!-- wp:paragraph {"align":"center","ploverBlockID":"7cef8657-4f30-4d54-8414-bbe005cabb5a","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}}} -->
	<p class="has-text-align-center"
		style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
		<?php esc_html_e( 'No posts were found.', 'plover' ); ?>
	</p>
	<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:group {"ploverBlockID":"d0a12fda-d983-4488-9c59-28578dcdb3ac","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group"
		style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0">
		<!-- wp:post-template {"ploverBlockID":"f8c8af5e-9517-4915-b4ee-83766b1963f3","align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
		
		<!-- wp:pattern {"slug":"plover/post-card-plain"} /-->
		
		<!-- /wp:post-template -->

		<!-- wp:spacer {"height":"var:preset|spacing|40","ploverBlockID":"c300ad1d-edd2-4a4b-8fd4-5e7d5a3115ff","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--40)" aria-hidden="true"
			class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","ploverBlockID":"585e880d-25a8-47bf-81df-5d2cd5c071ff","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"ploverBlockID":"abb1d244-cb13-487f-a739-e9bb669e522e"} /-->

		<!-- wp:query-pagination-next {"ploverBlockID":"020edc30-0642-4a51-b86a-b43624eff6e2"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
