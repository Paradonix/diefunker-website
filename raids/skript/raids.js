/*eslint-env browser*/

function change()
{
    var btn = document.getElementById("btn1");
    var members = document.getElementById("static1");
    
    btn.classList.toggle("active_btn");
    members.classList.toggle("expanded");
}

function change2()
{
    var btn = document.getElementById("btn2");
    var members = document.getElementById("static2");
    
    btn.classList.toggle("active_btn");
    members.classList.toggle("expanded");
}