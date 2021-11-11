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
    echo "<hr><strong>Rectangulo</strong><br>";
    $rec = new Rectangulo(12,18);
    $rec->showA();
    echo "<br>";
    $rec->showB();
    echo "<br>";
    $rec->R_Area(12,18);
    echo "<hr>";

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