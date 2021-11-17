<?php
    class Animal{
        public $type;
        public $head;
        public $body;
        public $tail;
        //private vars acan only be modified by functions
        private $paws;
        public static $mamifero = "<br>Mamal";

        public function patas($paws){
            $this->paws = $paws;
        }
        //private paws functions write
        public function _patas(){
            echo $this->paws;
        }

        public function run(){
            echo "<br>Fast";
        }
        public function walk(){
            echo "Slow";
        }
        public function jump(){
            echo "High";
        }

        //Constructor
        public function __construct($tipo,$cabeza,$cuerpo,$cola){
            $this->tipo = $tipo;
            $this->cabeza = $cabeza;
            $this->cuerpo = $cuerpo;
            $this->cola = $cola;
        }
    }
/*
    //instanciar clase
    $animal = new Animal;

    

    //pasarle datos a los atributos
    $animal->type = "Dog";
    $animal->head = "Big";
    $animal->body = "Robust";
    $animal->tail = "Short";
    $animal->patas(4);
    
    //mostar en pantalla
    echo "Animal: ".$animal->type,
    "<br>Head: ".$animal->head,
    "<br>Body: ".$animal->body,
    "<br>Tail: ".$animal->tail,
    "<br>Paws: ".$animal->_patas(),
    "<br>Run: ".$animal->run(),
    $animal::$mamifero;
*/
    $animal2 = new Animal("Perro","Alargada","Gordo","Larga");
    echo "Tipo: $animal2->tipo<br>",
    "Cabeza: $animal2->cabeza<br>",
    "Cuerpo: $animal2->cuerpo<br>",
    "Cola: $animal2->cola<br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <hr>
        <form>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            <br>
            <br>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos">
            <br>
            <br>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección">
            <br>
            <br>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">
            <br>
            <input type="submit" value="Go">
        </form>
        <?php
        $nombre = $_GET['nombre'];
        $apellidos = $_GET['apellidos'];
        $direccion = $_GET['direccion'];
        $telefono = $_GET['telefono'];
        class Persona{
            public $nombre;
            public $apellidos;
            public $direccion;
            public $telefono;

            public function show($nombre,$apellidos,$direccion,$telefono){
                $this->nombre=$nombre;
                $this->apellidos=$apellidos;
                $this->direccion=$direccion;
                $this->telefono=$telefono;
            }

            public function print(){
                echo $this->nombre." ",
                $this->apellidos." ",
                $this->direccion." ",
                $this->telefono;
            }
        }
        $per = new Persona();
        $per->show($nombre,$apellidos,$direccion,$telefono);
        $per->print();
        ?>

        <hr>

        <?php
            class Carro{
                private $color = "red";
                private $num_ruedas = 4;
                private $num_puertas = 4;
                private $modelo = "BMW";
            

            public function CambiarColor($color){
                $this -> color = $color;
            }

            public function ObtenerColor(){
                return $this -> color;
            }
        }
        ?>

    </body>
</html>

