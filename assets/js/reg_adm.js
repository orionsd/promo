jQuery(document).on("click", "#sec_form button",
  function()
  {
    var button = jQuery(this);
    jQuery.ajax( {
      url: "/ajax.php",
        method: "POST",
        data: jQuery("#sec_form").serialize(),
        dataType: "json"
      } )
      .done(function(data) 
      {
        console.log(data);

        if ('empty_error' == data)
        {}
        else
        {
          jQuery('#sec_form').fadeOut(800,
            function()
            {
              jQuery('#main').html(data).slideDown();
            });
        }
      })
      .fail(function( jqXHR, textStatus )
      {
        console.log( "Request failed: " + textStatus );
      })
    });