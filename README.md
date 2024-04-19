<h1> 🚀🚀🚀 Laravel Dom PDF </h1>

## [1] [ Command ] 

  ```
  composer require barryvdh/laravel-dompdf
  ```
    


## [2] To publish the config, run the vendor publish command:

    ```
    php artisan vendor:publish --provider="Barryvdh\DomPDF\ServiceProvider" 
    ```

    Check if [ dompdf.php ] register in  [ config ]


## [3] Create Controller and make a generatePdf function 

    ```
    $customers = Customer::all();

    $data = [
        'title' => 'Laravel DomPDF',
        'customers' => $customers

    ];

    $pdf = Pdf::loadView('generate-customer-pdf', $data);
    return $pdf->download('customers.pdf');
    ```

## [4] Create View Resource

    ```
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
    ```

## <a href="https://github.com/barryvdh/laravel-dompdf">🚀 Explore more about DomPDF</a>