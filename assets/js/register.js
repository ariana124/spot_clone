$(document).ready(function() {
    //when the object hideLogin is clicked the register form is displayed and the login form is hidden
    $("#hideLogin").click(function() {
        $("#loginForm").hide();
        $("#registerForm").show();
    });
    // when the object hideRegister is clicked the login form is displayed and the register form is hidden
    $("#hideRegister").click(function() {
        $("#loginForm").show();
        $("#registerForm").hide();
    });

});
