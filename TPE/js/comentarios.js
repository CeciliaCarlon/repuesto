"use strict";

document.addEventListener('DOMContentLoaded', ()=>{

    getAllComentarios();

    document.querySelector("#insertarComentario").addEventListener("submit", e=>{
        e.preventDefault();
        insertComentario();
    })
})

const urlComentarios= 'api/comentarios';
const urlPuntuacion= 'api/puntuacion';

function getAllComentarios(){
    fetch (urlComentarios)
    .then (response=>{
        if (!response.ok){
            console.log("Error");
        }
        return response.json();
    })
    .then(comentarios=>{
        showComentario(comentarios);
            
    })
    .catch(error=>{
        console.log(error);
    }) 
}

function insertComentario(){

    let idSelect= document.querySelector("#selectPuntuacion").value;

    let puntuacionElegida= fetch(urlPuntuacion+"/"+idSelect)
    .then (response=>{
        if (!response.ok){
            console.log("Error");
        }
        return response.json();
    })
    .then(puntuacion=>{
        return puntuacion;
    })
    .catch(error=>{
        console.log(error);
    }) 

    const comentario ={
        texto: document.querySelector('input[name="input_comentario"]').value,
        puntuacion: puntuacionElegida,
        id_pelicula: "1",//document.querySelector().value,
        id_usuario: "3",//document.querySelector().value,
    }

    fetch(urlComentarios, {
        method:'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(comentario),
    })
    .then(response=>{
        getAllComentarios();
    })
    .catch(error=>console.log(error));

}

function showComentario(comentarios){
    const ul= document.querySelector('#ulComentarios');
    ul.innerHTML="";
    for(let comentario of comentarios){
        ul.innerHTML+=`<li>${comentario.texto}</li>`;
    }
}

