@extends('layouts.app')
@section('title', 'About Me')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500">About Me</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full mb-6"></div>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">My journey, passion, and vision in the world of technology.</p>
        </div>
    </div>
</section>

<!-- My Story Section -->
<section class="py-16 bg-gray-900 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="bg-gray-800 rounded-xl p-8 md:p-10 shadow-2xl border border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Left Column: Image & Quick Info -->
                <div class="md:col-span-1">
                    <div class="relative mb-8">
                        <div class="rounded-xl overflow-hidden border-2 border-teal-400">
                            <img src="{{ asset('images/profile-about.jpg') }}" alt="Muhammad Kamil" class="w-full h-auto" onerror="this.src='https://ui-avatars.com/api/?name=Muhammad+Kamil&background=334155&color=fff&size=400'">
                        </div>
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 rounded-xl bg-gradient-to-tr from-teal-400 to-blue-500 -z-10"></div>
                    </div>

                    <div class="space-y-5">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                <i class="fas fa-user-graduate text-teal-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">Education</p>
                                <p class="text-white">Computer Science, BSc</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                <i class="fas fa-briefcase text-teal-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">Experience</p>
                                <p class="text-white">3+ Years</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                <i class="fas fa-map-marker-alt text-teal-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">Location</p>
                                <p class="text-white">Aceh, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-3">
                                <i class="fas fa-language text-teal-400"></i>
                            </div>
                            <div>
                                <p class="text-gray-400 text-sm">Languages</p>
                                <p class="text-white">English, Indonesian</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-8 border-t border-gray-700">
                        <h3 class="text-xl font-bold text-teal-400 mb-4">Connect With Me</h3>
                        <div class="flex flex-wrap gap-3">
                            <a href="https://github.com/muhammadkamil" target="_blank" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-white hover:bg-gray-600 transition-all transform hover:scale-110">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://linkedin.com/in/muhammadkamil" target="_blank" class="w-10 h-10 rounded-full bg-blue-700 flex items-center justify-center text-white hover:bg-blue-600 transition-all transform hover:scale-110">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://twitter.com/muhammadkamil" target="_blank" class="w-10 h-10 rounded-full bg-blue-400 flex items-center justify-center text-white hover:bg-blue-500 transition-all transform hover:scale-110">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://instagram.com/muhammadkamil" target="_blank" class="w-10 h-10 rounded-full bg-gradient-to-tr from-purple-600 via-pink-500 to-orange-400 flex items-center justify-center text-white hover:opacity-90 transition-all transform hover:scale-110">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: My Story -->
                <div class="md:col-span-2">
                    <h2 class="text-3xl font-bold text-white mb-6">My Journey in Technology</h2>

                    <div class="space-y-6 text-gray-300">
                        <p class="text-lg">
                            Hello! I'm <span class="text-teal-400 font-semibold">Muhammad Kamil</span>, a passionate full-stack developer with a lifelong fascination for technology. My journey began much earlier than my professional career—it started when I was just a 10-year-old boy captivated by the glowing screen of a computer.
                        </p>

                        <h3 class="text-xl font-bold text-teal-400 mt-8">The Early Days</h3>
                        <p>
                            As a child, while most of my friends were playing outside, I found myself drawn to the family computer. At just 10 years old, I would spend hours exploring different programs, figuring out how things worked, and being amazed at how a simple machine could create such dynamic experiences. What began as playing simple games soon evolved into curiosity about how these games were made.
                        </p>

                        <p>
                            By my early teens, I had taught myself basic HTML and CSS, creating simple websites just for fun. The ability to type a few lines of code and watch them transform into visual elements on screen felt like magic—a magic I was determined to master.
                        </p>

                        <h3 class="text-xl font-bold text-teal-400 mt-8">Education & Growth</h3>
                        <p>
                            My passion for technology naturally led me to pursue a degree in Computer Science, where I built a strong foundation in programming principles, algorithms, and software design. During college, I immersed myself in various programming languages and frameworks, but web development always held a special place in my heart.
                        </p>

                        <p>
                            What I love most about programming is the perfect blend of logic and creativity it requires. Building solutions that are not only functional but also intuitive and elegant brings me immense satisfaction. I believe that great software should solve real problems while providing a seamless user experience.
                        </p>

                        <h3 class="text-xl font-bold text-teal-400 mt-8">Professional Journey</h3>
                        <p>
                            With over 3 years of experience, I've had the privilege of working on diverse projects across different industries. From developing e-commerce platforms to creating custom content management systems, each project has added valuable skills to my toolkit.
                        </p>

                        <p>
                            I specialize in Laravel, Vue.js, and React, focusing on creating scalable and maintainable applications that stand the test of time. Clean code, thorough testing, and thoughtful architecture are principles I hold dear in my work.
                        </p>

                        <h3 class="text-xl font-bold text-teal-400 mt-8">Philosophy & Vision</h3>
                        <p>
                            I believe that technology should enhance human experiences, not complicate them. This philosophy guides my approach to every project—focusing on user needs, accessibility, and intuitive design. The best technology is the kind that feels invisible while empowering users to achieve their goals.
                        </p>

                        <p>
                            Looking ahead, I'm excited about continuing to grow as a developer, exploring emerging technologies, and creating solutions that make a positive impact. That curious 10-year-old boy still lives within me, driving me to learn, explore, and create with the same wonder and enthusiasm.
                        </p>
                    </div>

                    <div class="mt-10 pt-6 border-t border-gray-700">
                        <h3 class="text-xl font-bold text-teal-400 mb-4">Want to work together?</h3>
                        <p class="text-gray-300 mb-6">I'm always open to discussing new projects, creative ideas or opportunities to be part of your vision.</p>
                        <a href="{{ route('contact') }}" class="inline-block bg-gradient-to-r from-teal-400 to-teal-600 text-white font-medium py-3 px-8 rounded-lg transform transition-all hover:scale-105 hover:shadow-lg hover:from-teal-500 hover:to-teal-700">
                            Get In Touch <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Expertise Section -->
