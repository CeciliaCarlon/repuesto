document.addEventListener("DOMContentLoaded", iniciar);

function iniciar(){
    "use strict";

    let menuMobile = document.querySelector(".btn_menu").addEventListener('click', toggleMenu);
    function toggleMenu() {
        document.querySelector(".botonera").classList.toggle("show");
    }


    //#############################################################TABLA########################################################################
    let url="http://web-unicen.herokuapp.com/api/groups/66carlonlaborde/info_usuarios";
    let usuarios=[];

    function cargar_tabla(){
        fetch (url)
        .then (response=>{
            if (!response.ok){
                console.log("Error");
            }
            return response.json();
        })
        .then(json=>{
            crear_tabla(json.info_usuarios);
             
        })
        .catch(error=>{
            console.log(error);
        }) 
    }      


    function crear_tabla(arreglo){
        let tabla_body = document.querySelector(".body-table");
        let padreInput = document.querySelector(".padreInput");
        tabla_body.innerHTML= " ";
        
        for (let i=0; i<arreglo.length;i++){

            let tr= document.createElement("tr");
            let td1= document.createElement("td");
            let td2= document.createElement("td");
            let td3= document.createElement("td");
            let td4= document.createElement("td");
            let boton_borrar= document.createElement("button");
            let boton_editar= document.createElement("button");
            let input=document.createElement("ipnut");
            
            
            if(arreglo[i]!=null){
                let nombre=arreglo[i].thing.nombre_usuario;
                let fecha=arreglo[i].thing.fecha_suscripcion;
                let pais=arreglo[i].thing.pais;
                let edad=arreglo[i].thing.edad;
                td1.innerHTML = nombre;
                td2.innerHTML = fecha;
                td3.innerHTML = pais;
                td4.innerHTML = edad;
                boton_borrar.innerHTML += '<i  class="fas fa-trash-alt"></i>';
                boton_editar.innerHTML += '<i class="far fa-edit"></i>';
                
                boton_borrar.setAttribute("data_id_borrar",arreglo[i]._id);
                boton_editar.setAttribute("data_id_editar",arreglo[i]._id);
                
                
                tabla_body.appendChild(tr);
                tr.appendChild(td1);
                tr.appendChild(td2);
                tr.appendChild(td3);
                tr.appendChild(td4);  
                tr.appendChild(boton_borrar); 
                tr.appendChild(boton_editar); 
                padreInput.appendChild(input);

                input.classList.add("prodId");
                boton_borrar.classList.add("botonTabla");
                boton_editar.classList.add("botonTabla");

                boton_borrar.addEventListener("click", function(){borrarFilas(this.getAttribute("data_id_borrar"))});
                boton_editar.addEventListener("click", function(){
                    editarTabla(this.getAttribute("data_id_editar"));
                });
            }
        }


    }


    //#############################################################BORRAR FILA################################################################
    /*
    function borrarFilas(id){
        fetch(url + "/" + id,{
            "method":"DELETE",
            "mode":"cors",
        })
        .then(response=>{
            if (!response.ok){
                console.log("Error");
            }
            return response.json();
        })
        .then(json=>{
            cargar_tabla();
        })
        .catch(error=>{
            console.log(error);
        })
    } 

    //#############################################################EDITAR FILA################################################################
    function editarTabla(id){ 
        let inputId = document.querySelector(".prodId"); 
        inputId.value=id;
        document.querySelector(".editar_inputs_tabla").classList.add("show");
        document.querySelector(".tabla_inputs").classList.add("hide");
        
        document.querySelector(".aceptarEdicion").addEventListener("click", editarNuevaFila);
        document.querySelector(".cancelarEdicion").addEventListener("click", cancelarEdicion);
        
    } 
    
    function editarNuevaFila(){
        let ID=document.querySelector(".prodId").value;
        let input_editar_nombre=document.querySelector(".editar_nombre_input").value;
        let input_editar_fecha=document.querySelector(".editar_fecha_input").value;
        let input_editar_pais=document.querySelector(".editar_pais_input").value;
        let input_editar_edad=document.querySelector(".editar_edad_input").value;
        
        console.log(ID);

        let filaInput = {
            "thing": {
                "nombre_usuario":input_editar_nombre,
                "fecha_suscripcion":input_editar_fecha,
                "pais":input_editar_pais,
                "edad":input_editar_edad,
            }
            
        };
        fetch(url + "/" + ID,{
            "method":"PUT",
            "mode":"cors",
            "headers":{ "Content-Type": "application/json" },
            "body":JSON.stringify(filaInput),
        })
        .then(response=>{
            if (!response.ok){
                console.log("error");
            }
            return response.json();
        })
        .then(json=>{
            cargar_tabla();
        })
        .catch(error=>{
            console.log(error);
        })
        document.querySelector(".editar_inputs_tabla").classList.remove("show");
        document.querySelector(".tabla_inputs").classList.remove("hide");
        cargar_tabla();
    }

    function cancelarEdicion(){
        document.querySelector(".editar_inputs_tabla").classList.remove("show");
        document.querySelector(".tabla_inputs").classList.remove("hide");
    }


    //########################################################BOTON+3#############################################################################
    let bnt_tresMas= document.querySelector(".btn_auto").addEventListener("click", tresMas);
    function tresMas(){
        let usuario1={
            "thing":{
             "nombre_usuario":"Selena665",
             "fecha_suscripcion":"12/04/2019",
             "pais":"Colombia",
             "edad":"34",
            },  
        }
        let usuario2={    
            "thing":{ 
             "nombre_usuario":"Harry90",
             "fecha_suscripcion":"12/02/2019",
             "pais":"Argentina",
             "edad":"40",
            },
        }
        let usuario3={    
            "thing":{
             "nombre_usuario":"Tamara245",
             "fecha_suscripcion":"12/07/2019",
             "pais":"España",
             "edad":"21",
            }
        }

        fetch (url, {
            'method': 'POST',
            'mode':'cors',
            'headers': {'Content-Type': 'application/json'},
            'body': JSON.stringify(usuario1),
        })
        .then (response=>{
            if (!response.ok){
                console.log("Error");
            }
            return response.json();
        })
        .then(json=>{
            cargar_tabla();
        })
        .catch(error=>{
            console.log("Error en CATCH");
        })

        fetch (url, {
            'method': 'POST',
            'mode':'cors',
            'headers': {'Content-Type': 'application/json'},
            'body': JSON.stringify(usuario2),
        })
        .then (response=>{
            if (!response.ok){
                console.log("Error");
            }
            return response.json();
        })
        .then(json=>{
            cargar_tabla();
        })
        .catch(error=>{
            console.log("Error en CATCH");
        })

        fetch (url, {
            'method': 'POST',
            'mode':'cors',
            'headers': {'Content-Type': 'application/json'},
            'body': JSON.stringify(usuario3),
        })
        .then (response=>{
            if (!response.ok){
                console.log("Error");
            }
            return response.json();
        })
        .then(json=>{
            cargar_tabla();
        })
        .catch(error=>{
            console.log("Error en CATCH");
        })

    }

    //######################################################BOTON AGREGAR######################################################################
    let agregar=document.querySelectorAll(".btn_agregar");
    for(let f=0; f<agregar.length;f++){
        agregar[f].addEventListener("click", input_usuario);
    }
    
    function input_usuario(event){
        event.preventDefault();
        let nombre=document.querySelector(".nombre_input").value;
        let fecha=document.querySelector(".fecha_input").value;
        let pais=document.querySelector(".pais_input").value;
        let edad=document.querySelector(".edad_input").value;

        let input={
            "thing":{
                "nombre_usuario":nombre,
                "fecha_suscripcion":fecha,
                "pais":pais,
                "edad":edad,
            }
        }   

        fetch (url, {
            'method': 'POST',
            'mode':'cors',
            'headers': {'Content-Type': 'application/json'},
            'body': JSON.stringify(input),
        })
        .then (response=>{
            if (!response.ok){
                console.log("Error");
            }
            return response.json();
        })
        .then(json=>{
            cargar_tabla();
        })
        .catch(error=>{
            console.log("Error en CATCH");
        })

        cargar_tabla();
    }

    //###################################################################FILTRO################################################################ 
    document.querySelector('#filtroEdad').addEventListener('change',filtrarPorEdad);

    function filtrarPorEdad(){
        fetch (url,{
            "method":"GET",
            "mode":"cors",
        })
        .then(response=>{
            if (!response.ok){
                console.log("error");
            }
            return response.json();
        })
        .then(json=>{
            let tabla = document.querySelector('.body-table');
            let seleccion = this.value;
            switch (seleccion) {
                case '0':
                for (let i = 0; i<tabla.rows.length; i++){
                    tabla.rows[i].style.display = "table-row";
                }
                break;
    
                case '1':
                    for (let i = 0; i<tabla.rows.length; i++){
                        let edad = tabla.rows[i].cells[3].innerHTML;
                        if (edad<20){
                            tabla.rows[i].style.display = "table-row";
                        }
                        else {
                            tabla.rows[i].style.display = "none";
                        }
                    }
                break;
    
                case '2':
                    for (let i = 0; i<tabla.rows.length; i++){
                        let edad = tabla.rows[i].cells[3].innerHTML;
                        if (edad>=20 && edad<40){
                            tabla.rows[i].style.display = "table-row";
                        }
                        else {
                            tabla.rows[i].style.display = "none";
                        }
                    }
                break;
    
                case '3':
                    for (let i = 0; i<tabla.rows.length; i++){
                        let edad = tabla.rows[i].cells[3].innerHTML;
                        if (edad>=40){
                            tabla.rows[i].style.display = "table-row";
                        }
                        else {
                            tabla.rows[i].style.display = "none";
                        }
                    }
                break;
            }
        })
        .catch(error=>{
            console.log(error);
        })
        
     }

    cargar_tabla();
*/
}