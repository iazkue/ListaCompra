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

    


    

}
