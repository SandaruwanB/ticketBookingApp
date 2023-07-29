//register 
$('#registerBtn').click(function (e) { 
    e.preventDefault();
    const title = $('#form_title').val();
    const fname = $('#firstname').val();
    const lname = $('#lastname').val();
    const contact = $('#mobile').val();
    const email = $('#email').val();
    const username = $('#uname').val();
    const password = $('#pass').val();
    const repassword = $('#confirmpassword').val();

    if(title == "" || fname == "" || lname == "" || contact == "" || email == "" || username == "" || password == "" || repassword == ""){
        showToast("red", "All Fields are Required");
    }
    else if(password != repassword){
        showToast('red', "Passwords doesn't Match.");
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                register : true,
                title : title,
                fname : fname,
                lname : lname,
                contact : contact,
                email : email,
                username : username,
                password : password
            },
            dataType: "text",
            success: function (response) {
                const finalRes = response.trim();
                if(finalRes == "email"){
                    showToast("red", "This email already in use.");
                }
                else if(finalRes == "user"){
                    showToast("red", "This user name already exists.")
                }
                else{
                    location.replace("/moviebooker/user/");
                }
            }
        });
    }
});

//login
$('#loginBtn').click(function (e) { 
    e.preventDefault();
    const username = $('#uname').val();
    const password = $('#pass').val();

    if(username == "" || password == ""){
        showToast("red", "All Fields are Required");
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                signin : true,
                username : username,
                password : password
            },
            dataType: "text",
            success: function (response) {
                const actRes = response.trim();
                if(actRes == "pass"){
                    showToast("red", "Incorect Password Please Check Again.");
                }
                else if(actRes == "notfound"){
                    showToast("red", "User Account not Found Please Register.")
                }
                else if(actRes == "user"){
                    location.replace("/moviebooker/user/");
                }
                else{
                    location.replace("/moviebooker/admin/");
                }
            }
        });
    }
});


// contact message
$('#addContactMessage').click(function (e) { 
    e.preventDefault();
    const name = $('#name').val();
    const email = $('#email').val();
    const contact = $('#phone').val();
    const subject = $('#subject').val();
    const message = $('#message').val();

    if(name == "" || email == "" || contact == "" || subject == "" || message == ""){
        showToast("red", "All Fileds are Required.");
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
                $('#name').val("");
                $('#email').val("");
                $('#phone').val("");
                $('#subject').val("");
                $('#message').val("");
                showToast("green", "Your Message is Submitted. Please be in touch with your mailbox.");
            }
        });
    }
});


function showToast(color, text){
    var x = document.getElementById("snackbar");
    $('#snackbar').text(text);
    $('#snackbar').css('background-color', color);
    $('#snackbar').addClass('show');
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}