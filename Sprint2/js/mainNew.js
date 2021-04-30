$(document).ready(function(){

	function confirm(form){
		var status = false;
		var fname = $("#firstname");
		var lname = $("#lastname");
		var email = $("#email");
		var uname = $("#username");
		var telephone = $("#telephone");
		var address= $("#address");
		var pass1 = $("#password");
		var pass2 = $("#confirm");
		var check1;
		var check2;
		
		 //^ will match the first part of string and $ will match last part of string
    //rrshmi@gmail.com

    	console.log(fname);

    	 var name=new RegExp(/^[A-Za-z\s]+$/);
    	 var phoneno =  new RegExp(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);

    	if(fname==null || name.test(fname.val())){
    		fname.addClass("border-danger");
			$("#f_error").html("<span class='text-danger'>Name should be character</span>");
    		check1 = false;
    	}else{
    		fname.removeClass("border-danger");
			$("#f_error").html("");
    		check1 = true;
    	}

    	if(telephone==null || phoneno.test(telephone.val())){
    			telephone.addClass("border-danger");
			$("#t_error").html("<span class='text-danger'>Mobile no should be of 10 digits and of integer</span>");
    		check2 = false;
    	}else{
    		telephone.removeClass("border-danger");
			$("#t_error").html("");
    		check2 = true;
    	}

    	if(check1==true && check2==true){
    		form.addEventListener('submit', (e) =>{
    			e.preventDefault()
    		})
    		/*return false;*/
    	}/*else{*/
    		/*return false;*/
    	//}
	}
})