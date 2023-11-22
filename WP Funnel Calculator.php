<?php

/**
 * Plugin Name: WP Funnel Calculator (Premium)
 * Plugin URI: https://exclusivewebmarketing.com/WP-Funnel-Calculator
 * Description: Give instant HVAC Estimates on your Wordpress website
 * Version: 1.0.5
 * Update URI: https://api.freemius.com
 * Author: Exclusive Web Marketing
 * Author URI: https://exclusivewebmarketing.com/
 * Text Domain: exclusive-web-WP-Funnel-Calculator
 * Domain Path: /languages/
 * License: GPLv2 or any later version
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @package WPBDP
 */
// Do not allow direct access to this file.
// Process images

if ( !function_exists( 'wfc_fs' ) ) {
    // Create a helper function for easy SDK access.
    function wfc_fs()
    {
        global  $wfc_fs ;
        
        if ( !isset( $wfc_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $wfc_fs = fs_dynamic_init( array(
                'id'             => '12291',
                'slug'           => 'wp-funnel-calculator',
                'type'           => 'plugin',
                'public_key'     => 'pk_cf0898e50a79be522fcf2d0e8928f',
                'is_premium'     => true,
                'has_addons'     => false,
                'has_paid_plans' => true,
                'trial'          => array(
                'days'               => 14,
                'is_require_payment' => false,
            ),
                'menu'           => array(
                'slug'       => 'ewm-hvace-dash',
                'first-path' => 'admin.php?page=ewm-hvace-dash',
                'support'    => false,
            ),
                'is_live'        => true,
            ) );
        }
        
        return $wfc_fs;
    }
    
    // Init Freemius.
    wfc_fs();
    // Signal that SDK was initiated.
    do_action( 'wfc_fs_loaded' );
}

define( 'HVACE_HOME_DIR', dirname( __FILE__ ) );
define( 'MY_CUSTOM_PLUGIN_DIR', plugin_dir_path( dirname( __FILE__ ) ) );
add_action( 'admin_enqueue_scripts', 'ewm_he_load_admin_resources' );
function ewm_he_load_admin_resources( $options )
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'ewm-he-main-lib-uploader-js', plugins_url( basename( dirname( __FILE__ ) ) . '/assets/admin-script.js', 'jquery' ) );
    wp_localize_script( 'ewm-he-main-lib-uploader-js', 'ajax_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
    ) );
    wp_enqueue_style( 'ewm-he-_style_public', plugins_url( basename( dirname( __FILE__ ) ) . '/assets/admin-style.css' ) );
}

add_action( 'wp_enqueue_scripts', 'ewm_he_load_public_resources' );
function ewm_he_load_public_resources( $options )
{
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'ewm-he-public-main-lib-uploader-js', plugins_url( basename( dirname( __FILE__ ) ) . '/assets/public-script.js', 'jquery' ) );
    wp_localize_script( 'ewm-he-public-main-lib-uploader-js', 'ajax_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
    ) );
    wp_enqueue_style( 'ewm-he-style_public', plugins_url( basename( dirname( __FILE__ ) ) . '/assets/public-style.css' ) );
}

class HVACE
{
    public static function my_dash()
    {
        $dashhe_dash_url = HVACE_HOME_DIR . '/templates/admin/dashboard.php';
        include_once $dashhe_dash_url;
    }
    
    public static function zip_code()
    {
        $dashhe_dash_url = HVACE_HOME_DIR . '/templates/admin/zip_code.php';
        include_once $dashhe_dash_url;
    }
    
    public static function admin_menu()
    {
        add_menu_page(
            __( 'WP Funnel Calculator', 'exclusive-web-marketing-hvace' ),
            __( 'WP Funnel Calculator', 'exclusive-web-marketing-hvace' ),
            'manage_options',
            'ewm-hvace-dash',
            'HVACE::my_dash',
            'dashicons-image-flip-horizontal',
            // 'dashicons-ellipsis',
            3
        );
        add_submenu_page(
            'ewm-hvace-dash',
            'Zip Codes',
            'Zip Codes',
            'manage_options',
            'ewm-dpm-he',
            'HVACE::zip_code',
            2
        );
    }
    
    public static function estimates()
    {
    }
    
    public static function ajax_ewm_delete_service_z_c()
    {
        $delete_status = wp_delete_post( $_POST['ewm_service_z_c'] );
        echo  json_encode( [
            'post'          => $_POST,
            'delete_status' => $delete_status,
        ] ) ;
    }
    
    public static function frontend_estimator()
    {
        $dashhe_list_url = HVACE_HOME_DIR . '/templates/public/init.php';
        include_once $dashhe_list_url;
    }
    
