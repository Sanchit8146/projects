function mycase()
{
	var s = cs.value;
	var x = s.toLowerCase();
	cs.value = x;
}
//another script
function checkpass()
{
	var p,c;
	p = pass.value;
	c = cpass.value;
	if(p!=c)
	{
		cpass1.style.display="inline";
		cpass2.style.display="none";
	}
	else
	{
		cpass1.style.display="none";
		cpass2.style.display="inline";
	}
}
function validate()
{
	var p,c;
	p = pass.value;
	c = cpass.value;
	if(p!=c)
	{
		alert("Confirm Your Password again");
		return false;
	}
	return true;
}
function showpas()
{
	if(pass.type=="password")
	{
		pass.type="text";
		showpass.classList.toggle("fa-eye-slash");
	}
	else{
		pass.type="password";
		showpass.classList.toggle("fa-eye");
	}
}
function showpas1()
{
	if(cpass.type=="password")
	{
		cpass.type="text";
		showpass1.classList.toggle("fa-eye-slash");
	}
	else{
		cpass.type="password";
		showpass1.classList.toggle("fa-eye");
	}
}