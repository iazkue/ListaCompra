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
    public function eliminarUnProducto()
    {
        $listaCompra = new ListaCompra();
        $listaCompra >anadirUnProducto("leche");

        $resultado = $listaCompra >eliminarUnProducto("leche");

        $this->assertEquals(True, $resultado);
    }

    /**
     * @test
     */
    public function vaciarListaDeLaCompra()
    {
        $listaCompra = new ListaCompra();
        $listaCompra >anadirUnProducto("leche", 1); 
        
        $resultado = $listaCompra >vaciarLista();
        $this->assertEquals(True, $resultado);
    }

    /**
     * @test
     */
    public function devolverListaDeLaCompra()
    {
        $listaCompra = new ListaCompra();
        $listaCompra >anadirUnProducto("leche", 1);
        $listaCompra >anadirUnProducto("pan", 2);
        $resultado = $listaCompra>devolverLista();

        $this->assertNotEmpty($resultado);
    }

    /**
     * @test
     */
    public function enviarEnGeneral()
    {
        $listaCompra = new ListaCompra();
        $listaCompra >escribirMensaje("añadir pan");
        $listaCompra >escribirMensaje("añadir leche 2");
        $listaCompra >escribirMensaje("añadir Pan");
        $listaCompra >escribirMensaje("eliminar arroz");
        $listaCompra >escribirMensaje("eliminar pan");
        $listaCompra >escribirMensaje("vaciar");

        
    }

     

}
