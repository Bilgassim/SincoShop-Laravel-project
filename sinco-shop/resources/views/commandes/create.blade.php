<x-master titre="Ajouter une Commande">
    <!-- Bouton de retour -->
    <a href="javascript:history.back()" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-6 transition-transform transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-7.707a1 1 0 010-1.414l3-3a1 1 0 111.414 1.414L10.414 9H15a1 1 0 110 2h-4.586l2.293 2.293a1 1 0 01-1.414 1.414l-3-3z" clip-rule="evenodd" />
        </svg>
        Retour
    </a>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Ajouter une Nouvelle Commande</h2>
        <form action="{{ route('commandes.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="client_name" class="block text-gray-700">Nom du Client</label>
                <input type="text" id="client_name" name="client_name" class="form-input mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="order_date" class="block text-gray-700">Date de la Commande</label>
                <input type="date" id="order_date" name="order_date" class="form-input mt-1 block w-full" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Ajouter</button>
        </form>
    </div>
</x-master>
