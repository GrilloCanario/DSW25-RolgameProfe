<?php
namespace Dsw\Rolgame;

abstract class Personaje {
    public function __construct(
        public string $nombre,
        public int $nivel,
        public int $puntosDeVida
    )
    {}
        
    public abstract function atacar(): int ;
    
    public abstract function defender(int $daño): int;

    public function subirNivel(): void{
        $this->nivel++;
    }

    static public function lucha($personaje1,$personaje2){
        $personaje2->puntosDeVida -= $personaje1->defender($personaje1->atacar());
        $personaje1->puntosDeVida -= $personaje2->defender($personaje2->atacar());

    }
}