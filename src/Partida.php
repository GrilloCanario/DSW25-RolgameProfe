<?php
namespace Dsw\Rolgame;

class Partida {
    
    public array $personajes = [];

    public function agregarPersonaje(Personaje $personaje): void{
        $this->personajes[] = $personaje;
    }

    public function obtenerPersonajes(): array{
        return $this->personajes;
    }
    
    // public function eliminaPersonaje(Personaje $p){
    //     //* Buscamos en el array $p el personaje para borrar ($this->personaje)
    //     //* y lo ponemos en $pos
    //     $pos = array_search($p, $this->personajes);
    //     //* Si el personaje no es falso(que existe en el array)
    //     //* elimina del array ($this->personajes) a partir de la posición del personaje($pos)
    //     //* 1 elemento (en este caso el personaje que vamos a eliminar)
    //     if ($pos !== false){
    //         array_splice($this->personajes, $pos, 1);
    //     }
    // }
    //- OPCION 2 -> PROFESOR
    public function eliminarPersonaje(Personaje $personaje): void
    {
        $index = array_search($personaje, $this->personajes, true);
        if ($index !== false) {
            unset($this->personajes[$index]);
            $this->personajes = array_values($this->personajes);
        }
    }

    public function obtenerPersonajesPorClase(string $class): array
    {
        return array_filter($this->personajes, fn($p) => $p instanceof $class);
    }

    public function eliminarMuertos(): void
    {
        $this->personajes = array_filter($this->personajes, fn($p) => $p->puntosDeVida > 0);
        $this->personajes = array_values($this->personajes);
    }
}