    public static function update_single_hvace_value()
    {
        // ewm_hvace_save_single_values
    }
    
    public static function ajax_update_single_hvace_value()
    {
        $data_post = [
            'ID'          => $_POST['ewm_he_post_id'],
            "post_status" => "active",
        ];
        wp_update_post( $data_post );
        $p_result_meta = get_post_meta( $_POST['ewm_he_post_id'], $_POST['ewm_he_title'], $_POST['ewm_he_value'] );
        $p_result = update_post_meta( $_POST['ewm_he_post_id'], $_POST['ewm_he_title'], $_POST['ewm_he_value'] );
        echo  json_encode( [
            'post'     => $_POST,
            'response' => $p_result,
        ] ) ;
        wp_die();
    }
    
    public static function initialize()
    {
        $create_i_s_p = HVACE::create_initial_session_post();
        return $create_i_s_p;
    }
    
    public static function create_initial_session_post()
    {
        $current_user_id = get_current_user_id();
        $ewm_new_name = str_replace( "-", " ", "Draft" );
        $args = [
            'ewmdsm_location_name' => '',
            'current_user_id'      => $current_user_id,
            'ewm_new_name'         => $ewm_new_name,
        ];
        // ewmdsm_location_name
        // ewmdsm_post_id
        $post_data = [
            "post_author"           => $args['current_user_id'],
            "post_date"             => date( 'Y-m-d H:i:s' ),
            "post_date_gmt"         => date( 'Y-m-d H:i:s' ),
            "post_content"          => $args['ewmdsm_location_name'],
            "post_title"            => $args['ewmdsm_location_name'],
            "post_excerpt"          => '',
            "post_status"           => "draft",
            "comment_status"        => "open",
            "ping_status"           => "closed",
            "post_password"         => "",
            "post_name"             => $args['ewm_new_name'],
            "to_ping"               => "",
            "pinged"                => "",
            "post_modified"         => date( 'Y-m-d H:i:s' ),
            "post_modified_gmt"     => date( 'Y-m-d H:i:s' ),
            "post_content_filtered" => "",
            "post_parent"           => '',
            "guid"                  => "",
            "menu_order"            => 0,
            "post_type"             => "ewm_hvace",
            "post_mime_type"        => "",
            "comment_count"         => "0",
            "filter"                => "raw",
        ];
        global  $wp_error ;
        $post_id = wp_insert_post( $post_data, $wp_error );
        return $post_id;
    }
    
    public static function ajax_hvace_user_details()
    {
        $_d_post = [
            'ewm_first_name' => $_POST['ewm_first_name'],
            'ewm_last_name'  => $_POST['ewm_last_name'],
            'ewm_phone'      => $_POST['ewm_phone'],
            'ewm_email'      => $_POST['ewm_email'],
        ];
        foreach ( $_d_post as $k => $v ) {
            update_post_meta(
                $_POST['ewm_he_post_id'],
                $k,
                $v,
                true
            );
        }
        echo  json_encode( $_POST ) ;
        wp_die();
    }
    
    public static function create_new_zip_post()
    {
        // create post
        $current_user_id = get_current_user_id();
        // ewmdsm_location_name
        // ewmdsm_post_id
        $post_data = [
            "post_author"           => $current_user_id,
            "post_date"             => date( 'Y-m-d H:i:s' ),
            "post_date_gmt"         => date( 'Y-m-d H:i:s' ),
            "post_content"          => "content",
            "post_title"            => "title",
            "post_excerpt"          => '',
            "post_status"           => "active",
            "comment_status"        => "closed",
            "ping_status"           => "closed",
            "post_password"         => "",
            "post_name"             => date( 'Y-m-d H:i:s' ),
            "to_ping"               => "",
            "pinged"                => "",
            "post_modified"         => date( 'Y-m-d H:i:s' ),
            "post_modified_gmt"     => date( 'Y-m-d H:i:s' ),
            "post_content_filtered" => "",
            "post_parent"           => '',
            "guid"                  => "",
            "menu_order"            => 0,
            "post_type"             => "ewm_zip_data",
            "post_mime_type"        => "",
            "comment_count"         => "0",
            "filter"                => "raw",
        ];
        global  $wp_error ;
        $post_id = wp_insert_post( $post_data, $wp_error );
        // save values as meta data
        add_post_meta(
            $post_id,
            "ewm_zip_code_v",
            $_POST["ewm_zip_code"],
            TRUE
        );
        add_post_meta(
            $post_id,
            "ewm_address_name_v",
            $_POST["ewm_address_name"],
            TRUE
        );
    }
    
