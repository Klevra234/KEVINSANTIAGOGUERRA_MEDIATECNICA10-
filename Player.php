<?php
class Player {
    private string $name; 
    private int $salud;
    private int $energia;

    public function __construct(string $name , int $salud = 100, int $energia = 50) {
        $this->name = $name;
        $this->salud = $salud;
        $this->energia = $energia; 

        if ($salud < 0) {
            $this->salud = 0;
        }
        if ($energia < 0) {
            $this->energia = 0;
        }
    }

    public function getName(): string {
        return $this->name;
    }

 public function getSalud(): int {
    return $this->salud;
}

public function getEnergia(): int {
    return $this->energia;
}
 public function curar(int $cantidad): void {
        $this->salud += $cantidad;
        if ($this->salud > 100) {
            $this->salud = 100;
        }
    }

    public function descansar(int $cantidad): void {
        $this->energia += $cantidad;
        if ($this->energia > 100) {
            $this->energia = 100;
        }
    }

    public function atacar(Player $oponente): void {
        if ($this->energia >= 10) {
            $oponente->salud -= 10;
            $this->energia -= 10;
            if ($oponente->salud < 0) {
                $oponente->salud = 0;
            }
        }
    }
    public function recibirdanio(int $cantidad): void {
        $this->salud -= $cantidad;
        if ($this->salud < 0) {
            $this->salud = 0; 
        }
    }
}

$objeto = new Player("Kevin", 89, 60);
echo "Nombre " . $objeto->getName() . "<br>";
echo "Salud " . $objeto->getSalud() . "<br>";
echo "Energia " . $objeto->getEnergia() . "<br>"; 


$objeto->curar(15);
echo "Salud despues de curar: " . $objeto->getSalud() . "<br>";
 
$objeto->recibirDanio(30);
echo "Salud despues de recibir daño: " . $objeto->getSalud()
?>
