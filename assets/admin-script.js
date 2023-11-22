jQuery(document).ready(function($) { 

    $('.ewm_he_m_new_zip').click( function(){        
        $('#ewm_he_active_zip_c').val('0');
        $('.ewm_he_top_pp_wra').show();

        $('#ewm_ef_zip_code_v').val('');
        $('#ewm_ef_address_name_v').val('');

    } );

    $('.ewm_he_edit_zip_c').click( function(){

        ewm_he_edit_zip_id = $( this ).data('edit-zip-c') ;
        $('#ewm_he_active_zip_c').val( ewm_he_edit_zip_id );
        
        $('.ewm_he_top_pp_wra').show();
        $('#ewm_ef_zip_code_v').val( $('#ewm_he_zip_code_'+ewm_he_edit_zip_id).html().trim() );
        $('#ewm_ef_address_name_v').val( $('#ewm_he_add_name_'+ewm_he_edit_zip_id ).html().trim() );

    } );

    $('.ewm_he_pp_save_zip_button').click( function(){

        var form_data = new FormData();
        form_data.append( 'action', 'ewm_he_update_zipcode_name' );

        form_data.append( 'ewm_zip_code', $("#ewm_ef_zip_code_v").val() );
        form_data.append( 'ewm_address_name', $("#ewm_ef_address_name_v").val() );
        form_data.append( 'ewm_zip_id' , $('#ewm_he_active_zip_c').val() );

        jQuery.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function ( response ) {
                console.log( response );
                response = jQuery.parseJSON( response );
                alert( "Zip code created successfully." );
                // update.
                location.reload();
            },
            error: function (response) {
                console.log( response );
            }
        } );

    } );

    $('.ewm_he_clos_pp_zip').click( function () {
        $('.ewm_he_top_pp_wra').hide();
    } );

    $('.ewm_he_clos_pp_zip_pros').click( function (){
        $('.ewm_he_top_pp_wra_pros').hide();
    } );

    $('.ewm_he_filter_s').click( function (){

        $('.ewm_he_filter_s').removeClass('ewm_he_filter_s_active');
        $( this ).addClass('ewm_he_filter_s_active');
        ewm_filter_id = $( this ).data('filter-id');

        $('.ewm_s_lead_p').hide();

        if( 'ewm_clear' == ewm_filter_id ){
            $('.ewm_s_lead_p').show();
            $('.ewm_he_filter_s').removeClass('ewm_he_filter_s_active');
        }
        else {
            $( '.'+ewm_filter_id ).show();
        }

    })

    var ewm_he_append_single_props = function( args ){
        // console.log( args );
        Object.entries( args.list_prospect ).forEach( ([ key,obt ]) => {

            // list_prospect >> // val( args.prospect_id ); >> // add object
            if( 'AC/ Furnace/ Both' == obt.title ) {
                obt.title = 'Service type';
            }

            if( 'AC Solutions( Cooling Only )' == obt.value ){
                obt.value = 'AC Solutions';
            }

            if( 'Both( Cooling and Heating )' == obt.value ){
                obt.value = 'Cooling and Heating';
            }

            if( 'Looking for (Residential/ Commercial) Customer' == obt.title ) {
                obt.title = 'Customer type';
            }

            if( 'Furnace/ Heating Solutions' == obt.value ){
                obt.value = 'Heating Solution';
            }

            if( 'repair' == obt.value ){
                obt.value = 'Repair';
            }

            if( 'new' == obt.value ){
                obt.value = 'New';
            }

            console.log( typeof obt.value);
            if( obt.value == null ){
                // do nothing alert('null');
            }
            else if( obt.title == null ){
                // 
            }
            else if( 'Prospect Status' == obt.title ){
                $( '.ewm_he_l_f_l_c' ).removeClass( 'ewm_he_l_f_l_c_active' );
                $( '.' + obt.value ).addClass( 'ewm_he_l_f_l_c_active' );
            }
            else if( 'First Name' == obt.title ){
                $('.ewm_he_prospect_first_name').append( '<div class="ewm_he_body_wrap_d"> \
                    <div class="ewm_he_body_h" > ' + obt.title + ' </div>\
                    <div class="ewm_he_body_d" > ' + obt.value + ' </div>\
                </div>' );
            }
            else if( 'Last Name' == obt.title ){
                $('.ewm_he_prospect_last_name').append( '<div class="ewm_he_body_wrap_d"> \
                    <div class="ewm_he_body_h" > ' + obt.title + ' </div>\
                    <div class="ewm_he_body_d" > ' + obt.value + ' </div>\
                </div>' );
            }
            else if( 'Email' == obt.title ){
                $('.ewm_he_prospect_email').append( '<div class="ewm_he_body_wrap_d"> \
                    <div class="ewm_he_body_h" > ' + obt.title + ' </div>\
                    <div class="ewm_he_body_d" > ' + obt.value + ' </div>\
                </div>' );
            }
            else if( 'Phone' == obt.title ){
                $('.ewm_he_prospect_phone').append( '<div class="ewm_he_body_wrap_d"> \
                    <div class="ewm_he_body_h" > ' + obt.title + ' </div>\
                    <div class="ewm_he_body_d" > ' + obt.value + ' </div>\
                </div>' );
            }
            else{
                // console.log( obt )
                $('.ewm_he_prospect_single_data').append( '<div class="ewm_he_body_wrap_d"> \
                    <div class="ewm_he_body_h" > ' + obt.title + ' </div>\
                    <div class="ewm_he_body_d" > ' + obt.value + ' </div>\
                </div>' );
            }

		} );

    }

    var ewm_he_update_submission_status = function ( args = {}){
        
        var form_data = new FormData();
        form_data.append( 'action', 'ewm_he_update_submission_status' );

        form_data.append( 'ewm_lead_id', $('#ewm_he_service_prospect_id').val() );
        form_data.append( 'ewm_focus_status', args.focus_status );

        jQuery.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function ( response ) {
                console.log( response );
                response = jQuery.parseJSON( response );
                // alert( "Zip code created successfully." );
                // update.
                // location.reload();
            },
            error: function (response) {
                console.log( response );
            }
        } );
    }

    $('.ewm_he_l_f_l_c').click(function(e){

        // remove focus css class
        $('.ewm_he_l_f_l_c').removeClass('ewm_he_l_f_l_c_active');

        // add class
        $( this ).addClass('ewm_he_l_f_l_c_active');
        ewm_data_focus_status = $( this ).data('ewm-data-focus-status');

        $ewm_he_s_p_id = $('#ewm_he_service_prospect_id').val();

        $( '.ewm_s_lead_p_' + $ewm_he_s_p_id ).removeClass('ewm_new_submission');
        $( '.ewm_s_lead_p_' + $ewm_he_s_p_id ).removeClass('ewm_resolved');

        $( '.ewm_s_lead_p_' + $ewm_he_s_p_id ).addClass( ewm_data_focus_status );

        // update
        ewm_he_update_submission_status({
            'focus_status' : ewm_data_focus_status
        });

    })

    var ewm_he_load_prospect_dat = function ( args ) {

        var form_data = new FormData();
        form_data.append( 'action', 'ewm_he_load_prospect_dat' );
        form_data.append( 'ewm_prospect_id', args.prospect_id );

        jQuery.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function ( response ) {
                console.log( response );
                response = jQuery.parseJSON( response );
                // alert( "" ); >> // update.
                ewm_he_append_single_props({
                    'list_prospect': response.list_prospect
                });
                // location.reload();
            },
            error: function (response) {
                console.log( response );
            }
        } );
        // append on the following class
    }

    $('.ewm_he_view_single_prospect').click( function (){

        ewm_prospect_id = $(this).data('prospect-id');
        $('.ewm_he_top_pp_wra_pros').show();
        $('.ewm_he_body_wrap_d').remove();
        $('#ewm_he_service_prospect_id').val( ewm_prospect_id );

        ewm_he_load_prospect_dat({
            "prospect_id" : ewm_prospect_id
        });
        
    } )

    $('.ewm_delete_lead_p').click(function(){

        ewm_lead_p_id = $( this ).data('lead-p-id');
        // console.log( 'ewm_delete_lead_p' );
        $( '.ewm_s_lead_p_' + ewm_lead_p_id ).remove();
        
        var form_data = new FormData();
        form_data.append( 'action', 'ewm_delete_lead_p' );
        form_data.append( 'ewm_lead_p_id', ewm_lead_p_id );

        jQuery.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function ( response ) {
                console.log( response );
                response = jQuery.parseJSON( response );
                // alert( "" ); >> // update.
                // location.reload();
            },
            error: function (response) {
                console.log( response );
            }
        } );
        // append on the following class

    })

    $( '.ewm_delete_service_z_c' ).click( function(){

        console.log( 'ewm_delete_service_z_c' );

        ewm_service_z_c = $( this ).data( 'service-z-c' );
        $( '.ewm_he_body_table_' + ewm_service_z_c ).remove();
        
        var form_data = new FormData();
        form_data.append( 'action', 'ewm_delete_service_z_c' );
        form_data.append( 'ewm_service_z_c', ewm_service_z_c );

        jQuery.ajax( {
            url: ajax_object.ajaxurl,
            type: 'post',
            contentType: false,
            processData: false,
            data: form_data,
            success: function ( response ) {
                console.log( response );
                response = jQuery.parseJSON( response );
                // alert( "" ); >> // update.
                // location.reload();
            },
            error: function (response) {
                console.log( response );
            }
        } );
        // append on the following class

    } )

} )
