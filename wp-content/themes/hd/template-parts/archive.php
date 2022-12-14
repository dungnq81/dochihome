<?php

\defined( '\WPINC' ) || die;

use Webhd\Helpers\Str;

$post_page_id = get_option( 'page_for_posts' );
$term = get_queried_object();

if ( $post_page_id && $post_page_id == $term->ID ) { // is posts page
	$desc = post_excerpt( $term, null );
} else {
	$desc = term_excerpt( $term, null );
}

// template-parts/parts/page-title.php
the_page_title_theme();

$archive_title = $term->name ?? '';
if (is_search()) {
    $archive_title = sprintf( __( 'Search Results for: %s', 'hd' ), get_search_query() );
}

?>
<section class="section archives archive-posts">
    <?php if ( Str::stripSpace( $desc ) ) : ?>
    <div class="grid-container">
        <div class="archive-desc heading-desc" data-glyph=""><?= $desc ?></div>
    </div>
    <?php endif; ?>
    <div class="feature-posts">
        <?php get_template_part( 'template-parts/posts/feature-slides' ); ?>
    </div>
    <div class="grid-container width-extra">
		<?php get_template_part( 'template-parts/posts/grid' ); ?>
    </div>
</section>