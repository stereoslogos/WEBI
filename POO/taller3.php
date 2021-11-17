<style>
    body{
        margin: auto;
        background-color: black;
        color: white;
        font-family: monospace;
        font-size: 15px;
        width: 90%;
    }
</style>
<h1>Taller #3 PHP</h1>
        <h2>Los siguientes ejercicios (1-3) deben ser ejecutados ingresando valores directamente en el código.</h2>
        <hr>
        <h3>1. Cree una clase denominada Círculo con las siguientes características:</h3>
        <p>
            Atributos: 
            Radio (número decimal)</p>
        <p>
            Métodos: 
            Calcular el área. 
            Calcular el perímetro. 
            Método para modificar valor del Radio.
            Método para consultar el valor del Radio.
        </p>

<?php
    class Circulo{
        public $radio = 35.8;

        public function __construct($miRadio){
            $this->radio = $miRadio;
        }

        public function showR(){
            return print_r("Radio: ".$this->radio);
        }

        public function calc_area($miRadio){
            $area = M_PI * $miRadio * $miRadio;
            return print_r("Area: ".$area);
        }

        public function calc_per($miRadio){
            $perimetro = 2.0 * M_PI * $miRadio;
            return print_r("Perimetro: ".$perimetro);
        }

        public function modificar(){
            $this->radio = 18;
        }
    }
    echo "<strong>Circulo</strong><br>";
    $cir = new Circulo(35.8);
    $cir->showR();
    echo "<br>";
    $cir->calc_area(35.8);
    echo "<br>";
    $cir->calc_per(35.8);
    $cir->modificar();
    echo "<br>";
    $cir->showR();
?>
        <hr>
        <h3>2. Cree una clase llamada Rectángulo con las siguientes características:</h3>
        <p>
            Atributos: 
            Largo o Ancho
        </p>
        <p>
            Métodos: 
            Calcular el área o Calcular el perímetro.
            Métodos necesarios asignar y consultar los valores del largo y ancho (individuales)
        </p>

<?php
    class Rectangulo{
        public $base=12;
        public $altura=18;

        public function __construct($miBase,$miAltura){
            $this->base = $miBase;
            $this->altura = $miAltura;
        }

        public function showB(){
            return print_r("Base: ".$this->base);
        }

        public function showA(){
            return print_r("Altura: ".$this->altura);
        }

        public function R_Area($base,$altura){
            $r_area = $base * $altura;
            return print_r("Area: ".$r_area);
        }

        
    }
    echo "<strong>Rectangulo</strong><br>";
    $rec = new Rectangulo(12,18);
    $rec->showA();
    echo "<br>";
    $rec->showB();
    echo "<br>";
    $rec->R_Area(12,18);
?>
        <hr>
        <h3>3. Cree una clase para gestionar los artículos de un supermercado con las siguientes especificaciones:</h3>
        <p>
            Atributos: 
            Clave numérica.
            Descripción.
            Precio.
            Cantidad en existencia.

        </p>
        <p>
            Métodos: 
            Constructor con parámetros. 
            Método para modificar los valores de los atributos y que reciba los 4 parámetros.
            Una propiedad para modificar cada atributo. 
            Una propiedad para consultar cada atributo.

        </p>

<?php
    class Super{
        public $clave,$desc,$precio,$cant;

        public function __construct($mIclave,$mIdesc,$mIprecio,$mIcant){
            $this->clave = $mIclave;
            $this->desc = $mIdesc;
            $this->precio = $mIprecio;
            $this->cant = $mIcant;
        }

        public function mod_val($mIclave,$mIdesc,$mIprecio,$mIcant){
            $this->clave = $mIclave;
            $this->desc = $mIdesc;
            $this->precio = $mIprecio;
            $this->cant = $mIcant;
        }

        public function mod_cl($mIclave){
            $this->clave = $mIclave;
        }

        public function mod_de($mIdesc){
            $this->desc = $mIdesc;
        }

        public function mod_pr($mIprecio){
            $this->precio = $mIprecio;
        }

        public function mod_ca($mIcant){
            $this->cant = $mIcant;
        }

        public function show_cl(){
            return print_r($this->clave);
        }

        public function show_de(){
            return print_r($this->desc);
        }

        public function show_pr(){
            return print_r($this->precio);
        }

        public function show_ca(){
            return print_r($this->cant);
        }
    }
    echo "<strong>Supermercado</strong><br>";

    $sup = new Super(123,"Hat",95000,13);
    echo "Clave: $sup->clave
    <br>Descripcion: $sup->desc
    <br>Precio: $$sup->precio
    <br>Cantidad: $sup->cant
    <br>";

    $sup->mod_val(456,"Jean",750000,21);
    echo "<br>Clave: $sup->clave
    <br>Descripcion: $sup->desc
    <br>Precio: $$sup->precio
    <br>Cantidad: $sup->cant
    <br>";

    $sup->mod_cl(789);
    echo "<br>Clave: ";
    $sup->show_cl();

    $sup->mod_de("Shoes");
    echo "<br>Descripcion: ";
    $sup->show_de();

    $sup->mod_pr(1200000);
    echo "<br>Precio: ";
    $sup->show_pr();

    $sup->mod_ca(7);
    echo "<br>Cantidad: ";
    $sup->show_ca();
?>