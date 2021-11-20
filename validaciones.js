function validaFormulario(){
var nombre = document.getElementById("nombre").value;

if(nombre.length==0){
    alert("No has escrito tu nombre completo");
    return;
}
}