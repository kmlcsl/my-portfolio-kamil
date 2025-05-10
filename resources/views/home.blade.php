@extends('layouts.app')
@section('title', 'Muhammad Kamil - Portfolio')

@section('content')
    <style>
        .conic-border {
            background: conic-gradient(from 0deg, #3ABAB4, #3B82F6, #8B5CF6, #3ABAB4);
            position: relative;
            border-radius: 9999px;
            padding: 4px;
        }
    </style>

    <!-- Hero Section -->
    <section
        class="min-h-screen pt-16 md:pt-20 bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 flex flex-col justify-center items-center px-4 relative overflow-hidden">
        <!-- Hero Section with Animation and Profile -->
        <div class="text-center max-w-5xl mx-auto z-10 py-12 md:py-0">
            <!-- Profile Photo with Animation -->
            <div class="mb-8 animate__animated animate__fadeIn">
                <div class="relative inline-block">
                    <!-- Container with conic gradient border -->
                    <div class="conic-border animated-border w-36 h-36 md:w-44 md:h-44 mx-auto">
                        <!-- Inner container with image -->
                        <div class="w-full h-full bg-gray-800 rounded-full overflow-hidden">
                            <img src="{{ asset('images/profil.jpeg') }}" alt="Muhammad Kamil"
                                class="w-full h-full object-cover"
                                onerror="this.src='https://ui-avatars.com/api/?name=Muhammad+Kamil&background=0D9488&color=fff&size=250'">
                        </div>
                    </div>

                    <!-- Subtle glow effect -->
                    <div
                        class="absolute top-0 left-0 w-full h-full rounded-full bg-teal-400 opacity-10 blur-sm animate-pulse">
                    </div>
                </div>
            </div>

            <!-- Name and Title with Animation -->
            <div class="mb-8">
                <h1
                    class="text-4xl md:text-6xl font-bold mb-4 animate__animated animate__fadeIn text-transparent bg-clip-text bg-gradient-to-r from-teal-400 via-blue-500 to-purple-500">
                    Muhammad Kamil
                </h1>
                <div class="flex justify-center animate__animated animate__fadeIn animate__delay-1s">
                    <span
                        class="px-4 py-1 rounded-full bg-gradient-to-r from-teal-500 to-teal-700 text-white text-lg font-semibold">
                        Full-Stack Developer
                    </span>
                </div>
                <p
                    class="text-xl text-gray-300 mt-6 mb-8 max-w-2xl mx-auto animate__animated animate__fadeIn animate__delay-1s">
                    Passionate programmer turning ideas into elegant digital solutions. Specializing in web development,
                    UI/UX design, and innovative software solutions.
                </p>
            </div>

            <!-- Social Media with Animation -->
            <div class="flex justify-center space-x-4 mb-8 animate__animated animate__fadeInUp animate__delay-2s">
                <a href="https://gitlab.com/muhammadkamilcsl19" target="_blank"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-r from-orange-500 to-red-600 flex items-center justify-center text-white hover:opacity-90 transition-all transform hover:scale-110">
                    <i class="fab fa-gitlab text-lg md:text-xl"></i>
                </a>
                <a href="https://linkedin.com/in/muhammad-kamil-715610335" target="_blank"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-700 flex items-center justify-center text-white hover:bg-blue-600 transition-all transform hover:scale-110">
                    <i class="fab fa-linkedin-in text-lg md:text-xl"></i>
                </a>
                <a href="https://twitter.com/kamilcsl_19" target="_blank"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-all transform hover:scale-110">
                    <i class="fab fa-twitter text-lg md:text-xl"></i>
                </a>
                <a href="https://instagram.com/kml_csl" target="_blank"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-tr from-purple-600 via-pink-500 to-orange-400 flex items-center justify-center text-white hover:opacity-90 transition-all transform hover:scale-110">
                    <i class="fab fa-instagram text-lg md:text-xl"></i>
                </a>
                <a href="https://wa.me/6281383894808?text=Halo%20Muhammad%20Kamil%2C%20saya%20tertarik%20dengan%20portofolio%20Anda"
                    target="_blank"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-gradient-to-r from-green-500 to-green-600 flex items-center justify-center text-white hover:bg-green-500 transition-all transform hover:scale-110">
                    <i class="fab fa-whatsapp text-lg md:text-xl"></i>
                </a>
                <a href="mailto:muhammadkamilcsl19@gmail.com"
                    class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-red-600 flex items-center justify-center text-white hover:bg-red-500 transition-all transform hover:scale-110">
                    <i class="fas fa-envelope text-lg md:text-xl"></i>
                </a>
            </div>

            <!-- CTA Buttons with Animation -->
            <div
                class="flex flex-col sm:flex-row items-center justify-center gap-4 animate__animated animate__fadeInUp animate__delay-3s">
                <a href="#about"
                    class="w-full sm:w-auto bg-gradient-to-r from-teal-400 to-teal-600 text-white font-bold py-2 px-6 rounded-lg transform transition-all hover:scale-105 hover:shadow-lg hover:from-teal-500 hover:to-teal-700 flex items-center justify-center">
                    <span>About Me</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a href="#skills"
                    class="w-full sm:w-auto bg-transparent border-2 border-blue-400 text-blue-400 font-bold py-2 px-6 rounded-lg transform transition-all hover:scale-105 hover:bg-blue-400 hover:text-white hover:shadow-lg flex items-center justify-center">
                    <span>My Skills</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </a>
                <a href="{{ route('contact') }}"
                    class="w-full sm:w-auto bg-gradient-to-r from-purple-500 to-indigo-600 text-white font-bold py-2 px-6 rounded-lg transform transition-all hover:scale-105 hover:shadow-lg hover:from-purple-600 hover:to-indigo-700 flex items-center justify-center">
                    <span>Contact Me</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Animated Scroll Indicator -->
        <div
            class="absolute bottom-2 left-1/2 transform -translate-x-1/2 animate__animated animate__fadeIn animate__delay-4s animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-400" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>

        <!-- Particle Background Effect -->
        <div id="particles-js" class="absolute inset-0 z-0"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="-mt-7 py-20 bg-gray-900 px-4">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500 mb-4">
                    About Me</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full"></div>
            </div>

            <div
                class="bg-gray-800 rounded-xl p-8 shadow-2xl transform hover:scale-[1.01] transition-all duration-300 border border-gray-700">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="relative">
                            <div class="w-full h-64 md:h-80 rounded-xl overflow-hidden">
                                <img src="{{ asset('images/about.jpg') }}" alt="Muhammad Kamil Working"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://ui-avatars.com/api/?name=Muhammad+Kamil&background=334155&color=fff&size=400'">
                            </div>
                            <!-- Decorative elements -->
                            <div
                                class="absolute -bottom-4 -right-4 w-24 h-24 rounded-xl bg-gradient-to-tr from-teal-400 to-blue-500 -z-10">
                            </div>
                            <div class="absolute -top-4 -left-4 w-16 h-16 rounded-xl border-2 border-teal-400 -z-10"></div>
                        </div>
                    </div>

                    <div class="md:w-2/3">
                        <h3 class="text-2xl font-bold text-teal-400 mb-4">Muhammad Kamil</h3>
                        <p class="text-gray-300 mb-4">
                            Hello! I'm Muhammad Kamil, a passionate full-stack developer based in Aceh, Indonesia. With over
                            3 years of experience in web development, I specialize in creating scalable, user-friendly
                            applications using modern technologies.
                        </p>
                        <p class="text-gray-300 mb-6">
                            My journey in programming began when I was in college, and since then, I've worked with various
                            clients across different industries, helping them transform their ideas into reality. I'm
                            particularly skilled in Laravel, Vue.js, React, and UI/UX design principles.
                        </p>

                        <!-- Personal Info -->
                        <div class="flex flex-col gap-5 mb-6">
                            <!-- Email pada baris sendiri -->
                            <div class="flex items-center">
                                <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                    <i class="fas fa-envelope text-teal-400"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-sm">Email</p>
                                    <p class="text-white">muhammadkamilcsl19@gmail.com</p>
                                </div>
                            </div>

                            <!-- Location dan Freelance pada baris kedua -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                        <i class="fas fa-map-marker-alt text-teal-400"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-400 text-sm">Location</p>
                                        <p class="text-white">Aceh, Indonesia</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <div
                                        class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                        <i class="fas fa-laptop-code text-teal-400"></i>
                                    </div>
                                    <div>
                                        <p class="text-gray-400 text-sm">Freelance</p>
                                        <p class="text-white">Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('about') }}"
                            class="inline-block bg-gradient-to-r from-teal-400 to-teal-600 text-white font-medium py-2 px-6 rounded-lg transform transition-all hover:scale-105 hover:shadow-lg hover:from-teal-500 hover:to-teal-700">
                            Full Biography <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-slate-800 px-4">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500 mb-4">
                    My Skills</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full"></div>
                <p class="text-gray-300 mt-4 max-w-3xl mx-auto">I've worked with a variety of technologies and frameworks
                    to create beautiful, functional, and scalable web applications.</p>
            </div>

            <!-- Technical Skills -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-12">
                <!-- Skill Card: HTML -->
                <div
                    class="bg-gray-900 rounded-xl p-4 flex flex-col items-center transform hover:scale-105 transition-all duration-300 border border-gray-800">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-orange-500 to-red-500 rounded-full mb-4">
                        <i class="fab fa-html5 text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">HTML5</h3>
                    <div class="w-full bg-gray-700 rounded-full h-1.5 mt-2">
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 h-1.5 rounded-full" style="width: 95%">
                        </div>
                    </div>
                </div>

                <!-- Skill Card: CSS -->
                <div
                    class="bg-gray-900 rounded-xl p-4 flex flex-col items-center transform hover:scale-105 transition-all duration-300 border border-gray-800">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-blue-500 to-blue-700 rounded-full mb-4">
                        <i class="fab fa-css3-alt text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">CSS3</h3>
                    <div class="w-full bg-gray-700 rounded-full h-1.5 mt-2">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-700 h-1.5 rounded-full" style="width: 90%">
                        </div>
                    </div>
                </div>

                <!-- Skill Card: JavaScript -->
                <div
                    class="bg-gray-900 rounded-xl p-4 flex flex-col items-center transform hover:scale-105 transition-all duration-300 border border-gray-800">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full mb-4">
                        <i class="fab fa-js text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">JavaScript</h3>
                    <div class="w-full bg-gray-700 rounded-full h-1.5 mt-2">
                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 h-1.5 rounded-full" style="width: 85%">
                        </div>
                    </div>
                </div>

                <!-- Skill Card: PHP -->
                <div
                    class="bg-gray-900 rounded-xl p-4 flex flex-col items-center transform hover:scale-105 transition-all duration-300 border border-gray-800">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full mb-4">
                        <i class="fab fa-php text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">PHP</h3>
                    <div class="w-full bg-gray-700 rounded-full h-1.5 mt-2">
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 h-1.5 rounded-full" style="width: 90%">
                        </div>
                    </div>
                </div>

                <!-- Skill Card: Laravel -->
                <div
                    class="bg-gray-900 rounded-xl p-4 flex flex-col items-center transform hover:scale-105 transition-all duration-300 border border-gray-800">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-red-500 to-red-700 rounded-full mb-4">
                        <i class="fab fa-laravel text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">Laravel</h3>
                    <div class="w-full bg-gray-700 rounded-full h-1.5 mt-2">
                        <div class="bg-gradient-to-r from-red-500 to-red-700 h-1.5 rounded-full" style="width: 95%"></div>
                    </div>
                </div>

                <!-- Skill Card: React -->
                <div
                    class="bg-gray-900 rounded-xl p-4 flex flex-col items-center transform hover:scale-105 transition-all duration-300 border border-gray-800">
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-br from-cyan-400 to-blue-500 rounded-full mb-4">
                        <i class="fab fa-react text-2xl text-white"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-white">React</h3>
                    <div class="w-full bg-gray-700 rounded-full h-1.5 mt-2">
                        <div class="bg-gradient-to-r from-cyan-400 to-blue-500 h-1.5 rounded-full" style="width: 80%">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Skills -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">Tailwind CSS</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">Vue.js</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">MySQL</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">Git</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">RESTful APIs</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">UI/UX Design</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">Docker</p>
                </div>
                <div
                    class="bg-gray-900 rounded-lg p-3 text-center border border-gray-800 transform hover:scale-105 transition-all duration-300">
                    <p class="text-teal-400 font-medium">AWS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Preview Section -->
    <section id="projects" class="py-20 bg-gray-900 px-4">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center mb-12">
                <h2
                    class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500 mb-4">
                    Featured Projects</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full"></div>
                <p class="text-gray-300 mt-4 max-w-3xl mx-auto">Here are some of my recent projects. Check out my projects
                    page for the complete portfolio.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                <!-- Project Card 1 -->
                <div
                    class="group bg-gray-800 rounded-xl overflow-hidden shadow-lg transform hover:scale-[1.02] transition-all duration-300 border border-gray-700">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('images/project1.png') }}" alt="E-commerce Website"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            onerror="this.src='https://placehold.co/600x400/0f172a/3ABAB4?text=E-commerce+Website'">
                        <div class="absolute top-3 right-3 bg-teal-500 text-xs text-white px-2 py-1 rounded-lg">Laravel
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">SIMRS ~ Paperless</h3>
                        <p class="text-gray-300 mb-4">A digital hospital management platform for patient registration, EMR,
                            queues, billing, lab/radiology integration, and reporting.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Laravel</span>
                                <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Vue.js</span>
                                <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">MySQL</span>
                            </div>
                            <a href="#" class="text-teal-400 hover:text-teal-300">View Project →</a>
                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div
                    class="group bg-gray-800 rounded-xl overflow-hidden shadow-lg transform hover:scale-[1.02] transition-all duration-300 border border-gray-700">
                    <div class="relative h-56 overflow-hidden">
                        <img src="{{ asset('images/project2.png') }}" alt="Dashboard UI"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            onerror="this.src='https://placehold.co/600x400/0f172a/3ABAB4?text=Dashboard+UI'">
                        <div class="absolute top-3 right-3 bg-blue-500 text-xs text-white px-2 py-1 rounded-lg">React</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">HumbleKos</h3>
                        <p class="text-gray-300 mb-4">Interactive dashboard with real-time data visualization, customizable
                            widgets, and responsive design.</p>
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2">
                                <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">React</span>
                                <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Tailwind</span>
                                <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded">Node.js</span>
                            </div>
                            <a href="#" class="text-teal-400 hover:text-teal-300">View Project →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="{{ route('projects') }}"
                    class="inline-block bg-transparent border-2 border-teal-400 text-teal-400 font-bold py-3 px-8 rounded-lg transform transition-all hover:scale-105 hover:bg-teal-400 hover:text-white">
                    View All Projects <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 px-4 relative overflow-hidden">
        <div class="container mx-auto max-w-4xl relative z-10">
            <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-10 border border-gray-700 shadow-2xl">
                <div class="text-center mb-8">
                    <h2 class="text-4xl font-bold text-white mb-4">Let's Work Together</h2>
                    <p class="text-gray-300 max-w-2xl mx-auto">Have a project in mind or want to discuss a potential
                        collaboration? I'm always open to new opportunities and challenges.</p>
                </div>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact') }}"
                        class="py-3 px-8 bg-gradient-to-r from-teal-400 to-teal-600 text-white font-bold rounded-lg transform transition-all hover:scale-105 hover:shadow-lg flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2"></i> Contact Me
                    </a>
                    <a href="mailto:muhammadkamilcsl19@gmail.com"
                        class="py-3 px-8 bg-transparent border-2 border-white text-white font-bold rounded-lg transform transition-all hover:scale-105 hover:bg-white hover:text-gray-900 flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i> Send Email
                    </a>
                    <a href="https://wa.me/6281383894808?text=Halo%20Muhammad%20Kamil%2C%20saya%20tertarik%20dengan%20portofolio%20Anda"
                        target="_blank"
                        class="py-3 px-8 bg-gradient-to-r from-green-500 to-green-700 text-white font-bold rounded-lg transform transition-all hover:scale-105 hover:shadow-lg flex items-center justify-center">
                        <i class="fab fa-whatsapp mr-2"></i> WhatsApp Me
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-teal-500/10 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl"></div>
    </section>

