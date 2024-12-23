<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Export Activity Logs</title>
</head>
<body>
    <h1>Export Activity Logs</h1>

    <form method="POST" action="{{ route('exportLogs') }}">
        @csrf
        <button type="submit">Export Logs</button>
    </form>
</body>
</html>
