<?php
/**
 * @package Spice Starter Sites
 * @since 1.0
 */


/**
 * Set import files
 */
if ( !function_exists( 'spice_starter_sites_import_files' ) ) {

    function spice_starter_sites_import_files() {

        // Demos url
        $demo_url = 'https://demo.spicethemes.com/owp/startersites/';

        return array(
            array(
                'import_file_name'              =>  esc_html__('Construction', 'spice-starter-sites'),
                'categories'                    =>  [ 'Free Demos' ],
                'import_file_url'               =>  $demo_url . 'construction/sample-data.xml',
                'import_widget_file_url'        =>  $demo_url . 'construction/widgets.wie',
                'import_customizer_file_url'    =>  $demo_url . 'construction/customize-export.dat',
                'preview_url'                   =>  'https://owp-construction.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/construction/thumb.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Architect', 'spice-starter-sites'),
                'categories'                    =>  [ 'Free Demos' ],
                'import_file_url'               =>  $demo_url . 'architect/sample-data.xml',
                'import_widget_file_url'        =>  $demo_url . 'architect/widgets.wie',
                'import_customizer_file_url'    =>  $demo_url . 'architect/customize-export.dat',
                'preview_url'                   =>  'https://owp-architect.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/architect/thumb.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Charity', 'spice-starter-sites'),
                'categories'                    =>  [ 'Free Demos' ],
                'import_file_url'               =>  $demo_url . 'charity/sample-data.xml',
                'import_widget_file_url'        =>  $demo_url . 'charity/widgets.wie',
                'import_customizer_file_url'    =>  $demo_url . 'charity/customize-export.dat',
                'preview_url'                   =>  'https://owp-charity.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/charity/thumb.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Business', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-business.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/business/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Travel', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-travel.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/travel/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Spacare', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-spacare.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/spacare/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Interior', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-interior.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/interior/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Real Estate', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-realestate.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/realestate/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Skin Spa', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-skinspa.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/skinspa/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Healthcare', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-healthcare.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/healthcare/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Gymer', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-gymer.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/gymer/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Yoga', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-yoga.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/yoga/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Massage', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-massage.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/massagecenter/thumb-pro.png',
            ),
            array(
                'import_file_name'              =>  esc_html__('Finance', 'spice-starter-sites'),
                'categories'                    =>  [ 'Premium Demos' ],
                'preview_url'                   =>  'https://owp-finance.spicethemes.com/',
                'import_preview_image_url'      =>  $demo_url . 'thumbnail/finance/thumb-pro.png',
            )
        );
    }

}
add_filter( 'pt-ocdi/import_files', 'spice_starter_sites_import_files' );

/**
 * Define actions that happen after import
 */
if ( !function_exists( 'spice_starter_sites_after_import_mods' ) ) {

    function spice_starter_sites_after_import_mods() {

        //Assign the menu
        $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
        set_theme_mod( 'nav_menu_locations', array(
                'primary' => $main_menu->term_id,
            )
        );

        //Asign the static front page and the blog page
        $front_page = get_page_by_title( 'Home' );
        $blog_page  = get_page_by_title( 'Blog' );

        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $front_page -> ID );
        update_option( 'page_for_posts', $blog_page -> ID );

    }

}
add_action( 'pt-ocdi/after_import', 'spice_starter_sites_after_import_mods' );

// Custom CSS for OCDI plugin
function spice_starter_sites_ocdi_css() { ?>
    <style >
        .ocdi__gl-item:nth-child(n+4) .ocdi__gl-item-buttons .button-primary, .ocdi .ocdi__theme-about, .ocdi__intro-text {
          display: none;
        }
    </style>
<?php }
add_action('admin_enqueue_scripts', 'spice_starter_sites_ocdi_css');

// Change the "One Click Demo Import" name from "Starter Sites" in Appearance menu
function spice_starter_sites_ocdi_plugin_page_setup( $default_settings ) {

    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'spice-starter-sites' );
    $default_settings['menu_title']  = esc_html__( 'Starter Sites' , 'spice-starter-sites' );
    $default_settings['capability']  = 'import';
    $default_settings['menu_slug']   = 'one-click-demo-import';

    return $default_settings;

}
add_filter( 'ocdi/plugin_page_setup', 'spice_starter_sites_ocdi_plugin_page_setup' );

// Register required plugins for the demo's
function spice_starter_sites_register_plugins( $plugins ) {

    // List of plugins used by all theme demos.
    $theme_plugins = [
        [   
            'name'     =>   'Elementor', 
            'slug'     =>   'elementor',
            'required' =>   true,
        ],
        [ 
            'name'     =>   'Spice Post Slider',
            'slug'     =>   'spice-post-slider',
            'required' =>   true,
        ],
        [ 
            'name'     =>   'Contact Form 7',
            'slug'     =>   'contact-form-7',
            'required' =>   true,
        ],
        [ 
            'name'     =>   'WooCommerce',
            'slug'     =>   'woocommerce',
            'required' =>   true,
        ],
        [ 
            'name'     =>   'Yoast SEO',
            'slug'     =>   'wordpress-seo',
            'required' =>   true,
        ],
        [ 
            'name'     =>   'Unique Headers',
            'slug'     =>   'unique-headers',
            'required' =>   true,
        ]
    ];

    return array_merge( $plugins, $theme_plugins );

}
add_filter( 'ocdi/register_plugins', 'spice_starter_sites_register_plugins' );

/**
* Remove branding
*/
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );