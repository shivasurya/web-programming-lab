function onFocus(x){
	x.style.background = "#0077B5";
	x.style.color = "white";
	x.style.borderColor ="white";
};

function onClick(x){
	document.getElementById("para").innerHTML = "Successfully Logged in";
	location.href = "body.html";
}


function onLoad(){
	var color = prompt("Enter Your Name");
	document.getElementById("welcome").innerHTML = "Welcome " + color;
	document.getElementById("welcome").showModal(); 
}


function validateForm() {
    var x = document.forms["forms"]["email"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}