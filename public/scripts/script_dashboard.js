var btn_add = document.getElementById("btn-add");
var btn_close = document.getElementById("btn-close");
var form_add = document.getElementById("form-add");

btn_add.addEventListener("click", function(){
    form_add.style.display = "block";
    console.log('Clicked');
});

btn_close.addEventListener("click", function(){
    form_add.style.display = "none"; 
});

window.addEventListener("click", function(event){
    if(event.target == form_add){
        form_add.style.display = "none";
    }
});
