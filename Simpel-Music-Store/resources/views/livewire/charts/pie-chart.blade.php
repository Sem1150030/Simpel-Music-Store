<div>
    <div>
    <canvas id="pieChart"></canvas>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    let pieChart;

    function renderPieChart(labels, values) {
        const ctx = document.getElementById('pieChart').getContext('2d');

        if (pieChart) {
            pieChart.destroy(); // destroy previous instance if exists
        }

        pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: values,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    title: { display: true, text: 'Pie Chart Example' }
                }
            }
        });
    }

    document.addEventListener('livewire:load', function () {
        // initial render
        renderPieChart(@json($data['labels']), @json($data['values']));

        // listen for Livewire updates
        Livewire.hook('message.processed', () => {
            renderPieChart(@json($data['labels']), @json($data['values']));
        });
    });
</script>
@endpush

</div>
