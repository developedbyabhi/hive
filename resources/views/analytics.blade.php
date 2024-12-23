<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Analytics</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Analytics</h1>

    <canvas id="activeUsersChart"></canvas>
    <script>
        const ctx = document.getElementById('activeUsersChart').getContext('2d');
        const activeUsersData = @json($activeUsers);

        const data = {
            labels: activeUsersData.map(user => user.user_id),
            datasets: [{
                label: 'Most Active Users',
                data: activeUsersData.map(user => user.total),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        new Chart(ctx, {
            type: 'bar',
            data: data,
        });
    </script>
</body>
</html>
