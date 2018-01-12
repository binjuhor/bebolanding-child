<?php
// This section show main book in landing page
$mainbook_id = $main_style = "";
extract(shortcode_atts(array(
    'mainbook_id'	=> '',
    'main_style'    => '',
), $atts));
//Get info of this book class_padding_small
if ($main_style == 'class_padding_small') {
	$class = 'class_padding_small';
}else{
	$class = '';
}
?>
<div class="about-book-landing <?php printf('%s', $class);?>">
	<div class="book-item-intro col-md-12 col-sm-12 col-xs-12">
		<div class="book-show col-md-4 col-sm-4 col-xs-12">
			<a href="<?php echo get_post_meta($mainbook_id, '_beautheme_book_link', TRUE);?>">
				<div class="book-item">
					<div class="book-image"><?php echo get_the_post_thumbnail($mainbook_id, 'medium')?></div>
				</div><!--End book-item-->
			</a>
		</div><!--End book-show-->
		<div class="book-info-show col-md-6 col-sm-6 col-xs-12">
			<div class="book-info">
				<span class="book-name"><?php echo get_the_title($mainbook_id);?></span>
				<span class="book-author"><?php esc_html_e('by','bebo')?>: <a><?php echo esc_html(get_post_meta($mainbook_id, '_beautheme_book_author', TRUE));?></a></span>
				<span class="book-desc"><?php echo get_post_meta($mainbook_id, '_beautheme_book_description', TRUE);?></span>
				<span class="book-buy">
					<a href="<?php echo esc_url(get_post_meta($mainbook_id, '_beautheme_book_link', TRUE));?>" class="book-button"><?php echo get_post_meta($mainbook_id, '_beautheme_book_price', TRUE);?> - <?php esc_html_e('BUY BOOK','bebo');?></a>
				</span>
			</div><!--End book-info-->
		</div><!--End book-info-show-->
	</div>
</div><!--End about-book-landing-->