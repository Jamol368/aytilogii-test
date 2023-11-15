$(document).ready(function() {
    $('#complete').click(function() {
        $.ajax({
            url: '/cource/complete',
            type: 'POST',
            data: {param1: 2},
        success: function(response) {
            // Handle the response from the server
        },
        error: function() {
            // Handle any errors that occur during the Ajax request
        }
    });
    });
});