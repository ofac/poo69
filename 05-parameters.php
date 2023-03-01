<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 - Parameters</title>
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
            <h1 class="text-2xl text-white/80">05 - Parameters</h1>
        </header>
        <section class="p-5 my-2 text-white/80 overflow-y-auto h-[524px]">
            <?php
            
                class Country {
                    public $name;

                    public function __construct($name) {
                        $this->name = $name;
                    }
                }

                class FifaWorldCup {
                    private $country;
                    private $year;
                    private $winner;

                    public function __construct($country, $year, $winner = 'Brazil') {
                        $this->country = $country;
                        $this->year    = $year;
                        $this->winner  = $winner;
                    }

                    public function showEvent() {
                        echo "<ul>
                                <li class='p-2 py-4 rounded-md grid grid-cols-3 gap-2 ring-1 ring-white/80 mb-4'>
                                    <span><strong>Country: </strong> $this->country </span>
                                    <span><strong>Year: </strong> $this->year </span>
                                    <span><strong>Winner: </strong> $this->winner </span>
                                </li>
                              </ul>";
                    }
                }

                $country1  = new Country('Italy');
                $worldcup1 = new FifaWorldCup($country1->name, 1990, 'Germany');
                $worldcup1->showEvent();
                // - - -
                $country2  = new Country('USA');
                $worldcup2 = new FifaWorldCup($country2->name, 1994);
                $worldcup2->showEvent();
                // - - -
                $country3  = new Country('France');
                $worldcup3 = new FifaWorldCup($country3->name, 1998, 'France');
                $worldcup3->showEvent();
            
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>