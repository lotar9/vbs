function load_template(templateName,api,targetId,data){
	if (typeof data === 'undefined') { 
		data = {};
		$.get( 'api/'+api,data, function( response ) {
    			//$('#loading').modal('hide');
    			$.get('templates/'+templateName, function(template) {
   					var rendered = Mustache.render(template, response);
    				$('#'+targetId).html(rendered);
  				});

			},'json');
	}
}