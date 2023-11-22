<?php

	$dashhe_repair_new_url = HVACE_HOME_DIR . '/templates/public/stages/repair_new.php';
    include $dashhe_repair_new_url;

	$dashhe_schedule_url = HVACE_HOME_DIR . '/templates/public/stages/schedule.php';
    include $dashhe_schedule_url;

	$dashhe_rc_url = HVACE_HOME_DIR . '/templates/public/stages/residential_commercial.php';
    include $dashhe_rc_url;

	$dashhe_acfb_url = HVACE_HOME_DIR . '/templates/public/stages/ac_furnace_both.php';
    include $dashhe_acfb_url;

	$dashhe_pi_url = HVACE_HOME_DIR . '/templates/public/stages/prospect_information.php';
    include $dashhe_pi_url;

	$dashhe_ss_url = HVACE_HOME_DIR . '/templates/public/stages/square_space.php';
    include $dashhe_ss_url;

    $ewm_hvace_estimate_post_id = HVACE::initialize();
    // $ewm_hvace_data = get_post_meta( $ewm_hvace_estimate_post_id );

?>

<input type="hidden" class="ewm_hvace_estimate_stage" value="repair_new" >
<input type="hidden" class="ewm_hvace_estimate_post_id" value="<?php echo $ewm_hvace_estimate_post_id; ?>" >

<?php

/*

echo "new/ repair: ".$ewm_hvace_data["ewm_he_repair_new_top_select"][0].'<br>';
echo "address input: ".$ewm_hvace_data["ewm_he_address_input_f"][0].'<br>';
echo "acfb: ".$ewm_hvace_data["ewm_hvace_acfb_f"][0].'<br>';
echo "schedule: ".$ewm_hvace_data["ewm_he_schedule_input_f"][0].'<br>';
echo "ss: ".$ewm_hvace_data["ewm_hvace_ss_f"][0].'<br>';
echo "duct: ".$ewm_hvace_data["ewm_hvace_duct_input_f"][0].'<br>';
echo "efficiency: ".$ewm_hvace_data["ewm_hvace_ef_input_f"][0].'<br>';
echo "first name: ".$ewm_hvace_data["ewm_first_name"][0].'<br>';
echo "last name: ".$ewm_hvace_data["ewm_last_name"][0].'<br>';
echo "phone: ".$ewm_hvace_data["ewm_phone"][0].'<br>';
echo "email: ".$ewm_hvace_data["ewm_email"][0].'<br>';

*/

?>
