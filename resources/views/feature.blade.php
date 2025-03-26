<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laravel Features</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Feature Name</th>
                <th>Description</th>
            </tr>
            @foreach ($features as $feature)
                <tr>
                    <td>{{ $feature->id }}</td>
                    <td>{{ $feature->Name }}</td>
                    <td>{{ $feature->Description }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
