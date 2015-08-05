
    <style>
    #wrapper {
        background: <?php if($theme_options['background_color']) {
            echo $theme_options['background_color'];
        };
        ?>
    }
    #wrapper{
        color: <?php if($theme_options['text_color']) {
            echo $theme_options['text_color'];
        };        
        ?>
    }
    #wrapper header#header{
        background: <?php if($theme_options['menu_background']){
            echo $theme_options['menu_background'];
        };
        ?>
    }
    #wrapper #menu div ul li a{
        color: <?php if($theme_options['menu_items']){
            echo $theme_options['menu_items'];  
        };
        ?>
    }
    #wrapper .wrapper-fixed{
        background: <?php if($theme_options['menu_background']){
            echo $theme_options['menu_background'];  
        };
        ?>
    }
    #wrapper .btn, #wrapper .read-more, #wrapper input[type="submit"]{
        background: <?php if($theme_options['button_color']){
            echo $theme_options['button_color'];  
        }
        ?>
    }
    #wrapper .contactbtn, #wrapper .read-more, #wrapper input[type="submit"]{
        color: <?php if($theme_options['button_font_color']){
            echo $theme_options['button_font_color'];  
        };
        ?>
    }
    #wrapper .service .icon{
        background: <?php if($theme_options['service_icon_bg']){
            echo $theme_options['service_icon_bg'];  
        }
        ?>
    }
    #wrapper .service .icon:before{
        color: <?php if($theme_options['service_icons']){
            echo $theme_options['service_icons'];  
        };
        ?>
    }
    #wrapper .project-page h2{
        background: <?php if($theme_options['title_overlay_bg']){
            $hex = $theme_options['title_overlay_bg'];    
            $rgba = hex2rgba($hex, 0.7);
            
            echo $rgba .';';
        };
        ?>
        <?php if($theme_options['toggle_overlay_shadow']){
            echo 'text-shadow: rgba(0, 0, 0, 0.3) 2px 2px 2px;';   
        };
        ?>
    }
    #wrapper .project-page h2 a{
        color: <?php if($theme_options['title_overlay_text']){
            echo $theme_options['title_overlay_text'];  
        };
        ?>
    }
    #wrapper h1{
        color: <?php if($theme_options['headerh1_color']){
            echo $theme_options['headerh1_color'];  
        };
        ?>
    }
    #wrapper h2{
        color: <?php if($theme_options['headerh2_color']){
            echo $theme_options['headerh2_color'];  
        };
        ?>
    }
    #wrapper h2 a, #wrapper h3{
        color: <?php if($theme_options['headerh3_color']){
            echo $theme_options['headerh3_color'];  
        };
        ?>
    }
    #wrapper a{
        color: <?php if($theme_options['link_color']){
            echo $theme_options['link_color'];  
        };
        ?>
    }
    #wrapper footer#footer{
        background: <?php if($theme_options['footer_bg_color']){
            echo $theme_options['footer_bg_color'];  
        };
        ?>
    }
    #wrapper footer#footer h1{
        color: <?php if($theme_options['footer_header_color']){
            echo $theme_options['footer_header_color'];  
        };
        ?>
    }
    #wrapper footer#footer a{
        color: <?php if($theme_options['footer_link_color']){
            echo $theme_options['footer_link_color'];  
        };
        ?>
    }
    #wrapper footer#footer ul a, #wrapper footer#footer{
        color: <?php if($theme_options['footer_text_color']){
            echo $theme_options['footer_text_color'];  
        };
        ?>
    }
    #wrapper #branding #info .info-block-btn{
        background: <?php if($theme_options['cta_bg_color']){
            echo $theme_options['cta_bg_color'].';';
        };
        ?>
        color: <?php if($theme_options['cta_color']){
            echo $theme_options['cta_color'];   
        };
        ?>
    }
    #wrapper .btn:hover, #wrapper input[type="submit"]:hover {
        background: <?php if($theme_options['button_hover']){
            echo $theme_options['button_hover'];  
        };
        ?>
    }
    #wrapper #branding #info .info-block-btn:hover {
        background:<?php if($theme_options['cta_hover_color']){
            echo $theme_options['cta_hover_color'];  
        };
        ?>
    }
    
    #wrapper input#searchsubmit{
        background: <?php if($theme_options['search_bg_color']){
            echo $theme_options['search_bg_color'];    
        };
        ?>
    }
    
    #wrapper input#searchsubmit:hover{
        background: <?php if($theme_options['search_hover_color']){
            echo $theme_options['search_hover_color'];    
        };
        ?>
    }
    </style>
    <?php
function hex2rgba($color, $opacity = false) {
 
	$default = 'rgb(0,0,0)';
 
	//Return default if no color provided
	if(empty($color))
          return $default; 
 
	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }
 
        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }
 
        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);
 
        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }
 
        //Return rgb(a) color string
        return $output;
}

?>

