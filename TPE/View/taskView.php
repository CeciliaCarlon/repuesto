<?php

include_once "./libs/smarty/Smarty.class.php";

class taskView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }


    function showHome($peliculas,$generos){
        $this->smarty->assign('titulo',"Peliculas");
        $this->smarty->assign('peliculas', $peliculas);
        $this->smarty->assign('genero', $generos);
        $this->smarty->display('./templates/tabla.tpl');
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showFormularioInsertar($generos){
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/insertarData.tpl');
    }

    function showFormularioEditar($generos){
        $this->smarty->assign('generos', $generos);
        $this->smarty->display('./templates/editarData.tpl');
    }

    function showError($mensaje=" "){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('./templates/error.tpl');
    }

    /*

        $html= '
                <ul>';
        
                foreach($peliculas as $pelicula){
                    $html .= '<li>TITULO= '.$pelicula->titulo.' - DESCRIPCION= '.$pelicula->descripcion.' - ESTRENO= '.$pelicula->estreno.' - DIRECTOR= '.$pelicula->director.' - GENERO= '.$pelicula->id_genero.'</li>';
                }

                foreach($generos as $genero){
                    $html .= '<li>ID= '.$genero->id.' - TIPO= '.$genero->tipo.'</li>';
                }
                    
            
             $html .='</ul>
             <form action="insertar" method="post">
             <label for="titulo">Titulo</label>
             <input name="input_titulo" >
             <label for="descripcion">Descripcion</label>
             <input name="input_descripcion" >
             <label for="estreno">Estreno</label>
             <input name="input_estreno" >
             <label for="director">Director</label>
             <input name="input_director" >
             <label for="id_genero">Genero</label>
             <select name="select_genero">';
                foreach($generos as $genero){
                    $html .= '<option value="'.$genero->id.'">'.$genero->tipo.'</option>';
                }
            $html .= '</select>
             <button type="submit">Agregar</button>
             </form>
             
            </body>
        </html>';

        echo $html;
    }

    function showPeliculaInsertada(){
        $html= '';
        echo $html;        
    }

    function showFiltro(){
        $html= '
                
        <select name="filtroGenero">
            <option value="0">Todas</option>
            <option value="1">Romance</option>
            <option value="2">Entre 21 y 39</option>
            <option value="3">Mayores de 40</option>
        </select>
             
            </body>
        </html>';

        echo $html;
    }
    */

}