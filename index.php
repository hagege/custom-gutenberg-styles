<?php
/*
Plugin Name: Custom Gutenberg Block Styles
Plugin URI: https://github.com/Automattic/gutenberg-block-styles/
Description: Zusätzliche Block-Styles für den Block Editor
Author: Hans-Gerd Gerhards
Author URI: https://haurand.com (Quelle: Automattic)
Version: 1.2
*/



/**
 * Register Custom Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	function block_styles_register_block_styles() {
		/**
		 * Register stylesheet
		 */
		wp_register_style(
			'block-styles-stylesheet',
			plugins_url( 'style.css', __FILE__ ),
			array(),
			'1.2'
		);

		/**
		 * Register block style
		 */
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'blue-paragraph',
				'label'        => 'Absatz mit blauem Hintergrund',
				'style_handle' => 'block-styles-stylesheet',
			)
		);
        register_block_style( 
            'core/button', 
            array(
	           'name'          => 'fancy-button',
	           'label'         => 'Fancy Button',
  			   'style_handle'  => 'block-styles-stylesheet',
            )
        );
        
        register_block_style( 
            'core/list',
            array(
            	'name'         => '2col-list',
	            'label'        => '2-Spaltige Liste',
    			'style_handle' => 'block-styles-stylesheet',
            )
        );
		register_block_style(
			'core/paragraph',
			array(
				'name'         => 'full width Paragraph',
				'label'        => 'Absatz mit voller Breite',
				'style_handle' => 'block-styles-stylesheet',
			)
		);
        register_block_style(
			'core/heading',
			array(
	           'name'          => 'gradient-headline',
	           'label'         => 'Gradient Überschrift',
			   'style_handle'  => 'block-styles-stylesheet',
          	)
		);
      
        
        
	}
    

	add_action( 'init', 'block_styles_register_block_styles' );
}


