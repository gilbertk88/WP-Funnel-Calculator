<style>
	.ewm_he_top_pp_wra_pros{
		width: 100%;
		background-color: #33333350;
		z-index: 1000;
		position: fixed;
		top: 0px;
		left: 0px;
		height: 100%;
		display: none;
	}
	.ewm_he_top_pp_inner_pros{
		background-color: #fff !important;
		width: 60%;
		height: 100%;
		position:fixed;
		right: 0px;
		top: 10px;
		padding: 35px 10px;
	}
	.ewm_he_clos_pp_zip_pros{
		float: right;
		padding: 10px 15px;
		border-radius: 5px;
		background-color: #ccc5;
		border: 0px;
		cursor: pointer;
		color: #000;
		margin: 20px;
	}
	.ewm_he_menu_top_c_pros{
		overflow: auto;
	}
	.ewm_he_pp_body_pros{
		overflow: auto;
		padding: 0px 35px 0px 35px ;
	}
	.ewm_he_pp_body_input_wrapper_pros{
		padding: 15px;
	}
	.ewm_he_pp_body_input_wrapper_txt_pros{
		width: 100%;
		padding: 10px;
		border-radius: 15px;
	}
	.ewm_he_pp_save_zip_button_pros{
		padding: 15px;
		border-radius: 15px;
		background-color: #3cc;
		border: 0px;
		width: 100%;
		cursor: pointer;
	}
	.ewm_he_pp_body_input_wrapper_txt_pros{
    	height: 40px;
    	border-radius: 15px !important;
    	border: 1px solid lightgray;
	}
	.ewm_he_pp_body_input_wrapper_t_pros{
		padding: 10px;
	}
	.ewm_he_menu_top_c_t_pros{}
	.ewm_he_body_wrap_d{
	    width: 40%;
		overflow: auto;
		float: left;
		border: 1px solid #cccccc52;
		border-radius: 5px;
		margin: 3px;
	}
	.ewm_he_head_d{
		padding: 10px 20px;
    	background-color: #f9f9f9;
    	color: #333;
    	border-radius: 6px;
	}
	.ewm_he_body_d{
		padding: 10px 20px;
    	border-bottom: 0px solid #ccc;
    	border-radius: 0px;
		float: left;
	}
	.ewm_he_body_h{
		float: left;
		width: 40%;
		padding: 10px;
		background: #ffffe070;
	}
	.ewm_he_prospect_single_data{}
	.ewm_he_s_top_f{
		width: 100%;
	}
	.ewm_he_l_t_l{
    	float: left;
    	font-size: 18px;
    	font-weight: 500;
    	padding: 8px 40px;
	}
	.ewm_he_prospect_top{
		margin-bottom: 30px;
		overflow: auto;
		background: #adff2f1a;
		padding: 15px 5px;
		border-radius: 10px;
	}
	.ewm_he_l_f_l{
		width: 40%;
	}
	.ewm_he_l_f_l_c{
		float: left;
		border-radius: 18px;
		border: 2px solid #cccccc85;
		padding: 6px 35px;
		margin-left: 10px;
		margin-bottom: 30px;
		cursor: pointer;
	}
	.ewm_he_l_f_l_c_active{
		border:2px solid #33333380;
	}

</style>

<div class="ewm_he_top_pp_wra_pros">
	<div class="ewm_he_top_pp_inner_pros">		
		<div class="ewm_he_menu_top_c_pros">
			<center>
				<div class="ewm_he_l_f_l">
					<div class="ewm_he_l_f_l_c ewm_he_under_ur_f ewm_new_submission" data-ewm-data-focus-status = "ewm_new_submission" > New Submission </div>
					<div class="ewm_he_l_f_l_c ewm_he_under_rd_f ewm_resolved" data-ewm-data-focus-status = "ewm_resolved" > Processed Submission </div>
					<!-- <div class="ewm_he_l_f_l_c">Clear Filter</div> -->
				</div>
			</center>
			<input type="button" value="Close" class="ewm_he_clos_pp_zip_pros">

		</div>
		<div class="ewm_he_menu_top_c_pros ewm_he_menu_top_c_t_pros">
			
			<div class="ewm_he_s_top_f">
				<div class="ewm_he_l_t_l">Lead Submitted</div>				
			</div>
		</div>
		<div class="ewm_he_pp_body_pros">

			<div class="ewm_he_prospect_top">
				<div class='ewm_he_prospect_first_name' > </div>
				<div class='ewm_he_prospect_last_name' > </div>
				<div class='ewm_he_prospect_email' > </div>
				<div class='ewm_he_prospect_phone' > </div>
			</div>

			<div class="ewm_he_prospect_single_data">
			</div>
		</div>
	</div>
</div>

<input id="ewm_he_service_prospect_id" type="hidden">
