<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      #trafficPieChart {
            max-width: 400px;
            margin: 0 auto;
        }
</style>
<body>
    <section class="container my-5 text-center">
        <h2>Website Traffic Overview</h2>
        <canvas id="trafficPieChart" width="300" height="300"></canvas>
    </section>
    <script>

        const ctx = document.getElementById('trafficPieChart').getContext('2d');
        const trafficPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['BBA-CA', 'BBA-IB', 'BMS', 'BBA'],
                datasets: [{
                    label: 'Traffic Source',
                    data: [40, 25, 20, 15], // Example data percentages
                    backgroundColor: [
                        '#4CAF50',
                        '#2196F3',
                        '#FFC107',
                        '#FF5722'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Traffic Distribution by Source'
                    }
                }
            }
        });

    </script>
</body>

</html>