<section class="py-16 bg-slate-800 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500 mb-4">Skills & Expertise</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Skills -->
            <div class="bg-gray-900 rounded-xl p-8 shadow-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-teal-400 mb-6">Technical Skills</h3>

                <div class="space-y-5">
                    <!-- Skill Item -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-white">Front-End Development</span>
                            <span class="text-teal-400">90%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-teal-400 to-blue-500 h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>

                    <!-- Skill Item -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-white">Back-End Development</span>
                            <span class="text-teal-400">95%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-teal-400 to-blue-500 h-2 rounded-full" style="width: 95%"></div>
                        </div>
                    </div>

                    <!-- Skill Item -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-white">UI/UX Design</span>
                            <span class="text-teal-400">85%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-teal-400 to-blue-500 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>

                    <!-- Skill Item -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-white">Database Management</span>
                            <span class="text-teal-400">90%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-teal-400 to-blue-500 h-2 rounded-full" style="width: 90%"></div>
                        </div>
                    </div>

                    <!-- Skill Item -->
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="font-medium text-white">DevOps</span>
                            <span class="text-teal-400">75%</span>
                        </div>
                        <div class="w-full bg-gray-700 rounded-full h-2">
                            <div class="bg-gradient-to-r from-teal-400 to-blue-500 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Expertise -->
            <div class="bg-gray-900 rounded-xl p-8 shadow-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-teal-400 mb-6">Core Expertise</h3>

                <div class="grid grid-cols-2 gap-6">
                    <!-- Expertise Item -->
                    <div class="p-5 bg-gray-800 rounded-lg border border-gray-700">
                        <div class="w-12 h-12 rounded-lg bg-teal-400/20 flex items-center justify-center mb-4">
                            <i class="fas fa-code text-teal-400 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">Web Development</h4>
                        <p class="text-gray-400 text-sm">Creating responsive, user-friendly web applications with modern frameworks.</p>
                    </div>

                    <!-- Expertise Item -->
                    <div class="p-5 bg-gray-800 rounded-lg border border-gray-700">
                        <div class="w-12 h-12 rounded-lg bg-teal-400/20 flex items-center justify-center mb-4">
                            <i class="fas fa-mobile-alt text-teal-400 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">Mobile-First Design</h4>
                        <p class="text-gray-400 text-sm">Designing with mobile users in mind for optimal user experience.</p>
                    </div>

                    <!-- Expertise Item -->
                    <div class="p-5 bg-gray-800 rounded-lg border border-gray-700">
                        <div class="w-12 h-12 rounded-lg bg-teal-400/20 flex items-center justify-center mb-4">
                            <i class="fas fa-database text-teal-400 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">Database Architecture</h4>
                        <p class="text-gray-400 text-sm">Designing efficient, scalable database structures.</p>
                    </div>

                    <!-- Expertise Item -->
                    <div class="p-5 bg-gray-800 rounded-lg border border-gray-700">
                        <div class="w-12 h-12 rounded-lg bg-teal-400/20 flex items-center justify-center mb-4">
                            <i class="fas fa-server text-teal-400 text-xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-white mb-2">API Development</h4>
                        <p class="text-gray-400 text-sm">Creating robust APIs for seamless integration across platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <!-- Testimonials Section -->
