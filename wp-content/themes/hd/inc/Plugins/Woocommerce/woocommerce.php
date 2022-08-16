<?php

if (!defined('ABSPATH')) {
	exit;
}

// ----------------------------------------

/**
 * Show an archive description on taxonomy archives.
 */
function woocommerce_taxonomy_archive_description() {
    // Don't display the description on search results page.
    if ( is_search() ) {
        return;
    }

    if ( is_product_taxonomy() && 0 === absint( get_query_var( 'paged' ) ) ) {
        $term = get_queried_object();
        if ( $term ) {

            $seo_desc = null;
            if (function_exists('get_fields')) {
                $ACF = get_fields($term);
                isset($ACF['seo_desc']) && $seo_desc = $ACF['seo_desc'];
            }

            $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true );

            /**
             * Filters the archive's raw description on taxonomy archives.
             *
             * @since 6.7.0
             *
             * @param string  $term_description Raw description text.
             * @param WP_Term $term             Term object for this taxonomy archive.
             */
            $term_description = apply_filters( 'woocommerce_taxonomy_archive_description_raw', $term->description, $term );

            //if ( $thumbnail_id  || $seo_desc || $term_description) {
            if ( $seo_desc || $term_description) {
                echo '<div class="woo-description">';
                if ($thumbnail_id) :
                    echo '<div class="term-thumb">' . wp_get_attachment_image($thumbnail_id, 'post-thumbnail') . '</div>';
                endif;
                if ($term_description) :
                    echo '<div class="term-description">' . wc_format_content( wp_kses_post( $term_description ) ) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                endif;
                if ($seo_desc) :
                    $seo = get_post($seo_desc);
                    echo '<div class="seo-description">' . get_the_content(null, false, $seo) . '</div>';
                endif;
                echo '</div>';
            }
        }
    }
}

// ----------------------------------------

/**
 * Show a shop page description on product archives.
 */
function woocommerce_product_archive_description() {
    // Don't display the description on search results page.
    if ( is_search() ) {
        return;
    }

    if ( is_post_type_archive( 'product' ) && in_array( absint( get_query_var( 'paged' ) ), array( 0, 1 ), true ) ) {
        $shop_page = get_post( wc_get_page_id( 'shop' ) );
        if ( $shop_page ) {

            $allowed_html = wp_kses_allowed_html( 'post' );

            // This is needed for the search product block to work.
            $allowed_html = array_merge(
                $allowed_html,
                array(
                    'form'   => array(
                        'action'         => true,
                        'accept'         => true,
                        'accept-charset' => true,
                        'enctype'        => true,
                        'method'         => true,
                        'name'           => true,
                        'target'         => true,
                    ),

                    'input'  => array(
                        'type'        => true,
                        'id'          => true,
                        'class'       => true,
                        'placeholder' => true,
                        'name'        => true,
                        'value'       => true,
                    ),

                    'button' => array(
                        'type'  => true,
                        'class' => true,
                        'label' => true,
                    ),

                    'svg'    => array(
                        'hidden'    => true,
                        'role'      => true,
                        'focusable' => true,
                        'xmlns'     => true,
                        'width'     => true,
                        'height'    => true,
                        'viewbox'   => true,
                    ),
                    'path'   => array(
                        'd' => true,
                    ),
                )
            );

            $post_thumbnail = get_the_post_thumbnail($shop_page, 'post-thumbnail');
            $description = wc_format_content( wp_kses( $shop_page->post_content, $allowed_html ) );
            //if ( $description  || $post_thumbnail) {
            if ( $description) {
                echo '<div class="woo-description">';
                if ($post_thumbnail) :
                    echo '<div class="page-thumb">' . $post_thumbnail . '</div>';
                endif;
                if ($description) :
                echo '<div class="page-description">' . $description . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                endif;
                echo '</div>';
            }
        }
    }
}

// ----------------------------------------

if (!function_exists('woo_cart_available')) {
	/**
	 * Validates whether the Woo Cart instance is available in the request
	 *
	 * @return bool
	 */
	function woo_cart_available()
	{
		$woo = WC();
		return $woo instanceof \WooCommerce && $woo->cart instanceof \WC_Cart;
	}
}

// ----------------------------------------

