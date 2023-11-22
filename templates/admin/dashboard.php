<style>
    .ewm_he_single_b{
        padding: 8px 15px;
        border-bottom: 1px #e2e2e2 solid;
    }
    .ewm_he_single_h{
        padding: 10px 20px;
        background-color: #f9f9f9;
        color: #333;
        border-radius: 6px;
    }
    .ewm_he_view_single_prospect{
        
        padding: 10px;
        background-color: yellowgreen;
        border: 0px;
        margin: 5px;
        border-radius: 10px;
        cursor: pointer;
        color: #fff;
        float: left;
        }
    .ewm_he_outer_dash_wrapper{
        margin: 30px 25px 15px 10px;
        background-color: #fff;
        padding: 25px;
        border-radius: 10px;
    }
    .ewm_wp_funnel_calc{
        width: 100%;
    }
    .ewm_delete_lead_p{
        background: #fff;
        border: 0px;
        border-radius: 11px;
        padding: 10px;
        cursor: pointer;
        float: left;
        color: #ccc;
    }
    .ewm_he_title_wrapper{
        width: 100%;
    }
    .ewm_he_filter_wrapper{    
        width: 95%;
        background: #fff !important;
        overflow: auto;
        padding: 25px;
        border-radius: 20px;
        margin: 30px 0px 40px;
        border: 0px #cccccca6 solid;
    }
    .ewm_he_filter_s{    
        width: 20%;
        float: left;
        padding: 8px 30px;
        border: 2px solid #fff;
        /* margin-bottom: 20px; */
        margin-right: 5px;
        border-radius: 40px;
        cursor: pointer;
        background: #0080008a;
        color: #fff;
    }
    .ewm_he_filter_t{
        border: 0px;
        padding: 0px;
        background:#fff;
    }
    .ewm_he_filter_s_active{
        border:2px solid #333;
    }
</style>

<div class="ewm_he_outer_dash_wrapper">

    <div class="ewm_he_title_wrapper">
        <H2>WP Funnel Calculator</H2>
    </div>

    <div class="ewm_he_filter_wrapper">
        <div class="ewm_he_filter_s ewm_he_filter_t"><center><h3 style="font-size: 1.15em; margin: 6px 0px;  color: #8c8f94 !important;" >Filter Leads</h3></center></div>
        <div class="ewm_he_filter_s" data-filter-id = "ewm_new_submission" >New Submission</div>
        <div class="ewm_he_filter_s" data-filter-id = "ewm_resolved" >Processed Submission</div>
        <div class="ewm_he_filter_s" data-filter-id = "ewm_clear" >Clear Filter [X] </div>
    </div>

