<?php

namespace iazkue\ListaCompra\Test;

use iazkue\ListaCompra\ListaCompra;
use PHPUnit\Framework\TestCase;

class listaCompraTests extends TestCase
{

    /**
     * @test
     */
    public function añadirUnProducto()
    {
        $listaCompra = new ListaCompra();

        $resultado = $listaCompra >add("leche", 1);

        $this->assertEquals(True, $resultado);
    }

    

}
