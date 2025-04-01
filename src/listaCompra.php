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

    function eliminarUnProducto(string $nombre): bool
    {
        try {
            if (isset($this->productos[$nombre])) {
                unset($this->productos[$nombre]);
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            
        }

    }

}
