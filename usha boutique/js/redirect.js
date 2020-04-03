var seconds=5;   
setInterval(countdown,1000); 
function countdown() 
{
	if (seconds==0)
	{
		location.href="index.php";
	} 
	else 
	{
		document.getElementById("countdown").innerHTML=seconds;
		seconds=seconds-1;
	}
}    
