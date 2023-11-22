<style>
	.ewm_he_top_pp_wra{
		width: 100%;
		background-color: #33333350;
		z-index: 1000;
		position: fixed;
		top: 0px;
		left: 0px;
		height: 100%;
		display: none;
	}
	.ewm_he_top_pp_inner{
		background-color: #fff !important;
		width: 68%;
		height: 100%;
		position:fixed;
		right: 0px;
		top: 10px;
		padding: 35px 10px;
	}
	.ewm_he_clos_pp_zip{
		float: right;
		margin: 20px;
		border-radius: 10px;
		background-color: #f0f0f1 !important;
		border: 0px solid #ccc;
		padding: 10px 15px;
		cursor: pointer;
	}
	.ewm_he_menu_top_c{
		overflow: auto;
	}
	.ewm_he_pp_body{
		overflow: auto;
		padding: 35px 15px;
	}
	.ewm_he_pp_body_input_wrapper{
		padding: 15px;
	}
	.ewm_he_pp_body_input_wrapper_txt{
		width: 100%;
		padding: 10px;
		border-radius: 15px;
    	height: 40px;
    	border: 1px solid lightgray;
	}
	.ewm_he_pp_save_zip_button{
		border-radius: 15px;
		margin: 23px;
		padding: 10px 30px;
		background-color: #f9f9f9 !important;
		border: 2px solid #ccc !important;
		cursor: pointer;
		background: #fff;
	}
	
	.ewm_he_pp_body_input_wrapper_t{
		padding: 10px;
	}
	.ewm_he_menu_top_c_t{
		font-size: 18px;
		font-weight: 500;
	}
</style>
<div class="ewm_he_top_pp_wra">
	<div class="ewm_he_top_pp_inner">		
		<div class="ewm_he_menu_top_c"> 
			<input type="button" value="Close" class="ewm_he_clos_pp_zip">
		</div>
		<div class="ewm_he_menu_top_c ewm_he_menu_top_c_t"> 
			<center>Editing Zip Code</center>
		</div>
		<div class="ewm_he_pp_body">
			<div class="ewm_he_pp_body_input_wrapper">
				<span class="ewm_he_pp_body_input_wrapper_t">Zip Code</span>
				<span><input type="text" class="ewm_he_pp_body_input_wrapper_txt" id="ewm_ef_zip_code_v" ></span>
			</div>
			<div  class="ewm_he_pp_body_input_wrapper">
				<span class="ewm_he_pp_body_input_wrapper_t">Address Name</span>
				<span><input type="text" class="ewm_he_pp_body_input_wrapper_txt" id="ewm_ef_address_name_v"></span>
			</div>
			<div  class="ewm_he_pp_body_input_wrapper">
				<center>
					<input type="button" class="ewm_he_pp_save_zip_button" value="Save">
				</center>
			</div>
		</div>
	</div>
</div>
