<x-master titre="Rapports">
    <!-- Bouton de retour -->
    <a href="javascript:history.back()" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mb-6 transition-transform transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.707-7.707a1 1 0 010-1.414l3-3a1 1 0 111.414 1.414L10.414 9H15a1 1 0 110 2h-4.586l2.293 2.293a1 1 0 01-1.414 1.414l-3-3z" clip-rule="evenodd" />
        </svg>
        Retour
    </a>
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6">Rapports d'Analyse des Stocks</h2>

        <!-- Filtrage des rapports -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold mb-4">Filtrer les Rapports</h3>
            <form action="{{ route('rapports.index') }}" method="GET" class="flex space-x-4">
                <div class="mb-4 w-1/3">
                    <label for="start_date" class="block text-gray-700">Date de Début</label>
                    <input type="date" id="start_date" name="start_date" class="form-input mt-1 block w-full" value="{{ request('start_date') }}">
                </div>
                <div class="mb-4 w-1/3">
                    <label for="end_date" class="block text-gray-700">Date de Fin</label>
                    <input type="date" id="end_date" name="end_date" class="form-input mt-1 block w-full" value="{{ request('end_date') }}">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Filtrer</button>
            </form>
        </div>

        <!-- Graphiques ou données filtrées -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Graphique de répartition des stocks -->
            <div class="chart-container">
                <h3 class="text-xl font-semibold mb-4">Répartition des Stocks</h3>
                <canvas id="stockDistributionChart" class="w-full h-64"></canvas>
            </div>

            <!-- Statistiques de ventes -->
            <div class="chart-container">
                <h3 class="text-xl font-semibold mb-4">Évolution des Ventes</h3>
                <canvas id="salesTrendChart" class="w-full h-64"></canvas>
            </div>
        </div>
        
    </div>

    <!-- Intégration de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Graphique de répartition des stocks
        const stockCtx = document.getElementById('stockDistributionChart').getContext('2d');
        new Chart(stockCtx, {
            type: 'bar',
            data: {
                labels: @json($stockLabels),
                datasets: [{
                    label: 'Quantité',
                    data: @json($stockData),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgb(75, 192, 192)',
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

        // Graphique d'évolution des ventes
        const salesCtx = document.getElementById('salesTrendChart').getContext('2d');
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: @json($salesLabels),
                datasets: [{
                    label: 'Ventes',
                    data: @json($salesData),
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgb(153, 102, 255)',
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
    </script>
</x-master>
