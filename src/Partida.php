<?php
namespace Dsw\Rolgame;

class Partida {
    
    public $personajes = [];

    public function agregarPersonaje(Personaje $p): void{
        $this->personajes[] = $p;
    }

    public function obtenerPersonajes(): array{
        return $this->personajes;
    }
    
    public function eliminaPersonaje(Personaje $p){
        //* Buscamos en el array $p el personaje para borrar ($this->personaje)
        //* y lo ponemos en $pos
        $pos = array_search($p, $this->personajes);
        //* Si el personaje no es falso(que existe en el array)
        //* elimina del array ($this->personajes) a partir de la posición del personaje($pos)
        //* 1 elemento (en este caso el personaje que vamos a eliminar)
        if ($pos !== false){
            array_splice($this->personajes, $pos, 1);
        }
    }

    public function obtenerPersonajePorClase($class): array{

    }

    

    public function eliminarMuertos(){

    }
}