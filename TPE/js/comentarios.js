"use strict";

document.addEventListener('DOMContentLoaded', ()=>{

    getComentariosPorPelicula();

    document.querySelector("#insertarComentario").addEventListener("submit", e=>{
        e.preventDefault();
        insertComentario();
    })
})

let app = new Vue({
    el: '#vue-comentarios',
    data: {
        comentarios: []  
    }
});


const url= 'api/comentarios';

function getAllComentarios(){
    fetch (url)
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

function getComentariosPorPelicula(){
    let idPelicula=document.querySelector("#idPelicula").value;
    fetch (url+'/'+idPelicula)
    .then(response => response.json())
    .then(comentarios => app.comentarios = comentarios)
    .catch(error => console.log(error));

}

function insertComentario(){
    const comentario ={
        texto: document.querySelector("#comentario").value,
        puntuacion: document.querySelector("#selectPuntuacion").value,
        id_pelicula: document.querySelector("#idPelicula").value,
        id_usuario: document.querySelector("#idUsuario").value,
    }

    fetch(url, {
        method:'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(comentario),
    })
    .then(response => response.json())
    .then(comentario => app.comentarios.push(comentario))
    .catch(error => console.log(error));


}

document.querySelector("#botonEliminarComentario").addEventListener("click", f=>{
    f.preventDefault();
    deleteComentario();
})

function deleteComentario(){
    let idComentario= document.querySelector("#idComentario").value;
    fetch(url+'/'+idComentario, {
        method:'DELETE',
    })
    .then(response=>{
        if (!response.ok){
            console.log("Error");
        }
        return response.json();
    })
    .then(comentarios=>{
        getComentariosPorPelicula();
    })
    .catch(error=>{
        console.log(error);
    })
}

function showComentario(comentarios){
    const ul= document.querySelector('#ulComentarios');
    ul.innerHTML="";
    if(comentarios!=null){
        for(let comentario of comentarios){
            console.log(comentario);
            ul.innerHTML+=`<li>${comentario.texto}</li><button>Eliminar</button><input type="hidden" id="idComentario" value="${comentario.id_comentario}"></input>`;
        }
    }
    
}