register_block_pattern(
'cgs-card-pattern',
array(
  'title' => __( '3 Columns with Cards', 'cgs-block-pattern' ),
  'description' => _x( 'Three Columns with Cards', 'Three Columns with Cards', 'cgs-block-pattern' ),
  'categories' => array('columns'),
  'content' => "<!-- wp:columns -->
        <div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"kachel_spalte\"} -->
        <div class=\"wp-block-column kachel_spalte\"><!-- wp:heading {\"align\":\"center\"} -->
        <h2 class=\"has-text-align-center\" id=\"h-kontakt\">Kontakt</h2>
        <!-- /wp:heading -->
        
        <!-- wp:image {\"align\":\"center\",\"id\":2756,\"width\":200,\"height\":200,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
        <div class=\"wp-block-image is-style-rounded\"><figure class=\"aligncenter size-large is-resized\"><a href=\"https://haurand.com/kontakt-2/\"><img src=\"https://haurand.com/wp-content/uploads/2020/09/pexels-photo-4240498.jpeg\" alt=\"\" class=\"wp-image-2756\" width=\"200\" height=\"200\"/></a></figure></div>
        <!-- /wp:image -->
        
        <!-- wp:paragraph {\"align\":\"center\"} -->
        <p class=\"has-text-align-center\">Nehmen Sie jetzt Kontakt zu uns auf.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {\"align\":\"center\"} -->
        <div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#f60012\"}}} -->
        <div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background no-border-radius\" href=\"https://haurand.com/kontakt-2/\" style=\"background-color:#f60012\">Mehr Infos</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {\"className\":\"kachel_spalte\"} -->
        <div class=\"wp-block-column kachel_spalte\"><!-- wp:heading {\"align\":\"center\"} -->
        <h2 class=\"has-text-align-center\" id=\"h-ihre-webseite\">Ihre Webseite</h2>
        <!-- /wp:heading -->
        
        <!-- wp:image {\"align\":\"center\",\"id\":2755,\"width\":200,\"height\":200,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
        <div class=\"wp-block-image is-style-rounded\"><figure class=\"aligncenter size-large is-resized\"><a href=\"https://haurand.com/ihre-neue-webseite-einfach-passend/\"><img src=\"https://haurand.com/wp-content/uploads/2020/09/ecommerce-2140603_640.jpg\" alt=\"\" class=\"wp-image-2755\" width=\"200\" height=\"200\"/></a></figure></div>
        <!-- /wp:image -->
        
        <!-- wp:paragraph {\"align\":\"center\"} -->
        <p class=\"has-text-align-center\">Einfach passende Webseiten.</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {\"align\":\"center\"} -->
        <div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#f60012\"}}} -->
        <div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background no-border-radius\" href=\"https://haurand.com/ihre-neue-webseite-einfach-passend/\" style=\"background-color:#f60012\">Mehr Infos</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {\"className\":\"kachel_spalte\"} -->
        <div class=\"wp-block-column kachel_spalte\"><!-- wp:heading {\"align\":\"center\"} -->
        <h2 class=\"has-text-align-center\" id=\"h-zum-blog\">zum Blog</h2>
        <!-- /wp:heading -->
        
        <!-- wp:image {\"align\":\"center\",\"id\":2754,\"width\":200,\"height\":200,\"sizeSlug\":\"large\",\"className\":\"is-style-rounded\"} -->
        <div class=\"wp-block-image is-style-rounded\"><figure class=\"aligncenter size-large is-resized\"><a href=\"https://haurand.com/category/allgemein/\"><img src=\"https://haurand.com/wp-content/uploads/2020/09/Blog.jpg\" alt=\"\" class=\"wp-image-2754\" width=\"200\" height=\"200\"/></a></figure></div>
        <!-- /wp:image -->
        
        <!-- wp:paragraph {\"align\":\"center\"} -->
        <p class=\"has-text-align-center\">Tipps zu WordPress und Entwicklung</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {\"align\":\"center\"} -->
        <div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"borderRadius\":0,\"style\":{\"color\":{\"background\":\"#f60012\"}}} -->
        <div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background no-border-radius\" href=\"https://haurand.com/category/allgemein/\" style=\"background-color:#f60012\">Mehr Infos</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --> ",
  ) 
);


register_block_pattern(
   'ks-card-pattern',
     array(
     'title' => __( '2 Columns with Cards', 'ks-block-pattern' ),
     'description' => _x( 'Two Columns with Cards', 'Two Columns with Cards', 'ks-block-pattern' ),
     'categories'  => array('columns'),
     'content'     => "<!-- wp:columns -->
         <div class=\"wp-block-columns\"><!-- wp:column {\"className\":\"cards-container\"} -->
         <div class=\"wp-block-column cards-container\"><!-- wp:group {\"className\":\"card-item\"} -->
         <div class=\"wp-block-group card-item\"><div class=\"wp-block-group__inner-container\"><!-- wp:image {\"id\":37554,\"sizeSlug\":\"large\"} -->
         <figure class=\"wp-block-image size-large\"><img src=\"https://die-netzialisten.de/wp-content/uploads/2020/06/rechteck.png\" alt=\"\" class=\"wp-image-37554\"/></figure>
         <!-- /wp:image -->
        
         <!-- wp:heading {\"level\":3} -->
         <h3>Hugo</h3>
         <!-- /wp:heading -->
        
         <!-- wp:list -->
         <ul><li>Ein bauchiges Weinglas zu 1/3 mit Eiswürfeln füllen</li><li>Ein paar Blätter frische Minze</li><li>2cl&nbsp;Holunderblütensirup</li><li>2 Viertel einer Bio-Limette (etwas Saft ausdrücken)</li><li>15 ml Prosecco oder Sekt </li><li>Ein Schuss Mineralwasser</li></ul>
         <!-- /wp:list -->
         </div></div>
         <!-- /wp:group --></div>
         <!-- /wp:column -->
        
         <!-- wp:column {\"className\":\"cards-container\"} -->
         <div class=\"wp-block-column cards-container\"><!-- wp:group {\"className\":\"card-item\"} -->
         <div class=\"wp-block-group card-item\"><div class=\"wp-block-group__inner-container\"><!-- wp:image {\"id\":37554,\"sizeSlug\":\"large\"} -->
         <figure class=\"wp-block-image size-large\"><img src=\"https://die-netzialisten.de/wp-content/uploads/2020/06/rechteck.png\" alt=\"\" class=\"wp-image-37554\"/></figure>
         <!-- /wp:image -->
        
         <!-- wp:heading {\"level\":3} -->
         <h3>Apérol Sprizz</h3>
         <!-- /wp:heading -->
        
         <!-- wp:list -->
         <ul><li>Ein bauchiges Weinglas zu 1/3 mit Eiswürfeln füllen</li><li>2 Scheiben einer 1 Bio-Orange</li><li>1 Teil Aperol</li><li>2 Teile Sekt</li><li>Mit Mineralwasser auffüllen</li></ul>
         <!-- /wp:list -->
        
         </div></div>
         <!-- /wp:group --></div>
         <!-- /wp:column --></div>
         <!-- /wp:columns -->",
   )
 );