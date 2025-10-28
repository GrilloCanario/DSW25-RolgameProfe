<?php
namespace Dsw\Rolgame;
//* SIEMPRE USAR namespace + lo que diga en composer.json (sección psr-4)
//* tambien al usar implements cuidado con que se ponga use.... -> ESTO HAY QUE QUITARLO

class Clerigo extends Personaje implements Curable {
    public function __construct(
        public string $nombre,
        public int $nivel,
        public int $puntosDeVida,
        public int $poderCurativo
    ){}
    public function atacar(): int
    {
        return $this->poderCurativo * 2;
    }
    
    public function defender(int $daño): int
    {
        $dañoFinal = $daño - $this->poderCurativo / 2;
        if ($dañoFinal < 0) return 0;
        return $dañoFinal; //* $dañoFinal > 0 ? $dañoFinal : 0;
    
    }
    public function curar()
    {
        return $this->poderCurativo * 3;
    } 
}