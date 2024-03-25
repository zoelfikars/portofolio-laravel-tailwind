<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>zoelfikars | {{ $title }}</title>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gradient-to-r from-gray-500 to-slate-500 pb-10">
    @include('partials.navbar')
    <div
        class="wrapper-container max-w-screen-xl flex flex-col mx-auto gap-10 px-5 items md:flex-row md:px-5 md:px-auto md:py-10">
        <div
            class="information bg-white rounded-2xl w-full h-fit px-8 py-12 flex flex-col gap-5 items-center md:sticky md:top-0 md:w-5/12">
            <img class="rounded-2xl w-64" src="{{ asset('images/profile.jpeg') }}" alt="">
            <p class="name font-sans font-bold text-center text-xl">
                Muhamad Zulfikar Fikri
            </p>
            <div class="profession bg-slate-100 rounded-xl py-2 px-6 text-center font-semibold font-sans">
                Junior Programmer
            </div>
            <div class="social-media flex gap-3 place-content-center">
                <a href="https://www.facebook.com/zoelfikars/" target=”_blank”
                    class="facebook bg-slate-100 rounded-xl py-3 px-5 hover:bg-gray-600 hover:text-white">
                    <i class="fa-brands fa-facebook-f text-xl"></i>
                </a>
                <a href="https://www.instagram.com/strippeddd_/" target=”_blank”
                    class="facebook bg-slate-100 rounded-xl py-3 px-4 hover:bg-gray-600 hover:text-white">
                    <i class="fa-brands fa-instagram text-xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/zoelfikars/" target=”_blank”
                    class="facebook bg-slate-100 rounded-xl py-3 px-4 hover:bg-gray-600 hover:text-white">
                    <i class="fa-brands fa-linkedin text-xl"></i>
                </a>
                <a href="https://github.com/zoelfikars" target=”_blank”
                    class="github bg-slate-100 rounded-xl py-3 px-4 hover:bg-gray-600 hover:text-white">
                    <i class="fa-brands fa-github text-xl"></i>
                </a>
            </div>
            <div class="biodata flex flex-col gap-3 justify-between bg-slate-100 rounded-xl px-7 py-10 w-full">
                <div class="whatsapp flex gap-2 items-center pb-2 border-b border-gray-300">
                    <div class="whatsapp-icon bg-white flex items-center h-fit p-3 rounded-xl">
                        <i class="fa-brands fa-whatsapp text-green-500 text-xl"></i>
                    </div>
                    <div class="whatsapp-text">
                        <p class="font-sans text-sm text-gray-600">Whatsapp</p>
                        <p class="font-sans pt-1">+62-3258-6769</p>
                    </div>
                </div>
                <div class="location flex gap-2 items-center border-b pb-2 border-gray-300">
                    <div class="location-icon bg-white flex items-center h-fit p-3 rounded-xl">
                        <i class="fa-solid fa-location-dot text-red-500 text-xl"></i>
                    </div>
                    <div class="location-text">
                        <p class="font-sans text-sm text-gray-600">Location</p>
                        <p class="font-sans pt-1">Indonesia, Bandung City</p>
                    </div>
                </div>
                <div class="birth flex gap-2 items-center border-b pb-2 border-gray-300">
                    <div class="birth-icon bg-white flex items-center h-fit p-3 rounded-xl">
                        <i class="fa-regular fa-calendar text-purple-500 text-xl"></i>
                    </div>
                    <div class="birth-text">
                        <p class="font-sans text-sm text-gray-600">Birth</p>
                        <p class="font-sans pt-1">Bandung, 21 May 2003</p>
                    </div>
                </div>
                <div class="email flex gap-2 items-center">
                    <div class="email-icon bg-white flex items-center h-fit p-3 rounded-xl">
                        <i class="fa-regular fa-envelope text-blue-500 text-xl"></i>
                    </div>
                    <div class="email-text">
                        <p class="font-sans text-sm text-gray-600">Email</p>
                        <p class="font-sans pt-1">zuulfikarfikrii@gmail.com</p>
                    </div>
                </div>
            </div>
            <a href="{{ asset('pdf/CV.pdf') }}" download>
                <div
                    class="download-btn bg-gradient-to-r from-gray-800 to-slate-500 text-white text-center rounded-xl p-3 hover:bg-gradient-to-r hover:from-gray-700 hover:to-slate-400 cursor-pointer">
                    Download CV</div>
            </a>
        </div>
        <div class="wrapper-content w-full flex flex-col gap-8 items-end">
            <div class="menu bg-white hidden p-8 rounded-2xl md:flex md:w-fit md:gap-4">
                <a href="/about"
                    class="facebook rounded-xl py-4 px-5 flex flex-col place-items-center gap-1 cursor-pointer {{ $title === 'About' ? 'bg-gradient-to-r from-gray-800 to-slate-500 text-white hover:from-slate-100 hover:to-slate-100 hover:bg-slate-100 hover:text-gray-600' : 'bg-slate-100 text-gray-600 hover:bg-gradient-to-r hover:from-gray-800 hover:to-slate-500 hover:text-white' }}">
                    <i class="fa-regular fa-user text-2xl"></i>
                    <span class="text-sm font-sans">About</span>
                </a>
                <a href="/resume"
                    class="facebook bg-slate-100 rounded-xl py-4 px-5 flex flex-col place-items-center gap-1 cursor-pointer {{ $title === 'Resume' ? 'bg-gradient-to-r from-gray-800 to-slate-500 text-white hover:from-slate-100 hover:to-slate-100 hover:bg-slate-100 hover:text-gray-600' : 'bg-slate-100 text-gray-600 hover:bg-gradient-to-r hover:from-gray-800 hover:to-slate-500 hover:text-white' }}">
                    <i class="fa-regular fa-file-lines text-2xl"></i>
                    <span class="text-sm font-sans">Resume</span>
                </a>
                <a href="/works"
                    class="facebook bg-slate-100 rounded-xl py-4 px-5 flex flex-col place-items-center gap-1 cursor-pointer {{ $title === 'Works' ? 'bg-gradient-to-r from-gray-800 to-slate-500 text-white hover:from-slate-100 hover:to-slate-100 hover:bg-slate-100 hover:text-gray-600' : 'bg-slate-100 text-gray-600 hover:bg-gradient-to-r hover:from-gray-800 hover:to-slate-500 hover:text-white' }}">
                    <i class="fa-solid fa-briefcase text-2xl"></i>
                    <span class="text-sm font-sans">Works</span>
                </a>
                <a href="/contact"
                    class="facebook bg-slate-100 rounded-xl py-4 px-5 flex flex-col place-items-center gap-1 cursor-pointer {{ $title === 'Contact' ? 'bg-gradient-to-r from-gray-800 to-slate-500 text-white hover:from-slate-100 hover:to-slate-100 hover:bg-slate-100 hover:text-gray-600' : 'bg-slate-100 text-gray-600 hover:bg-gradient-to-r hover:from-gray-800 hover:to-slate-500 hover:text-white' }}">
                    <i class="fa-regular fa-address-book text-2xl"></i>
                    <span class="text-sm font-sans">Contact</span>
                </a>
            </div>
            <div class="content-container bg-white w-full h-fit rounded-2xl pt-10 flex flex-col">
                <div class="content-header flex items-center gap-5 p-12">
                    <div class="divider w-full h-1 bg-gradient-to-r from-gray-500 to-white"></div>
                    <h1 class="text-3xl font-sans font-bold w-fit">{{ $title }}</h1>
                    <div class="divider w-full h-1 bg-gradient-to-r from-white to-gray-500"></div>
                </div>
                @yield('content')
                <div class="content-footer text-center p-10">
                    <p class="footer">© 2024 All Rights Reserved by zoelfikars.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
