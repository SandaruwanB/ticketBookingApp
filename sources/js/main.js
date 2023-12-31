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


const theaterRows = [];
function addRowArray(){
    const capacity = $('#capacity').val();
    if(capacity == ""){
        $('#alert-setter3').text("Fill Capacity Before Add Row.");
        $('#alert-setter3').css("color", "red");
    }
    else{
        $('#alert-setter3').text("");
        theaterRows.push(capacity);
        let sring = "<ul class='list-group list-group-flush'>";
        for(let i=0; i<theaterRows.length; i++){
            sring += '<li style="display : flex; justify-content : space-between;" value="'+ theaterRows[i] +'" class="list-group-item">Row : '+ (i+1) +' Capacity : '+ theaterRows[i] +' <button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeRow('+i+')">Remove</button></li>';
        }
        sring += "</ul>";
        $('#capacitylist').html(sring);
    }
}
function removeRow(id){
    $('#alert-setter3').text("");
    theaterRows.splice(id,1);
    if(theaterRows.length > 0){
        let sring = "<ul class='list-group list-group-flush'>";
        for(let i=0; i<theaterRows.length; i++){
            sring += '<li style="display : flex; justify-content : space-between;" value="'+ theaterRows[i] +'" class="list-group-item">Row : '+ (i+1) +' Capacity : '+ theaterRows[i] +' <button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeRow('+i+')">Remove</button></li>';
        }
        sring += "</ul>";
        $('#capacitylist').html(sring);
    }
    else{
        $('#capacitylist').html(""); 
    }
}
$('#addNewTheater').click(function (e) { 
    e.preventDefault();
    const name = $('#theatername').val();
    const location = $('#location').val();
    const address = $('#address').val();
    const contact = $('#contact').val();
    const email = $('#email').val();
    const description = $('#description').val();
    const boxes = $('#boxes').val();

    if(name == "" || location == "" || address == "" || contact == "" || email == "" || description == "" || theaterRows.length == 0){
        $('#alert-setter').html(alertSet("input", "All Fields are Required.")); 
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                addNewTheater : true,
                name : name,
                location : location,
                address : address,
                capacity : theaterRows,
                contact : contact,
                email : email,
                description : description,
                boxes : boxes,
            },
            dataType: "text",
            success: function (response) {
                $('#alert-setter').html(alertSet("success", "Theater successfully added."));
            }
        });
    }
});


$('#addMovieUp').click(function (e) { 
    e.preventDefault();
    const image = $('#image')[0].files[0];
    const filmname = $('#filmname').val();
    const duration = $('#duration').val();
    const rdate = $('#rdate').val();
    const lang = $('#language').val();
    const description = $('#description').val();

    var base64Url = "";
    if(image){
        const fileReader = new FileReader();
        fileReader.onload = readSuccess;
        function readSuccess(e){
            base64Url = e.target.result;
            if(filmname == "" || duration == "" || rdate == "" || lang == "" || description == ""){
                $('#alert-setter').html(alertSet("input", "You Missed Some Required Fields.")); 
            }
            else{
                $.ajax({
                    type: "post",
                    url: "/moviebooker/database/actions.php",
                    data: {
                        addUpcomingMovie : true,
                        image : base64Url,
                        filmname : filmname,
                        duration : duration,
                        rdate : rdate,
                        lang : lang,
                        description : description
                    },
                    dataType: "text",
                    success: function (response) {
                        $('#alert-setter').html(alertSet("success", "Upcomming Movie Successfully Added.")); 
                    }
                });
            }
        }
        fileReader.readAsDataURL(image);
    }
    else{
        $('#alert-setter').html(alertSet("input", "Image is Required.")); 
    }
});


$('#editMovieUp').click(function (e) { 
    e.preventDefault();
    const filmname = $('#filmname').val();
    const duration = $('#duration').val();
    const rdate = $('#rdate').val();
    const lang = $('#lang').val();
    const description = $('#description').val();
    const itemid = $('#editMovieUp').val();

    if(filmname == "" || duration == "" || rdate == "" || lang == "" || description == ""){
        $('#alert-setter').html(alertSet("input", "All Fields are Required.")); 
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                editUpcommingMovie : true,
                itemid : itemid,
                filmname : filmname,
                duration : duration,
                rdate : rdate,
                lang : lang,
                description : description,
            },
            dataType: "text",
            success: function (response) {
                $('#alert-setter').html(alertSet("success", "Upcomming Movie Data Successfully Changed.")); 
            }
        });
    }
});

