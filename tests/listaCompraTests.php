<?php

namespace iazkue\ListaCompra\Test;

use iazkue\ListaCompra\listaCompra;
use PHPUnit\Framework\TestCase;

class listaCompraTests extends TestCase
{

    /**
     * @test
     */
    public function anadirUnProducto()
    {
        $listaCompra = new ListaCompra();

        $resultado = $listaCompra >anadirUnProducto("leche", 1);

        $this->assertEquals(True, $resultado);
    }


    /**
     * @test
     */
    public function anadirVariosProductos()
    {
        $listaCompra = new ListaCompra();

        $cantidadDeProductos = 3;

        $productos =
            [
            "Manzanas" => 4,
            "Peras" => 2,
            "Platanos" => 6,
            ];

        $resultado = $listaCompra->anadirProductos($productos);

        $this->assertEquals($cantidadDeProductos, $resultado);
    }


    /**
     * @test
     */
    public function errorAnadirVariosProductos(): void
    {
        $listaCompra = new ListaCompra();

        $productos =
            [
            "Manzanas" => "Esto deberia dar error",
            "Peras" => 2,
            "Platanos" => 6,
            ];

        $resultado = $listaCompra->anadirProductos($productos);

        $this->assertEquals(0, $resultado);
    }
    



    

}
