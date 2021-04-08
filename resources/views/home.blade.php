<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Clarence, 05111940000104. Data 321-340</h1>
        <table>
            <thead>
                <td>Customer ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Phone</td>
                <td>Email</td>
                <td>Street</td>
                <td>City</td>
                <td>State</td>
            </thead>
            @foreach ($customers as $customer)
            <tr>
                <td>{{$customer->customer_id}}</td>
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->street}}</td>
                <td>{{$customer->city}}</td>
                <td>{{$customer->state}}</td>
            </tr>
            @endforeach
        </table>
    </main>
</body>

</html>