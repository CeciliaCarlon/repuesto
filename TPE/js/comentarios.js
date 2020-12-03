"use strict";

//INICIO
document.addEventListener('DOMContentLoaded', ()=>{

    getComentariosPorPelicula();

    document.querySelector("#insertarComentario").addEventListener("submit", e=>{
        e.preventDefault();
        insertComentario();
    });
});

//VUE
let app = new Vue({
    el: '#vue-comentarios',
    data: {
        comentarios: [],  
    },
    methods: {
        deleteComentario(idComentario){
            fetch(url+'/'+idComentario, {
                method:'DELETE',
            })
            .then(response => response.json())
            .then(comentario => {
                getComentariosPorPelicula();
            })
            .catch(error => console.log(error));
        },
        getPromedio(){
            let suma=0;
            for(let i=0; i<this.comentarios.length; i++){
                suma+= parseInt(this.comentarios[i].puntuacion);
            }
            let promedio= suma/this.comentarios.length;
            if(promedio >0){
                return Math.round(promedio * 10) / 10;
            }
            else{
                return 0;
            }
        }
    }
});

//URL DE API
const url= 'api/comentarios';

//OBTENER COMENTARIOS POR PELICULA
function getComentariosPorPelicula(){
    let idPelicula=document.querySelector("#idPelicula").value;
    fetch ('api/peliculas/'+idPelicula+'/comentarios')
    .then(response => response.json())
    .then(comentarios => app.comentarios = comentarios)
    .catch(error => console.log(error));
}

//INSERTAR COMENTARIO
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
