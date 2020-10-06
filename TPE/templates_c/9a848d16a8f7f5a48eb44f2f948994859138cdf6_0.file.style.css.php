<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-26 00:56:32
  from 'C:\xampp\htdocs\TPE\css\style.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6e75a0ee6377_07868698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a848d16a8f7f5a48eb44f2f948994859138cdf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\css\\style.css',
      1 => 1593794104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6e75a0ee6377_07868698 (Smarty_Internal_Template $_smarty_tpl) {
?>body {
   display: flex;
   flex-direction: column;
   margin: 0;
   font-size: 16px;
   background-color: black;
}

div.padreInput{
    display:none;
}

header{
    border-bottom: 5px solid  rgb(43, 41, 41) ;
    display: flex;
    justify-content: space-between;
}

h1 { 
    color: red;
    font-style: inherit;
    font-size: 3rem;
    margin: 30px 0px 30px 20px;
}

nav{
    display: flex;
    flex-direction: column;
}

.btn_menu {
    color: white;
    height: 40px;
    text-decoration: none;
    background-color: red;
    margin: 20px 20px 0 20px;
    cursor: pointer;
}

ul.botonera{
    display: none;
    padding: 0px;
    margin: 0 20px;
}

ul.botonera.show {
    display: flex;
    flex-direction:column;
}

.botonera li{
    font-size: 1.3rem;
    list-style: none;
}

.boton{
    padding: 5px 10px;
    color: black;
    background-color: white;
    text-decoration: none;
    display: block;
}

li :hover{
    background-color: red;
}

h2 {
    font-style: inherit;
    margin: 40px 0px 30px 40px;
}

article{
    color: white;
}

section{
    display: flex;
    flex-direction: column;     
    margin: 10px 0px;
}

.portadas{
    display: flex;
}

img{
    width: 165px;
    margin: 0px 1px 2px 2px;
}

section.formulario{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin: 10px 0px;
}

.formulario_contenido{
    margin: 3px 0px;
}

.captcha{
    font-size: 30px;
    background-color: red;
    margin: 5px 0px;
}

.mensaje_captcha{
    color: white;
    font-size: 0.9rem;

}

table{
    border: 3px solid rgb(43, 41, 41);
    border-spacing: 0px;
    margin: 10px 5px;
    background-color: white;
}

thead{
    font-size: 20px;
}

th{
    border: 3px solid rgb(43, 41, 41);
    color: black;
    align-items: center;
}

td{
    color: black;
    border: 3px solid rgb(43, 41, 41);
    text-align: center;
}

.botonTabla{
    color: black;
    border: 3px solid rgb(43, 41, 41);
    align-items: center;
}

div.tabla_inputs{
    display: flex;
    flex-direction: column;
}

div.tabla_inputs.hide{
    display: none;
}

div.editar_inputs_tabla{
    display: none;
}

div.editar_inputs_tabla.show{
    display: flex;
    flex-direction: column;
}

label{
    margin: 0px 7px;
}

div.respuesta{
    margin: 5px 7px;
}

aside{
    color: white;
    border-top: solid rgb(43, 41, 41) 3px;
    padding: 0px 12px;
}

h2.comentarios{
    font-size: 2rem;
    margin: 40px 0px 30px 20px; 
}

.nombres_comentarios{
    font-size: 1.5rem;
    margin: 20px 0px 0px 0px;
    color: black;
    background-color: red;
}

p{
    margin: 0px 0px 10px 0px;
}

footer{
    color: white;
    background-color: red;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

h4{
    margin: 15px 0px 10px 10px;
}

@media only screen and (min-width:660px){
    .semantica_medio{
        display: flex;
    }
    article{
        flex-grow: 2;
    }
    aside{
        flex-grow: 1;
        border: solid rgb(43, 41, 41) 5px;
        margin: 5px;
    }
    nav{
        display: flex;
        margin: 30px 0px;
    }
    ul.botonera{
        display: flex;
        flex-direction: row;
        list-style: none;
    }
    .btn_menu{
        display: none;
    }
    .boton{
        padding: 8px;
        border-radius: 25px;
        text-decoration: none;
        margin: 10px;
    }
    h1{
        font-size: 70px;
    }
    h2{
        font-size: 40px;
    }
    img{
        width: 300px;
        margin: 0px 1px 10px 20px;
    }
    footer{
        margin: 30px 0px 0px 0px;
    }
}
<?php }
}
