<style>
	.ewm_hvace_acfb_wrapper{
		width: 100% ;
		display: none;
	}
	.ewm_hvace_acfb_selection{
		width: 100%;
	}
	.ewm_hvace_acfb_selection_options{
		cursor: pointer;
		border: 1px solid #f0f0f191;
		width: 46%;
		margin: 5px;
		padding: 8px 10px;
		border-radius: 10px;
		background: #f0f0f1;
		float: left;
	}
	.ewm_hvace_acfb_title{
		margin-bottom: 50px;
	}
	.ewm_he_select_acfb_wrapper{
		float: right;
	}
	.ewm_hvace_acfb_selection_options_active{
		background-color: #fff;
		border: 2px solid yellowgreen;
		color: yellowgreen;
		box-shadow: 0 5px 8px 0 rgb(180 178 178 / 50%), 0 6px 10px 0 rgb(118 118 118 / 10%) !important;
	}
	.ewm_he_acfb_select_tick{
		display: none;
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
	.ewm_hvace_acfb_selection_inner{
		width: 100%;
	}
	.ewm_hvace_acfb_selection_top_n, .ewm_hvace_acfb_selection_bottom_n{
		height:75px;
		overflow: auto;
	}
</style>

<div class="ewm_hvace_acfb_wrapper ewm_hvace_ss_wrapper_none">
	<div class="ewm_hvace_acfb_title">
		<center>Which service would you like?</center>
	</div>
	<div class="ewm_hvace_acfb_selection">
		<center>
		<div class="ewm_hvace_acfb_selection_inner">
			<div class="ewm_hvace_acfb_selection_top_n">
				<div class="ewm_hvace_acfb_selection_options" data-acfb-tick-id-no="1">
					<center><span>
						AC Solutions( Cooling Only )
						<div class="ewm_he_select_acfb_wrapper">
							<span class="ewm_he_acfb_select_tick1 ewm_he_acfb_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</span>
						</div>
					</span></center>
				</div>
				<div class="ewm_hvace_acfb_selection_options"  data-acfb-tick-id-no="2">
					<center><span>
						Both( Cooling and Heating )
						<div class="ewm_he_select_acfb_wrapper">
							<span class="ewm_he_acfb_select_tick2 ewm_he_acfb_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</span>
						</div>
					</span></center>
				</div>
			</div>
			<div class="ewm_hvace_acfb_selection_bottom_n">
				<div class="ewm_hvace_acfb_selection_options" data-acfb-tick-id-no="3">
					<center><span>
						Furnace/ Heating Solutions
						<div class="ewm_he_select_acfb_wrapper">
							<span class="ewm_he_acfb_select_tick3 ewm_he_acfb_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</span>
						</div>
					</span></center>
				</div>
				<!-- <div class="ewm_hvace_acfb_selection_options"  data-acfb-tick-id-no="4">
					<center><span>
						Water Heating
						<div class="ewm_he_select_acfb_wrapper">
							<span class="ewm_he_acfb_select_tick4 ewm_he_acfb_select_tick">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
									<path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
									<path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
								</svg>
							</span>
						</div>
					</span></center>
				</div>
				-->
			</div>
		</div>
		</center>
	</div>

	<div class="ewm_he_bottom_nav">
		<div class="ewm_he_back" data-previous-stage="residential_commercial"> <b> << Back </b> </div>
	</div>
</div>
