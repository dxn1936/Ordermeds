$(document).ready(function(){

	$("#register_form").on("submit",function(){
		var status = false;
		var fname = $("#firstname");
		var lname = $("#lastname");
		var email = $("#email");
		var uname = $("#username");
		var telephone = $("#telephone");
		var address= $("#address");
		var pass1 = $("#password");
		var pass2 = $("#confirm");


		console.log(typeof function());
		
		 //^ will match the first part of string and $ will match last part of string
    //rrshmi@gmail.com

    //validation for registration 
    	 var phoneno =  new RegExp(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
    	 var name=new RegExp(/^[A-Za-z\s]+$/);
		var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
		
		if(fname.val() == "" || !name.test(fname.val())){
			fname.addClass("border-danger");
			$("#f_error").html("<span class='text-danger'>Name should be character</span>");
			status = false;
		}else{
			fname.removeClass("border-danger");
			$("#f_error").html("");
			status = true;
		}

		if(lname.val() == "" || !name.test(lname.val())){
			lname.addClass("border-danger");
			$("#l_error").html("<span class='text-danger'>Name should be character</span>");
			status = false;
		}else{
			lname.removeClass("border-danger");
			$("#l_error").html("");
			status = true;
		}

		if(!e_patt.test(email.val())){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>");
			status = false;
		}else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}

			if(telephone.val() == "" || !phoneno.test(telephone.val())){
			telephone.addClass("border-danger");
			$("#t_error").html("<span class='text-danger'>Mobile no should be of 10 digits and of integer</span>");
			status = false;
		}else{
			telephone.removeClass("border-danger");
			$("#t_error").html("");
			status = true;
		}

			if(uname.val() == "" || uname.val().length <5){
			uname.addClass("border-danger");
			$("#u_error").html("<span class='text-danger'>UserName should be more than 5 char</span>");
			status = false;
		}else{
			uname.removeClass("border-danger");
			$("#u_error").html("");
			status = true;
		}

		if(pass1.val() == "" || pass1.val().length<6){
			pass1.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please Enter more than 6 digit password</span>");
			status = false;
		}else{
			pass1.removeClass("border-danger");
			$("#p_error").html("");
			status = true;
		}

	

		if(pass1.val()!= pass2.val()){  
			pass2.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>password not matching</span>");
			status = false;
		}else{
			pass2.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		}

	})

})