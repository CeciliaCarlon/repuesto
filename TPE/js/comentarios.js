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
    },
    methods: {
        deleteComentario(idComentario){
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

function getComentariosPorPelicula(){
    let idPelicula=document.querySelector("#idPelicula").value;
    fetch ('api/peliculas/'+idPelicula+'/comentarios')
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


