@extends('layouts.backoffice')

@section('content')
    <div class="flex justify-center">
        @livewire('backoffice.stats')
    </div>

        <div>
        <div>
            <div class="max-w-md mx-auto mt-10">
            <canvas id="myPieChart"></canvas>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myPieChart').getContext('2d');
                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['Revenue','To goal'],
                        datasets: [{
                            data: [120, 80, ],
                            backgroundColor: ['#3A27B7', '#9AB7FF'],
                        }]
                    }
                });
            </script>
        </div>


    </div>

@endsection
