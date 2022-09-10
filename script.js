$(function(){
    $("form").submit(function(ev){
        ev.preventDefault();
        var name = $('#mail-name').val();
        var email = $('#mail-email').val();
        var zip = $('#mail-zip').val();
        var submit = $('#mail-submit').val();
        $('#form-message').load('include/mail.php', {
            name: name,
            email: email,
            zip: zip,
            submit: submit
        })

    })
//end of jquery load funciton
})