@section('style')
    <!-- Foto profil dengan conic gradient dan gambar yang langsung ditampilkan -->
    <style>
        .conic-border {
            background: conic-gradient(from 0deg, #3ABAB4, #3B82F6, #8B5CF6, #3ABAB4);
            position: relative;
            border-radius: 9999px;
            padding: 4px;
        }

        @keyframes rotate-gradient {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animated-border {
            animation: rotate-gradient 6s linear infinite;
        }
    </style>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize particles.js
            if (typeof particlesJS !== 'undefined') {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 80,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: "#3ABAB4"
                        },
                        shape: {
                            type: "circle"
                        },
                        opacity: {
                            value: 0.5,
                            random: true
                        },
                        size: {
                            value: 3,
                            random: true
                        },
                        line_linked: {
                            enable: true,
                            distance: 150,
                            color: "#3ABAB4",
                            opacity: 0.2,
                            width: 1
                        },
                        move: {
                            enable: true,
                            speed: 2,
                            direction: "none",
                            random: true,
                            out_mode: "out"
                        }
                    },
                    interactivity: {
                        detect_on: "canvas",
                        events: {
                            onhover: {
                                enable: true,
                                mode: "grab"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            }
                        },
                        modes: {
                            grab: {
                                distance: 140,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    }
                });
            }

            // Add scroll reveal animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__fadeInUp');
                        entry.target.style.opacity = 1;
                    }
                });
            }, {
                threshold: 0.1
            });

            if (heroSection) {
                const profileImg = heroSection.querySelector('img[data-src]');
                if (profileImg) {
                    window.addEventListener('load', function() {
                        profileImg.src = profileImg.getAttribute('data-src');
                        profileImg.style.display = 'block';
                        profileImg.classList.add('loaded');
                    });
                }
            }

            // Apply to all elements with the scroll-reveal class
            document.querySelectorAll('.scroll-reveal').forEach(el => {
                el.style.opacity = 0;
                observer.observe(el);
            });
        });
    </script>
@endsection
