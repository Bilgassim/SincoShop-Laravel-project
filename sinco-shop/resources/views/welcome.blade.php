<x-master titre="Accueil">
    <div class="bg-gray-100 min-h-screen p-8 flex flex-col items-center">
        <h1 class="text-3xl font-extrabold mb-8 text-center text-gray-800">Bienvenue sur Sinco Shop</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl">
            <!-- Tableau de Bord -->
            <a href="{{ route('dashboard') }}" class="bg-gradient-to-r from-purple-500 to-indigo-500 text-xl font-semibold text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex flex-col items-center">
                <img src="{{ asset('images/dashboard-icon.png') }}" alt="Tableau de Bord" class="w-24 h-24 mb-4">
                <span class="text-lg">Tableau de Bord</span>
            </a>

            <!-- Rapports -->
            <a href="{{ route('rapports.index') }}" class="bg-gradient-to-r from-red-500 to-orange-500 text-xl font-semibold text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex flex-col items-center">
                <img src="{{ asset('images/rapports-icon.png') }}" alt="Rapports" class="w-24 h-24 mb-4">
                <span class="text-lg">Rapports</span>
            </a>

            <!-- Gestion des Produits -->
            <a href="{{ route('produits.index') }}" class="bg-gradient-to-r from-blue-500 to-teal-500 text-xl font-semibold text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex flex-col items-center">
                <img src="{{ asset('images/produits-icon.png') }}" alt="Gestion des Produits" class="w-24 h-24 mb-4">
                <span class="text-lg">Gestion des Produits</span>
            </a>

            <!-- Gestion des Commandes -->
            <a href="{{ route('commandes.index') }}" class="bg-gradient-to-r from-green-500 to-lime-500 text-xl font-semibold text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex flex-col items-center">
                <img src="{{ asset('images/commandes-icon.png') }}" alt="Gestion des Commandes" class="w-24 h-24 mb-4">
                <span class="text-lg">Gestion des Commandes</span>
            </a>

            <!-- Gestion des Fournisseurs -->
            <a href="{{ route('fournisseurs.index') }}" class="bg-gradient-to-r from-yellow-500 to-amber-500 text-xl font-semibold text-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex flex-col items-center">
                <img src="{{ asset('images/fournisseurs-icon.png') }}" alt="Gestion des Fournisseurs" class="w-24 h-24 mb-4">
                <span class="text-lg">Gestion des Fournisseurs</span>
            </a>
        </div>
    </div>
</x-master>
