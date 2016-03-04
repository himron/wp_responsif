<?php
function themegue_widgets() {  
  register_sidebar( array(
    'name' => 'Sidebar Lebar',
    'id' => 'sidebar-lebar',
    'description' => 'Sidebar dengan lebar 300px terletak paling atas',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  
  register_sidebar( array(
    'name' => 'Sidebar Kiri',
    'id' => 'sidebar-kiri',
    'description' => 'Sidebar kiri dengan lebar 145px terletak di bawah sidebar lebar',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );

  register_sidebar( array(
    'name' => 'Sidebar Kanan',
    'id' => 'sidebar-kanan',
    'description' => 'Sidebar kanan dengan lebar 145px terletak di bawah sidebar lebar, di sebelah kanan sidebar kiri',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );
  register_nav_menus( array(
    'primary' => __( 'Navigasi Utama', 'themegue' ),
  ) );
  
define( 'HEADER_IMAGE_WIDTH', 1500 );
define( 'HEADER_IMAGE_HEIGHT',140 );
define( 'HEADER_TEXTCOLOR', '000000' );

/*untuk gambar bacgroun belom bisa*/
add_custom_background('','themegue_header_style' );
add_action( 'widgets_init', 'themegue_widgets' );

/* UNTUK UPLOAD IMAGE HEADER*/

add_custom_image_header( '', 'themegue_header_style' );
function themegue_header_style() {
  
echo '
<style type="text/css">
#headimg {
  height:120px;
  width:900px;
  background:#cccccc;
}
#name { 
  font-family: Georgia, "Bitstream Charter", serif;
  font-size:30px;
}
h1 a {
  text-decoration:none;
  }
#desc { 
  font-family: Georgia, "Bitstream Charter", serif;
  font-size:14px;
}
</style>';
}
}
?>



