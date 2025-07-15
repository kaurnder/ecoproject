jQuery(document).ready(function ($) {
    $('#update-profile-form').submit(function (e) {
        e.preventDefault(); // Prevent default form submission

        var formData = new FormData(this);
        // console.log('formData', formData);

        formData.append('action', 'update_user_profile'); // WordPress AJAX action
        $.ajax({
            type: 'POST',
            url: ajaxurl, // Defined in functions.php
            data: formData,
            contentType: false,
            processData: false,
            success: function (response){
                console.log(response.data.message);
                $('#message').html(response.data.message); // Display success message
            },
        });
    });
});


//update uer password
jQuery(document).ready(function($) {
    $('#reset-password-form').submit(function(e) {
        e.preventDefault(); // Prevent page reload

        var formData = new FormData(this);
        formData.append('action', 'reset_user_password'); // WordPress AJAX action

        $.ajax({
            type: 'POST',
            url: ajaxurl, // Defined in functions.php
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                console.log(response);
                $('#message').html(response.data.message);
            },
          
        });
    });
});



