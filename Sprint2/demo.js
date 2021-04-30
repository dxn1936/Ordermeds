function validate(){
	var form = document.getElementById("form");
	var name = document.getElementById("name").value;
	var age = (Number)(document.getElementById("age").value);

	if(age<18){
		return false;
	}
	else{
		return true;
	}
}