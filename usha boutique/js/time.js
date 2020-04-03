/*var h,m,s;
h=3;
m=58;
s=25;
setInterval(timer,1000);
function timer()
{		
	if(h==0 && m==0 && s==0)
	{
		alert(" Offer Finished");
	}
	else if(s==0 && m>=1)
	{
		s=59;
		m=m-1;
	}
	else if(s==0 && m==0 && h>=1)
	{
		s=59;
		m=59;
		h=h-1;
	}
	else
	{
		document.getElementById("hour").innerHTML=h;
		document.getElementById("minute").innerHTML=m;
		document.getElementById("second").innerHTML=s;
		s=s-1;
	}
}*/

var limitdate = new Date("Mar 19, 2020 12:00:00").getTime();
var x = setInterval(function(){
	var now = new Date().getTime();
	var distance = limitdate - now;

	var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
	day.innerHTML=days;
	hour.innerHTML=hours;
	minute.innerHTML=minutes;
	second.innerHTML=seconds;
    
	if (distance < 0) 
	{
		clearInterval(x);
		over.innerHTML = "Offer Ended!!!!";
		day.innerHTML=hour.innerHTML=minute.innerHTML=second.innerHTML=0;
	}
}, 1000);
