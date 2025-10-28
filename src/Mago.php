<?php

namespace Dsw\Rolgame;

class Mago extends Personaje {
    public function __construct(
        public string $nombre,
        public int $nivel,
        public int $puntosDeVida,
        public int $mana
    ){}

    public function atacar(): int
    {
        $ataque = $this->mana / 2;
        return $ataque;
    }
    
    public function defender(int $daño): int
    {
        $dañoFinal = $daño - $this->mana / 5;
        if ($dañoFinal < 0) return 0;
        return $dañoFinal;
    
    }
}