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

        $resultado = $listaCompra >añadirUnProducto("leche", 1);

        $this->assertEquals(True, $resultado);
    }


    

}
