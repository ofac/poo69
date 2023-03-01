<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 - Extends</title>
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
            <h1 class="text-2xl text-white/80">06 - Extends</h1>
        </header>
        <section class="p-5 my-2 text-white/80 overflow-y-auto h-[524px]">
            <?php
                // Parent Class
                class Operation {
                    protected $number1;
                    protected $number2;

                    public function __construct($number1, $number2) {
                        $this->number1 = $number1;
                        $this->number2 = $number2;
                    }
                }
                // Child Class
                class Addition extends Operation {
                    public function showResults() {
                        return "<p class='p-4 rounded-md ring-1 ring-white/80 mb-4'>
                                    <strong>The Addition is: </strong> ".($this->number1 + $this->number2)."
                                </p>";
                    }
                }
                class Subtraction extends Operation {
                    public function showResults() {
                        return "<p class='p-4 rounded-md ring-1 ring-white/80 mb-4'>
                                    <strong>The Subtraction is: </strong> ".($this->number1 - $this->number2)."
                                </p>";
                    }
                }
                class Product extends Operation {
                    public function showResults() {
                        return "<p class='p-4 rounded-md ring-1 ring-white/80 mb-4'>
                                    <strong>The Product is: </strong> ".($this->number1 * $this->number2)."
                                </p>";
                    }
                }
                class Division extends Operation {
                    public function showResults() {
                        return "<p class='p-4 rounded-md ring-1 ring-white/80 mb-4'>
                                    <strong>The Division is: </strong> ".($this->number1 / $this->number2)."
                                </p>";
                    }
                }
                class Pow extends Operation {
                    public function showResults() {
                        return "<p class='p-4 rounded-md ring-1 ring-white/80 mb-4'>
                                    <strong>The Exponentiation is: </strong> ".($this->number1 ** $this->number2)."
                                </p>";
                    }
                }
            
                $operation1 = new Addition(64, 256);
                echo $operation1->showResults();
                // - - -
                $operation2 = new Subtraction(512, 64);
                echo $operation2->showResults();
                // - - -
                $operation3 = new Product(12, 8);
                echo $operation3->showResults();
                // - - -
                $operation4 = new Division(1024, 32);
                echo $operation4->showResults();
                // - - -
                $operation5 = new Pow(4, 6);
                echo $operation5->showResults();
            
            ?>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>