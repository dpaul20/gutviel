$(document).ready(function() {
    $("#gallery").unitegallery({
        tile_enable_icons:false,
        tile_width:180,
        tile_height:180,
        carousel_space_between_tiles:10,
        theme_navigation_enable_play: false, 
        tile_enable_border:false, 
        tile_enable_action: false,
        tile_enable_textpanel:true,
        tile_textpanel_title_text_align: "center",
        tile_textpanel_always_on:true,
        tile_textpanel_position:"top",
    });
    $("#gallery2").unitegallery({
        tile_enable_icons:false,
        tile_width:220,
        tile_height:240,
        carousel_space_between_tiles:10,
        theme_navigation_enable_play: false, 
        tile_enable_border:false, 
        tile_enable_action: false,
        tile_enable_textpanel:true,
        tile_textpanel_title_text_align: "center",
        tile_textpanel_always_on:true,
        tile_textpanel_position:"top",
        tile_textpanel_bg_color:"#FFFFFF",
        tile_textpanel_bg_css:{},

    });

});