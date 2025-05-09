<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM fully loaded, initializing scripts');

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                console.log('Mobile menu toggled');
                mobileMenu.classList.toggle('hidden');
            });
        } else {
            console.log('Mobile menu elements not found', {
                mobileMenuButton,
                mobileMenu
            });
        }

        // Handle smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault();
                    const targetId = href.substring(1);
                    const targetElement = document.getElementById(targetId);
                    if (targetElement) {
                        console.log('Smooth scrolling to', targetId);
                        window.scrollTo({
                            top: targetElement.offsetTop -
                            80, // Adjust for navbar height
                            behavior: 'smooth'
                        });
                        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                            mobileMenu.classList.add('hidden');
                        }
                    } else {
                        console.log('Target element not found:', targetId);
                    }
                }
            });
        });

        // Preloader to hide content until fully loaded
        const preloader = document.getElementById('preloader');
        const heroSection = document.getElementById('hero-section');
        const main = document.querySelector('main');
        if (preloader) {
            console.log('Preloader found, setting up');
            window.addEventListener('load', function() {
                console.log('Window loaded, hiding preloader');
                preloader.style.display = 'none';
                document.body.classList.remove('overflow-hidden');
                document.body.classList.add('preloader-hidden');
                if (heroSection) {
                    heroSection.classList.add('loaded');
                    console.log('Hero section marked as loaded');
                } else {
                    console.log('Hero section not found');
                }
                if (main) {
                    main.classList.add('loaded');
                    console.log('Main content marked as loaded');
                } else {
                    console.log('Main element not found');
                }
            });

            // Fallback timeout
            setTimeout(function() {
                console.log('Timeout triggered, forcing preloader hide');
                if (preloader.style.display !== 'none') {
                    preloader.style.display = 'none';
                    document.body.classList.remove('overflow-hidden');
                    document.body.classList.add('preloader-hidden');
                    if (heroSection) {
                        heroSection.classList.add('loaded');
                        console.log('Hero section marked as loaded (timeout)');
                    }
                    if (main) {
                        main.classList.add('loaded');
                        console.log('Main content marked as loaded (timeout)');
                    }
                }
            }, 6000); // Tingkatkan ke 6 detik untuk ngrok
        } else {
            console.log('Preloader element not found');
            // Fallback to show content if preloader is missing
            document.body.classList.add('preloader-hidden');
            if (heroSection) heroSection.classList.add('loaded');
            if (main) main.classList.add('loaded');
        }
    });
</script>
@yield('scripts')
