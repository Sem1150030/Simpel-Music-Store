<div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myPieChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Users', 'Orders', 'Revenue'],
                datasets: [{
                    data: [120, 80, 200],
                    backgroundColor: ['#4F46E5', '#10B981', '#F59E0B'],
                }]
            }
        });
    </script>
</div>
