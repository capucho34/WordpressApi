    <?php
    function capucho_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    }

    add_action('after_setup_theme', 'capucho_support');

    function capucho_menus() {
        $location = array(
        'primary' => "Desktop Primary left Sidebar",
        'footer' => "Footer Menu Items"
        );
        register_nav_menus($location);

    }

    add_action('init', 'capucho_menus');

    function capucho_register_styles(){
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('capucho-style',get_template_directory_uri() . "/style.css", array('capucho-bootstrap'), $version, 'all');
        wp_enqueue_style('capucho-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('capucho-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'capucho_register_styles');

    function capucho_register_scripts() {

    wp_enqueue_script('jquery');

    wp_enqueue_script('capucho-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.16.0', true);

    wp_enqueue_script('capucho-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', true);

    wp_enqueue_script('capucho-main', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0', true);

    }

    add_action('wp_enqueue_scripts', 'capucho_register_scripts');

function capucho_widget_areas() {
    register_sidebar(
        array(
            'name'          => 'Sidebar area', 
            'id'            => 'sidebar-1',  
            'description'   => 'Sidebar Widget area',
            'before_title'  => '',   
            'after_title'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Footer area', 
            'id'            => 'footer-1',  
            'description'   => 'Footer Widget area',
            'before_title'  => '',   
            'after_title'   => '',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
        )
    );
}

add_action('widgets_init', 'capucho_widget_areas');

function capucho_movies_post_type() {
    $args = [
        'public' => true,
        'label'  => 'Movies',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    ];
    register_post_type('movies', $args);
}
add_action('init', 'capucho_movies_post_type');
    ?>

    