function validarLoguin(f1,tipo){
    
    f1.type.value=tipo;
    
    if(tipo=="con"){
        if(f1.usuario.value!="" && f1.password.value!=""){            
            f1.submit();
        } else{
            alert("Ingrese todos los datos");
        }
    }
    
    if(tipo=="desc"){        
        f1.submit();        
    }           
}
    

