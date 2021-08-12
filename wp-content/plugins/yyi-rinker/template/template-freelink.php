<?php
$image_size = $this->default_image_size($atts[ 'size' ]);
$image_column = $this->getImageColumn( $image_size, false );
$image_path = $this->array_get( $meta_datas, $image_column, '' );
$size = $this->image_size_html( $image_column, $meta_datas );

$target = $this->get_rel_target_text();

$image_class = $this->getImageClass( $meta_datas[ 'size' ] );
$title_link = esc_url( $this->array_get( $meta_datas, self::FREE_TITLE_URL_COLUMN ) );
$class_name = strlen($atts['classname']) > 0 ? ' ' . esc_attr($atts['classname']) : '';
$class_name = isset($atts['design']) && $atts['design'] === 's' ? $class_name . ' yyi-rinker-design-slim' : $class_name;

$cat_ids = get_the_terms($post_id, 'yyi_rinker_cat');
if ( is_array( $cat_ids )) {
	foreach ($cat_ids as $cat_id) {
		$class_name .= ' yyi-rinker-tagid-' . intval($cat_id->term_id);
	}
}

?>
<div id="rinkerid<?php echo esc_attr( $post_id )?>" class="yyi-rinker-contents<?php echo $class_name  ?> yyi-rinker-postid-<?php echo esc_attr( $post_id )?> <?php echo esc_attr( $image_class ) ?> <?php foreach($category_classes AS $category_class ) { echo esc_attr( $category_class ) . ' '; } ?>">
	<div class="yyi-rinker-box">
		<div class="yyi-rinker-image">
			<?php if ( strlen( $title_link ) > 0 ) : ?><a href="<?php echo $title_link ?>" class="yyi-rinker-tracking" <?php echo $target ?> data-click-tracking="freelink_img <?php echo esc_attr( $post_id ) ?> <?php echo esc_attr($this->array_get( $meta_datas, self::TITLE_COLUMN ) ) ?>" data-vars-amp-click-id="freelink_img <?php echo esc_attr( $post_id ) ?> <?php echo esc_attr($this->array_get( $meta_datas, self::TITLE_COLUMN ) ) ?>"><?php endif; ?><img src="<?php echo esc_url( $image_path ); ?>" <?php echo $size ?> class="yyi-rinker-main-img" style="border: none;"><?php if ( strlen( $title_link ) > 0 ) : ?></a><?php endif; ?>
		</div>
		<div class="yyi-rinker-info">
			<div class="yyi-rinker-title">
				<div class="yyi-rinker-title">
					<?php if ( strlen( $title_link ) > 0 ) : ?><a href="<?php echo esc_url( $this->array_get( $meta_datas, self::FREE_TITLE_URL_COLUMN ) ) ?>" <?php echo $target ?> class="yyi-rinker-tracking" data-click-tracking="freelink_title <?php echo esc_attr( $post_id ) ?> <?php echo esc_attr($this->array_get( $meta_datas, self::TITLE_COLUMN ) ) ?>" data-vars-amp-click-id="freelink_title <?php echo esc_attr( $post_id ) ?> <?php echo esc_attr($this->array_get( $meta_datas, self::TITLE_COLUMN ) ) ?>"><?php endif; ?><?php echo esc_html($this->array_get( $meta_datas, self::TITLE_COLUMN ) ) ?><?php if ( strlen( $title_link ) > 0 ) : ?></a><?php endif; ?>
				</div>
			</div>
			<div class="yyi-rinker-detail">
			<?php if ( isset( $credit) ) { ?>
				<div class="credit-box"><?php echo $credit ?></div>
			<?php } ?>
			<?php if ( strlen( $meta_datas[ 'brand' ] ) > 0 ) { ?>
				<div class="brand"><?php echo esc_html( $meta_datas[ 'brand' ] ); ?></div>
			<?php } ?>
				<div class="price-box">
			<?php if ( strlen( $meta_datas[ 'price' ] ) > 0 && intval( $meta_datas[ 'price' ] ) > 0) { ?>
				<span class="price"><?php echo esc_html( '¥' . number_format( intval( $meta_datas[ 'price' ] ) ) ); ?></span>
				<?php if ( strlen( $meta_datas[ 'price_at' ] ) > 0 ) { ?>
					<span class="price_at"><?php echo esc_html( $meta_datas[ 'price_at' ] ); ?></span>
				<?php } ?>
			<?php } ?>
				</div>
			<?php if( isset( $meta_datas[ self::FREE_COMMENT_COLUMN ] ) && strlen( $meta_datas[ self::FREE_COMMENT_COLUMN ] ) > 0 ) { ?>
				<div class="free-text">
					<?php echo wp_kses_post( $meta_datas[ self::FREE_COMMENT_COLUMN ] ) ?>
				</div>
			<?php } ?>
			</div>

			<ul class="yyi-rinker-links">
				<?php if( isset( $meta_datas[ self::FREE_URL_1_COLUMN ] ) &&  strlen( $meta_datas[ self::FREE_URL_1_COLUMN ] ) > 0 ) { ?>
					<li class="freelink1">
						<?php echo ($meta_datas[ self::FREE_URL_1_COLUMN ]) ?>
					</li>
				<?php } ?>
				<?php if( isset( $meta_datas[ self::FREE_URL_3_COLUMN ] ) &&  strlen( $meta_datas[ self::FREE_URL_3_COLUMN ] ) > 0 ) { ?>
					<li class="freelink3">
						<?php echo ($meta_datas[ self::FREE_URL_3_COLUMN ]) ?>
					</li>
				<?php } ?>
				<?php if ( isset( $meta_datas[ self::FREE_URL_2_COLUMN ] ) &&  strlen( $meta_datas[  self::FREE_URL_2_COLUMN ] ) > 0 ) { ?>
					<li class="freelink2">
						<?php echo $meta_datas[ self::FREE_URL_2_COLUMN ] ?>
					</li>
				<?php } ?>
				<?php if( isset( $meta_datas[ self::FREE_URL_4_COLUMN ] ) &&  strlen( $meta_datas[ self::FREE_URL_4_COLUMN ] ) > 0 ) { ?>
					<li class="freelink4">
						<?php echo ($meta_datas[ self::FREE_URL_4_COLUMN ]) ?>
					</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
