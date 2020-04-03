function mcase1()
{
	var s1 = document.getElementById("username").value;
	var x1 = s1.toLowerCase();
	document.getElementById("username").value = x1;
}
function showpas2()
{
	if(password.type=="password")
	{
		password.type="text";
		showpass2.classList.toggle("fa-eye-slash");
	}
	else{
		password.type="password";
		showpass2.classList.toggle("fa-eye");
	}
}
/*<script>
	function check1()
	{
		var usname = document.getElementById('username').value;
		var pass = document.getElementById('password').value;
		if(usname=="" || pass=="")
		{
			alert("Kindly fill all fields");
		}
		else
		{
			$.ajax({
				type:"POST",
				url:"login.php",
				data:"username="+usname+"&password="+pass,
				success:function(data, status, jqXHR){
					//alert('".$_SESSION['uname']."')
					if(data == "valid")
					{
						location.href='index.php';
					}
					else
					{
						document.getElementById("alrt").style.display = "block";
						//$("myModal").fadeIn(5000).delay(5000).fadeOut(5000);
					}
				}				
			});
		}
	}
</script>*/