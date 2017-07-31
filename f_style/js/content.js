$( document ).ready(function() {

		$("#note").attr("checked",true);
		$('#desc').summernote({ height: 300,minHeight:300,maxHeight: 300});

		$("#form_new_topic").ajaxForm({

				url 		: site_url+"main/insertTopic",
				dataType 	: "json",
				type 		: "POST",
				beforeSubmit: function()
				{
					$("#btnpost").attr("disabled","disabled");
					$(".fa-spinner").addClass("fa-spin");
				},
				success		: function(data){

							if(data.status == true)
							{
								  $('.message_result').html(data.message).removeClass('alert alert-danger').addClass('lert alert-success').fadeIn();
							}else if(data.status == false) {

								//$(".message_result").removeClass("alert alert-success").addClass("alert alert-danger").html(data.message);
								$('.message_result').html(data.message).addClass('alert alert-danger').removeClass('alert alert-success').fadeIn();
								setTimeout(function(){ 
									$(".message_result").fadeOut();;		
						 		}, 1500);
								
								
							}
							$("#btnpost").removeAttr("disabled");
							$(".fa-spinner").removeClass("fa-spin");
								
				},
				error 		: function(){

								alert("system error. Please Restart");
				}

		});

});

function getSubCategory(id_category)
{	


		$.ajax({

			url 		: site_url+"main/ajax/getSubCategory",
			dataType 	: "json",
			type 		: "POST",
			data 		: "id_category="+id_category,
			success		: function(data){

							$("#subcategory").html(data.option);
			},
			error 		: function(){

							alert("system error. Please Restart");
			}

	});

	
	
	
}