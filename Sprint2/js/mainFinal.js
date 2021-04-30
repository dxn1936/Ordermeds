
function validate(){
	var checkFname;
	var checkLname;
	var checkEmail;
	var checkUsername;
	var checkTelephone;
	var checkAddress;
	var checkPassword;
	var checkConfirm;
	var fname = document.getElementById('firstname');
	var lname = document.getElementById('lastname');
	var email = document.getElementById('email');
	var username = document.getElementById('username');
	var telephone = document.getElementById('telephone');
	var address = document.getElementById('address');
	var password = document.getElementById('password');
	var confirm = document.getElementById('confirm');

	var phoneno =  new RegExp(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
    var name=new RegExp(/^[A-Za-z\s]+$/);
	var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);

	if(fname== '' || fname==null){
		fname.addClass("border-danger");
		$("#f_error").html("<span class='text-danger'>Name should be character</span>");
		checkFname = false;
	}else{
		checkFname = true;
	}

	if(lname== '' || lname==null){
		lname.addClass("border-danger");
		$("#f_error").html("<span class='text-danger'>Name should be character</span>");
		checkLname = false;
	}else{
		checkLname = true;
	}

	if(checkFname==false && checkLname==false){
		return false;
	}else{
		return true;
	}
}