// contact message
$('#addContactMessage').click(function (e) { 
    e.preventDefault();
    const name = $('#name').val();
    const email = $('#email').val();
    const contact = $('#phone').val();
    const subject = $('#subject').val();
    const message = $('#message').val();

    if(name == "" || email == "" || contact == "" || subject == "" || message == ""){

    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                addContactMessage : true,
                name : name,
                email : email,
                contact : contact,
                subject : subject,
                message : message
            },
            dataType: "text",
            success: function (response) {
                alert(response);
            }
        });
    }
});