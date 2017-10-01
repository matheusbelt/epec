<?php
	if (!headers_sent()) {
		include_once('../../../../../wp-load.php');
	}
	
	$shortcode="[tmls ";
	
	if(isset($_POST['wpml_current_lang'])) {
		$shortcode.='wpml_current_lang="'.$_POST['wpml_current_lang'].'" ';
	}
	
	if(isset($_POST['category'])) {
		$shortcode.='category="'.$_POST['category'].'" ';
	}
	
	if(isset($_POST['layout'])) {
		$shortcode.='layout="'.$_POST['layout'].'" ';
	}
	
	if(isset($_POST['style'])) {
		$shortcode.='style="'.$_POST['style'].'" ';
	}
	
	if(isset($_POST['dialog_radius'])) {
		$shortcode.='dialog_radius="'.$_POST['dialog_radius'].'" ';
	}
	
	if(isset($_POST['image_size'])) {
		$shortcode.='image_size="'.$_POST['image_size'].'" ';
	}
	
	if(isset($_POST['image_radius'])) {
		$shortcode.='image_radius="'.$_POST['image_radius'].'" ';
	}
	
	if(isset($_POST['dialogbgcolor'])) {
		$shortcode.='dialogbgcolor="'.$_POST['dialogbgcolor'].'" ';
	}
	
	if(isset($_POST['dialogbordercolor'])) {
		$shortcode.='dialogbordercolor="'.$_POST['dialogbordercolor'].'" ';
	}
	
	if(isset($_POST['text_font_family'])) {
		$shortcode.='text_font_family="'.$_POST['text_font_family'].'" ';
	}
	
	if(isset($_POST['text_font_color'])) {
		$shortcode.='text_font_color="'.$_POST['text_font_color'].'" ';
	}
	
	if(isset($_POST['text_font_size'])) {
		$shortcode.='text_font_size="'.$_POST['text_font_size'].'" ';
	}
	
	if(isset($_POST['name_font_family'])) {
		$shortcode.='name_font_family="'.$_POST['name_font_family'].'" ';
	}
	
	if(isset($_POST['name_font_color'])) {
		$shortcode.='name_font_color="'.$_POST['name_font_color'].'" ';
	}
	
	if(isset($_POST['neme_font_size'])) {
		$shortcode.='neme_font_size="'.$_POST['neme_font_size'].'" ';
	}
	
	if(isset($_POST['neme_font_weight'])) {
		$shortcode.='neme_font_weight="'.$_POST['neme_font_weight'].'" ';
	}
	
	if(isset($_POST['position_font_family'])) {
		$shortcode.='position_font_family="'.$_POST['position_font_family'].'" ';
	}
	
	if(isset($_POST['position_font_color'])) {
		$shortcode.='position_font_color="'.$_POST['position_font_color'].'" ';
	}
	
	if(isset($_POST['position_font_size'])) {
		$shortcode.='position_font_size="'.$_POST['position_font_size'].'" ';
	}
	
	if(isset($_POST['order_by'])) {
		$shortcode.='order_by="'.$_POST['order_by'].'" ';
	}
	
	if(isset($_POST['order'])) {
		$shortcode.='order="'.$_POST['order'].'" ';
	}
	
	if(isset($_POST['number'])) {
		$shortcode.='number="'.$_POST['number'].'" ';
	}
	
	if(isset($_POST['auto_play'])) {
		$shortcode.='auto_play="'.$_POST['auto_play'].'" ';
	}
	
	if(isset($_POST['transitioneffect'])) {
		$shortcode.='transitioneffect="'.$_POST['transitioneffect'].'" ';
	}
	
	if(isset($_POST['pause_on_hover'])) {
		$shortcode.='pause_on_hover="'.$_POST['pause_on_hover'].'" ';
	}
	
	if(isset($_POST['next_prev_visibility'])) {
		$shortcode.='next_prev_visibility="'.$_POST['next_prev_visibility'].'" ';
	}
	
	if(isset($_POST['next_prev_radius'])) {
		$shortcode.='next_prev_radius="'.$_POST['next_prev_radius'].'" ';
	}
	
	if(isset($_POST['next_prev_position'])) {
		$shortcode.='next_prev_position="'.$_POST['next_prev_position'].'" ';
	}
	
	if(isset($_POST['next_prev_bgcolor'])) {
		$shortcode.='next_prev_bgcolor="'.$_POST['next_prev_bgcolor'].'" ';
	}
	
	if(isset($_POST['next_prev_arrowscolor'])) {
		$shortcode.='next_prev_arrowscolor="'.$_POST['next_prev_arrowscolor'].'" ';
	}
	
	if(isset($_POST['scroll_duration'])) {
		$shortcode.='scroll_duration="'.$_POST['scroll_duration'].'" ';
	}
	
	if(isset($_POST['pause_duration'])) {
		$shortcode.='pause_duration="'.$_POST['pause_duration'].'" ';
	}
	
	if(isset($_POST['border_style'])) {
		$shortcode.='border_style="'.$_POST['border_style'].'" ';
	}
	
	if(isset($_POST['border_color'])) {
		$shortcode.='border_color="'.$_POST['border_color'].'" ';
	}
	
	if(isset($_POST['columns_number'])) {
		$shortcode.='columns_number="'.$_POST['columns_number'].'" ';
	}
	
	if(isset($_POST['ratingstars'])) {
		$shortcode.='ratingstars="'.$_POST['ratingstars'].'" ';
	}
	
	if(isset($_POST['ratingstarssize'])) {
		$shortcode.='ratingstarssize="'.$_POST['ratingstarssize'].'" ';
	}
	
	if(isset($_POST['ratingstarscolor'])) {
		$shortcode.='ratingstarscolor="'.$_POST['ratingstarscolor'].'" ';
	}
	
	if(isset($_POST['grayscale'])) {
		$shortcode.='grayscale="'.$_POST['grayscale'].'" ';
	}
	
	if(isset($_POST['slider2_unselectedoverlaybgcolor'])) {
		$shortcode.='slider2_unselectedoverlaybgcolor="'.$_POST['slider2_unselectedoverlaybgcolor'].'" ';
	}
	
	
	$shortcode.="]";
	
	echo do_shortcode( $shortcode );
?>