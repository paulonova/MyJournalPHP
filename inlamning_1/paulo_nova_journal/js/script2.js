

var registe_button = document.getElementById("register");
var register_form = document.getElementById("register_form");
register_form.classList.remove("visible");

//Function do make visible register form..
registe_button.addEventListener("click", function(){
    console.log("TESTANDO:::");
    register_form.classList.remove("hidden");
    register_form.setAttribute("class", "visibility");
})