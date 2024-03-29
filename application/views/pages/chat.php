<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <title>Chat TailwindCSS</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Nunito Sans", sans-serif;
        }
    </style>
</head>

<body>
    <main class="flex flex-col justify-center h-screen">
        <nav class="flex flex-col md:flex-row gap-2 md:gap-0 justify-between items-center h-auto bg-gray-900 px-3 py-2">
            <p class="w-full md:w-auto text-gray-500 text-xs">
                Selamat Datang di Website Remise MyEdukes. Edukasi Seputar Kesehatan.
            </p>
            <ul class="w-full md:w-auto flex items-center text-gray-200 gap-5 text-xs">
                <li>
                    <a href="#">
                        <i class="fa-solid fa-phone"></i>
                        <span class="font-medium">+62 821-2039-4445</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-regular fa-envelope"></i>
                        <span class="font-medium">myedukasid@gmail.com</span>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="flex flex-col items-center h-20 bg-white border border-b">
            <div class="w-full relative flex items-center justify-between h-full px-5 py-3">
                <div class="h-full">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>/images/logo/myedukes.png" alt="" class="h-full object-cover">
                    </a>
                </div>
                <button onclick="navbarToggle()" type="button" class="block md:hidden bg-gray-50 hover:bg-gray-100 px-3 py-2 rounded-xl transition ease-in-out">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div id="navbar" class="hidden absolute md:contents top-12 right-5 z-40 w-1/2 md:block md:w-auto">
                    <ul class="flex flex-col md:items-center p-4 md:p-0 shadow-lg md:shadow-none mt-4 border border-gray-100 rounded-xl bg-white md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white text-sm">
                        <li>
                            <a href="#"class="block py-2 px-3 text-white bg-blue-700 font-bold rounded-xl md:bg-transparent md:text-blue-700 md:p-0">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded-xl hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Galeri</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded-xl hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Partisipan</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded-xl hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Artikel</a>
                        </li>
                        <li class="flex flex-col md:flex-row items-center gap-2 md:gap-3 bg-gray-50 border border-gray-100 p-3 rounded-xl md:border-none md:bg-transparent md:p-0 md:rounded-none">
                            <a href="#" class="w-full md:w-auto block py-2 px-3 text-white font-bold text-center rounded-xl bg-blue-700 hover:bg-blue-800 md:border-0 md:px-4">Masuk</a>
                            <a href="#" class="w-full md:w-auto block py-2 px-3 text-white font-bold text-center rounded-xl bg-blue-700 hover:bg-blue-800 md:border-0 md:px-4">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="flex h-full overflow-hidden">
            <div class="flex flex-col w-2/6 bg-white h-full">
                <div class="flex justify-center items-center gap-3 h-16 px-5 py-3">
                    <div class="w-full relative">
                        <span
                            class="absolute top-1/2 left-4 transform -translate-y-1/2 mt-auto mb-auto text-slate-400"><i
                                class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" placeholder="Cari disini..."
                            class="w-full bg-slate-50 text-gray-800 text-sm border border-gray-100 focus:outline-none focus:ring-2 focus:ring-sky-300 rounded-xl pl-10 pr-5 py-3">
                    </div>
                    <!-- <button
                        class="flex items-center justify-center px-4 h-full bg-sky-500 hover:bg-sky-600 text-white rounded-xl transition ease-in-out">
                        <i class="fa-solid fa-message"></i>
                    </button> -->
                </div>
                <ul class="space-y-3 h-full p-3 overflow-y-auto">
                    <li
                        class="flex gap-5 justify-center md:justify-between hover:bg-slate-50 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                                <div class="absolute bottom-0 right-0">
                                    <span
                                        class="flex items-center justify-center bg-emerald-500 font-medium text-white h-5 w-5 text-[10px] rounded-full">5</span>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                    <span class="block text-emerald-500 text-[10px]"><i
                                            class="fa-solid fa-circle"></i></span>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                    <li
                        class="flex gap-5 justify-center md:justify-between bg-slate-100 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                    <li
                        class="flex gap-5 justify-center md:justify-between hover:bg-slate-50 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                                <div class="absolute bottom-0 right-0">
                                    <span
                                        class="flex items-center justify-center bg-emerald-500 font-medium text-white h-5 w-5 text-[10px] rounded-full">5</span>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                    <span class="block text-emerald-500 text-[10px]"><i
                                            class="fa-solid fa-circle"></i></span>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                    <li
                        class="flex gap-5 justify-center md:justify-between hover:bg-slate-50 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                                <div class="absolute bottom-0 right-0">
                                    <span
                                        class="flex items-center justify-center bg-emerald-500 font-medium text-white h-5 w-5 text-[10px] rounded-full">5</span>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                    <span class="block text-emerald-500 text-[10px]"><i
                                            class="fa-solid fa-circle"></i></span>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                    <li
                        class="flex gap-5 justify-center md:justify-between hover:bg-slate-50 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                                <div class="absolute bottom-0 right-0">
                                    <span
                                        class="flex items-center justify-center bg-emerald-500 font-medium text-white h-5 w-5 text-[10px] rounded-full">5</span>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                    <span class="block text-emerald-500 text-[10px]"><i
                                            class="fa-solid fa-circle"></i></span>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                    <li
                        class="flex gap-5 justify-center md:justify-between hover:bg-slate-50 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                                <div class="absolute bottom-0 right-0">
                                    <span
                                        class="flex items-center justify-center bg-emerald-500 font-medium text-white h-5 w-5 text-[10px] rounded-full">5</span>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                    <span class="block text-emerald-500 text-[10px]"><i
                                            class="fa-solid fa-circle"></i></span>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                    <li
                        class="flex gap-5 justify-center md:justify-between hover:bg-slate-50 cursor-pointer px-3 py-2 rounded-xl transition ease-in-out">
                        <div class="flex items-center gap-3">
                            <div class="relative w-14 h-14 rounded-full bg-red-500">
                                <img src="<?= base_url() ?>/images/avatar/naruto.png" alt="Avatar" class="rounded-full w-14 h-14">
                                <div class="absolute bottom-0 right-0">
                                    <span
                                        class="flex items-center justify-center bg-emerald-500 font-medium text-white h-5 w-5 text-[10px] rounded-full">5</span>
                                </div>
                            </div>
                            <div class="hidden md:block">
                                <div class="flex items-center gap-2">
                                    <h2 class="font-medium text-gray-800 text-sm">Lerian Febriana</h2>
                                    <span class="block text-emerald-500 text-[10px]"><i
                                            class="fa-solid fa-circle"></i></span>
                                </div>
                                <p class="text-sm font-reguler text-gray-700">Lorem, ipsum dolor sit amet...</p>
                            </div>
                        </div>
                        <div class="hidden md:flex flex-col items-center justify-center">
                            <span class="block text-xs text-gray-700">12:31</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col w-4/6 h-full bg-sky-300">
                <div class="h-full overflow-y-auto bg-cover bg-no-repeat bg-[url('./images/pattern.svg')]" id="chat_container">
                    <div class="flex flex-col p-5 space-y-5">
                        <div
                            class="w-full md:w-1/2 relative justify-self-start self-start bg-white hover:bg-gray-50 transition ease-in-out cursor-pointer rounded-2xl rounded-bl-none px-5 pt-5 pb-8">
                            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Odio quas consequuntur aliquam qui cum quaerat exercitationem harum eius tempora
                                assumenda necessitatibus voluptas, quam esse. Cupiditate accusantium molestiae tempore
                                doloribus consectetur!</p>
                            <div class="text-xs text-slate-500 absolute bottom-3 right-4 space-x-2">
                                <span>Selasa, 12 April 2023. 12:32</span>
                                <span class="text-sky-500"><i class="fa-solid fa-check-double"></i></span>
                            </div>
                        </div>
                        <div
                            class="w-full md:w-1/2 relative justify-self-start self-start bg-white hover:bg-gray-50 transition ease-in-out cursor-pointer rounded-2xl rounded-bl-none px-5 pt-5 pb-8">
                            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Odio quas consequuntur aliquam qui cum quaerat exercitationem harum eius tempora
                                assumenda necessitatibus voluptas, quam esse. Cupiditate accusantium molestiae tempore
                                doloribus consectetur!</p>
                            <div class="text-xs text-slate-500 absolute bottom-3 right-4 space-x-2">
                                <span>Selasa, 12 April 2023. 12:32</span>
                                <span class="text-sky-500"><i class="fa-solid fa-check-double"></i></span>
                            </div>
                        </div>
                        <div
                            class="w-full md:w-1/2 relative justify-self-start self-start bg-white hover:bg-gray-50 transition ease-in-out cursor-pointer rounded-2xl rounded-bl-none px-5 pt-5 pb-8">
                            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Odio quas consequuntur aliquam qui cum quaerat exercitationem harum eius tempora
                                assumenda necessitatibus voluptas, quam esse. Cupiditate accusantium molestiae tempore
                                doloribus consectetur!</p>
                            <div class="text-xs text-slate-500 absolute bottom-3 right-4 space-x-2">
                                <span>Selasa, 12 April 2023. 12:32</span>
                                <span class="text-sky-500"><i class="fa-solid fa-check-double"></i></span>
                            </div>
                        </div>
                        <div
                            class="w-full md:w-1/2 relative justify-self-end self-end bg-sky-50 hover:bg-sky-100 transition ease-in-out cursor-pointer rounded-2xl rounded-br-none px-5 pt-5 pb-8">
                            <p class="text-sm text-gray-800">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Odio quas consequuntur aliquam qui cum quaerat exercitationem harum eius tempora
                                assumenda necessitatibus voluptas, quam esse. Cupiditate accusantium molestiae tempore
                                doloribus consectetur!</p>
                            <div class="text-xs text-slate-500 absolute bottom-3 right-4 space-x-2">
                                <span>Selasa, 12 April 2023. 12:32</span>
                                <span class="text-gray-400"><i class="fa-solid fa-check"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-20 flex items-center bg-white px-3">
                    <div class="w-full flex gap-3">
                        <input type="text" placeholder="Tulis pesan anda disini..."
                            class="w-full rounded-xl text-sm text-gray-800 px-5 py-2 bg-gray-50 hover:bg-gray-50 border border-gray-100 focus:outline-none focus:ring-2 focus:ring-sky-300 transition ease-in-out">
                        <button
                            class="bg-sky-500 hover:bg-sky-600 transition ease-in-out text-white py-3 rounded-xl px-5">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const chatContainer = document.getElementById('chat_container');
        chatContainer.scrollTop = chatContainer.scrollHeight;

        const navbarToggle = () => {
            const navbar = document.getElementById('navbar');
            navbar.classList.toggle('hidden');
        }
    </script>
</body>

</html>