<?php
    // $post_m = get_post_meta( 1548 ); // var_dump( $post_m );

    echo '
    <table class="ewm_wp_funnel_calc" >
        <tr>
            <td class="ewm_he_single_h" >ID</div>
            <td class="ewm_he_single_h" >First/ Last Name</div>
            <td class="ewm_he_single_h" >Phone</div>
            <td class="ewm_he_single_h" >Email</div>
            <td class="ewm_he_single_h" >Repair/ New</div>
            <td class="ewm_he_single_h" >Residential/ Commercial</div>
            <td class="ewm_he_single_h" >AC/ Heating/ Both</div>
            <td class="ewm_he_single_h" ></td>
        </tr>';

    $data_list = [
        "post_status"   => "active",
        "post_type"     => "ewm_hvace",
        "posts_per_page" => "-1",
    ];

    // $value_e_meta = get_post_meta( 1549 );
    // var_dump( $value_e_meta );

    $ewm_hvace_list = get_posts( $data_list );

    foreach( $ewm_hvace_list as $key_e => $value_e ){

        $value_e_meta = get_post_meta( $value_e->ID );
        $_submission_id = '#'.$value_e->ID;
        
        $ewm_he_repair_new_top_select = get_post_meta( $value_e->ID, "ewm_he_repair_new_top_select", true );
        $ewm_he_address_input_f = get_post_meta( $value_e->ID, "ewm_he_address_input_f", true );
        $ewm_hvace_schedule =get_post_meta( $value_e->ID, "ewm_he_schedule_input_f", true );
        $ewm_hvace_rc = get_post_meta( $value_e->ID, "ewm_hvace_rc_input_f", true );
        $ewm_hvace_acfb = get_post_meta( $value_e->ID, "ewm_hvace_acfb_f", true );
        $ewm_hvace_ss =  get_post_meta( $value_e->ID, "ewm_hvace_ss_f", true );
        $ewm_first_name = get_post_meta( $value_e->ID, "ewm_first_name", true );
        $ewm_last_name = get_post_meta( $value_e->ID, "ewm_last_name", true );
        $ewm_phone = get_post_meta( $value_e->ID, "ewm_phone", true );
        $ewm_email = get_post_meta( $value_e->ID, "ewm_email", true );
        $ewm_hvace_duct_input_f = get_post_meta( $value_e->ID, "ewm_hvace_duct_input_f", true );
        $ewm_hvace_ef_input_f = get_post_meta( $value_e->ID, "ewm_hvace_ef_input_f", true );
        $ewm_focus_status = get_post_meta( $value_e->ID, "ewm_focus_status", true );

        if( strlen( $ewm_focus_status ) == 0 ){

            $ewm_focus_status_id = add_post_meta( $value_e->ID, "ewm_focus_status", 'ewm_new_submission' );
            $ewm_focus_status = 'ewm_new_submission';

        }

        $ewm_duct = [
            "yes" => "Yes - Already have duct",
            "no" => "No - Need to install duct",
            "3" => "Not sure",
        ] ;

        $ewm_ef = [
            "1"=> "Standard",
            "2"=> "Premium",
            "3"=> "Don't know"
        ] ;

        $ewm_schedule = [
            '1' => 'Emergency',
            '2' => 'Anytime Today',
            '3' => 'Tomorrow',
            '4' => 'Schedule Later'
        ] ;

        $ewm_rc = [
            1 => "Residential Customer",
            2 => "Commercial Customer"
        ] ;

        $ewm_acfb = [
            '1' => "AC Solutions(Cooling Only)",
            '2' => "Both(Cooling and Heating)",
            '3' => "Furnace/ Heating Solutions",
            '4' => "Water Heating"
        ] ;

        $square_ft = [
            // $square_ft
            '1' => "< $1000",
            '2' => "$1001 - $2000",
            '3' => "$2001 - $3000",
            '4' => "$3001 - $4000",
            '5' => "$4000+",
            '6' => "Not Sure"
        ] ;

        $_submission_id = strlen( $_submission_id ) > 0 ? $_submission_id : ' - ';
        $ewm_he_repair_new_top_select = strlen( $ewm_he_repair_new_top_select  ) > 0 ? $ewm_he_repair_new_top_select : ' - ';
        $ewm_he_address_input_f = strlen( $ewm_he_address_input_f  ) > 0 ? $ewm_he_address_input_f : ' - ';
        $ewm_hvace_schedule = strlen( $ewm_hvace_schedule ) > 0 ? $ewm_schedule[ $ewm_hvace_schedule ] : ' - ';
        $ewm_hvace_rc  = strlen( $ewm_hvace_rc ) > 0 ? $ewm_rc[ $ewm_hvace_rc ] : ' - ';
        $ewm_hvace_acfb = strlen( $ewm_hvace_acfb ) > 0 ? $ewm_acfb[ $ewm_hvace_acfb ] : ' - ';
        $ewm_hvace_ss  = strlen( $ewm_hvace_ss ) > 0 ? $square_ft[ $ewm_hvace_ss ] : ' - ';
        $ewm_first_name  = strlen( $ewm_first_name ) > 0 ? $ewm_first_name : ' - ';
        $ewm_last_name  = strlen( $ewm_last_name ) > 0 ? $ewm_last_name : ' - ';
        $ewm_phone = strlen( $ewm_phone ) > 0 ? $ewm_phone : ' - ';
        $ewm_email  = strlen( $ewm_email ) > 0 ? $ewm_email : ' - ';

        $ewm_duct_d = '-';
        if( array_key_exists( $ewm_hvace_duct_input_f, $ewm_duct ) ){
            $ewm_duct_d = strlen( $ewm_hvace_duct_input_f ) > 0 ? $ewm_duct[ $ewm_hvace_duct_input_f ] : ' - ';
        }

        $ewm_ef_d = '-';
        if( array_key_exists( $ewm_hvace_ef_input_f, $ewm_ef ) ) {
            $ewm_ef_d = strlen($ewm_hvace_ef_input_f) > 0 ? $ewm_ef[ $ewm_hvace_ef_input_f ] : ' - ';
        }

        echo '
        <tr class = "ewm_s_lead_p '.$ewm_focus_status.' ewm_s_lead_p_'.$value_e->ID.'" >
            <td class="ewm_he_single_b" > 
                #'.$value_e->ID .'
            </td>
            <td class="ewm_he_single_b" >
                '. $ewm_first_name .' '. $ewm_last_name .'
            </div>
            <td class="ewm_he_single_b" >
                '. $ewm_phone .'
            </td>
            <td class="ewm_he_single_b" >
                '. $ewm_email . '
            </td>
            <td class="ewm_he_single_b" >
                '. $ewm_he_repair_new_top_select .'
            </td>
            <td class="ewm_he_single_b" >
                '. $ewm_hvace_rc .'
            </td>
            <td class="ewm_he_single_b" >
                '. $ewm_hvace_acfb .'
            </td>
            <td class="ewm_he_single_b" >
                <input type="button" class="ewm_he_view_single_prospect" data-prospect-id="'.$value_e->ID.'" value="Open">
                <span data-lead-p-id="'.$value_e->ID.'" class="ewm_delete_lead_p dashicons dashicons-trash"></span>
            </td>
        <tr>';

    }

    echo '</table>';

	$popup_dash = HVACE_HOME_DIR . '/templates/admin/prospect_popup.php';

	include_once $popup_dash ;

?>
