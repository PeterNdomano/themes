<?php
/**
 * Posts list
 */
return array(
	'title'      => __( 'Posts list', 'remote' ),
	'categories' => array( 'query' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null},"tagName":"main","align":"wide"} -->
    <main class="wp-block-query alignwide"><!-- wp:post-template -->
    <!-- wp:separator {"className":"is-style-wide"} -->
    <hr class="wp-block-separator is-style-wide"/>
    <!-- /wp:separator -->

    <!-- wp:columns {"style":{"spacing":{"padding":{"top":"1em"}}}} -->
    <div class="wp-block-columns" style="padding-top:1em"><!-- wp:column {"verticalAlignment":"top","width":"10%"} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:10%"><!-- wp:post-date {"format":"M j","fontSize":"small"} /--></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":""} -->
    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"fontSize":"clamp(3rem, 6vw, 4rem)"}}} /--></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->
    <!-- /wp:post-template -->

    <!-- wp:spacer {"height":"32px"} -->
    <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:query-pagination -->
    <!-- wp:query-pagination-previous /-->
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination --></main>
    <!-- /wp:query --></div>
    <!-- /wp:group -->',
);
