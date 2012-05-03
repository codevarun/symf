 $(document).ready(function() {
   $('#update').click(function() {
   	    $.post($(this).data('url'), { content: $('#app_blogbundle_posttype_content').val() },
   	     function(data) {
	       $('#preview').html(data);
	    });
	   	return false;
	});
    $('#close').click(function() {
   	 $('#preview').html('');
   	 return false;
   });
 });