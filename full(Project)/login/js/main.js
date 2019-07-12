
function validateForm() {
    var x = document.forms["login"]["username"].value;
    var y= document.forms["login"]["pass"].value;
    if (x == "") {
        alert("Name must be filled.");
        return false;
    }
    if(y ==""){
        alert("Password must be filled.");
        return false;
    }

}
