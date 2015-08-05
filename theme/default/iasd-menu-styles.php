<style>
    #menu div ul li.current-menu-item,
    .single-projecten #menu-item-<?php echo $advanced_setup['projecten_archief']?>,
    .single-blog #menu-item-<?php echo $advanced_setup['blog_archief']?>,
    .single-nieuws #menu-item-<?php echo $advanced_setup['nieuws_archief']?>,
    .post-type-archive-projecten #menu-item-<?php echo $advanced_setup['projecten_archief']?>,
    .post-type-archive-nieuws #menu-item-<?php echo $advanced_setup['nieuws_archief']?>,
    .post-type-archive-blog #menu-item-<?php echo $advanced_setup['blog_archief']?> {
        padding-bottom: 12px;
        border-bottom: 3px solid <?php if($theme_options['menu_items']){
            echo $theme_options['menu_items'];  
        };
        ?>;
    }
    
    @media screen and (max-width: 580px) {
        #menu div ul li.current-menu-item,
        .single-projecten #menu-item-<?php echo $advanced_setup['projecten_archief']?>,
        .single-blog #menu-item-<?php echo $advanced_setup['blog_archief']?>,
        .single-nieuws #menu-item-<?php echo $advanced_setup['nieuws_archief']?>,
        .post-type-archive-projecten #menu-item-<?php echo $advanced_setup['projecten_archief']?>,
        .post-type-archive-nieuws #menu-item-<?php echo $advanced_setup['nieuws_archief']?>,
        .post-type-archive-blog #menu-item-<?php echo $advanced_setup['blog_archief']?> {
            padding-bottom: 0;
            border-bottom: 0;
            background: #1FB25A;
            /*padding: 10px 0; */
            
            padding: 0;
        }
        #menu div ul li.current-menu-item a,
        .single-projecten #menu-item-<?php echo $advanced_setup['projecten_archief']?> a,
        .single-blog #menu-item-<?php echo $advanced_setup['blog_archief']?> a,
        .single-nieuws #menu-item-<?php echo $advanced_setup['nieuws_archief']?> a,
        .post-type-archive-projecten #menu-item-<?php echo $advanced_setup['projecten_archief']?> a,
        .post-type-archive-nieuws #menu-item-<?php echo $advanced_setup['nieuws_archief']?> a,
        .post-type-archive-blog #menu-item-<?php echo $advanced_setup['blog_archief'] ?> a {
            line-height: 40px;
            color: white;
        }
    }
</style>