$('#addcurrMovie').click(function (e) { 
    e.preventDefault();
    const image = $('#image')[0].files[0];
    const filmname = $('#filmname').val();
    const duration = $('#duration').val();
    const lang = $('#language').val();
    const description = $('#description').val(); 

    var base64url = "";
    if(image){
        const fileReader = new FileReader();
        fileReader.onload = loadSuccess;
        function loadSuccess(e){
            base64url = e.target.result;
            if(filmname == "" || duration == "" || lang == "" || description == ""){
                $('#alert-setter').html(alertSet("input", "You Missed Some Required Fields."));
            }
            else{
                $.ajax({
                    type: "post",
                    url: "/moviebooker/database/actions.php",
                    data: {
                        addCurrentMovie : true,
                        filmname : filmname,
                        duration : duration,
                        lang : lang,
                        description : description,
                        image : base64url
                    },
                    dataType: "text",
                    success: function (response) {
                        $('#alert-setter').html(alertSet("success", "Current Movie Successfully Added."));
                    }
                });
            }
        }
        fileReader.readAsDataURL(image);
    } 
    else{
        $('#alert-setter').html(alertSet("input", "Image is Required."));
    }
});


$('#editcurrMovie').click(function (e) { 
    e.preventDefault();
    const filmname = $('#filmname').val();
    const duration = $('#duration').val();
    const lang = $('#language').val();
    const description = $('#description').val();
    const itemid = $('#editcurrMovie').val(); 

    if(filmname == "" || duration == "" || lang == "" || description == ""){
        $('#alert-setter').html(alertSet("input", "All Fields are Required."));
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                editCurrentMovie : true,
                itemid : itemid,
                filmname : filmname,
                duration : duration,
                lang : lang,
                description : description
            },
            dataType: "text",
            success: function (response) {
                $('#alert-setter').html(alertSet("success", "Current Movie Data Successfully Changed."));
            }
        });
    }
    //console.log(description);
});


/*$('#editPricing').click(function (e) { 
    e.preventDefault();
    const filmHall = $('#theatername').val();
    const film = $('#movie').val();
    const ePrice = $('#eticket').val();
    const sTicket = $('#cticket').val();
    const showTime = $('#time').val();
    const id = $('#editPricing').val();

    if(film == "" || filmHall == "" || ePrice == "" || sTicket == "" || showTime == ""){
        $('#alert-setter').html(alertSet("input", "All Fields are Required."));
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                editTicket : true,
                filmHall : filmHall,
                film : film,
                ePrice : ePrice,
                sTicket : sTicket,
                showTime : showTime,
                id : id
            },
            dataType: "text",
            success: function (response) {
                $('#alert-setter').html(alertSet("success", "Ticket booking details successfully updated."));
            }
        });
    }
});*/

const datesAndTime = [];
$('#addShowDate').click(function (e) { 
    e.preventDefault();
    const date = $('#showdate').val();
    const time = $('#time').val();
    if(date == "" || time == ""){
        $('#alert-setter2').text("Time and Date are required");
        $('#alert-setter2').css("color", "red");
    }
    else{
        $('#alert-setter2').text("");
        datesAndTime.push({"date" : date, "time" : time});
    }
    let sring = "<ul class='list-group list-group-flush'>";
    for(let i = 0; i<datesAndTime.length; i++){
        sring += '<li style="display : flex; justify-content : space-between;" value="'+ datesAndTime[i].date +'" class="list-group-item">date : '+ datesAndTime[i].date +'  Time :'+ datesAndTime[i].time +'<button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeDate('+i+')">Remove</button></li>';
    }
    sring += "</ul>";
    $('#timelist').html(sring);

});
$('#addNewPricing').click(function (e) { 
    e.preventDefault();
    const filmHall = $('#theatername').val();
    const film = $('#movie').val();
    const ePrice = $('#eticket').val();
    const sTicket = $('#cticket').val();
    const boxPrice = $('#boxticket').val();

    if(film == "" || filmHall == "" || ePrice == "" || sTicket == "" || datesAndTime.length == 0 || boxPrice == ""){
        $('#alert-setter').html(alertSet("input", "All Fields are Required."));
    }
    else{
        $.ajax({
            type: "post",
            url: "/moviebooker/database/actions.php",
            data: {
                addTicket : true,
                filmHall : filmHall,
                film : film,
                ePrice : ePrice,
                sTicket : sTicket,
                boxPrice : boxPrice,
                showTime : datesAndTime
            },
            dataType: "text",
            success: function (response) {
                $('#alert-setter').html(alertSet("success", "Ticket booking details saved successfully."));
            }
        });
    }
});



function removeDate(value){
    datesAndTime.splice(value,1);
    if(datesAndTime.length > 0){
        let sring = "<ul class='list-group list-group-flush'>";
        for(let i = 0; i<datesAndTime.length; i++){
            sring += '<li style="display : flex; justify-content : space-between;" value="'+ datesAndTime[i].date +'" class="list-group-item">date : '+ datesAndTime[i].date +'  Time :'+ datesAndTime[i].time +'<button type="button" class="btn btn-sm btn-danger" value="'+i+'" onclick="removeDate('+i+')">Remove</button></li>';
        }
        sring += "</ul>";
        $('#timelist').html(sring);
    }
    else{
        $('#timelist').html("");
    }
}



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