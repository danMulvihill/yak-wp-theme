function popUp(){
	
	alert("Are you sure?");
	document.querySelector("body").innerHTML = "<h1>Howdy, Y'all!!!</h1>";
	document.querySelector("body").style.backgroundColor="yellow";
}

//document.getElementById("push").onclick = popUp;

document.getElementById("push").addEventListener("click", popUp);
