function SetLightMode() {
    var header = document.getElementsByTagName("header");
    var button = document.getElementsByTagName("button");

    document.body.style.background = "white";
    document.body.style.color = "black";
    header.item(1).style.background = "black";
    button.item(0).style.background = "black";
    button.item(1).style.background = "black";


}
function SetDarkMode() {
    document.body.style.background = "black";
    document.body.style.color = "white";
    header.item(1).style.background = "white";
    button.item(0).style.color = "black";
    button.item(1).style.color= "black"

}