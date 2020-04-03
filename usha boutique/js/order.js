function enb(){
	if(document.getElementById("chk1").checked==true)
	{
		ch.style.display="inline";
		ch1.style.display="inline";
	}
	else
	{
		ch.style.display="none";
		ch1.style.display="none";
		chk.checked=false;
		chk2.checked=false;
	}
}

//different function starts here !!!

$(document).ready(function(){
	$('.your-class').slick({
		dots: false,
		autoplay: true,
		autoplaySpeed:2500,
		arrows: false,
		infinite: true,
		cssEase: 'cubic-bezier(0.600, -0.280, 0.735, 0.045)',
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				arrows: false,
				dots: false,
				cssEase: 'cubic-bezier(0.600, -0.280, 0.735, 0.045)',
				autoplay: true,
				autoplaySpeed:2500
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
				cssEase: 'cubic-bezier(0.600, -0.280, 0.735, 0.045)',
				autoplay: true,
				autoplaySpeed:2500
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				cssEase: 'cubic-bezier(0.600, -0.280, 0.735, 0.045)',
				autoplay: true,
				autoplaySpeed:2500
			  }
			}
		]
	});
});

//different function starts here !!!

/*function show(x)
{			
	if(x==0)
	{
		document.getElementById("clr").style.display="inline-block";
	}
	else
	{
		document.getElementById("clr").style.display="none";
	}
}*/