<section class="py-16 bg-gray-900 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500 mb-4">What People Say</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-800 rounded-xl p-8 border border-gray-700 relative">
                <div class="text-teal-400 text-5xl absolute -top-4 left-4 opacity-20">❝</div>
                <p class="text-gray-300 italic mb-6 relative z-10">Muhammad has been an exceptional developer to work with. His attention to detail and ability to translate our requirements into functional, user-friendly solutions has made our project a success.</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full overflow-hidden mr-4">
                        <img src="https://ui-avatars.com/api/?name=John+Smith&background=0f172a&color=3ABAB4" alt="John Smith" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="font-bold text-white">John Smith</p>
                        <p class="text-sm text-gray-400">CEO, TechInnovate</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-800 rounded-xl p-8 border border-gray-700 relative">
                <div class="text-teal-400 text-5xl absolute -top-4 left-4 opacity-20">❝</div>
                <p class="text-gray-300 italic mb-6 relative z-10">I've worked with many developers, but few have Kamil's combination of technical expertise and creative problem-solving. He doesn't just write code; he creates solutions that enhance our business.</p>
                <div class="flex items-center">
                    <div class="w-12 h-12 bg-gray-700 rounded-full overflow-hidden mr-4">
                        <img src="https://ui-avatars.com/api/?name=Sarah+Johnson&background=0f172a&color=3ABAB4" alt="Sarah Johnson" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <p class="font-bold text-white">Sarah Johnson</p>
                        <p class="text-sm text-gray-400">Marketing Director, Digital First</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 px-4 relative overflow-hidden">
    <div class="container mx-auto max-w-4xl relative z-10">
        <div class="bg-gray-800/50 backdrop-blur-md rounded-2xl p-10 border border-gray-700 shadow-2xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white mb-4">Interested in working together?</h2>
                <p class="text-gray-300 max-w-2xl mx-auto mb-8">I'm always looking for new challenges and opportunities to create amazing digital experiences. Let's discuss how we can collaborate on your next project.</p>

                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="{{ route('contact') }}" class="py-3 px-8 bg-gradient-to-r from-teal-400 to-teal-600 text-white font-bold rounded-lg transform transition-all hover:scale-105 hover:shadow-lg flex items-center justify-center">
                        <i class="fas fa-paper-plane mr-2"></i> Contact Me
                    </a>
                    <a href="{{ route('projects') }}" class="py-3 px-8 bg-transparent border-2 border-white text-white font-bold rounded-lg transform transition-all hover:scale-105 hover:bg-white hover:text-gray-900 flex items-center justify-center">
                        <i class="fas fa-folder-open mr-2"></i> View My Work
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-teal-500/10 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full filter blur-3xl"></div>
</section>
@endsection
