<style>
	.ewm_hvace_ss_wrapper{
		width: 100% ;
		display: none;
	}
	.ewm_hvace_ss_selection{
		width: 100%;
	}
	.ewm_hvace_ss_selection_options{
		cursor: pointer;
		border: 1px solid #f0f0f191;
		/* width: 30%; */
		margin: 8px;
		padding: 8px 25px;
		border-radius: 10px;
		background: #f0f0f1;
		overflow: auto;
		float: left;
	}
	.ewm_hvace_ss_selection_options_help{	
		cursor: pointer;
		border: 1px solid #f0f0f191;
		width: 68%;
		/* margin: 5px; */
		padding: 0px;
		border-radius: 10px;
		background: #f0f0f1;
		overflow: auto;
		padding: 0px 15px;
	}
	.ewm_hvace_ss_selection_options_estimate{
		cursor: pointer;
		border: 1px solid #f0f0f191;
		width: 50%;
		margin: 15px;
		padding: 0px;
		border-radius: 10px;
		background: #f0f0f1;
		overflow: auto;
	}
	.ewm_hvace_ss_title{
		/*margin-bottom: 50px;*/
	}
	.ewm_he_select_ss_wrapper{
		padding-top: 8px;
	}
	.ewm_hvace_ss_selection_options_active{
		background-color: #fff;
		border: 2px solid yellowgreen;
		color: yellowgreen;
		box-shadow: 0 5px 8px 0 rgb( 180 178 178 / 50% ), 0 6px 10px 0 rgb( 118 118 118 / 10% ) !important;
	}
	.ewm_he_ss_select_tick{
		display: none;
		padding-top: 10px;
		color: yellowgreen;
	}
	.ewm_he_bottom_nav{
		width: 100%;
		overflow: auto;
	}
	.ewm_he_back{
		float: left;
		margin-top: 50px;
		color: green;
		cursor: pointer;
		border: 2px solid #00800030;
		padding: 8px 35px;
		border-radius: 25px;
	}
	.ewm_hvace_ss_selection_inner{
		width: 50%;
    	float: left;
	}
	.ewm_hvace_ss_selection_top_n, .ewm_hvace_ss_selection_bottom_n{
		height:80px;
		overflow: auto;
	}
	.ewm_hvace_enter_f{
		border: 0px !important;
		box-shadow: inset 0 1px 1px rgb(0 0 0 / 0%) !important;
		width: 100%;
	}
	.ewm_hvace_enter_f:focus{
		border: 0px !important;
		box-shadow: inset 0 1px 1px rgb(0 0 0 / 0%) !important;
		width: 100%;
	}
	.ewm_he_ss_f_r{
		float: left;
	}
	.ewm_he_ss_f_r_f{
		font-size: larger;
    	padding: 2px;
	}
	.ewm_hvac_ss_ie_b{
		width: 30%;
		background: yellowgreen !important;
		color: #fff !important;
		border-radius: 10px !important;
		margin-top: 20px;
		border-radius: 30px !important;
		margin: 5px;
	}
	.ewm_hvace_ss_title_l{
		font-size: larger;
	}
	.ewm_hvace_ss_title_l_l{
		font-size: larger;
	}

	.ewm_hvace_enter_f_FN, .ewm_hvace_enter_f_LN, .ewm_hvace_enter_f_p, .ewm_hvace_enter_f_E{
		padding-top: 8px 15px !important;
	}
	.ewm_he_ss_f_r_icon{
		padding: 10px;
	}
	.ewm_hvace_ss_selection_wrapper{
		overflow: auto;
	}
	.ewm_he_ss_f_r_t{
		padding-top: 5px;
	}
	.ewm_he_ss_f_r_icon_help{

	}
	.ewm_hvace_ss_not_sure{
		width:100%;
		overflow: auto;
		padding: 20px;
	}
	.ewm_he_ss_f_r_icon_estimated{
		padding: 10px;
		font-weight: bold;
		width: 50%;
		overflow: auto;
	}
	.ewm_he_ss_f_r_t_e{
		padding-top: 0px 0px 0px 20px !important;
		font-weight: 400;
	}
	.ewm_he_ss_new_top_select_active {
		background-color: #fff;
    	border: 1px solid yellowgreen;
    	color: yellowgreen;
    	box-shadow: 0 5px 8px 0 rgb(180 178 178 / 50%), 0 6px 10px 0 rgb(118 118 118 / 10%) !important;
	}
	.ewm_hvace_info_sec{
		width: 100%;
		overflow: auto;
	}
	.ewm_hvace_duct_sec{
		width: 100%;
	}

	.ewm_hvace_body{
		width: 100%;
		overflow: auto;
	}
	.ewm_hvace_duct_button{		
		width: 40%;
		margin: 10px;
		float: left;
		background: beige;
		padding: 8px 15px;
		border-radius: 10px;
		cursor: pointer;
	}
	.ewm_hvace_duct_button_ns{
		border: 1px solid #f0f0f191;
		min-width: 85%;
		margin: 5px;
		padding: 8px 15px;
		border-radius: 10px;
		background: beige;
		overflow: auto;
		float: left;
		cursor: pointer;
	}

	.ewm_hvace_heading{
		width : 100%;
	}
	.ewm_hvace_body_ef{}
	.ewm_hvace_ef_sec{
		width:100%;
		margin-top: 30px;
	}
	.ewm_hvace_ef_button{
		width: 40%;
		margin: 10px;
		float: left;
		background: #d3f7a9c7;
		padding: 8px 15px;
		border-radius: 10px;
		cursor: pointer;
	}
	.ewm_hvace_ef_button_ns{
		width: 84%;
		margin: 10px;
		float: left;
		background: #d3f7a9c7;
		padding: 8px 15px;
		border-radius: 10px;
		cursor: pointer;
	}
	.ewm_he_ef_select_active {
		background-color: #fff;
		border: 1px solid yellowgreen;
		color: yellowgreen;
		box-shadow: 0 5px 8px 0 rgb(180 178 178 / 50%), 0 6px 10px 0 rgb(118 118 118 / 10%) !important;
	}
	.ewm_he_duct_select_active {
		background-color: #fff;
		border: 1px solid yellowgreen;
		color: yellowgreen;
		box-shadow: 0 5px 8px 0 rgb(180 178 178 / 50%), 0 6px 10px 0 rgb(118 118 118 / 10%) !important;
	}
	.ewm_he_duct_select_tick{
		display: none;
		float: right;
	}
	.ewm_he_ef_select_tick{
		display: none;
	}
	.ewm_he_ef_select_tick{
		display: none;
		float: right;
	}
	.ewm_he_ss_f_r_t_e{
		padding-left: 10px;
	}
