$(document).ready(function() {
	$("#hideLogIn").click(function() {
		$("#loginForm").hide();
		$("#registerForm").show();

	});

	$("#hideRegister").click(function() {
		$("#loginForm").show();
		$("#registerForm").hide();

	});

});