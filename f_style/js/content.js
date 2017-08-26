$( document ).ready(function() {

		$("#note").attr("checked",true);
		$('#desc').summernote({ 
					 toolbar: [
					    // [groupName, [list of button]]
					    ['style', ['bold', 'italic', 'underline', 'clear']],
					    ['font', ['strikethrough', 'superscript', 'subscript']],
					    ['fontsize', ['fontsize']],
					    ['color', ['color']],
					    ['para', ['ul', 'ol', 'paragraph']],
					    ['height', ['height']]
					  ],
					height: 300,
					minHeight:300,
					maxHeight: 300
		});


		 //var arrNamaKota = ["Jakarta", "Bandung", "Semarang", "Yogyakarta", "Surabaya"];
		/*$("#title_topic").autocomplete({
          		source: site_url+"main/getTitle",
        });*/

        var jbase_url = site_url+"main/getTitle";
         $('input[name="title_topic"]').autoComplete({
			    minChars: 1,
			    source: function(term, response){
			        try { xhr.abort(); } catch(e){}
			        xhr = $.getJSON(jbase_url, { q: term }, function(data){ response(data); });
			    }
  		});

        

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
									
								setTimeout(function(){ 

									window.location.href = data.url_redirect;
									
						 		}, 1500);

							}else if(data.status == false) {

								//$(".message_result").removeClass("alert alert-success").addClass("alert alert-danger").html(data.message);
								$('.message_result').html(data.message).addClass('alert alert-danger').removeClass('alert alert-success').fadeIn();
								setTimeout(function(){ 
									$(".message_result").fadeOut();	
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