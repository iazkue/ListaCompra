<?php

namespace iazkue\ListaCompra\Test;

use iazkue\ListaCompra\ListaCompra;
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

        $productos = [
            "Manzanas" => 4,
            "Peras" => 2,
            "Plátanos" => 6,
        ];

        $resultado = $listaCompra->anadirProductos($productos);

        $this->assertEquals($cantidadDeProductos, $resultado);
    }



    

}
