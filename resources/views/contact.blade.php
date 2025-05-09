@extends('layouts.app')
@section('title', 'Contact Me')

@section('content')
<!-- Contact Hero Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-indigo-950 to-slate-900 px-4">
    <div class="container mx-auto max-w-5xl">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 text-transparent bg-clip-text bg-gradient-to-r from-teal-400 to-blue-500">Get In Touch</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-teal-400 to-blue-500 mx-auto rounded-full mb-6"></div>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">Have a project in mind or want to know more about my services? Feel free to reach out.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Contact Form -->
            <div class="bg-gray-800 rounded-xl p-8 shadow-2xl border border-gray-700 transform hover:scale-[1.01] transition-all duration-300">
                <h2 class="text-2xl font-bold text-teal-400 mb-6">Send Me a Message</h2>

                <form action="#" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-gray-300 text-sm font-medium mb-2">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-gray-500"></i>
                            </div>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                                placeholder="Your name"
                                required
                            >
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-gray-300 text-sm font-medium mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-500"></i>
                            </div>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                                placeholder="email@example.com"
                                required
                            >
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-gray-300 text-sm font-medium mb-2">Subject</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-tag text-gray-500"></i>
                            </div>
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                                placeholder="What's this about?"
                                required
                            >
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-gray-300 text-sm font-medium mb-2">Your Message</label>
                        <div class="relative">
                            <div class="absolute top-3 left-0 pl-3 flex items-start pointer-events-none">
                                <i class="fas fa-comment-alt text-gray-500"></i>
                            </div>
                            <textarea
                                id="message"
                                name="message"
                                rows="5"
                                class="w-full pl-10 pr-4 py-3 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                                placeholder="Tell me about your project, ask a question, or just say hi!"
                                required
                            ></textarea>
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="w-full py-3 px-6 bg-gradient-to-r from-teal-400 to-teal-600 text-white font-bold rounded-lg transform transition-all hover:scale-[1.02] hover:shadow-lg hover:from-teal-500 hover:to-teal-700 flex items-center justify-center"
                    >
                        <i class="fas fa-paper-plane mr-2"></i>
                        <span>Send Message</span>
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <!-- Info Card -->
                <div class="bg-gray-800 rounded-xl p-8 shadow-2xl border border-gray-700">
                    <h2 class="text-2xl font-bold text-white mb-6">Contact Information</h2>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-teal-400"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-medium">Location</h3>
                                <p class="text-gray-300">Aceh, North Sumatra, Indonesia</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-envelope text-teal-400"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-medium">Email</h3>
                                <p class="text-gray-300">muhammadkamilcsl19@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-phone-alt text-teal-400"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-medium">Phone</h3>
                                <p class="text-gray-300">+62 813 8389 4808</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-10 h-10 rounded-full bg-teal-400/20 flex items-center justify-center mr-4 mt-1">
                                <i class="fas fa-calendar-check text-teal-400"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-medium">Availability</h3>
                                <p class="text-gray-300">Monday - Friday, 9AM - 6PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Connect Card -->
                <div class="bg-gray-800 rounded-xl p-8 shadow-2xl border border-gray-700">
                    <h2 class="text-2xl font-bold text-white mb-6">Connect with Me</h2>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        <a href="https://github.com/kmlcsl" target="_blank" class="flex flex-col items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fab fa-github text-2xl text-white mb-2"></i>
                            <span class="text-sm">GitHub</span>
                        </a>

                        <a href="https://linkedin.com/in/muhammad-kamil-715610335" target="_blank" class="flex flex-col items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fab fa-linkedin-in text-2xl text-white mb-2"></i>
                            <span class="text-sm">LinkedIn</span>
                        </a>

                        <a href="https://twitter.com/kamilcsl_19" target="_blank" class="flex flex-col items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fab fa-twitter text-2xl text-white mb-2"></i>
                            <span class="text-sm">Twitter</span>
                        </a>

                        <a href="https://instagram.com/kml_csl" target="_blank" class="flex flex-col items-center p-4 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors">
                            <i class="fab fa-instagram text-2xl text-white mb-2"></i>
                            <span class="text-sm">Instagram</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section (Optional) -->
<section class="py-12 bg-gray-900">
    <div class="container mx-auto max-w-5xl px-4">
        <div class="bg-gray-800 rounded-xl p-6 border border-gray-700 shadow-xl">
            <h2 class="text-2xl font-bold text-teal-400 mb-6 text-center">My Location</h2>
            <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden">
                <!-- Replace with actual map embed or image -->
                <div class="w-full h-64 bg-gray-700 rounded-lg flex items-center justify-center">
                    <p class="text-gray-400 text-center px-4">
                        <i class="fas fa-map-marked-alt text-4xl mb-4 text-teal-400"></i><br>
                        Map of Aceh, North Sumatra<br>
                        <span class="text-sm">(Replace with actual map iframe or image)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Any specific scripts for the contact page can go here
    document.addEventListener('DOMContentLoaded', function() {
        // Example: Form validation
        const contactForm = document.querySelector('form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // Here you would normally add AJAX form submission
                alert('Thank you for your message! I will get back to you soon.');
                contactForm.reset();
            });
        }
    });
</script>
@endsection
