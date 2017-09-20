function myFunction(){
	alert("Clicked!");
}

function colorChangeButton(){
	color = document.getElementById("colorChangeInput").value;
	document.getElementById("div1").setAttribute("backgroundColor", color);
	
}