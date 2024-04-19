<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

</head>

<body>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        .primaryColor {
            color: blue;
        }

        .secondaryColor {
            color: blue;
        }
    </style>

    <h2> {{ $title }} </h2>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="primaryColor">Name</th>
                <th class="primaryColor">Email</th>
                <th class="primaryColor">Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>