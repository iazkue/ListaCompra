<?php

namespace iazkue\ListaCompra;

class ListaCompra
{
    private array $productos = [];

    function añadirUnProducto(string $nombre, int $cantidad): bool
    {
        if (isset($this->productos[$nombre])) {
            $this->productos[$nombre] += $cantidad;
        } else {
            $this->productos[$nombre] = $cantidad;
        }

        return true;
    }

}
