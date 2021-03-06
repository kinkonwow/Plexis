$().ready(function() {

/**
* Settings Form
*/
    /** Form validation */
    var validateform = $("#config-form").validate();
    
    /** Bind the config form to AjaxForm */
    $('#config-form').ajaxForm({
        beforeSubmit: function (arr, data, options)
        {
            $('#js_message').attr('class', 'alert loading').html('Submitting config settings...').slideDown(300);
            $("html, body").animate({ scrollTop: 0 }, "slow");
            return true;
        },
        success: function (response)  
        { 
            // Parse the JSON response
            var result = jQuery.parseJSON(response);
            if(typeof result.php_error != "undefined" && result.php_error == true)
            {
                show_php_error( result.php_error_data );
            }
            else
            {
                if (result.success == true)
                {
                    // Display our Success message, and ReDraw the table so we imediatly see our action
                    $('#js_message').attr('class', 'alert success').html(result.message);
                }
                else
                {
                    $('#js_message').attr('class', 'alert ' + result.type).html(result.message);
                }
                $('#js_message').delay(5000).slideUp(300);
            }
        },
        error: function () {
            $.msgbox('An error ocurred while sending the ajax request.', {type : 'error'});
        },
        timeout: 5000 
    });
/**
* Registration Keys
*/
    /** Create our key form modal */
	var Modal = $("#key-modal").dialog({
		autoOpen: false,  
		modal: true, 
		width: 500,
        resizable: false,
	});
    
    // Hide our close window button from view unless needed
    Modal.parent().find(".ui-dialog-buttonset").hide();
    
    /** Bind our Reg Key button */
    $("a#regkey").click(function(){
        // Open the Modal Window
		Modal.dialog("option", {
			title: "Generate Registration Key"
		}).dialog("open");
        
        // Clear old junk
        $('#genkey').attr('value', '');
        $('#js_key_message').hide();
    });
    
    /** Bind our Generate Key Button */
    $("a#generate").click(function(){
        send_command('generate');
    });
    
    /** Bind our Delete Button */
    $("a#delete").click(function(){
        send_command('delete');
    });
    
    function send_command( c )
    {
        // Send our uninstall command
        $.ajax({
            type: "POST",
            url: Plexis.url + '/admin_ajax/regkeys',
            data: { action : c },
            dataType: "json",
            timeout: 5000, // in milliseconds
            success: function(result) 
            {
                if(typeof result.php_error != "undefined" && result.php_error == true)
                {
                    show_php_error( result.php_error_data );
                }
                else
                {
                    switch( c )
                    {
                        case "generate":
                            $('#genkey').attr('value', result.message);
                            break;
                            
                        case "delete":
                            // Display our Success message, and ReDraw the table so we imediatly see our action
                            $('#js_key_message').attr('class', 'alert ' + result.type).html(result.message).slideDown(300).delay(3000).slideUp(600);
                            break;
                    }
                }
            },
            error: function(request, status, err) 
            {
                switch(status)
                {
                    case "error":
                        $.msgbox('An error ocurred while sending the ajax request.', {type : 'error'});
                        break;
                    default:
                        $.msgbox('An error ('+ status +') ocurred while sending the ajax request', {type : 'error'});
                        break;
                }
            }
        });
    }
});
