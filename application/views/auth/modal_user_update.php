<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>
<?php 
//echo $type;
$type = $type;

switch($type){
	case "image" : 


?>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Form Update Profile</h4>
			</div>
			<div class="modal-body" id="modal-body">
			  <form id="imageUploadForm" action="<?php echo base_url().'auth/upload_image_profile'?>" method="post" enctype="multipart/form-data" >
					<input type='file' name="imageupload" id="imageupload"/>
					<div class="modal-image-preview" style="text-align:center">
						<img id="image-previews" src="#" alt="your image" style="width:40%;" />
					</div>
					<div id="imagedisplay">
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary" id="_save_image_" value="Save">
						<button type="button" class="btn btn-default close-modal" data-dismiss="modal" >Close</button>
					</div>
			</form>
		  </div>
		</div>
		
	</div>
</div>  
<?php break ; 
	case "password" :

?>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Form Update Profile</h4>
			</div>
			<form action="<?php echo base_url()?>auth/change_password" id="form-password" class="newtopic" method="post">
			<div class="modal-body" id="modal-body">
					
					
						<div class="accsection">
						   
							<div class="topwrap">
								<div class="posttext pull-center">
									<div>
										<input type="password" name="old_password" placeholder="Old Password" class="form-control">
										<td style="color: red;"><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></td>
									</div>
									
									<div>
										<input type="password" name="new_password" placeholder="New Password" class="form-control">
										<td style="color: red;"><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></td>
									</div>
									
									
									<div>
										<input type="password" name="confirm_new_password" placeholder="Confirm New Password" class="form-control">
										<td style="color: red;"><?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?></td>
									</div>
									
								</div>
								<div class="clearfix"></div>
							</div>  
						</div><!-- acc section END -->
						
					
				</div><!-- POST -->
				 <div class="modal-footer">
						<input type="submit" class="btn btn-primary" value="Save">
						<button type="button" class="btn btn-default close-modal" data-dismiss="modal" >Close</button>
					</div>
					</form>
		</div>
		
	</div>
</div>  
<?php 
	break;
	
	default:
?>
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Upload Image Form</h4>
			</div>
			<div class="modal-body" id="modal-body">
				<div class="alert alert-danger" role="alert"> <strong>Warning </strong>You Can't Access this site, Please try again</div>
		  </div>
		</div>
		
	</div>
</div>  

<?php

} ?>

<style>
.accsection input[type=password] {
    margin-bottom: 11px;
}
</style>
<script>

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#image-previews').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imageupload").change(function(){
    readURL(this);
});

$('#imageUploadForm').submit(function(evt) {
	evt.preventDefault();
	var formData = new FormData(this);
	$.ajax({
		type: 'POST',
		url: $(this).attr('action'),
		data:formData,
		cache:false,
		contentType: false,
		processData: false,
		success: function(data) {
			if(data == "success"){
				$('.close-modal').click();
			}

			$('#imagedisplay').html("<p>"+data+"</p>");
		},
		error: function(data) {
			//$('#imagedisplay').html("<h2>this file type is not supported</h2>");
		}
	});
});


$('#form-password').submit(function(evt) {
	//alert('s');
	evt.preventDefault();
	var formData = new FormData(this);
	$.ajax({
		type: 'POST',
		url: $(this).attr('action'),
		cache:false,
		contentType: false,
		processData: false,
		data:formData,
		success: function(data) {
			console.log(data);
		},
		error: function(data) {
			//$('#imagedisplay').html("<h2>this file type is not supported</h2>");
		}
	});
});
</script>