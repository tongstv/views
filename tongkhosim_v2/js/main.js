window.addEventListener("scroll",function(){
	var x = pageYOffset;
	var head = document.getElementById("head");
	if(x > 10){
		head.classList.add("fixed");
	}else{
		head.classList.remove("fixed");
	}

	// banner 
	var banner = document.getElementsByClassName('banner');
	var topDefault = 120;
	var top = pageYOffset;
	var bannerObj;
	var bodyHeight = document.documentElement.scrollHeight;
	if (top + topDefault < bodyHeight - 1100) {
		setTop = top + topDefault;
		bannerObj = setInterval(function(){
			for(i = 0; i < banner.length; ++ i){
				banner[i].setAttribute("style", "top:" + setTop + "px")
			}
		} , 400);
	}else{
		clearInterval(bannerObj)
	}

});
window.onload = function(){
	let menuBtn = document.getElementById("btn-open-menu");
	let body = document.getElementsByTagName("body")[0];
	let header = document.getElementById("head");
	menuBtn.addEventListener("click", function(){
		body.classList.toggle("menu-opened");
		header.classList.toggle("position-relative");
		document.body.scrollTop = 0; // For Safari
 		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	});	

	document.body.addEventListener("click",function(e){
		var popover = document.getElementById("popover");
		if(e.target == document.getElementById("key")){
			popover.classList.add("show");
		}else{
			popover.classList.remove("show");
		}
	});

	//tabs
	var myTabs = document.querySelectorAll("ul.tabs > li");
	function myTabClicks(tabClickEvent) {
		for (var i = 0; i < myTabs.length; i++) {
			myTabs[i].classList.remove("active");
		}
		var clickedTab = tabClickEvent.currentTarget;
		clickedTab.classList.add("active");
		tabClickEvent.preventDefault();
		var myContentPanes = document.querySelectorAll(".tabs-content");
		for (i = 0; i < myContentPanes.length; i++) {
			myContentPanes[i].classList.remove("active");
		}
		var anchorReference = tabClickEvent.target;
		var activePaneId = anchorReference.getAttribute("href");
		var activePane = document.querySelector(activePaneId);
		activePane.classList.add("active");
	}
	for (i = 0; i < myTabs.length; i++) {
		myTabs[i].addEventListener("click", myTabClicks)
	}
	// toast
	function showToast(){
		var r_text = new Array ();
		r_text[0] = "Sim 035970xxxx lúc <br> 04/08/2019 13:44";
		r_text[1] = "Sim 096843xxxx lúc <br> 04/08/2019 13:44";
		r_text[2] = "Sim 092929xxx lúc <br> 04/08/2019 13:44";
		r_text[3] = "Sim 035970xxxx lúc <br> 04/08/2019 13:44";
		r_text[4] = "Sim 084224xxx lúc <br> 04/08/2019 13:44";
		var i = Math.floor(r_text.length * Math.random());
		var temp = document.createElement('div');
		var str = '<div id="img"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div><div id="desc"><span class="bold">Đơn hàng mới</span><p>' + r_text[i] +'</p></div>';
		temp.setAttribute("id","mes");
		temp.innerHTML = str;
		// setTimeout(() => temp.classList.add('open'), 3000); /*TUNGND*/
		setTimeout(() => temp.classList.add('open'), 5000);
		document.body.appendChild(temp);
		setTimeout(() => temp.classList.remove('open'), 10000);
		setTimeout( () => document.body.removeChild(temp), 3500 )

		// setTimeout(() => temp.classList.remove('open'), 3000);
		// setTimeout( () => document.body.removeChild(temp),3500 )
	}
	// setInterval(function(){showToast(); }, 12000);
	setInterval(function(){showToast(); }, 30000);
	// setInterval(function(){showToast(); }, 1000);

}

