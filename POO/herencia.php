<?php
    class Vehiculo{

        public $marca,$modelo,$color,$categoria;
        private $propietario;
        public $combustible = array(
            "Petrol",
            "Electric",
            "Gas",
            "Hybrid"
        );

        public function __construct(
            $miMarca,
            $miModelo,
            $miColor,
            $miCategoria
        ){
            $this -> marca = $miMarca;
            $this -> modelo = $miModelo;
            $this -> color = $miColor;
            $this -> categoria = $miCategoria;
        }

        public function setPropietario($miPropietario){
            $this -> propietario = $miPropietario;
        }

        public function getPropietario(){
            return $this -> propietario;
        }

        public function asientos($puestos){
            if($puestos < 3){
                return "Coupe";
            }else if($puestos >= 3 && $puestos < 4){
                return "Sedan";
            }else{
                return "Trunk";
            }
        }

    }

    $vehiculo = new Vehiculo("Masseratti",2019,"Black","Deportivo");

    echo $vehiculo -> marca;