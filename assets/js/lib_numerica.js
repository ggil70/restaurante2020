

<SCRIPT LANGUAGE="JavaScript">

function nro_entero(objeto){
//valida si el nro es entero sin caracteres diferentes a numero
//formulario = nombre del formulario origen
//Objeto = nombre del campo u objeto

var valor = document.getElementById(objeto).value;
var tamano=valor.length;
i=0;
cad_numero="";
while(i<tamano){
    var numero = valor.charAt(i);
    if (isNaN(numero)==false)
        cad_numero=cad_numero+numero
    i=i+1;    
}
document.getElementById(objeto).value = cad_numero;
}


</script>
