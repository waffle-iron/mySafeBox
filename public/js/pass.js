/* Show or hide the password in the form */
function showpass( id ) {
    if ( $("#password"+id)[0].type == "password" ) {
        $("#btn-pass-show"+id)[0].children[0].className = "fa fa-eye-slash";
        $("#password"+id)[0].type = "text";
    }
    else {
        $("#btn-pass-show"+id)[0].children[0].className = "fa fa-eye";
        $("#password"+id)[0].type = "password";
    }
}

/* Show progress bar */
function showProgressBar( total ) {
    $("#progress-bar-container")[0].className = "";
    $("#progress-bar").css('width', total+"%");
}

/* Hidde progress bar */
function hiddeProgressBar() {
    $("#progress-bar-container")[0].className = "hidden";
}

function progressBarAnimation( targetFunction ) {
    setTimeout( function(){ showProgressBar(25) }, 300 );
    setTimeout( function(){ showProgressBar(50) }, 600 );
    setTimeout( function(){ showProgressBar(75) }, 900 );
    setTimeout( function(){ showProgressBar(100) }, 1000 );
    setTimeout( function(){ hiddeProgressBar() }, 1500 );
    setTimeout( function(){ targetFunction() }, 1500 );
}

/* Check the user password to decrypt the data */
function checkPassword( targetFunction ) {

    showProgressBar( 1 );

    var token = $('input[name=_token]').val();

    var parametros = {
        id : $('#id')[0].value,
        account_password : $('#check_password')[0].value
    }

    $.ajax({
        headers: {'X-CSRF-TOKEN': token},
        data:   parametros,
        url:   $('#url')[0].value,
        type:  'post',
        beforeSend: function() {

        },
        success: function(response) {
            targetFunction( response )
        },
        error: function( response ) {
            progressBarAnimation( function(){
                $('#alert')[0].innerHTML = '<div class="alert alert-danger alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> <h4><i class="icon fa fa-ban"></i> Error!</h4> your password for mySafebox does not match </div> ';
                $('#check_password')[0].value = "";
                hiddeProgressBar()
            });
        }
    });
}

/* Update the target to be update before to check the password*/
function updateTarget( id, targetFunction ) {
    $('#id')[0].value = id;

    $('#check_password_link')[0].onclick = function onclick(event) {
        checkPassword( targetFunction )
    }
}
