function doSomething(){
	
	alert("Are you sure?");
	document.querySelector("#output").innerHTML = "Howdy, Y'all!!!";
	document.querySelector("#output").style.backgroundColor="yellow";
}

//document.getElementById("push").onclick = doSomething;

document.getElementById("push").addEventListener("click", doSomething);
