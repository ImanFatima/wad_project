
function validateForm() {
    var x = document.forms["contact"]["name"].value;
    var y= document.forms["contact"]["email"].value;
    var a= document.forms["contact"]["phone"].value;
    var b= document.forms["contact"]["message"].value;
    if (x == "") {
        alert("Name must be filled.");
        return false;
    }
    if(y ==""){
        alert("Email must be filled.");
        return false;
    }
    if (a == "") {
        alert("Phone Number must be filled.");
        return false;
    }
    if(b ==""){
        alert("Write your Message.");
        return false;
    }
}
