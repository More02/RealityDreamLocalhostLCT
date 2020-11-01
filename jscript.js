
var readid = document.location.search;
var id="";
function reverse(s){
    return s.split("").reverse().join("");
}
for (let i = readid.length-1; i > 0; i--) {
    const element = readid[i];
    if (element == "=") {
        id = reverse(id);
        id = Number(id);
        break;
    }
    else {
        id += element;
    }
}
var idInhtml = document.getElementById("id");
// возвращяем id
idInhtml.innerHTML = id;
