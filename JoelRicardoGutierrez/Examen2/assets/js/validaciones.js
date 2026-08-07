function validarTicket(){

    let titulo=document.getElementById("titulo").value.trim();
    let descripcion=document.getElementById("descripcion").value.trim();
    let departamento=document.getElementById("departamento").value.trim();
    let prioridad=document.getElementById("prioridad").value;

    if(titulo==""){
             alert("Ingrese el título");
          return false;
    }

    if(descripcion==""){
        alert("Ingrese la descripción");
return false;
    }

    if(departamento==""){
         alert("Ingrese el departamento");
return false;
    }

    if(prioridad==""){
        alert("Seleccione la prioridad");
return false;
    }

    return true;
}