</style>

<div class="ewm_hvace_ss_wrapper ewm_hvace_ss_wrapper_none">
	<div class="ewm_hvace_ss_selection">
		<center>
		<div class="ewm_hvace_ss_selection_inner">
			<div class="ewm_hvace_ss_selection_wrapper">
				<div class="ewm_hvace_ss_title">
					<center>
						<div>
							<span class="ewm_hvace_ss_title_l_l">The size of my home/ office is:</span>
						</div>
					</center>
				</div>
				<div class="ewm_hvace_ss_selection_options" data-pi-tick-id-no="1">
					<center>
					<div>
						<div class="ewm_he_ss_f_r ewm_he_ss_f_r_icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
							<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
						</div>
						<div class="ewm_he_select_ss_wrapper">
							<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t"> < 1000 Sq. Ft. </div>
							<div class="ewm_he_ss_select_tick1 ewm_he_ss_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
						</div>
					</div>
					</center>
				</div>
				<div class="ewm_hvace_ss_selection_options" data-pi-tick-id-no="2">
					<center>
					<div>
						<div class="ewm_he_ss_f_r ewm_he_ss_f_r_icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
							<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
						</div>
						<div class="ewm_he_select_ss_wrapper">
							<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t"> 1001 - 2000 Sq. Ft. </div>
							<div class="ewm_he_ss_select_tick2 ewm_he_ss_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
						</div>
					</div>
					</center>
				</div>
				<div class="ewm_hvace_ss_selection_options" data-pi-tick-id-no="3">
					<center>
					<div>
						<div class="ewm_he_ss_f_r ewm_he_ss_f_r_icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
							<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
						</div>
						<div class="ewm_he_select_ss_wrapper">
							<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t"> 2001 - 3000 Sq. Ft. </div>
							<div class="ewm_he_ss_select_tick3 ewm_he_ss_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
						</div>
					</div>
					</center>
				</div>
				<div class="ewm_hvace_ss_selection_options" data-pi-tick-id-no="4">
					<center>
					<div>
						<div class="ewm_he_ss_f_r ewm_he_ss_f_r_icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
							<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
						</div>
						<div class="ewm_he_select_ss_wrapper">
							<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t"> 3001 - 4000 Sq. Ft. </div>
							<div class="ewm_he_ss_select_tick4 ewm_he_ss_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
						</div>
					</div>
					</center>
				</div>
				<div class="ewm_hvace_ss_selection_options" data-pi-tick-id-no="5">
					<center>
					<div>
						<div class="ewm_he_ss_f_r ewm_he_ss_f_r_icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
							<path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
							</svg>
						</div>
						<div class="ewm_he_select_ss_wrapper">
							<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t"> 4000+ Sq. Ft. </div>
							<div class="ewm_he_ss_select_tick5 ewm_he_ss_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
						</div>
					</div>
					</center>
				</div>
				</div>
				<div class="ewm_hvace_ss_not_sure">
					<center>
					<div class="ewm_hvace_ss_selection_options_help" data-pi-tick-id-no="6">
						<center>
						<div>
							<div class="ewm_he_ss_f_r ewm_he_ss_f_r_icon ewm_he_ss_f_r_icon_help">
								<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
									<path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
								</svg>
							</div>
							<div class="ewm_he_select_ss_wrapper">
								<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t ewm_he_not_sure"> Not Sure </div>
								<div class="ewm_he_ss_select_tick6 ewm_he_ss_select_tick">
									<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
										<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
										<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
									</svg>
								</div>
							</div>
						</div>
						</center>
					</div>
					</center>
				</div>
			</div>
			<div class="ewm_hvace_ss_selection_wrapper">
				<div class ="ewm_hvace_duct_sec" >
					<div class="ewm_hvace_heading">
						I already have duct work
					</div>
					<div class="ewm_hvace_body">
						<div class="ewm_hvace_duct_button" data-he-duct-id="1">							
							<div class="ewm_he_duct_select_tick1 ewm_he_duct_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
							Yes
						</div>
						<div class="ewm_hvace_duct_button" data-he-duct-id="2">							
							<div class="ewm_he_duct_select_tick2 ewm_he_duct_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
							No - Need to install duct
						</div>
					</div>
					<div class="ewm_hvace_body">
						<center>
							<div class="ewm_hvace_duct_button_ns" data-he-duct-id="3">
								Not sure(Professional should check)
								<div class="ewm_he_duct_select_tick3 ewm_he_duct_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
							</div>
						</center>
					</div>
				</div>

				<div class ="ewm_hvace_ef_sec" >
					<div class="ewm_hvace_heading">
						The efficiency I'm looking for:
					</div>
					<div class="ewm_hvace_body">
						<div class="ewm_hvace_ef_button" data-he-ef-id="1">							
							<div class="ewm_he_ef_select_tick1 ewm_he_ef_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
							Standard
						</div>
						<div class="ewm_hvace_ef_button"  data-he-ef-id="2">							
							<div class="ewm_he_ef_select_tick2 ewm_he_ef_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
							Premium $$ or $$$
						</div>
					</div>
					<div class="ewm_hvace_body">
						<center>
							<div class="ewm_hvace_ef_button_ns"  data-he-ef-id="3">								
								<div class="ewm_he_ef_select_tick3 ewm_he_ef_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</div>
							I don't know(Efficiency)
							</div>
						</center>
					</div>
				</div>

			</div>
		</div>
		</center>

		<div class="ewm_hvace_info_sec">
			<center>
			<div class="ewm_hvace_ss_selection_options_estimate" data-pi-tick-id-no="6">
				<center>					
					<div class="ewm_he_ss_f_r_icon_estimated">
						<div class=" ewm_he_ss_f_r ewm_he_ss_e_t_b">Estimated Total: </div>
						<div class="ewm_he_ss_f_r ewm_he_ss_f_r_t_e"> $7686+ </div>
					</div>
				</center>
			</div>
			<div class="ewm_hvace_ss_selection_options_button">
				<center>
					<input value="Next"  class="ewm_hvac_ss_ie_b" type="submit">
				</center>
			</div>
			</center>
		</div>

		<div class="ewm_he_bottom_nav">
			<div class="ewm_he_back" data-previous-stage="ac_furnace_both"> <b> << Back </b> </div>
		</div>
	</div>

</div>

