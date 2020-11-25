"use strict";

document.addEventListener('DOMContentLoaded', ()=>{

    getComentariosPorPelicula();
    console.log(document.querySelector("#botonEliminarComentario"));

    document.querySelector("#insertarComentario").addEventListener("submit", e=>{
        e.preventDefault();
        insertComentario();
    })
})

let app = new Vue({
    el: '#vue-comentarios',
    data: {
        comentarios: []  
    },
    method: {
        deleteComentario(idComentario, com, key){
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
    .then(comentario => {
        app.comentarios.push(comentario); 
        getComentariosPorPelicula();
    })
    .catch(error => console.log(error));
}


