<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - Construct</title>
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
            <h1 class="text-2xl text-white/80">02 - Construct</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <?php
                class PlayList {
                    // Attributes
                    private $name;
                    private $artist = Array();
                    private $album  = Array();
                    private $cover  = Array();
                    private $year   = Array();

                    // Methods
                    public function __construct($name) {
                        $this->name = $name;
                    }
                    public function setPlayList($artist, $album, $cover, $year) {
                        $this->artist[] = $artist;
                        $this->album[]  = $album;
                        $this->cover[]  = $cover;
                        $this->year[]   = $year;
                    }
                    public function getPlayList() {
                        echo "<div class='p-2 flex flex-col gap-2 items-center ring-1 text-white/80 ring-white/50 rounded-md'> 
                                <h2 class='my-2 text-xl font-bold'>
                                    Play List: $this->name
                                </h2>";
                            for($i = 0; $i < count($this->artist); $i++) {
                                echo "<div class='bg-white/20 flex flex-col items-center gap-2 rounded-md p-4 my-2 w-[280px]'>
                                <img class='rounded-md' src='".$this->cover[$i]."' alt='Album Cover' width='180px'>
                                <p><strong>Artist: </strong> ".$this->artist[$i]." </p>
                                <p><strong>Album: </strong> ".$this->album[$i]." </p>
                                <p><strong>Year: </strong> ".$this->year[$i]." </p>
                                </div>";
                            }
                        echo "</div>";
                    }
                }
                $playList = new PlayList('Metal & Rock Music');
                $playList->setPlayList('Nirvana', 'Nevermind', 'https://tinyurl.com/yfffuk73', 1991);
                $playList->setPlayList('Metallica', 'Master of Puppets', 'https://tinyurl.com/2tu2ct7c', 1986);
                $playList->setPlayList('GreenDay', 'Dookie', 'https://tinyurl.com/2p9zj7er', 1994);
                $playList->getPlayList();
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>