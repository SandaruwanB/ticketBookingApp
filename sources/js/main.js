$('#addContactMessage').click(function (e) { 
    e.preventDefault();
    const name = $('#name').val();
    const email = $('#email').val();
    const contact = $('#phone').val();
    const subject = $('#subject').val();
    const message = $('#message').val();

    alert(contact);
});