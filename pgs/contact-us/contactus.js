
document.addEventListener('DOMContentLoaded', (event) => {
    
    //get the contact form instance
    const form = document.getElementById( "contactus" );

    //listen for the submit button and intercept it
    form.addEventListener("submit", (event) => {
        
        // if the email field is valid, we let the form submit
        if (!email.validity.valid) {
          // If it isn't, we display an appropriate error message
          showError();
          // Then we prevent the form from being sent by canceling the event
          event.preventDefault();
        }
    
    });

  });


grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6Lct27UjAAAAAEl3bOOsNixr_6kKrKbNaZ14UZgh', {action: 'contact_us_submit'}).then(function(token) {
       //content here
    });
});
