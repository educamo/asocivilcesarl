// Contact Form Scripts

$(function() {

    /**
     * @summary Initializes the jqBootstrapValidation plugin on the contact form.
     * @description Sets up validation rules and handlers for form submission.
     */
    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        /**
         * @summary Handles form submission errors.
         * @description This function is called when the form has validation errors.
         * @param {jQuery} $form - The form that was submitted.
         * @param {Event} event - The submit event.
         * @param {Object} errors - An object containing the validation errors.
         */
        submitError: function($form, event, errors) {
            // additional error messages or events can be handled here
        },
        /**
         * @summary Handles successful form submission.
         * @description This function is called when the form is successfully validated.
         * It prevents the default form submission, gathers form data, and sends it via AJAX.
         * @param {jQuery} $form - The form that was submitted.
         * @param {Event} event - The submit event.
         */
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var phone = $("input#phone").val();
            var message = $("textarea#message").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }

            /**
             * @summary Sends form data to the server using AJAX.
             * @description Performs a POST request to the specified URL with the form data.
             * Handles success and error responses by displaying appropriate messages.
             */
            $.ajax({
                url: "././mail/contact_me.php",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message
                },
                cache: false,
                /**
                 * @summary Handles a successful AJAX response.
                 * @description Displays a success message to the user and clears the form.
                 */
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Tu Mensaje ha sido enviado. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                /**
                 * @summary Handles an error in the AJAX response.
                 * @description Displays a failure message to the user and clears the form.
                 */
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            });
        },
        /**
         * @summary Filters the elements to be validated.
         * @description Ensures that only visible elements are validated by the plugin.
         * @returns {boolean} True if the element is visible, otherwise false.
         */
        filter: function() {
            return $(this).is(":visible");
        },
    });

    /**
     * @summary Handles clicks on tab links.
     * @description Prevents the default link behavior and shows the corresponding tab.
     * @param {Event} e - The click event object.
     */
    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/**
 * @summary Clears success/failure messages on form focus.
 * @description When the 'name' input field receives focus, this function clears
 * any existing content from the '#success' div.
 */
$('#name').focus(function() {
    $('#success').html('');
});