    public static function ajax_update_submission_status()
    {
        // ewm_focus_status
        // $_POST['ewm_focus_status'];
        $ewm_focus_status = get_post_meta( $_POST['ewm_lead_id'], 'ewm_focus_status', true );
        if ( !is_array( $ewm_focus_status ) ) {
            $ewm_status_id = add_post_meta( $_POST['ewm_lead_id'], 'ewm_focus_status', $_POST['ewm_focus_status'] );
        }
        $ewm_status_id = update_post_meta( $_POST['ewm_lead_id'], 'ewm_focus_status', $_POST['ewm_focus_status'] );
        echo  json_encode( [
            'post'          => $_POST,
            'ewm_status_id' => $ewm_status_id,
        ] ) ;
        wp_die();
    }
    
    // go oldie
    public static function update_old_zip_post()
    {
        // save values as meta data
        update_post_meta( $_POST['ewm_zip_id'], "ewm_zip_code_v", $_POST["ewm_zip_code"] );
        update_post_meta( $_POST['ewm_zip_id'], "ewm_address_name_v", $_POST["ewm_address_name"] );
    }
    
    public static function ajax_update_zipcode_name()
    {
        // {"action":"ewm_he_update_zipcode_name","ewm_zip_code":"2212","ewm_address_name":"address name","ewm_zip_id":"0"}
        $if_new = true;
        if ( $_POST["ewm_zip_id"] > 0 ) {
            $if_new = false;
        }
        
        if ( $if_new ) {
            // do new
            HVACE::create_new_zip_post();
        } else {
            // go oldie
            HVACE::update_old_zip_post();
        }
        
        echo  json_encode( $_POST ) ;
        wp_die();
    }
    
    public static function ajax_update_single_hvace_zip()
    {
        // check hvace zip
        $ewm_zip_data = get_posts( [
            "post_status" => "active",
            "post_type"   => "ewm_zip_data",
            "meta_query"  => [
            // 'relation'  => 'OR',
            [
                'key'     => 'ewm_zip_code_v',
                'value'   => $_POST["ewm_he_value"],
                'compare' => '=',
            ],
        ],
        ] );
        $zip_is_server = true;
        if ( count( $ewm_zip_data ) == 0 ) {
            $zip_is_server = false;
        }
        $data_post = [
            'ID'          => $_POST['ewm_he_post_id'],
            "post_status" => "active",
        ];
        wp_update_post( $data_post );
        $p_result_meta = get_post_meta( $_POST['ewm_he_post_id'], $_POST['ewm_he_title'], $_POST['ewm_he_value'] );
        $p_result = update_post_meta( $_POST['ewm_he_post_id'], $_POST['ewm_he_title'], $_POST['ewm_he_value'] );
        echo  json_encode( [
            'post'          => $_POST,
            'response'      => $p_result,
            'zip_is_server' => $zip_is_server,
        ] ) ;
        wp_die();
    }
    
