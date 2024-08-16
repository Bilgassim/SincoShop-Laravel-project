@props(['titre'])
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sinco Shop - Votre boutique en ligne pour les meilleurs produits. Découvrez notre large gamme de produits de qualité.">
    <title>Sinco Shop | {{ $titre }}</title>
    <link rel="icon" href="{{ asset('images/logo.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        .chart-container {
            width: 100%;
            max-width: 400px; /* Ajustez la largeur maximale selon vos besoins */
            margin: 0 auto;
        }
        /* Ajout d'un style pour le header avec une meilleure apparence */
        .header-logo {
            width: 120px; /* Ajustez la taille du logo selon vos besoins */
        }
    </style>
</head>
<body>
    <header class="bg-gray-900 text-white p-4 sticky top-0 z-50 shadow-lg">
        <nav class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Sinco Shop Logo" class="header-logo" loading="lazy">
                <span class="text-2xl font-bold">Sinco Shop</span>
            </a>

            <!-- Menu principal -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('dashboard') }}" class="hover:text-gray-400 transition-colors duration-300">Tableau de Bord</a>
                <a href="{{ route('rapports.index') }}" class="hover:text-gray-400 transition-colors duration-300">Rapports</a>
                <a href="{{ route('produits.index') }}" class="hover:text-gray-400 transition-colors duration-300">Produits</a>
                <a href="{{ route('commandes.index') }}" class="hover:text-gray-400 transition-colors duration-300">Commandes</a>
                <a href="{{ route('fournisseurs.index') }}" class="hover:text-gray-400 transition-colors duration-300">Fournisseurs</a>
            </div>

            <!-- Menu mobile -->
            <div class="md:hidden">
                <button id="menu-button" class="focus:outline-none" aria-label="Ouvrir le menu">
                    <svg class="w-6 h-6 text-white hover:text-gray-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Menu mobile -->
        <div id="mobile-menu" class="fixed inset-0 bg-gray-800 bg-opacity-90 text-white p-8 transform translate-x-full transition-transform duration-300 ease-in-out z-50">
            <button id="close-menu" class="absolute top-4 right-4 focus:outline-none" aria-label="Fermer le menu">
                <svg class="w-6 h-6 text-white hover:text-gray-400 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <div class="flex flex-col space-y-6 mt-12 text-xl">
                <a href="{{ route('dashboard') }}" class="hover:text-gray-400 transition-colors duration-300">Tableau de Bord</a>
                <a href="{{ route('rapports.index') }}" class="hover:text-gray-400 transition-colors duration-300">Rapports</a>
                <a href="{{ route('produits.index') }}" class="hover:text-gray-400 transition-colors duration-300">Produits</a>
                <a href="{{ route('commandes.index') }}" class="hover:text-gray-400 transition-colors duration-300">Commandes</a>
                <a href="{{ route('fournisseurs.index') }}" class="hover:text-gray-400 transition-colors duration-300">Fournisseurs</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-6">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <!-- Section du logo -->
                <div class="mb-4 md:mb-0">
                    <a href="/" class="text-xl font-bold text-white">
                        Sinco Shop
                    </a>
                </div>
    
                <!-- Section des liens -->
                <div class="flex space-x-6">
                    <a href="/" class="hover:text-gray-400">Accueil</a>
                    <a href={{ route('dashboard') }} class="hover:text-gray-400">Tableau de Bord</a>
                    <a href={{ route('rapports.index') }} class="hover:text-gray-400">Rapports</a>
                    <a href={{ route('produits.index') }} class="hover:text-gray-400">Produits</a>
                    <a href="tel:+212710911949" class="hover:text-gray-400">Contact</a>
                </div>
    
                <!-- Section des icônes de réseaux sociaux -->
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
    
            <div class="mt-8 border-t border-gray-700 pt-4 text-center">
                <p>&copy; {{ date('Y') }} Sinco Shop - Développé par 
                    <a href="https://www.linkedin.com/in/sanae-r-5b3281193" class="hover:text-gray-400" target="_blank">Rahaoui Sanae</a> & 
                    <a href="https://www.linkedin.com/in/moboulkassoum" class="hover:text-gray-400" target="_blank">Mohamed Boulkassoum</a>
                </p>
            </div>
            
        </div>
    </footer>

    <script>
        document.getElementById('menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.remove('translate-x-full');
        });
        document.getElementById('close-menu').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('translate-x-full');
        });
    </script>
</body>
</html>
