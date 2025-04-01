<?php

namespace iazkue\ListaCompra;

class ListaCompra
{
    private array $productos = [];

    function anadirUnProducto(string $nombre, int $cantidad): bool
    {
        if (isset($this->productos[$nombre]))
        {
            $this->productos[$nombre] += $cantidad;
        }
        else
        {
            $this->productos[$nombre] = $cantidad;
        }

        return true;
    }

    function anadirProductos(array $productos): int
    {
        foreach ($productos as $nombre => $cantidad)
        {
            $this->anadirUnProducto($nombre, $cantidad);
        }

        return count($productos);
    }



}
