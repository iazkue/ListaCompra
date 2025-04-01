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
            return false;
        }

    }

    function vaciarLista(): bool
    {
        try {
            $this->productos = [];
            return true;
        }
        catch (\Exception $e) {
            return false;
        }
    }

    function devolverLista():string
    {
        $listaEnTexto = '';

        foreach ($this->productos as $nombreProducto => $cantidad)
        {
            $listaEnTexto .= $nombreProducto . 'x' . $cantidad . ", ";
        }

        return $listaEnTexto;
    }

}
