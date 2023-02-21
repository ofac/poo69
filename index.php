<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu (OOP)</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black/80">
    <main class="bg-black/40 h-[640px] w-[380px] rounded-md">
        <header class="flex 
                       justify-center 
                       items-center 
                       py-5
                       bg-blue-400/20
                       rounded-t-md">
            <h1 class="text-2xl text-white/80">Main Menu (OOP)</h1>
        </header>
        <section class="p-5 my-2 overflow-y-auto h-[524px]">
            <nav class="flex flex-col gap-4 justify-center items-center">
                <a href="01-class.php"  class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>01 - Class</span>
                </a>
                <a href="02-construct.php" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>02 - Construct</span>
                </a>
                <a href="03-private.php" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>03 - Private</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>04 - Collaboration</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>05 - Parameters</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>06 - Extends</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>07 - Overwrite Method</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>08 - Overwrite Construct</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>09 - Class Abstract</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>10 - Method Abstract</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>11 - Class Final</span>
                </a>
                <a href="" class="flex gap-4 bg-black/60 text-yellow-200 px-10 py-3 rounded-md opacity-70 hover:opacity-100 hover:scale-105 transition-all w-[340px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                    </svg>
                    <span>12 - Method Final</span>
                </a>
            </nav>
        </section>
    </main>
    <script src="js/tailwind-3.2.4.js"></script>
</body>
</html>