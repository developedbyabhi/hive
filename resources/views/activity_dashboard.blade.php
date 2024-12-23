<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>User Activity Dashboard</h1>

    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Action</th>
                <th>Data</th>
                <th>IP Address</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->user_id }}</td>
                    <td>{{ $log->action }}</td>
                    <td>{{ $log->data }}</td>
                    <td>{{ $log->ip_address }}</td>
                    <td>{{ $log->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}
</body>
</html>
