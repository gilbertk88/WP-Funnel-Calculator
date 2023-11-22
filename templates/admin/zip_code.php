<style>
	.ewm_he_top_wrapper{
		margin: 25px 20px 0px 10px;
		background-color: #fff;
		border-radius: 10px;
		/* width: 96%; */
		padding: 20px;
	}
	.ewm_he_top_title{
		width: 100%;
		overflow: auto;
		padding: 10px;
		font-size: 22px;
		font-weight: 500;
	}
	.ewm_he_top_body{
		width: 100%;
	}	
	.ewm_he_m_new_zip{
		background-color: #f9f9f9;
		color: #333;
		float: right;
		margin: 30px 100px 20px 5px;
		border: 3px solid #ccc;
		padding: 10px 30px;
		border-radius: 5px;
		cursor: pointer;
	}
	.ewm_he_top_body{
		padding: 15px;
	}
	.ewm_he_top_table{
		color: #fff;
		background-color: yellowgreen;
	}
	.ewm_he_whole_table{
		width: 90%;
	}
	.ewm_he_top_table_td{		
		padding: 10px 20px;
		background-color: #f9f9f9;
		color: #333;
		border-radius: 6px;
	}
	.ewm_he_body_table_td{
		padding: 8px 25px;
	}
	.ewm_he_edit_zip_c{
		padding: 10px;
		background-color: yellowgreen;
		border: 0px;
		margin: 5px;
		border-radius: 10px;
		cursor: pointer;
		color: #fff;
		float: left;
	}
	.ewm_delete_service_z_c{
		background: #fff;
		border: 0px;
		border-radius: 11px;
		padding: 10px;
		cursor: pointer;
		float: left;
		color: #ccc;
	}
	
</style>

<?php

$ewm_zip_data = get_posts([
	"post_status"           => "active",
	"post_type"             => "ewm_zip_data",
] );

?>

<div class="ewm_he_top_wrapper">
	<div class="ewm_he_top_title">
		<input type="button" class="ewm_he_m_new_zip" value="New Zip Code">
	</div>
	<div class="ewm_he_top_title">
		<center>Services Zip Codes</center>
	</div>
	<div class="ewm_he_top_body">
		<table class="ewm_he_whole_table">
			<tr class="ewm_he_top_table">
				<td class="ewm_he_top_table_td">Id</td>
				<td class="ewm_he_top_table_td">Zip Code</td>
				<td class="ewm_he_top_table_td">Zip Code Name</td>
				<td class="ewm_he_top_table_td"></td>
			</tr>

			<?php 
			foreach ($ewm_zip_data as $row_k => $row_v) {

			?>
			<tr  class="ewm_he_body_table ewm_he_body_table_<?php echo $row_v->ID; ?>">
				<td class="ewm_he_body_table_td">
					<?php echo $row_v->ID; ?>
				</td>
				<td class="ewm_he_body_table_td" id="ewm_he_zip_code_<?php echo $row_v->ID ; ?>">
					<?php
						echo get_post_meta( $row_v->ID, "ewm_zip_code_v", true );
					?>
				</td>
				<td class="ewm_he_body_table_td" id="ewm_he_add_name_<?php echo $row_v->ID ; ?>">
					<?php 
						echo get_post_meta( $row_v->ID, "ewm_address_name_v", true );
					?>
				</td>
				<td class="ewm_he_body_table_td"> 
					<center>
						<div class="">
							<input type="button" value="Open" class="ewm_he_edit_zip_c" data-edit-zip-c="<?php echo $row_v->ID; ?>" >
							<span data-service-z-c="<?php echo $row_v->ID ; ?>" class="ewm_delete_service_z_c dashicons dashicons-trash"></span>
						</div>
					</center>
				</td>
			</tr>
			<?php 
			}
			?>
		</table>

	</div>
</div>
<input type="hidden" value="0" id="ewm_he_active_zip_c">

<?php 

	$poup_dash = HVACE_HOME_DIR . '/templates/admin/zip_code_popup.php';
	include_once $poup_dash ;

?>