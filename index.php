<?php
// ESERCIZIO 1
// Replicare l'esercizio del panino visto a lezione! Oggi siamo tutti paninari inside

// abstract class Bread{
//     abstract public function breadType();
// }

// class BaguetteBread extends Bread{
//     public function breadType()
//     {
//         echo"- tipo di pane : baghette \n"; 
//     }
// }

// class OliveBread extends Bread{
//     public function breadType()
//     {
//         echo"- tipo di pane : pane alle olive \n"; 
//     }
// }
// abstract class Protein{
//     abstract public function proteinType();
// }

// class HamProtein extends Protein{
//     public function proteinType()
//     {
//         echo"- tipo di proteina : prosciutto \n"; 
//     }
// }

// class SausageProtein extends Protein{
//     public function proteinType()
//     {
//         echo"- tipo di proteina : salsiccia \n"; 
//     }
// }

// abstract class Dressing{
//     abstract public function dressingType();
// }

// class BbqDressing extends Dressing{
//     public function dressingType()
//     {
//         echo"- tipo di salsa : barbeque \n"; 
//     }
// }

// class MayonnaiseDressing extends Dressing{
//     public function dressingType()
//     {
//         echo"- tipo di salsa : maionese \n"; 
//     }
// }


// class Sandwich
// {
//     public $bread, $protein, $dressing;

//     public function __construct(Bread $pane, Protein $proteina,Dressing $salsa) 
//     {
//         $this->bread = $pane;
//         $this->protein = $proteina;
//         $this->dressing = $salsa;
//     }
// }

// $panino1 = new Sandwich(new BaguetteBread(), new SausageProtein(), new BbqDressing);
// $panino2 = new Sandwich(new OliveBread(), new HamProtein(), new BbqDressing);

// var_dump($panino1);
// var_dump($panino2);

// Sfruttando dependency injection e object composition costruite una Casa, che abbia come attributi tetto, mura e pavimenti. Fate in modo che questi attributi siano valorizzati necessariamente da oggetti di classe Tetto, Mura e Pavimento.

// class Roof{
//     public $roof;
//     public function __construct($tetto){
//         $this-> roof = $tetto ;
//     }
// }

// class Wall{
//     public $wall;
//     public function __construct($mura){
//         $this-> wall = $mura;
//     }
// }

// class Floor{
//     public $floor;
//     public function __construct($pavimento){
//         $this-> floor = $pavimento;
//     }
// }

// class House
// {
//     public $roof , $wall , $floor;
//     public function __construct(Roof $tetto ,Wall $mura ,Floor $pavimento){
//         $this-> roof = $tetto;
//         $this -> wall = $mura;
//         $this -> floor = $pavimento;
//     }
// }

// $casa1 = new House(new Roof('tetto in lamiera'),new Wall('muro di compensato'), new Floor ('parquet'));

// var_dump($casa1);

// ESERCIZIO 3

// Creare un Esercito (Army) con Dependency Injection e object composition, che sia composta da:
// una Attack, che si occupi dell'attacco
// una Defense, che si occupi della difesa
// Attack e Defense saranno delle classi che si estenderanno in tutte le classi figlie che volte.
// Fate in modo che i parametri accettati siano PER FORZA oggetti di classe Attack e Defense
// (Date spazio alla fantasia! Se volete può essere un esercito fantasy o un esercito medievale o uno futuristico! Potete divertirvi, l'importante è ripetere i meccanismi)

// class Attack{
//     public $attack;
//     public function __construct($attacco)
//     {
//         $this -> attack = $attacco;
//     }
// }

// class Defense{
//     public $defense;
//     public function __construct($difesa){
//         $this -> defense = $difesa;
//     } 
// }

abstract class Attack {
    abstract public function attacktype();
}

class Freccia extends Attack{
    public function attacktype()
    {
        echo"scaglia una freccia \n";
    }
}

abstract class Defense {
    abstract public function defensetype();
}

class Scudo extends Defense{
    public function defensetype()
    {
        echo "mi paro con lo scudo \n";
    }
}

class Army{
    public $attack , $defense;
    public function __construct(Attack $attacco, Defense $difesa)
    {
        $this -> attack = $attacco;
        $this -> defense = $difesa;
    }
    public function attacco(){
        $this->attack->attacktype();
    }
    public function difesa(){
        $this->defense->defensetype(); 
    }
}

$soldato = new Army(new Freccia, new Scudo );
$soldato->attacco();
$soldato->difesa();
