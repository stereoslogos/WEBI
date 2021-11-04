<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cabecera</title>
    </head>
    <body>
        <form>
            <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
            <input type="submit" value="Go">
            <br>
        </form>
        <?php
            $titulo = $_GET['titulo'];

            class CabeceraPagina{
                public $titulo;

                public function getit($titulo){
                    $this->titulo=$titulo;
                }
                
                public function showit(){
                    echo $this->titulo;
                }
            }

            $title = new CabeceraPagina;
            $title->getit($titulo);
            $title->showit();
        ?>
    </body>
</html>