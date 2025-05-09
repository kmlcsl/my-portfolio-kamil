@extends('layouts.app')
@section('title', 'Projects - Muhammad Kamil')

@section('content')
    <!-- Projects Page Header -->
    <div class="bg-gradient-to-r from-gray-900 via-indigo-950 to-slate-900 py-20 px-4">
        <div class="container mx-auto max-w-5xl">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-teal-400 via-blue-500 to-purple-500">
                    My Projects
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    A showcase of my work, projects, and contributions.
                </p>
            </div>
        </div>
    </div>

    <!-- Under Construction Section -->
    <section class="py-32 bg-gray-900 px-4">
        <div class="container mx-auto max-w-5xl">
            <div class="bg-gray-800 rounded-xl p-12 shadow-2xl border border-gray-700 text-center">
                <div class="mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>

                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500">
                    Page Under Construction
                </h2>

                <p class="text-xl text-gray-300 mb-8">
                    I'm currently working on this page to showcase my best projects.
                    <br>Please check back soon to see my work!
                </p>

                <div class="flex justify-center space-x-4">
                    <a href="{{ route('home') }}" class="py-3 px-8 bg-gradient-to-r from-teal-400 to-teal-600 text-white font-bold rounded-lg transform transition-all hover:scale-105 hover:shadow-lg flex items-center">
                        <span>Return to Home</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </a>

                    <a href="{{ route('contact') }}" class="py-3 px-8 bg-transparent border-2 border-blue-400 text-blue-400 font-bold rounded-lg transform transition-all hover:scale-105 hover:bg-blue-400 hover:text-white hover:shadow-lg flex items-center">
                        <span>Contact Me</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
