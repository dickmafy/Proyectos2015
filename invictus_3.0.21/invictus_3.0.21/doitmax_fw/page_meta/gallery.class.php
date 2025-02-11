<?php
/* #################################################################################### */
/*
/* Class for Gallery Option Set
 *
 * @author		Dennis Osterkamp aka "doitmax"
 * @copyright	Copyright (c) Dennis Osterkamp
 * @link		http://www.do-media.de
 * @since		Version 1.0
 * @package 	Invictus
 *
 * @filedesc 	Option set to create the gallery meta box options
 *
/* #################################################################################### */

class UIElement_Gallery extends UIElement {

	public function __construct($type) {
        parent::__construct($type);
	}

	public function getMetaBox() {

		global $p_tpl, $order_array, $shortname, $taxonomies;

		$this->createMetabox(array(
			'id' => MAX_SHORTNAME.'_page_gallery_meta_box',
			'title' => __('Gallery Settings', MAX_SHORTNAME),
			'priority' => "high"
		));

		// Get Gallery Categories
		$gallery_args = array(
			'type'                     => 'post',
			'child_of'                 => 0,
			'orderby'                  => 'name',
			'order'                    => 'ASC',
			'hide_empty'               => 0,
			'hierarchical'             => 1,
			'taxonomy'                 => GALLERY_TAXONOMY,
			'pad_counts'               => false
		);
		$galleries = get_categories( $gallery_args );

		// Choose the galleries to display
		$this->addMultiGalleryCheckbox(array(
			'id' => 'max_select_gallery',
			'label' => __('Available Galleries', MAX_SHORTNAME),
			"standard" => "9999",
			"options" => 'gallery',
			"desc" => __('Choose the Galleries, you want to connect to this portfolio page.', MAX_SHORTNAME )
		));

		$this->addGroupOpen(array(
			'id' => MAX_SHORTNAME.'_page_group_sorting',
			'label' => __('Select photo order', MAX_SHORTNAME),
			"desc" => __('Select the order to show the photos of the gallery attached to this page.', MAX_SHORTNAME ),
			'float' => true,
			"display" => true
		));

			// Gallery Photo order
			$this->addDropdown(array(
				'id' => 'max_gallery_order',
				"options" => $order_array,
				"standard" => "9999",
				"float" => true
			));

			// Gallery Photo sort
			$this->addDropdown(array(
				'id' => 'max_gallery_sort',
				'label' => "",
				"options" => array('DESC'=> __('Descending', MAX_SHORTNAME), 'ASC'=> __('Ascending', MAX_SHORTNAME) ),
				"float" => true,
				"standard" => "DESC"
			));


		$this->addGroupClose(array(
			'id' => MAX_SHORTNAME.'_page_group_sorting',
			'float' => true
		));

		// galleria options - added 2.2
		if( $p_tpl == "template-galleria.php" ) {

			// Show/Hide title and excerpt
			$this->addDropdown(array(
				'id' => MAX_SHORTNAME.'_page_galleria_autoplay',
				'label' => __('Autoplay slideshow', MAX_SHORTNAME),
				"options" => array('false' => __('No', MAX_SHORTNAME),
								   'true' => __('Yes', MAX_SHORTNAME)
								   ),
				"standard" => "true",
				"desc" => __('Choose, if you want to use autoplay for the Galleria slideshow.', MAX_SHORTNAME )
			));

			$this->addSlider(array(
				'id' => MAX_SHORTNAME.'_page_galleria_autoplay_timer',
				"standard" => 3500,
				"max" => 20000,
				"min" => 1000,
				"step" => 100,
				"label" => __('Autoplay timer', MAX_SHORTNAME),
				"dependency" => MAX_SHORTNAME.'_page_galleria_autoplay::true',
				"display" => false,
				"desc" => __('Enter the value of the Galleria autoplay in ms.', MAX_SHORTNAME)
			));

			// Crop images
			$this->addDropdown(array(
				'id' => MAX_SHORTNAME.'_page_galleria_crop',
				'label' => __('Image crop', MAX_SHORTNAME),
				"options" => array('false' => __('Scale down so the entire image fits', MAX_SHORTNAME),
								   'true' => __('Images will be scaled to fill the stage, centered and cropped', MAX_SHORTNAME),
								   'width' => __('Scale the image to fill the width of the stage', MAX_SHORTNAME),
								   'height' => __('Scale the image to fill the height of the stage', MAX_SHORTNAME)
								   ),
				"standard" => "true",
				"desc" => __('Defines how the main image will be cropped inside it\'s container.', MAX_SHORTNAME )
			));

			$this->addSlider(array(
				'id' => MAX_SHORTNAME.'_page_galleria_height',
				"standard" => 640,
				"max" => 1000,
				"min" => 150,
				"step" => 1,
				"label" => __('Height of Galleria', MAX_SHORTNAME),
				"desc" => __('Enter the height of the Galleria container for your photos.', MAX_SHORTNAME)
			));

		}

		// Only show if template is a fullsize gallery template
		if( $p_tpl == "template-fullsize-gallery.php" ) {

			// Show/Hide thumbnail scroller
			$this->addDropdown(array(
				'id' => 'max_show_page_fullsize_thumbnails',
				'label' => __('Hide thumbnail scroller', MAX_SHORTNAME),
				"options" => array( 'false' => __('No', MAX_SHORTNAME),
									'true' => __('Yes', MAX_SHORTNAME)
								   ),
				"standard" => "false",
				"desc" => __('Choose, if you want to hide the thumbnail scroller for this fullsize gallery on page load by default.', MAX_SHORTNAME )
			));

			// Show/Hide title and excerpt
			$this->addDropdown(array(
				'id' => 'max_show_page_fullsize_title',
				'label' => __('Show Thumbnail Title &amp; Excerpt', MAX_SHORTNAME),
				"options" => array('false' => __('No', MAX_SHORTNAME),
								   'true' => __('Yes', MAX_SHORTNAME)
								   ),
				"standard" => "false",
				"desc" => __('Choose, if you want to show the title and excerpt on this fullsize gallery above the thumbnail scroller.', MAX_SHORTNAME )
			));

			// Show/Hide title and excerpt
			$this->addDropdown(array(
				'id' => 'max_show_page_fullsize_overlay',
				'label' => __('Show Page Title &amp; Excerpt', MAX_SHORTNAME),
				"options" => array('false' => __('No', MAX_SHORTNAME),
								   'true' => __('Yes', MAX_SHORTNAME)
								   ),
				"standard" => "false",
				"desc" => __('Choose, if you want to show the page title and excerpt as page content on top of the fullsize gallery page (remember that text might not be readable on light fullsize backgrounds).', MAX_SHORTNAME )
			));

			// Autoplay Slideshow
			$this->addDropdown(array(
				'id' => MAX_SHORTNAME.'_page_fullsize_autoplay',
				'label' => __('Autoplay Slideshow?', MAX_SHORTNAME),
				"options" => array('true' => __('Yes', MAX_SHORTNAME),
								   'false' => __('No', MAX_SHORTNAME)
								   ),
				"standard" => "true",
				"desc" => __('Check, if you want to autoplay videos on your slideshow in this fullsize gallery template.', MAX_SHORTNAME )
			));

      // Fullsize Slider Interval
			$this->addSlider(array(
				'id'        => MAX_SHORTNAME."_fullsize_interval",
				"standard"  => 8000,
				"max"       => 50000,
				"min"       => 1000,
				"step"      => 100,
				"label"     => __('Slide interval', MAX_SHORTNAME),
				"desc"      => __('The interval betweeen background slides in ms.', MAX_SHORTNAME),
			));

			// Always fit images
			$this->addDropdown(array(
				'id' => 'max_show_page_fullsize_fit',
				'label' => __('Always fit image', MAX_SHORTNAME),
				"options" => array('false' => __('No', MAX_SHORTNAME),
								   'true' => __('Yes', MAX_SHORTNAME)
								   ),
				"standard" => "false",
				"desc" => __('Check, if you want the images never exceed browser width or height and always remain their original proportions. This will overwrite the standard setting from your Invictus theme settings.', MAX_SHORTNAME )
			));

			// Always fit images
			$this->addDropdown(array(
				'id' => MAX_SHORTNAME.'_page_fullsize_overlay',
				'label' => __('Show fullsize Overlay', MAX_SHORTNAME),
				"options" => array(
          				 'true' => __('Yes', MAX_SHORTNAME),
				          'false' => __('No', MAX_SHORTNAME)
								 ),
				"standard" => "true",
				"desc" => __('Choose, if you want to show the fullsize overlay on this fullsize gallery page template.', MAX_SHORTNAME )
			));

		}

		// Only show if template is a fullsize scroller template
		if( $p_tpl == "template-scroller.php" ) {

		  $this->addDropdown(array(
				'id' => MAX_SHORTNAME.'_disable_post_lightbox',
				'label' =>  __('Disable link on images?', MAX_SHORTNAME),
				"options" => array( 'false'=> __('No', MAX_SHORTNAME), 'true'=> __('Yes', MAX_SHORTNAME) ),
				"standard" => "false",
				"desc" => __('Do you want to disable the link of a photo post in this scroller template page? Recommend if you use lightbox links. <strong>Not recommend</strong> if there are detail, video or external links, they will be removed.', MAX_SHORTNAME)
			));

		}

		// Only show if template ist not a fullsize gallery, scroller or galleria template
		if( $p_tpl != "template-scroller.php" && $p_tpl != "template-fullsize-gallery.php" && $p_tpl != "template-galleria.php" ) {

			// Posts per page
			$this->addSlider(array(
				'id' => 'max_gallery_per_page',
				"standard" => 24,
				"max" => 300,
				"min" => 4,
				"step" => 1,
				"label" => __('Photos per page', MAX_SHORTNAME),
				"desc" => __('Enter the number of photos you want to show on this template per page. More photos are loaded with infinite scroll.', MAX_SHORTNAME)
			));

			// Show Gallery Copyright Information
			$this->addDropdown(array(
				'id' => MAX_SHORTNAME.'_page_infinite_scroll',
				'label' =>  __('Use Infinite Scroll', MAX_SHORTNAME),
				"options" => array('true'=> __('Yes', MAX_SHORTNAME), 'false'=> __('No', MAX_SHORTNAME) ),
				"standard" => "false",
				"desc" => __('Choose if you want to use infinite scrolling for this portfolio template instead of the classic pagination.', MAX_SHORTNAME)
			));

		}

		// Only show if template ist not a scroller template
		if( $p_tpl != "template-grid-fullsize.php" && $p_tpl != "template-scroller.php" && $p_tpl != "template-fullsize-gallery.php" && $p_tpl != "template-galleria.php" ) {

			// Show Gallery Copyright Information
			$this->addDropdown(array(
				'id' => 'max_show_gallery_info',
				'label' =>  __('Show additional information?', MAX_SHORTNAME),
				"options" => array('true'=> __('Yes', MAX_SHORTNAME), 'false'=> __('No', MAX_SHORTNAME) ),
				"standard" => "false",
				"desc" => __('Choose if you want to show additional informations like copyright and location for the gallery on this page.', MAX_SHORTNAME)
			));

		}else{

			// Copyright disabled information
			$this->addAlert(array(
				'id' => 'max_alert_additional_information',
				'label' => __('Additional information are disabled', MAX_SHORTNAME),
				"standard" => "",
				"display" => true,
				"desc" => __('Additional information such as copyright, etc. are disabled for this page template and will not appear on the gallery page. They will only appear on the detail page of a single photo post.', MAX_SHORTNAME )
			));

		} // end of copyright

	} // end of getMetaBox()

}

?>