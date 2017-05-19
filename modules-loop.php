<?php
while ( have_posts() ) : the_post();
// check if the flexible content field has rows of data
if( have_rows('section') ):
     // loop through the rows of data
    while ( have_rows('section') ) : the_row();
		$headline = get_sub_field('sec_headline');
		$text = get_sub_field('sec_text');

		$secLabelColor = get_sub_field('sec_label_color');
		$secLabelPattern = get_sub_field('sec_label_pattern');
		$secLabelText = get_sub_field('sec_label_text');

		$secHeadlineColor = get_sub_field('sec_headline_color');
		$secHeadlinePattern = get_sub_field('sec_headline_pattern');
		$secHeadlineText = get_sub_field('sec_headline_Text');

		$leftButtonColor = get_sub_field('left_button_color');
		$leftButtonLabel = get_sub_field('left_button_label');
		$leftButtonLink = get_sub_field('left_button_link');
		$leftCustom = get_sub_field('left_button_custom_url');
		$leftInternal = get_sub_field('left_button_internal_link');
		$leftEmail = get_sub_field('left_button_mailto');


		$middleButtonColor = get_sub_field('middle_button_color');
		$middleButtonLabel = get_sub_field('middle_button_label');
		$middleButtonLink = get_sub_field('middle_button_link');
		$middleCustom = get_sub_field('middle_button_custom_url');
		$middleInternal = get_sub_field('middle_button_internal_link');
		$middleEmail = get_sub_field('middle_button_mailto');


		$rightButtonColor = get_sub_field('right_button_color');
		$rightButtonLabel = get_sub_field('right_button_label');
		$rightButtonLink = get_sub_field('right_button_link');
		$rightCustom = get_sub_field('right_button_custom_url');
		$rightInternal = get_sub_field('right_button_internal_link');
		$rightEmail = get_sub_field('right_button_mailto');

		$cardPhoto = get_sub_field('card_photo');
		$cardPhotoTransparency = get_sub_field('card_photo_transparency');
		$cardColor = get_sub_field('card_color');
		$cardPattern = get_sub_field('card_pattern');

		$photoboxOption = get_sub_field('photo_box_option');
		$photoboxImage = get_sub_field('photo_box_image');
		$photoboxImageSize = get_sub_field('photo_box_image_size');
		$mapEmbed = get_sub_field('map_embed');
		$photoboxBackgroundSize = get_sub_field('photo_box_background_size');

		$textCol1 = get_sub_field('text_col1');
		$textCol2 = get_sub_field('text_col2');
		$textCol3 = get_sub_field('text_col3');
		$colorCol1 = get_sub_field('color_col1');
		$colorCol2 = get_sub_field('color_col2');
		$patternCol1 = get_sub_field('pattern_col1');
		$patternCol2 = get_sub_field('pattern_col2');

		$addButton = get_sub_field('add_button');

		$youtubeURL = get_sub_field('youtube_video_url');

        $cardImage = get_sub_field('card_image');

        $imageCol1 = get_sub_field('image_col_1');
        $imageCol2 = get_sub_field('image_col_2');

        $cardOrnamentColor = get_sub_field('card_ornament_color');

		$guidelinesHeader = get_sub_field('guidelines_header');
		$guidelinesText = get_sub_field('guidelines_text');
		$guidelinesLearnMore = get_sub_field('guidelines_learn_more');

        $form_object = get_sub_field('select_form');
		$url = get_stylesheet_directory_uri();

		if( get_row_layout() == 'sec_label' ):
            echo '<section id="sec_label"><div class="container-fluid"><div class="row"><div class="section-label col-sm-12">';
	    	echo 		'<div class="'.$secLabelColor.'">';
	    	echo 			'<div class="section-label-border '. $secLabelPattern.'">';
	    	echo 				'<h2>' . $secLabelText . '</h2>';
	    	echo 					'<a class="section-label-button" href="'. $secLabelButtonLink .'" title="'. $secLabelButtonText .'">';
	    	echo 				'<div class="buttons-sprite buttons-icon '. $secLabelButtonIcon .'"></div>';
	    	echo 					''. $secLabelButtonText .'</a>';
	    	echo 			'</div></div></div></div></div></section>';

		elseif( get_row_layout() == 'sec_headline' ):
	        echo '<section id="sec_headline">';
            echo    '<div class="container-fluid"><div class="row">';
            echo    '<div class="section-headline col-sm-12 '. $cardColor.'">';
	        echo 	     '<div class="card-photo-wrapper" style="opacity:'.$cardPhotoTransparency.'; background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 		   '<div class="card-pattern card-pattern-relative ' . $cardPattern . '">';
	    	echo 			  '<div class="section-headline-content">';
	    	echo 				'<h2>' . $headline . '</h2>';
    	    echo 	'</div></div></div>';
	    	echo '</div></div></div></section>';

        elseif( get_row_layout() == 'intro' ):

	        echo '<section id="intro">';
            echo        '<div class="ornament-row-top">';
            echo            '<div class="ornament-fill-left '. $cardColor.'-bg"></div>';
            echo            '<div class="top-ornament"><svg width="170" height="53" class="'. $cardColor.'"><path d="M17,0C38,0,81.3,20.3,85.7,53.5l0,0C90,20.4,133.2,0,154.4,0H170v54H0V0L17,0z"></path></svg></div>';
            echo            '<div class="ornament-fill-right '. $cardColor.'-bg"></div></div>';
            echo    '<div class="container-fluid"><div class="row '. $cardColor.'-bg">';
            echo        '<div class="card-regular col-sm-12">';
	        echo           '<div class="card-photo-wrapper" style="opacity:'.$cardPhotoTransparency.'; background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 		   '<div class="card-pattern ' . $cardPattern . '"></div>';
	    	echo 		   '<div class="card-content">';
                if($headline):
	    	        echo '<h2>' . $headline . '</h2>';
                endif;
	    	echo           '<div class="large-text">'. $text . '</div>';
	    	echo 	'</div></div></div></div>';
            echo        '<div class="ornament-row-bottom">';
            echo            '<div class="ornament-fill-left"></div>';
            echo            '<div class="bottom-ornament"><svg width="170" height="53" class="'. $cardColor.'"><path d="M0-0.4l16.2,0.8c21.1,0,64.5,20.1,68.8,53.1c4.4-32.8,47.3-53.1,68.4-53.1L170-0.2L0-0.4z"></path></svg></div>';
            echo            '<div class="ornament-fill-right"></div></div>';
            echo'</section>';

		elseif( get_row_layout() == 'no_buttons' ):
	        echo '<section id="no_buttons">';
            echo    '<div class="container-fluid"><div class="row">';
            echo        '<div class="card-regular '. $cardColor.' col-sm-12">';
	        echo           '<div class="card-photo-wrapper" style="opacity:'.$cardPhotoTransparency.'; background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 		   '<div class="card-pattern ' . $cardPattern . '"></div>';
	    	echo 		   '<div class="card-content">';
                if($headline):
	    	        echo '<h2>' . $headline . '</h2>';
                endif;
	    	echo           '<div class="large-text">'. $text . '</div>';
	    	echo 	'</div></div></div></div>';
            echo'</section>';

        elseif( get_row_layout() == 'one_button' ):
	        echo '<section id="one_button"><div class="card-regular '. $cardColor.' card-one-button">';
	        echo 	'<div class="card-photo-wrapper" style="opacity:'.$cardPhotoTransparency.'; background-image:url(\'' .$cardPhoto . '\');"></div>';
	        echo 		'<div class="card-pattern ' . $cardPattern . '"></div>';
	    	echo 			'<div class="card-content">';
	    	echo 				'<h2>' . $headline . '</h2>';
	    	echo 				'<div class="large-text">'. $text .'</div>';
	    	echo 	'<div class="card-button-row">';
	    	echo 				'<a class="card-button '. $middleButtonColor .'" title="'. $middleButtonLabel .'" href="';
	    		if( $middleButtonLink == 'Custom' ):
	    		echo				''. $middleCustom . '" target="_blank">';
	    		elseif ($middleButtonLink == 'Internal' ) :
	    		echo				''. $middleInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($middleEmail).'">';
	    	endif;
	    	echo 				'<div class="buttons-sprite buttons-icon '. $middleButtonIcon .'"></div>';
	    	echo 				''. $middleButtonLabel .'</a>';
	    	echo 	'</div></div>';
	    	echo '</div></section>';

        elseif( get_row_layout() == 'two_buttons' ):
	        echo '<section id="two_buttons"><div class="card-regular '. $cardColor.' card-two-button">';
	        echo 	'<div class="card-photo-wrapper" style="opacity:'.$cardPhotoTransparency.'; background-image:url(\'' .$cardPhoto . '\');"></div>';
	        echo 		'<div class="card-pattern ' . $cardPattern . '"></div>';
	    	echo 			'<div class="card-content">';
	    	echo 				'<h2>' . $headline . '</h2>';
	    	echo 				'<div class="large-text">'. $text . '</div>';

	    	echo 	'<div class="card-button-row">';
	    	echo 				'<a class="card-button '. $leftButtonColor .'" title="'. $leftButtonLabel .'" href="';
	    		if( $leftButtonLink == 'Custom' ):
	    		echo				''. $leftCustom . '" target="_blank">';
	    		elseif ($leftButtonLink == 'Internal' ) :
	    		echo				''. $leftInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($leftEmail).'">';
	    	endif;
	    	echo 				'<div class="buttons-sprite buttons-icon '. $leftButtonIcon .'"></div>';
	    	echo 				''. $leftButtonLabel .'</a>';

	    	echo 				'<a class="card-button '. $rightButtonColor .'" title="'. $rightButtonLabel .'" href="';
	    		if( $rightButtonLink == 'Custom' ):
	    		echo				''. $rightCustom . '" target="_blank">';
	    		elseif ($rightButtonLink == 'Internal' ) :
	    		echo				''. $rightInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($rightEmail).'">';
	    	endif;
	    	echo 				'<div class="buttons-sprite buttons-icon '. $rightButtonIcon .'"></div>';
	    	echo 				''. $rightButtonLabel .'</a>';
	    	echo '</div></div></div></section>';

		elseif( get_row_layout() == 'three_buttons' ):
	        echo '<section id="three_buttons"><div class="card-regular '. $cardColor.' card-three-button">';
	        echo 	'<div class="card-photo-wrapper" style="opacity:'.$cardPhotoTransparency.'; background-image:url(\'' .$cardPhoto . '\');"></div>';
	        echo 		'<div class="card-pattern ' . $cardPattern . '"></div>';
	    	echo 			'<div class="card-content">';
                if($headline):
                    echo '<h2>' . $headline . '</h2>';
                endif;
	    	echo 				'<div class="large-text">'. $text . '</div>';

	    	echo 			'<div class="card-button-row">';
	    	echo 				'<a class="card-button '. $leftButtonColor .'" title="'. $leftButtonLabel .'" href="';
	    		if( $leftButtonLink == 'Custom' ):
	    		echo				''. $leftCustom . '" target="_blank">';
	    		elseif ($leftButtonLink == 'Internal' ) :
	    		echo				''. $leftInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($leftEmail).'">';
	    	endif;
	    	echo 				''. $leftButtonLabel .'</a>';

	    	echo 				'<a class="card-button '. $middleButtonColor .'" title="'. $middleButtonLabel .'" href="';
	    		if( $middleButtonLink == 'Custom' ):
	    		echo				''. $middleCustom . '" target="_blank">';
	    		elseif ($middleButtonLink == 'Internal' ) :
	    		echo				''. $middleInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($middleEmail).'">';
	    	endif;
	    	echo 				''. $middleButtonLabel .'</a>';

	    	echo 				'<a class="card-button '. $rightButtonColor .'" title="'. $rightButtonLabel .'" href="';
	    		if( $rightButtonLink == 'Custom' ):
	    		echo				''. $rightCustom . '" target="_blank">';
	    		elseif ($rightButtonLink == 'Internal' ) :
	    		echo				''. $rightInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($rightEmail).'">';
	    	endif;
	    	echo 				''. $rightButtonLabel .'</a>';
	    	echo '</div></div></div></section>';

		elseif( get_row_layout() == 'photo_text' ):
	        echo '<section id="photo_text"><div class="container-fluid"><div class="row">';
            echo'<div class="card-regular card_photo_text card-padding card-border col-sm-12 white-bg">';
	        echo 	'<div data-mh="photo_text" class="photo_text_photo col-sm-6 '. $photoboxBackgroundSize . '" style="background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 	'<div data-mh="photo_text" class="photo_text_text col-sm-6 '. $cardColor.' ' . $cardPattern . '">';
	    	echo 		'<p>'. $text . '</p>';
	    	echo '</div></div></div></div></section>';

		elseif( get_row_layout() == 'text_photobox' ):
	        echo '<section id="text_photobox"><div class="card-regular text-photobox card-padding card-border col-sm-12 '. $cardColor.' '. $cardPattern.'">';
	    	echo 				'<div class="col-sm-12"><h2>' . $headline . '</h2></div>';
	    	echo 			'<div class="col-sm-6">';
	    	echo 				''. $text . '';
	    		if( $addButton ):
	    	echo 				'<a class="card-button '. $middleButtonColor .'" title="'. $middleButtonLabel .'" href="';
	    		if( $middleButtonLink == 'Custom' ):
	    		echo				''. $middleCustom . '" target="_blank">';
	    		elseif ($middleButtonLink == 'Internal' ) :
	    		echo				''. $middleInternal . '">';
	    		else :
	    		echo				'mailto:'.antispambot($middleEmail).'">';
	    	endif;
	    	echo 				''. $middleButtonLabel .'</a>';
	    		endif;
	    	echo 			'</div>';
	    	echo '<div class="col-sm-6">';
	    	if( $photoboxOption == 'Map' ):
		        echo 	'<div class="photo_box"><div class="google-maps">'. $mapEmbed . '</div></div>';
		    else :
		        echo 	'<div class="photo_box '. $photoboxImageSize . '" style="background-image:url(\'' .$photoboxImage . '\');"></div>';
	    	endif;
	    	echo '</div></section>';

        elseif( get_row_layout() == 'text_one_column' ):
			echo '<section id="text_one_column">';
            echo    '<div class="container-fluid"><div class="row">';
            echo        '<div class="card-regular '.$cardColor.' col-sm-12">';
			echo 		  '<div data-mh="one_column" class="text-two-column col-sm-8">';
			echo 			''. $textCol1 .'';
			echo 		  '</div>';
            echo 		  '<div data-mh="one_column" class="text-two-column white-bg col-sm-4">';
            echo 		  '</div></div>';
	    	echo '</div></div></section>';

		elseif( get_row_layout() == 'text_two_column' ):
			echo '<section id="text_two_column">';
            echo    '<div class="container-fluid"><div class="row">';
            echo        '<div class="card-regular col-sm-12">';
			echo 		  '<div data-mh="two_column" class="text-two-column col-sm-6">';
    		echo 			      ''. $textCol1 .'';
			echo 		  '</div>';
			echo 		  '<div data-mh="two_column" class="text-two-column col-sm-6 '.$colorCol2.'">';
			echo 			     ''. $textCol2 .'';
			echo 		  '</div></div>';
	    	echo '</div></div></section>';

		elseif( get_row_layout() == 'three_text_column' ):
			echo '<section id="three_text_column">';
            echo    '<div class="container-fluid"><div class="row">';
            echo         '<div class="card-regular card-padding text-three-column col-sm-12 '. $cardColor.' ' .$cardPattern . '">';
                if($headline):
                    echo    '<div class="col-sm-12"><h2>' . $headline . '</h2></div>';
                endif;

				if( $text != '' ):
	    		echo	'<div class="large-text">'. $text . '</div>';
	    		endif;

			echo 		'<div class="col-sm-4">';
			echo 			''. $textCol1 . '';
			echo 		'</div>';
			echo 		'<div class="col-sm-4">';
			echo 			''. $textCol2 . '';
			echo 		'</div>';
			echo 		'<div class="col-sm-4">';
			echo 			''. $textCol3 . '';
			echo 		'</div>';
	    	echo '</div></div></div></section>';

		elseif( get_row_layout() == 'video' ):
	        echo '<section id="video"><div class="card-regular '. $cardColor.' col-sm-12">';
	        echo 	'<div class="card-photo-wrapper" style="background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 		'<div class="card-content">';
	    	echo 			'<div class="video-player">';
	    	echo     		'<div class="embed-container"><iframe src=\'' .$youtubeURL. '\' frameborder="0" allowfullscreen></iframe></div>';
	    	echo			'</div>';
	    	echo 		'</div>';
	    	echo '</div></section>';

        elseif( get_row_layout() == 'image' ):
	        echo '<section id="video"><div class="card-regular '. $cardColor.' col-sm-12">';
	        echo 	'<div class="card-photo-wrapper" style="background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 		'<div class="card-content">';
	    	echo 			'<div class="image-container">';
	    	echo     		'<img src='.$cardImage.'>';
	    	echo			'</div>';
	    	echo 		'</div>';
	    	echo '</div></section>';

        elseif( get_row_layout() == 'image_2col' ):
			echo '<section id="image_2col">';
            echo    '<div class="container-fluid"><div class="row">';
			echo 		  '<div class="col-sm-6">';
    		echo 			      '<img src="'. $imageCol1 .'">';
			echo 		  '</div>';
			echo 		  '<div class="col-sm-6">';
			echo 			     '<img src="'. $imageCol2 .'">';
			echo 		  '</div>';
	    	echo '</div></div></section>';

        elseif( get_row_layout() == 'text_image_bg_2col' ):
	        echo '<section id="text_image_bg_2col"><div class="card-regular '. $cardColor.' col-sm-12">';
	        echo 	'<div class="card-photo-wrapper card-photo-wrapper-right" style="background-image:url(\'' .$cardPhoto . '\');"></div>';
	    	echo 		'<div class="card-content">';
            echo            '<div class="container">';
            echo                '<div class="row">';
	    	echo 		           	'<div class="largetext col-sm-6">';
            echo                        '<h3 class="desktop-only">'. $headline .'</h3>';
            echo                        '<div class="desktop-only">'. $text .'</div>';
            echo                    '</div>';
            echo                    '<div class="col-sm-6"></div>';
	    	echo			    '</div>';
            echo            '</div>';
	    	echo 		'</div>';
	    	echo '</div></section>';



        elseif( get_row_layout() == 'stats' ):
            echo '<div class="container-fluid projIntro parent">';

            echo '    <div class="row projIntroStat child">';
            echo '        <div class="col-sm-4">';
            echo '            '.$statOne.'';
            echo '        </div>';
            echo '        <div class="col-sm-4">';
            echo '            '.$statTwo.'';
            echo '        </div>';
            echo '        <div class="col-sm-4">';
            echo '            '.$statThree.'';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';

        elseif( get_row_layout() == 'projIntro' ):
            echo '    <div class="container-fluid projIntroParagraph">';
            echo '        <div class="row">';
            echo '            <div class="col-sm-8 push-sm-2">';
            echo '                '.$projIntroText.'';
            echo '            </div>';
            echo '        </div>';
            echo '    </div>';


	 	endif;
	endwhile;
else :
    // no layouts found
endif;
endwhile;
?>
