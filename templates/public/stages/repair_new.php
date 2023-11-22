<style>
	.ewm_he_repair_new_wrapper{
		width:100%;
		height:580px;
		overflow: auto;
	}
	.ewm_he_repair_new_half{
		width: 49%;
		float: left;
		height: 560px;
	}
	.ewm_he_repair_new_top{
		width: 100%;
	}
	.ewm_he_repair_new_bottom{
		position: relative;
		bottom: 0px;
		width: 100%;
		margin-top: 209px;
		display: none;
	}
	.ewm_he_repair_new_top_inner{
		width: 100%;
		margin: 10px;
		overflow: auto;
		cursor: pointer;
	}
	.ewm_he_repair_new_top_select{
		float: left;
		border: 1px solid #f0f0f191;
		width: 45%;
		margin: 10px;
		padding: 8px 25px;
		border-radius: 10px;
		background: #f0f0f1;
	}
	.ewm_he_repair_new_top_heading{
		font-size: 18px;
		padding: 5px 0px 10px 0px;
	}
	.ewm_he_repair_new_top_t_h{
		font-size: 18px;
		font-weight: bold;
	}
	.ewm_he_repair_new_top_t_sh{}
	.ewm_he_hvac1_img, .ewm_he_hvac2_img{
		width:100%;
		border-radius: 10px;
	}
	.ewm_he_hvac1_img_wrapper, .ewm_he_hvac2_img_wrapper{
		padding: 10px;
	}
	.ewm_he_hvac2_img_wrapper{
		display: none;
	}
	.ewm_he_repair_new_top_select_active{
		background-color: #fff;
		border: 2px solid yellowgreen;
		color: yellowgreen;
		box-shadow: 0 5px 8px 0 rgb(180 178 178 / 50%), 0 6px 10px 0 rgb(118 118 118 / 10%) !important;
	}
	.ewm_he_zip_input_a{
		background-color: yellowgreen;
		overflow: auto;
		padding: 10px;
		border-radius: 20px  0px  20px  20px;
		margin-left: 20px;
	}
	.ewm_he_address_input_l_a{
		float: left;
		width: 45%;
	}
	.ewm_he_address_input_r_a{
		float: left;
		width: 50%;
		padding-top: 10px;
	}
	.ewm_he_address_input_f{
		border-radius: 15px 0px 15px 15px;
		border: 0px;
	}
	.ewm_he_white_lable_section{
		color: #fff;
		cursor: pointer;
	}
	.ewm_he_select_wrapper{
		width: 100%;
	}
	.ewm_he_select_tick1, .ewm_he_select_tick2{
		float: right;
		display: none;
	}
</style>
<div class="ewm_he_repair_new_wrapper ewm_hvace_ss_wrapper_none">
	<div class="ewm_he_repair_new_half">
		<div class="ewm_he_hvac1_img_wrapper">
			<img src="<?php echo plugin_dir_url( __FILE__ ).'/repair_new/img/hvac1.jpg'; ?>" class="ewm_he_hvac1_img" />
		</div>
		<div  class="ewm_he_hvac2_img_wrapper">
			<img src="<?php echo plugin_dir_url( __FILE__ ).'/repair_new/img/hvac2.jpg'; ?>" class="ewm_he_hvac2_img" />
		</div>
	
	</div>
	<div class="ewm_he_repair_new_half">
		<div class="ewm_he_repair_new_top">			
			<center>
				<div class="ewm_he_repair_new_top_top">
					<div class="ewm_he_repair_new_top_t_h">24/ 7 Instant Estimates</div>
					<div  class="ewm_he_repair_new_top_t_sh">I am looking for:</div>
				</div>
				<div class="ewm_he_repair_new_top_inner">					
					<div  class="ewm_he_repair_new_top_select" data-new-repair-select="repair" >
						<div class="ewm_he_select_wrapper">
							<span class="ewm_he_select_tick1 ewm_he_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</span>
						</div>
						<div class="ewm_he_repair_new_top_heading">Repair Service</div>
						<div class="ewm_he_repair_new_top_icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-wrench-adjustable-circle" viewBox="0 0 16 16">
								<path d="M12.496 8a4.491 4.491 0 0 1-1.703 3.526L9.497 8.5l2.959-1.11c.027.2.04.403.04.61Z"/>
								<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-1 0a7 7 0 1 0-13.202 3.249l1.988-1.657a4.5 4.5 0 0 1 7.537-4.623L7.497 6.5l1 2.5 1.333 3.11c-.56.251-1.18.39-1.833.39a4.49 4.49 0 0 1-1.592-.29L4.747 14.2A7 7 0 0 0 15 8Zm-8.295.139a.25.25 0 0 0-.288-.376l-1.5.5.159.474.808-.27-.595.894a.25.25 0 0 0 .287.376l.808-.27-.595.894a.25.25 0 0 0 .287.376l1.5-.5-.159-.474-.808.27.596-.894a.25.25 0 0 0-.288-.376l-.808.27.596-.894Z"/>
							</svg>
						</div>
					</div>
					<div  class="ewm_he_repair_new_top_select" data-new-repair-select="new">
						<div class="ewm_he_select_wrapper">
							<span class="ewm_he_select_tick2 ewm_he_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</span>
						</div>
						<div class="ewm_he_repair_new_top_heading">
							New Install							
						</div>
						<div>
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
								<path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
								<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
								<path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
							</svg>
						</div>
					</div>
				</div>
			</center>
		</div>
		<div class="ewm_he_repair_new_bottom">
			<center>
			<div class="ewm_he_zip_input_a">
				<div class="ewm_he_address_input_l_a">
					<input type="text" class="ewm_he_address_input_f" placeholder="Enter zip code">
				</div>
				<div class="ewm_he_address_input_r_a">
					<center><span class="ewm_he_white_lable_section ewm_he_show_me_pricing"><b>Show Me Pricing</b></span></center>
				</div>
			</div>
			</center>
		</div>
	</div>
</div>

<style>
	.ewm_he_no_zip_like_that_outer{
		position: fixed; 
		top:0px;
		left:0px;
		background:#3333334f;
		width: 100%;
		height: 100%;
		display:none;
	}
	.ewm_he_no_zip_like_that_inner{
		margin:10% 25%;
		background:#ffffff;
		opacity: 1;
		padding: 30px;
		border-radius: 15px;
	}
	.ewm_he_zip_button_close{
		margin:20px;
		border-radius: 10px;
		cursor:pointer;
	}
</style>
<div class="ewm_he_no_zip_like_that_outer">
	<div class="ewm_he_no_zip_like_that_inner">		
		<div  class="ewm_he_body_zip_top">
			<div class="ewm_he_zip_message">
				Sorry we do not service the zip code.Please enter a different zip code.
			</div>
		</div>
		<div class="ewm_he_menu_zip_top">
			<input type="button" class="ewm_he_zip_button_close" value="Okay">
		</div>
	</div>
</div>