    public static function ajax_load_prospect_dat()
    {
        $schedule_selection = [
            '1' => 'Emergency',
            '2' => 'Anytime Today',
            '3' => 'Tomorrow',
            '4' => 'Schedule Later',
        ];
        $ewm_residential_commercial = [
            '1' => 'Residential Customer',
            '2' => 'Commercial Customer',
        ];
        $AC_Furnace_Both = [
            "1" => "AC Solutions( Cooling Only )",
            "2" => "Both( Cooling and Heating )",
            "3" => "Furnace/ Heating Solutions",
        ];
        $Square_Footage = [
            "1" => "< 1000 Sq. Ft.",
            "2" => "1001 - 2000 Sq. Ft.",
            "3" => "2001 - 3000 Sq. Ft.",
            "4" => "3001 - 4000 Sq. Ft.",
            "5" => "4000+ Sq. Ft.",
            "6" => "Not sure.",
        ];
        $Have_Duct = [
            '1' => 'Yes',
            '2' => 'No - Need to install duct',
            '3' => 'Not sure(Professional should check)',
        ];
        $Efficiency = [
            "standard" => "Standard",
            "premium"  => "Premium \$\$ or \$\$\$",
            "3"        => "I don't know(Efficiency)",
        ];
        $title_alt = [
            "ewm_he_repair_new_top_select" => [
            'title'     => "New / Repair",
            "selection" => [],
        ],
            "ewm_he_address_input_f"       => [
            'title'     => "Zip Code",
            "selection" => [],
        ],
            "ewm_he_schedule_input_f"      => [
            'title'     => "Scheduled Time",
            "selection" => $schedule_selection,
        ],
            "ewm_hvace_rc_input_f"         => [
            'title'     => "Looking for (Residential/ Commercial) Customer",
            "selection" => $ewm_residential_commercial,
        ],
            "ewm_he_actual_estimate"       => [
            'title'     => "Finale Estimate",
            "selection" => [],
        ],
            "ewm_hvace_acfb_f"             => [
            'title'     => "AC/ Furnace/ Both",
            "selection" => $AC_Furnace_Both,
        ],
            "ewm_hvace_ss_f"               => [
            'title'     => "Square Footage",
            "selection" => $Square_Footage,
        ],
            "ewm_hvace_duct_input_f"       => [
            'title'     => "Have Duct",
            "selection" => $Have_Duct,
        ],
            "ewm_hvace_ef_input_f"         => [
            'title'     => "Efficiency",
            "selection" => $Efficiency,
        ],
            "ewm_first_name"               => [
            'title'     => "First Name",
            "selection" => [],
        ],
            "ewm_last_name"                => [
            'title'     => "Last Name",
            "selection" => [],
        ],
            "ewm_phone"                    => [
            'title'     => "Phone",
            "selection" => [],
        ],
            "ewm_email"                    => [
            'title'     => "Email",
            "selection" => [],
        ],
            "ewm_focus_status"             => [
            'title'     => "Prospect Status",
            "selection" => [],
        ],
        ];
        $p_meta_list = get_post_meta( $_POST['ewm_prospect_id'] );
        // var_dump( $p_meta_list );
        $list_prospect = [];
        foreach ( $p_meta_list as $meta_k => $meta_v ) {
            $final_val = $meta_v[0];
            if ( count( $title_alt[$meta_k]['selection'] ) > 0 ) {
                $final_val = $title_alt[$meta_k]['selection'][$meta_v[0]];
            }
            array_push( $list_prospect, [
                "title" => $title_alt[$meta_k]['title'],
                "value" => $final_val,
            ] );
        }
        // var_dump( $list_prospect );
        echo  json_encode( [
            'post'          => $_POST,
            'list_prospect' => $list_prospect,
        ] ) ;
        wp_die();
    }
    
    public static function ajax_delete_lead_p()
    {
        $ewm_lead_status = wp_delete_post( $_POST['ewm_lead_p_id'] );
        echo  json_encode( [
            'post'            => $_POST,
            'ewm_lead_status' => $ewm_lead_status,
        ] ) ;
        wp_die();
    }

}
add_action( 'admin_menu', [ 'HVACE', 'admin_menu' ] );
add_shortcode( 'hvac_estimates', [ 'HVACE', 'frontend_estimator' ] );
add_action( "wp_ajax_ewm_delete_lead_p", [ 'HVACE', 'ajax_delete_lead_p' ] );
add_action( "wp_ajax_nopriv_ewm_delete_lead_p", [ 'HVACE', 'ajax_delete_lead_p' ] );
add_action( "wp_ajax_ewm_he_update_submission_status", [ 'HVACE', 'ajax_update_submission_status' ] );
add_action( "wp_ajax_nopriv_ewm_he_update_submission_status", [ 'HVACE', 'ajax_update_submission_status' ] );
add_action( "wp_ajax_ewm_hvace_save_single_values", [ 'HVACE', 'ajax_update_single_hvace_value' ] );
add_action( "wp_ajax_nopriv_ewm_hvace_save_single_values", [ 'HVACE', 'ajax_update_single_hvace_value' ] );
add_action( "wp_ajax_ewm_hvace_save_single_zip", [ 'HVACE', 'ajax_update_single_hvace_zip' ] );
add_action( "wp_ajax_nopriv_ewm_hvace_save_single_zip", [ 'HVACE', 'ajax_update_single_hvace_zip' ] );
add_action( "wp_ajax_ewm_he_update_zipcode_name", [ 'HVACE', 'ajax_update_zipcode_name' ] );
add_action( "wp_ajax_nopriv_ewm_he_update_zipcode_name", [ 'HVACE', 'ajax_update_zipcode_name' ] );
add_action( "wp_ajax_ewm_hvace_user_details", [ 'HVACE', 'ajax_hvace_user_details' ] );
add_action( "wp_ajax_nopriv_ewm_hvace_user_details", [ 'HVACE', 'ajax_hvace_user_details' ] );
add_action( "wp_ajax_ewm_he_load_prospect_dat", [ 'HVACE', 'ajax_load_prospect_dat' ] );
add_action( "wp_ajax_nopriv_ewm_he_load_prospect_dat", [ 'HVACE', 'ajax_load_prospect_dat' ] );
add_action( "wp_ajax_ewm_delete_service_z_c", [ 'HVACE', 'ajax_ewm_delete_service_z_c' ] );
add_action( "wp_ajax_nopriv_ewm_delete_service_z_c", [ 'HVACE', 'ajax_ewm_delete_service_z_c' ] );