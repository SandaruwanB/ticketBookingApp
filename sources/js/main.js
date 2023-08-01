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


$('#editUser').click(function (e) { 
    e.preventDefault();
    const title = $('#form_title').val();
    const firstname = $('#firstname').val();
    const lastname = $('#lastname').val();
    const mobile = $('#mobile').val();
    const email = $('#email').val();
    const user = $('#uname').val();
    const password = $('#pass').val();

    if(firstname == "" || lastname == "" || mobile == "" || email == "" || user == ""){
        $('#alert-setter').html(alertSet("input", "You missed some required fields."));
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                editUserData : true,
                title : title,
                firstname : firstname,
                lastname : lastname,
                mobile : mobile,
                email : email,
                user : user,
                password : password
            },
            dataType: "text",
            success: function (response) {
                const finalVal = response.trim();
                if(finalVal == "exists"){
                    $('#alert-setter').html(alertSet("exist", "This email or user name already in use."));
                }
                else{
                    $('#alert-setter').html(alertSet("success", "User data succesfully changed."));
                }
            }
        });
    }
});


$('#addNewAdmin').click(function (e) { 
    e.preventDefault();
    const title = $('#form_title').val();
    const fname = $('#firstname').val();
    const lname = $('#lastname').val();
    const mobile = $('#mobile').val();
    const email = $('#email').val();
    const username = $('#uname').val();
    const pass = $('#pass').val();

    if(title == "" || fname == "" || lname == "" || mobile == "" || email == "" || username == "" || pass == ""){
        $('#alert-setter').html(alertSet("input", "All fields are required."));
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                adminAdd : true,
                title : title,
                fname : fname,
                lname : lname,
                mobile : mobile,
                email : email,
                username : username,
                pass : pass
            },
            dataType: "text",
            success: function (response) {
                const finalRes = response.trim();
                if(finalRes == "user"){
                    $('#alert-setter').html(alertSet("input", "This email or user name already in use.")); 
                }
                else{
                    $('#alert-setter').html(alertSet("success", "User account successfully added.")); 
                }
            }
        });
    }
});

$('#addNewCustomer').click(function (e) { 
    e.preventDefault();
    const title = $('#form_title').val();
    const fname = $('#firstname').val();
    const lname = $('#lastname').val();
    const mobile = $('#mobile').val();
    const email = $('#email').val();
    const username = $('#uname').val();
    const pass = $('#pass').val();

    if(title == "" || fname == "" || lname == "" || mobile == "" || email == "" || username == "" || pass == ""){
        $('#alert-setter').html(alertSet("input", "All fields are required."));
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                customerAdd : true,
                title : title,
                fname : fname,
                lname : lname,
                mobile : mobile,
                email : email,
                username : username,
                pass : pass
            },
            dataType: "text",
            success: function (response) {
                const finalRes = response.trim();
                if(finalRes == "user"){
                    $('#alert-setter').html(alertSet("input", "This email or user name already in use.")); 
                }
                else{
                    $('#alert-setter').html(alertSet("success", "User account successfully added.")); 
                }
            }
        });
    }
});



$('#logout').click(function (e) { 
    e.preventDefault();
    $.ajax({
        type: "post",
        url: "/moviebooker/database/actions.php",
        data: {
            logout : true,
        },
        dataType: "text",
        success: function (response) {
            window.location.replace("/moviebooker/");
        }
    });
});


function showToast(color, text){
    var x = document.getElementById("snackbar");
    $('#snackbar').text(text);
    $('#snackbar').css('background-color', color);
    $('#snackbar').addClass('show');
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}

function alertSet(classA, text){
    const string1 = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Error! </strong> '+ text +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';
    const string2 = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong>  '+ text +'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> </div>';

    if(classA == "success"){
        return string2;
    }
    else{
        return string1;
    }
}