<?php


class taskViewGenero{

    function __construct(){
        
    }
    function showGenero($genero){

        $html= '
                <ul>';

                foreach($generos as $genero){
                    $html .= '<li>ID= '.$genero->id.' - TIPO= '.$genero->tipo.'</li>';
                }
                    
            
             $html .='</ul>
             <form action="insertar" method="post">
             <label for="titulo">Tipo</label>
             <input name="input_tipo" >';
             
            $html .= '</select>
             <button type="submit">Agregar</button>
             </form>
             
            </body>
        </html>';

        echo $html;
    }

    function showGeneroInsertada(){
        $html= '';
        echo $html;        
    }
   
    

}
