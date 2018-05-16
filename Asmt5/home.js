
function passMatch(){
	var pass1= document.getElementById('password1');
	var pass2= document.getElementById('password2');
	var issue= document.getElementById("nomatch");
	
	if(!(pass1.value == pass2.value))
		issue.innerHTML="passwords don't match!";
	else 
		issue.innerHTML="";
}