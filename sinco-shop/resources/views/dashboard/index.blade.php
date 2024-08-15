<x-master titre="Tableau de Bord">
    <!-- Bouton de retour -->
    <a href="javascript:history.back()" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-6 transition-transform transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-7.707a1 1 0 010-1.414l3-3a1 1 0 111.414 1.414L10.414 9H15a1 1 0 110 2h-4.586l2.293 2.293a1 1 0 01-1.414 1.414l-3-3z" clip-rule="evenodd" />
        </svg>
        Retour
    </a>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Tableau de Bord</h2>
        
            <!-- Conteneur des Graphiques -->
    <div class="flex flex-wrap gap-8">
        <!-- Vue d'ensemble des Stocks -->
        <div class="flex-1 min-w-0">
            <h3 class="text-xl font-semibold mb-4">Répartition des Stocks</h3>
            <canvas id="stockDistributionChart" class="w-full h-64"></canvas>
        </div>
        
        <!-- Statistiques de Ventes -->
        <div class="flex-1 min-w-0">
            <h3 class="text-xl font-semibold mb-4">Évolution des Ventes</h3>
            <canvas id="salesTrendChart" class="w-full h-64"></canvas>
        </div>
    </div>

    <style>
        .h-64 {
            height: 16rem; /* Ajustez la hauteur selon vos besoins */
        }
    </style>
        
        <!-- Produits Populaires -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold mb-4">Produits Populaires</h3>
            <ul>
                @foreach($popularProducts as $product)
                    <li class="mb-2">{{ $product->name }} - {{ $product->total_sales }} ventes</li>
                @endforeach
            </ul>
        </div>
        
       
        <!-- Alertes de Stock -->
<div class="mb-8">
    <h3 class="text-xl font-semibold mb-4">Alertes de Stock</h3>
    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="border px-4 py-2">Produit</th>
                <th class="border px-4 py-2">Quantité</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowStockProducts as $product)
                <tr>
                    <td class="border px-4 py-2">{{ $product->name }}</td>
                    <td class="border px-4 py-2">{{ $product->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

        
        <!-- Dernières Activités -->
        <div class="mb-8">
            <h3 class="text-xl font-semibold mb-4">Dernières Activités</h3>
            <ul>
                @foreach($recentActivities as $activity)
                    <li class="mb-2">{{ $activity->description }} - {{ $activity->created_at->format('d/m/Y H:i') }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Intégration de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const stockCtx = document.getElementById('stockDistributionChart').getContext('2d');
        new Chart(stockCtx, {
            type: 'pie',
            data: {
                labels: ['En Stock', 'Rupture de Stock', 'Faible Quantité'],
                datasets: [{
                    label: 'Répartition des Stocks',
                    data: [{{ $inStock }}, {{ $outOfStock }}, {{ $lowStock }}],
                    backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(255, 206, 86, 1)'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });

        const salesCtx = document.getElementById('salesTrendChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                datasets: [{
                    label: 'Ventes Mensuelles',
                    data: [12, 19, 3, 5, 2], // Remplacez ces données par les ventes réelles
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</x-master>
