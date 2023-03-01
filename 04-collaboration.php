<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - Collaboration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black/80">
    <main class="bg-black/40 h-[640px] w-[380px] rounded-md">
        <header class="flex 
                       justify-center 
                       items-center 
                       py-5 
                       gap-5
                       bg-blue-400/20
                       rounded-t-md">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-yellow-200 hover:-translate-x-2 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
            <h1 class="text-2xl text-white/80">04 - Collaboration</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto text-white/80 h-[524px]">
            <?php
            
                class Evolve {
                    public function evolvePokemon($origin, $evolution) {
                        echo "<ul class='p-2 mb-2 rounded-md ring-1 ring-white/80'>
                                <li><strong>Origin: </strong> $origin ➡️  <strong>Evolution: </strong> $evolution</li>
                              </ul>";
                    }
                }

                class Pokemon {
                    private $origen;
                    private $evolution;
                    private $collaboration;

                    public function __construct($origin, $evolution) {
                        $this->origen    = $origin;
                        $this->evolution = $evolution;
                        // Collaboration
                        $this->collaboration = new Evolve;
                    }

                    public function nextLevel() {
                        $this->collaboration->evolvePokemon($this->origen, $this->evolution);
                    }
                }

                $pokemon1 = new Pokemon('Pichu', 'Pikachu');
                $pokemon1->nextLevel();
                $pokemon1 = new Pokemon('Pikachu', 'Raichu');
                $pokemon1->nextLevel();
                // - - -
                $pokemon2 = new Pokemon('Squirtle', 'Wartortle');
                $pokemon2->nextLevel();
                $pokemon2 = new Pokemon('Wartortle', 'Blastoise');
                $pokemon2->nextLevel();
                // - - -
                $pokemon3 = new Pokemon('Bulbasaur', 'Ivysaur');
                $pokemon3->nextLevel();
                $pokemon3 = new Pokemon('Ivysaur', 'Venusaur');
                $pokemon3->nextLevel();
            
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>