if (!function_exists('woo_cart_link_fragment')) {

	add_filter( 'woocommerce_add_to_cart_fragments', 'woo_cart_link_fragment', 11, 1 );

	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array            Fragments to refresh via AJAX
	 */
	function woo_cart_link_fragment($fragments)
	{
		global $woocommerce;

		ob_start();
		woo_cart_link();
		$fragments['a.header-cart-contents'] = ob_get_clean();

		ob_start();
		woo_handheld_footer_bar_cart_link();
		$fragments['a.footer-cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

// ----------------------------------------

if (!function_exists('woo_handheld_footer_bar_cart_link')) {
	/**
	 * The cart callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function woo_handheld_footer_bar_cart_link()
	{
		if (!woo_cart_available()) {
			return;
		}
		?>
		<a class="footer-cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('View your shopping cart', 'hd'); ?>">
			<span class="count"><?php echo wp_kses_data(WC()->cart->get_cart_contents_count()); ?></span>
		</a>
		<?php
	}
}

// ----------------------------------------

if (!function_exists('woo_cart_link')) {

	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 * @return void
	 * @since  1.0.0
	 */
	function woo_cart_link()
	{
		if (!woo_cart_available()) {
			return;
		}
		?>
		<a class="header-cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php echo esc_attr__('View your shopping cart', 'hd'); ?>">
			<?php echo wp_kses_post(WC()->cart->get_cart_subtotal()); ?>
			<span class="icon" data-glyph=""></span>
			<span class="count"><?php echo wp_kses_data(sprintf('%d', WC()->cart->get_cart_contents_count())); ?></span>
            <span class="txt"><?php echo __( 'Cart', 'hd')?></span>
		</a>
		<?php
	}
}

// -------------------------------------------------------------

if (!function_exists('woo_header_cart')) {
	/**
	 * Display Header Cart
	 *
	 * @return void
	 * @uses  woocommerce_activated() check if WooCommerce is activated
	 * @since  1.0.0
	 */
	function woo_header_cart()
	{
		if (class_exists( '\WooCommerce' )) {
			if (is_cart()) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
			?>
			<ul id="site-header-cart" class="site-header-cart menu">
				<li class="<?php echo esc_attr($class); ?>">
					<?php woo_cart_link(); ?>
				</li>
				<li class="widget-menu-item">
					<?php the_widget('WC_Widget_Cart', 'title='); ?>
				</li>
			</ul>
			<?php
		}
	}
}

// -------------------------------------------------------------

if (!function_exists('woo_get_gallery_image_html')) {
	/**
	 * @param      $attachment_id
	 * @param bool $main_image
	 *
	 * @return string
	 */
	function woo_get_gallery_image_html($attachment_id, $main_image = false)
	{
		$flexslider = (bool)apply_filters(
			'woocommerce_single_product_flexslider_enabled',
			get_theme_support('wc-product-gallery-slider')
		);
		$gallery_thumbnail = wc_get_image_size('gallery_thumbnail');
		$thumbnail_size = apply_filters('woocommerce_gallery_thumbnail_size', array(
			$gallery_thumbnail['width'],
			$gallery_thumbnail['height']
		));

		$image_size = apply_filters(
			'woocommerce_gallery_image_size',
			$flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size
		);
		$full_size = apply_filters(
			'woocommerce_gallery_full_size',
			apply_filters('woocommerce_product_thumbnails_large_size', 'full')
		);
		$thumbnail_src = wp_get_attachment_image_src($attachment_id, $thumbnail_size);
		$full_src = wp_get_attachment_image_src($attachment_id, $full_size);
		$alt_text = trim(wp_strip_all_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)));
		$image = wp_get_attachment_image(
			$attachment_id,
			$image_size,
			false,
			apply_filters(
				'woocommerce_gallery_image_html_attachment_image_params',
				array(
					'title' => _wp_specialchars(
						get_post_field('post_title', $attachment_id),
						ENT_QUOTES,
						'UTF-8',
						true
					),
					'data-caption' => _wp_specialchars(
						get_post_field('post_excerpt', $attachment_id),
						ENT_QUOTES,
						'UTF-8',
						true
					),
					'data-src' => esc_url($full_src[0]),
					'data-large_image' => esc_url($full_src[0]),
					'data-large_image_width' => esc_attr($full_src[1]),
					'data-large_image_height' => esc_attr($full_src[2]),
					'class' => esc_attr($main_image ? 'wp-post-image' : ''),
				),
				$attachment_id,
				$image_size,
				$main_image
			)
		);
		$ratio = get_theme_mod_ssl('product_menu_setting');
		$ratio_class = $ratio;
		if ($ratio == 'default' || empty($ratio)) {
			$ratio_class = '1v1';
		}

		return '<div data-thumb="' . esc_url($thumbnail_src[0]) . '" data-thumb-alt="' . esc_attr($alt_text) . '" class="woocommerce-product-gallery__image"><a class="res auto ratio-' . $ratio_class . '" href="' . esc_url($full_src[0]) . '">' . $image . '</a></div>';
	}
}

// -------------------------------------------------------------

if ( ! function_exists( 'sale_flash_percent' ) ) {
    /**
     * @param $product
     * @return float
     */
    function sale_flash_percent($product)
    {
        $percent_off = 0;
        if ($product->is_on_sale()) {
            $regular_price = wc_get_price_to_display($product, ['price' => $product->get_regular_price()]);
            $sale_price = wc_get_price_to_display($product);
            $percent_off = (($regular_price - $sale_price) / $regular_price) * 100;
        }

        return round($percent_off);
    }
}

// -------------------------------------------------------------

if ( ! function_exists( 'woocommerce_template_loop_quick_view' ) ) {

    /**
     * Get the quick view template for the loop.
     *
     * @param array $args Arguments.
     */
    function woocommerce_template_loop_quick_view( $args = [] ) {
        global $product;

        if ( $product ) {
            $defaults = array(
                'class'      => implode(
                    ' ',
                    array_filter(
                        array(
                            'button',
                            'product_type_' . $product->get_type()
                        )
                    )
                ),
                'attributes' => array(
                    'data-product_id'  => $product->get_id(),
                    'aria-label'       => __( 'Quick View', 'hd' ),
                    'rel'              => 'nofollow',
                ),
            );

            $args = apply_filters( 'woocommerce_loop_quick_view_args', wp_parse_args( $args, $defaults ), $product );

            if ( isset( $args['attributes']['aria-label'] ) ) {
                $args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
            }

            wc_get_template( 'loop/quick-view.php', $args );
        }
    }
}

// -------------------------------------------------------------

if ( ! function_exists( 'woocommerce_template_single_meta_sku' ) ) {

    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta_sku', 9 );

    /**
     * Output the product meta.
     */
    function woocommerce_template_single_meta_sku() {
        wc_get_template( 'single-product/meta_sku.php' );
    }
}

// -------------------------------------------------------------

if ( ! function_exists( 'woocommerce_output_recently_viewed_products' ) ) {

    add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_recently_viewed_products', 25 );
    add_action( 'woocommerce_after_shop_loop', 'woocommerce_output_recently_viewed_products', 19 );

    /**
     * Output the product sale flash.
     */
    function woocommerce_output_recently_viewed_products() {
        wc_get_template( 'single-product/recently_viewed.php' );
    }
}