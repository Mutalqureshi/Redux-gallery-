 function logo_slider() {

	
global $fdata;
	$html .='<div id="logo-slider" class="logo_slider logo-container">';
			$logo = $fdata['logo-gallery'] ;
			$etc = explode(",", $logo) ;
		foreach($etc as $attachmentId){ 
	        $metaAttachment = wp_get_attachment_metadata( $attachmentId );
	        $url2 =  $metaAttachment['file'];
				// echo '<pre>';
					// print_r($metaAttachment['file']);
				// echo '</pre>';
	        $url = home_url('wp-content/uploads/');
			// $post_id = get_the_ID();


			$html .='<div class="logo-slider-div">';
				$html .='<img src="'.$url . $url2.'"/>';
			$html .='</div>';
}				 
	$html .='</div>';
	return $html;

}
add_shortcode("logo_slider","logo_slider");
