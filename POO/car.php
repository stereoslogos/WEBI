<?php
    //include("herencia.php");
    require("herencia.php");

    class Car extends Vehiculo{
        public function puertas($puertas){
            return $this -> puertas = $puertas;
        }
    }

    $carro = new Car("Toyota",2009,"Red","Land");
    $carro -> setPropietario("Bash O.");

    echo "<h2>1. Car info:</h2>",
    "<ul>
    <li>Brand: $carro->marca</li>
    <li>Model: $carro->modelo</li>
    <li>Color: $carro->color</li>
    <li>Type: $carro->categoria</li>
    <li>Seats: ". $carro->asientos(4)."</li>
    <li>Doors: ". $carro->puertas(3)."</li>
    <li>Owner: ". $carro->getPropietario()."</li>
    </ul>";

    class Car2 extends Car{
        public function gas($combus){
            if(array_search($combus,$this->combustible) !== false){
                return $combus;
            }else{
                return "Wrong gas type.";
            }
        }
    }



    $carro2 = new Car2("Lamborghini",2018,"Gold","Supersport");
    $carro2 -> setPropietario("Jacques S.");

    echo "<h2>2. Car info:</h2>",
    "<ul>
    <li>Brand: $carro2->marca</li>
    <li>Model: $carro2->modelo</li>
    <li>Color: $carro2->color</li>
    <li>Type: $carro2->categoria</li>
    <li>Seats: ". $carro2->asientos(4)."</li>
    <li>Doors: ". $carro2->puertas(5)."</li>
    <li>Owner: ". $carro2->getPropietario()."</li>
    <li>Gas: ". $carro2->gas('Petrol')."</li>
    </ul>";