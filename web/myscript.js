function myFunction(){
	alert("Clicked!");
}

function colorChangeButton(){
	color = document.getElementById("colorChangeInput").value;
	box = document.getElementById("div1");
	box.setAttribute("backgroundColor") = color;
	
}