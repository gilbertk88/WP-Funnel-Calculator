jQuery(document).ready( function($) {

    $('.ewm_he_repair_new_top_select').click( function(){

        ewm_hvace_save_v( {
            'title' : 'ewm_he_repair_new_top_select',
            'value' : $( this ).data( 'new-repair-select' )
        } );

        console.log( 'repair -or- new select' + $( this ).data( 'new-repair-select' ));

        $('.ewm_he_repair_new_top_select').removeClass( 'ewm_he_repair_new_top_select_active' );
        $( this ).addClass( 'ewm_he_repair_new_top_select_active' );
        $('.ewm_he_repair_new_bottom').show();
        $('.ewm_he_select_tick').hide();
        new_repair_select = $( this ).data( 'new-repair-select' );

        if( new_repair_select == 'repair' ){
            $('.ewm_he_select_tick1').show();
        }
        else if( new_repair_select == 'new' ) {
            $('.ewm_he_select_tick2').show();
        }

        $('.ewm_he_hvac1_img_wrapper').hide();
        $('.ewm_he_hvac2_img_wrapper').show();
        $('.ewm_hvace_estimate_stage').val('zipcode');

    } )

    $('.ewm_hvace_schedule_selection_options').click( function(){

        $('.ewm_hvace_schedule_selection_options').removeClass( 'ewm_hvace_schedule_selection_options_active' );

        $( this ).addClass( 'ewm_hvace_schedule_selection_options_active' ) ;
        schedule_tick_id_no = $( this ).data( 'schedule-tick-id-no' );
        $( '.ewm_he_schedule_select_tick' ).hide();
        $( '.ewm_he_schedule_select_tick' + schedule_tick_id_no ).show();
        
        console.log( 'ewm_hvace_schedule: ' + schedule_tick_id_no );
        ewm_hvace_save_v({
            'title' : 'ewm_he_schedule_input_f',
            'value' : schedule_tick_id_no
        });
    
    });

    $( '.ewm_hvace_rc_selection_options' ).click( function(){

        $('.ewm_hvace_rc_selection_options').removeClass( 'ewm_hvace_rc_selection_options_active' );
        $( this ).addClass( 'ewm_hvace_rc_selection_options_active' );
        rc_tick_id_no = $( this ).data('rc-tick-id-no');
        $('.ewm_he_rc_select_tick').hide();
        $('.ewm_he_rc_select_tick' + rc_tick_id_no ).show();
        // console.log( 'ewm_hvace_rc: ' + rc_tick_id_no );
        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_rc_input_f',
            'value' : rc_tick_id_no
        } );
    
    } )

    $('ewm_he_l_f_l_c').click( function(e){
        
       // remove selection border
       // select this element
       // update the server

    } )

    var ewm_wpc_reset_calculator_page = function( args = {} ) {

        $('.ewm_he_ss_f_r_t_e').html( args.init_estimates );

        // reset area
        $('.ewm_hvace_ss_selection_options').removeClass('ewm_he_ss_new_top_select_active');
        $('.ewm_hvace_ss_selection_options_help').removeClass('ewm_he_ss_new_top_select_active');
        $('.ewm_he_ss_select_tick' ).hide();

         // reset duct
        $('.ewm_hvace_duct_button').removeClass('ewm_he_duct_select_active');
        $('.ewm_hvace_duct_button_ns').removeClass('ewm_he_duct_select_active');
        $('.ewm_he_duct_select_tick' ).hide();

        // reset efficiency
        $('.ewm_hvace_ef_button').removeClass('ewm_he_ef_select_active');
        $('.ewm_hvace_ef_button_ns').removeClass('ewm_he_ef_select_active');
        $('.ewm_he_ef_select_tick' ).hide();

    }

    $( '.ewm_hvace_acfb_selection_options' ).click( function(){

        $('.ewm_hvace_acfb_selection_options').removeClass( 'ewm_hvace_acfb_selection_options_active' );
        $( this ).addClass( 'ewm_hvace_acfb_selection_options_active' );

        acfb_tick_id_no = $( this ).data('acfb-tick-id-no');

        $('.ewm_he_acfb_select_tick').hide();
        $('.ewm_he_acfb_select_tick' + acfb_tick_id_no ).show();

        ewm_service_type = acfb_tick_id_no;

        console.log( 'ewm_hvace_acfb:' + acfb_tick_id_no );

        ewm_service_estimate = {
            1: "$3,344+", // ac solution value
            2: "$11,433+", // Both cooling and heating
            3: "$4,321+"  // furnace
        };

        ewm_wpc_reset_calculator_page({
            'init_estimates' : ewm_service_estimate[ acfb_tick_id_no ]
        });

        ewm_hvace_save_v( {
            'title' : 'ewm_he_actual_estimate',
            'value' : ewm_service_estimate[ acfb_tick_id_no ]
        } );

        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_acfb_f',
            'value' : acfb_tick_id_no
        } );
    
    } )

    $(".ewm_hvace_enter_f_FN").blur(function(){
        ewm_acfb_first_name = $( this ).val();
        if( ewm_acfb_first_name.length == 0 ) {
            $('.ewm_he_zip_message').html('First Name is a required field, Please enter it.');
            $('.ewm_he_no_zip_like_that_outer').show();
        }
        else{
            $('.ewm_he_pi_select_tick1').show();
        }
    } );

    $(".ewm_hvace_enter_f_LN").blur(function(){
        ewm_acfb_last_name = $( this ).val();
        // ewm_acfb_last_name.length;
        if( ewm_acfb_last_name.length == 0 ) {
            // $('.ewm_he_pi_select_tick2').show();
            $('.ewm_he_zip_message').html('Last name is a required field. Please entered it.');
            $('.ewm_he_no_zip_like_that_outer').show();
        }
        else{
            $('.ewm_he_pi_select_tick2').show();
        }
    } );
    $(".ewm_hvace_enter_f_p").blur(function(){
        ewm_acfb_p = $( this ).val();
        // ewm_acfb_p.length;
        if( ewm_acfb_p.length == 0 ) {
            // $('.ewm_he_pi_select_tick3').show();
            $('.ewm_he_zip_message').html(' Phone number is a required field. Please entered it.');
            $('.ewm_he_no_zip_like_that_outer').show();
        }
        else{
            $('.ewm_he_pi_select_tick3').show();
        }
    } );
    $(".ewm_hvace_enter_f_E").blur(function(){
        ewm_acfb_e = $( this ).val();
        // ewm_acfb_e.length
        if( ewm_acfb_e.length == 0 ) {
            // $('.ewm_he_pi_select_tick4').show();
            $('.ewm_he_zip_message').html( 'Email is a required field. Please entered it.' );
            $('.ewm_he_no_zip_like_that_outer').show();
        }
        else{
            $('.ewm_he_pi_select_tick4').show();
        }
    } );

    var ewm_hvace_user_details = function( args ){

        var form_data = new FormData();
        form_data.append( 'action', 'ewm_hvace_user_details' );

        form_data.append( 'ewm_first_name', args.ewm_first_name );
        form_data.append( 'ewm_last_name', args.ewm_last_name );
        form_data.append( 'ewm_phone' , args.ewm_phone );
        form_data.append( 'ewm_email' , args.ewm_email );
        form_data.append( 'ewm_he_post_id', $('.ewm_hvace_estimate_post_id').val() );

        jQuery.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function ( response ) {
                console.log( response );
                response = jQuery.parseJSON( response );
                // location.reload();
                // alert( "Your personal details were successfully saved, a customer success representative will reach out to you shortly." );
                $('.ewm_he_zip_message').html('Your personal details were successfully saved, a customer success representative will reach out to you shortly.');
                $('.ewm_he_zip_button_close').hide();
                $('.ewm_he_no_zip_like_that_outer').show();
            },
            error: function (response) {
                console.log( response );
            }
        } );

    }

    var ewm_hvace_verify_blank_entered = function(){

        var number_of_missing = 0 ;

        if( $('.ewm_hvace_enter_f_FN').val().length == 0 ){
            number_of_missing++;
            $('.ewm_hvace_enter_f_FN_wrapper').css({ 'border':'1px solid red !important' });
        }

        if( $('.ewm_hvace_enter_f_LN').val().length == 0 ){
            number_of_missing++;
            $('.ewm_hvace_enter_f_LN_wrapper').css({ 'border':'1px solid red !important' });
        }

        if( $('.ewm_hvace_enter_f_p').val().length == 0 ){
            number_of_missing++;
            $('.ewm_hvace_enter_f_p_wrapper').css({ 'border':'1px solid red !important' });
        }

        if( $('.ewm_hvace_enter_f_E').val().length == 0 ){
            number_of_missing++;
            $('.ewm_hvace_enter_f_E_wrapper').css({ 'border':'1px solid red !important' });
        }

        return number_of_missing;

    }

    $('.ewm_hvace_enter_f').blur( function() {
        
    });

    $('.ewm_hvac_pi_ie_b').click( function() {

        number_of_missing = ewm_hvace_verify_blank_entered();

        if( number_of_missing == 0 ){
            ewm_hvace_user_details( {
                'ewm_first_name' : $('.ewm_hvace_enter_f_FN').val(),
                'ewm_last_name': $('.ewm_hvace_enter_f_LN').val(),
                'ewm_phone': $('.ewm_hvace_enter_f_p').val(),
                'ewm_email': $('.ewm_hvace_enter_f_E').val()
            } );
        }
        else{
            // show error message
            $('.ewm_he_zip_message').html('Please fill in all fields.');
            $('.ewm_he_no_zip_like_that_outer').show();
        }

    } )

    var ewm_hvace_save_v = function( args ){

		var form_data = new FormData();
		form_data.append( 'action', 'ewm_hvace_save_single_values' );
		form_data.append( 'ewm_he_title', args.title );
        form_data.append( 'ewm_he_value', args.value );
        form_data.append( 'ewm_he_post_id', $('.ewm_hvace_estimate_post_id').val() );

		jQuery.ajax( {
			url: ajax_object.ajaxurl,
			type: 'post',
			contentType: false,
			processData: false,
			data: form_data,
			success: function ( response ) {
				console.log( response );
				// response = jQuery.parseJSON( response );
                // location.reload();
			},
			error: function (response) {
				console.log( response );
			}
		} );

    }

    $('.ewm_hvace_ss_selection_options').click( function(){

        ewm_pi_tick_id_no = $( this ).data('pi-tick-id-no');
        $('.ewm_he_ss_select_tick' ).hide();
        $('.ewm_he_ss_select_tick' + ewm_pi_tick_id_no ).show();
        $('.ewm_hvace_ss_selection_options').removeClass('ewm_he_ss_new_top_select_active');
        $('.ewm_hvace_ss_selection_options_help').removeClass('ewm_he_ss_new_top_select_active');
        $( this ).addClass('ewm_he_ss_new_top_select_active');
        ewm_pi_tick_id_no = $( this ).data('pi-tick-id-no');
        ewm_he_sq_ft = ewm_pi_tick_id_no;

        ewm_he_revise_estimate_display();
        console.log( 'ewm_hvace_ss:' + ewm_pi_tick_id_no );

        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_ss_f',
            'value' : ewm_pi_tick_id_no
        } );
        
    } );

    $( '.ewm_hvace_ss_selection_options_help' ).click( function(){

        ewm_pi_tick_id_no = $( this ).data('pi-tick-id-no');
        ewm_he_sq_ft = ewm_pi_tick_id_no;
        $('.ewm_he_ss_select_tick' ).hide();
        $('.ewm_he_ss_select_tick' + ewm_pi_tick_id_no ).show();
        $('.ewm_hvace_ss_selection_options').removeClass('ewm_he_ss_new_top_select_active');
        $('.ewm_hvace_ss_selection_options_help').removeClass('ewm_he_ss_new_top_select_active');
        $( this ).addClass('ewm_he_ss_new_top_select_active');
        console.log('ewm_he_revise_estimate_display');

        // Update number
        ewm_he_revise_estimate_display();

    } );

    var ewm_hvace_check_area_is_serviced = function( args = {} ){

		var form_data = new FormData();
		form_data.append( 'action', 'ewm_hvace_save_single_zip' );
		form_data.append( 'ewm_he_title', args.title );
        form_data.append( 'ewm_he_value', args.value );
        form_data.append( 'ewm_he_post_id', $('.ewm_hvace_estimate_post_id').val() );

		jQuery.ajax( {
			url: ajax_object.ajaxurl,
			type: 'post',
			contentType: false,
			processData: false,
			data: form_data,
			success: function ( response ) {
				console.log( response );
				response = jQuery.parseJSON( response );

                if( response.zip_is_server ==  true ) {
                    $('.ewm_hvace_ss_wrapper_none').hide();
                    $('.ewm_hvace_schedule_wrapper').show();
                }
                else if( response.zip_is_server ==  false ) {
                    $('.ewm_he_zip_message').html( 'Ups! We do not service the zip code you entered. Please try a different zip code.' );
                    $('.ewm_he_no_zip_like_that_outer').show();
                }
                // location.reload();
			},
			error: function (response) {
				console.log( response );
			}
		} );

    }

    $('.ewm_he_show_me_pricing').click( function(){

        // confirm zip code is entered
        ewm_zip_a = $('.ewm_he_address_input_f').val();

        if( ewm_zip_a.length == 0 ){
            $('.ewm_he_zip_message').html( 'Ups! Please enter a zip code to proceed.' );
            $('.ewm_he_no_zip_like_that_outer').show();
        }
        else {
            // confirmed that the area is serviced 
            ewm_hvace_check_area_is_serviced({
                'title' : 'ewm_he_address_input_f',
                'value' : $('.ewm_he_address_input_f').val()
            });
        }
        // console.log( 'address input ' + $('.ewm_he_address_input_f').val() );
        // move to the next step
        

    } );

    $('.ewm_hvace_schedule_selection_options').click( function(){
        $('.ewm_hvace_ss_wrapper_none').hide();
        $('.ewm_hvace_rc_wrapper').show();
    } );
    $('.ewm_hvace_rc_selection_options').click( function(){
        $('.ewm_hvace_ss_wrapper_none').hide();
        $('.ewm_hvace_acfb_wrapper').show();
    } );
    $('.ewm_hvace_acfb_selection_options').click( function(){
        $('.ewm_hvace_ss_wrapper_none').hide();
        $('.ewm_hvace_ss_wrapper').show();
    } );

    // ewm_he_ss_new_top_select_active
    $('.ewm_hvac_ss_ie_b').click( function(){
        $('.ewm_hvace_ss_wrapper_none').hide();
        $('.ewm_hvace_pi_wrapper').show();
    } )

    $('.ewm_hvace_duct_button').click( function(){

        ewm_he_duct_id = $( this ).data('he-duct-id');
        $('.ewm_he_duct_select_tick' ).hide();
        $('.ewm_he_duct_select_tick' + ewm_he_duct_id ).show();

        $('.ewm_hvace_duct_button').removeClass('ewm_he_duct_select_active');
        $('.ewm_hvace_duct_button_ns').removeClass('ewm_he_duct_select_active');

        $( this ).addClass('ewm_he_duct_select_active');

        ewm_he_duct_id = $( this ).data('he-duct-id');

        duct_intepratation = {
            1 : 'yes',
            2 : 'no',
            3 : 'don\'t know',
        };

        ewm_he_duct = duct_intepratation[ewm_he_duct_id];

        ewm_he_revise_estimate_display();

        console.log( 'ewm_hvace_duct: ' + ewm_he_duct_id );
        
        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_duct_input_f',
            'value' : ewm_he_duct_id
        } );
        
    } );

    $('.ewm_hvace_duct_button_ns').click( function(){

        ewm_he_duct_id = $( this ).data('he-duct-id');
        $('.ewm_he_duct_select_tick' ).hide();
        $('.ewm_he_duct_select_tick' + ewm_he_duct_id ).show();

        $('.ewm_hvace_duct_button').removeClass('ewm_he_duct_select_active');
        $('.ewm_hvace_duct_button_ns').removeClass('ewm_he_duct_select_active');

        $( this ).addClass('ewm_he_duct_select_active');

        ewm_he_duct_id = $( this ).data('he-duct-id');

        ewm_he_duct = '0';

        ewm_he_revise_estimate_display();
    
        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_duct',
            'value' : ewm_pi_tick_id_no
        } );
        
    } );
    
    // efficiency
    $('.ewm_hvace_ef_button').click( function(){

        ewm_he_ef_id = $( this ).data('he-ef-id');
        $('.ewm_he_ef_select_tick' ).hide();
        $('.ewm_he_ef_select_tick' + ewm_he_ef_id ).show();
        $('.ewm_hvace_ef_button').removeClass('ewm_he_ef_select_active');
        $('.ewm_hvace_ef_button_ns').removeClass('ewm_he_ef_select_active');
        $( this ).addClass('ewm_he_ef_select_active');

        ewm_he_ef_id = $( this ).data('he-ef-id');

        efficiency_intepretation = {
            1: "standard",
            2: "premium",
            3: "not sure"
        } ;

        ewm_he_ef = efficiency_intepretation[ ewm_he_ef_id ];

        console.log( 'Efficiency before: ' + ewm_he_ef_id + ' | Efficiency after:' + ewm_he_ef );

        ewm_he_revise_estimate_display();

        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_ef_input_f',
            'value' : ewm_he_ef
        } );
        
    } );

    $('.ewm_hvace_ef_button_ns').click( function(){

        ewm_he_ef_id = $( this ).data('he-ef-id');
        $('.ewm_he_ef_select_tick' ).hide();
        $('.ewm_he_ef_select_tick' + ewm_he_ef_id ).show();

        $('.ewm_hvace_ef_button').removeClass('ewm_he_ef_select_active');
        $('.ewm_hvace_ef_button_ns').removeClass('ewm_he_ef_select_active');

        $( this ).addClass('ewm_he_ef_select_active');

        ewm_he_ef_id = $( this ).data('he-ef-id');

        efficiency_intepretation = {
            1: "standard",
            2: "premium",
            3: "not sure"
        } ;

        ewm_he_ef = efficiency_intepretation[ ewm_he_ef_id ];
        
        ewm_he_revise_estimate_display();

        ewm_hvace_save_v( {
            'title' : 'ewm_hvace_ef',
            'value' : ewm_he_ef_id
        } );
        
    } );

    var ewm_he_sq_ft = '0';

    var ewm_he_duct = '0';

    var ewm_he_ef = 'not sure';

    var ewm_service_type = '0';

    var ewm_he_revise_estimate_display = function (){

        ewm_estimate_range = '$0';

        if( ewm_service_type == '0' ){
            $('.ewm_he_zip_message').html('Please select a Service type. Either "AC Solutions( Cooling Only )", "Both( Cooling and Heating" or "Furnace/ Heating Solutions)');
            $('.ewm_he_no_zip_like_that_outer').show();
        }
        else if( ewm_service_type == '1'){
            // "1" >> AC Solutions( Cooling Only )
            ewm_estimate_range = ewm_evaluate_estimate_ac_solutions();
        }
        else if( ewm_service_type == '2' ){
            //"2" >> Both( Cooling and Heating )
            ewm_estimate_range = ewm_evaluate_estimate_both_cooling_heating();
        }
        else if( ewm_service_type == '3' ){
            // "3" >> Furnace/ Heating Solutions            
            ewm_estimate_range = ewm_evaluate_estimate_furnace_boiler();
        }

        $(".ewm_he_ss_f_r_t_e").html( ewm_estimate_range );

    }

    var ewm_evaluate_estimate_ac_solutions = function(){

        console.log( '===================== estimate log =======================' );

        console.log( 'ewm_he_sq_ft:"' + ewm_he_sq_ft +'"');

        console.log( 'ewm_he_duct: "' + ewm_he_duct +'"');

        console.log('ewm_he_ef: "' + ewm_he_ef +'"');

        console.log( '==========================================================' ) ;

        ewm_dollar_amount = '$3,344+';
       
        if( ewm_he_sq_ft == '1' ){ // <1000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$3,344 - $4,885';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$4,275 - $6,640';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$3,344 - $6,640';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$4,094 - $7,693';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$5,025 - $9,449';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$4,094 - $9,449';
                }
            }
            else{
                ewm_dollar_amount = '$3,344 - $9,449';
            }
        }
        else if( ewm_he_sq_ft == '2' ){ // 1001 - 2000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$3,487 - $6,583';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$4,741 - $8,534';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$3,487 - $8,534';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$4,547 - $10,746';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$5,801 - $12,698';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$4,547 - $12,698';
                }
            }
            else{
                ewm_dollar_amount = '$3,487 - $12,698';
            }
        }
        else if( ewm_he_sq_ft == '3' ){ // 2002 - 3000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$4,700 - $8,420';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$6,093 - $9,583';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$4,700 - $9,583';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$6,755 - $13,821';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$8,149 - $14,984';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$6,755 - $14,984';
                }
            }
            else{
                ewm_dollar_amount = '$4,700 - $14,984';
            }
        }
        else if( ewm_he_sq_ft == '4' ){ // 3002 - 4000

            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$6,011 - $11,020';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$6,842 - $12,543';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$6,011 - $12,543';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$8,984 - $19,300';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$9,814 - $20,823';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$8,984 - $20,823';
                }
            }
            else{
                ewm_dollar_amount = '$6,011 - $28,939';
            }
        }
        else if( ewm_he_sq_ft == '5' ){ // 4000+

            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$7,868+';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$8,955+';
                }
                else if( ewm_he_ef == 'not sure' ){ // i don't know
                    ewm_dollar_amount = '$7,868';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$12,701+';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$14,866';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$12,701';
                }
            }
            else{
                ewm_dollar_amount = '$7,686+';
            }
        }
        else if( ewm_he_sq_ft == '6' ){ // Donno
            ewm_dollar_amount = '$3,344+';
        }
        else{
            ewm_dollar_amount = '$3,344+';
        }

        ewm_hvace_save_v( {
            'title' : 'ewm_he_actual_estimate',
            'value' : ewm_dollar_amount
        } );

        return  ewm_dollar_amount ;

    }

    var ewm_evaluate_estimate_furnace_boiler = function(){

        console.log( '===================== estimate log =======================' );

        console.log( 'ewm_he_sq_ft:"' + ewm_he_sq_ft +'"');

        console.log( 'ewm_he_duct: "' + ewm_he_duct +'"');

        console.log('ewm_he_ef: "' + ewm_he_ef +'"');

        console.log( '==========================================================' ) ;


        ewm_dollar_amount = '$4,321+';
       
        if( ewm_he_sq_ft == '1' ){ // <1000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$2,138 - $7,370';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$2,330 - $7,370';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$2,138 - $7,370';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$2,909 - $9,102';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$3,101 - $10,115';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$2,909 - $10,115';
                }
            }
            else{
                ewm_dollar_amount = '$2,138 - $10,115';
            }
        }
        else if( ewm_he_sq_ft == '2' ){ // 1001 - 2000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$2,205 - $8,040';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$2,596 - $8,309';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$2,205 - $8,309';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$3,296 - $11,041';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$3,687 - $13,203';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$3,296 - $13,203';
                }
            }
            else{
                ewm_dollar_amount = '$2,205 - $13,203';
            }
        }
        else if( ewm_he_sq_ft == '3' ){ // 2002 - 3000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$2,763 - $11,003';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$3,368 - $10,142';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$2,763 - $11,003';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$4,879 - $16,624';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$5,240 - $16,121';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$4,879 - $16,624';
                }
            }
            else{
                ewm_dollar_amount = '$2,763 - $16,624';
            }
        }
        else if( ewm_he_sq_ft == '4' ){ // 3002 - 4000

            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$3,302 - $14,422';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$3,788 - $16,962';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$3,302 - $16,962';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$5,960 - $28,433';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$6,190 - $30,973';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$5,960 - $30,973';
                }
            }
            else{
                ewm_dollar_amount = '$3,302 - $30,973';
            }
        }
        else if( ewm_he_sq_ft == '5' ){ // 4000+

            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$4,321+';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$4,958+';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$4,321+';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$8,200+';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$8,430+';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$8,200+';
                }
            }
            else{
                ewm_dollar_amount = '$4,321+';
            }
        }
        else{
            ewm_dollar_amount = '$4,321+';
        }

        ewm_hvace_save_v( {
            'title' : 'ewm_he_actual_estimate',
            'value' : ewm_dollar_amount
        } );

        return  ewm_dollar_amount ;

    }

    var ewm_evaluate_estimate_both_cooling_heating = function(){

        ewm_dollar_amount = '$11,433+';
       
        if( ewm_he_sq_ft == '1' ){ // <1000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$5,490 - $9,685';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$7,321 - $11,440';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$5,490 - $11,440';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$6,261 - $12,493';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$8,092 - $14,249';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$6,261 - $14,249';
                }
            }
            else{
                ewm_dollar_amount = '$5,490 - $14,249';
            }
        }
        else if( ewm_he_sq_ft == '2' ){ // 1001 - 2000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$5,797 - $11,383';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$7,321 - $13,378';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$5,797 - $13,378';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$6,888 - $15,546';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$8,412 - $17,778';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$6,888 - $17,778';
                }
            }
            else{
                ewm_dollar_amount = '$5,797 - $17,778';
            }
        }
        else if( ewm_he_sq_ft == '3' ){ // 2002 - 3000
            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$7,445 - $13,660';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$9,305 - $15,424';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$7,445 - $15,424';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$9,562 - $18,266';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$11,422 - $21,123';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$9,562 - $21,123';
                }
            }
            else{
                ewm_dollar_amount = '$7,445 - $21,123';
            }
        }
        else if( ewm_he_sq_ft == '4' ){ // 3002 - 4000

            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$8,735 - $17,210';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$10,728 - $20,188';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$8,735 - $20,188';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$11,795 - $25,187';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$13,788 - $28,939';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$11,795 - $28,939';
                }
            }
            else{
                ewm_dollar_amount = '$8,735 - $28,939';
            }
        }
        else if( ewm_he_sq_ft == '5' ){ // 4000+

            if( ewm_he_duct == 'yes' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$11,433+';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$14,042+';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$11,433+';
                }
            }
            else if(  ewm_he_duct == 'no' ){
                if( ewm_he_ef == 'standard' ){ // standard
                    ewm_dollar_amount = '$16,409+';
                }
                else if( ewm_he_ef == 'premium' ){ // premium
                    ewm_dollar_amount = '$19,018+';
                }
                else{  // i don't know
                    ewm_dollar_amount = '$16,409+';
                }
            }
            else{
                ewm_dollar_amount = '$11,433+';
            }
        }
        else{
            ewm_dollar_amount = '$11,433+';
        }

        ewm_hvace_save_v( {
            'title' : 'ewm_he_actual_estimate',
            'value' : ewm_dollar_amount
        } );

        return  ewm_dollar_amount ;

    }

    var ewm_back_options = {
        "zipcode"   : "ewm_he_repair_new_wrapper",
        "schedule"  : "ewm_hvace_schedule_wrapper",
        "residential_commercial" : "ewm_hvace_rc_wrapper",
        "ac_furnace_both" : "ewm_hvace_acfb_wrapper",
        "s_footage" : "ewm_hvace_ss_wrapper",
    };

    $('.ewm_he_back').click(function(e) {
        ewm_previous_stage = $( this ).data('previous-stage');
        $('.ewm_hvace_ss_wrapper_none').hide();
        // ewm_hvace_ss_wrapper_none
        $( "."+ewm_back_options[ ewm_previous_stage ] ).show();
    } )

    $('.ewm_he_zip_button_close').click(function () {
        $('.ewm_he_no_zip_like_that_outer').hide();
    } )

} );
