<x-master titre="Gestion des Commandes">
    <!-- Bouton de retour -->
    <a href="javascript:history.back()" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-6 transition-transform transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-7.707a1 1 0 010-1.414l3-3a1 1 0 111.414 1.414L10.414 9H15a1 1 0 110 2h-4.586l2.293 2.293a1 1 0 01-1.414 1.414l-3-3z" clip-rule="evenodd" />
        </svg>
        Retour
    </a>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-extrabold mb-6 text-gray-800">Liste des Commandes</h2>
        <a href="{{ route('commandes.create') }}" class="bg-gradient-to-r from-blue-500 to-teal-500 text-white px-4 py-2 rounded-lg shadow-lg hover:bg-blue-700 mb-6 inline-flex items-center transition-transform transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Ajouter une Commande</a>
        <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-blue-500 to-teal-500 text-white">
                <tr>
                    <th class="py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider">Numéro</th>
                    <th class="py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider">Client</th>
                    <th class="py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider">Prix (MAD)</th>
                    <th class="py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider">Statut</th>
                    <th class="py-3 px-4 text-left font-semibold text-sm uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($orders as $order)
                <tr class="hover:bg-gray-100 transition-colors">
                    <td class="py-2 px-4 border-b">{{ $order->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $order->customer_name }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($order->total_amount, 2, ',', ' ') }} MAD</td>
                    <td class="py-2 px-4 border-b">
                        <span class="inline-block px-3 py-1 text-sm font-semibold rounded-full {{ 
                            $order->status === 'pending' ? 'bg-yellow-500 text-white' :
                            ($order->status === 'processing' ? 'bg-blue-500 text-white' :
                            ($order->status === 'shipped' ? 'bg-green-500 text-white' :
                            ($order->status === 'delivered' ? 'bg-teal-500 text-white' :
                            'bg-red-500 text-white'))) }}">
                            {{ $order->status === 'pending' ? 'En Attente' :
                            ($order->status === 'processing' ? 'En Traitement' :
                            ($order->status === 'shipped' ? 'Expédiée' :
                            ($order->status === 'delivered' ? 'Livrée' :
                            'Annulée'))) }}
                        </span>
                    </td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('commandes.edit', $order->id) }}" class="text-blue-500 hover:underline font-semibold transition-colors hover:text-blue-700">Modifier</a>
                        <form action="{{ route('commandes.destroy', $order->id) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline font-semibold transition-colors hover:text-red-700">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-master>
