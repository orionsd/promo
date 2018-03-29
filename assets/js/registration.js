jQuery(document).on( "submit", "#reg_form button",
	function(e)
	{
        alert();
        e.preventDefault();
		var button = jQuery(this);
		button.attr('disabled', 'disabled');
		jQuery(".lds-rolling").fadeIn();
		
		jQuery.ajax( {
			url: "/ajax.php",
  			method: "POST",
  			data: jQuery("#reg_form").serialize(),
  			dataType: "json"
			} )
			.done(function(data) 
			{
				console.log(data);
				var info_class = 'alert alert-danger';
				if ('1' == data)
				{
					var message = "Регистрация прошла успешно.";
					var info_class = 'alert alert-success';
				}
				else if ( ('empty_error' == data) || ('required_error' == data) )
					var message = "Не заполнены обязательные поля.";
				else if ('synchro_error' == data)
					var message = "Ошибка синхронизации";

				jQuery(".lds-rolling").fadeOut(800,
					function(){
						jQuery("#res_info")
							.html(message)
							.removeAttr('class')
							.addClass(info_class)
							.slideDown();
					});
				button.removeAttr('disabled');
			})
			.fail(function( jqXHR, textStatus )
			{
				console.log( "Request failed: " + textStatus );
			})
		});