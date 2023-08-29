<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        
        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    
{{-- <div class="container">
    <h1>Welcome to Your Home</h1>
 
</div> --}}
    
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach () --}}
        <div class="container">
            <h1>Welcome {{ $name}} to Your Home</h1>
         
        </div>
       
        <tr>
            {{-- <td>{{ $user->id }}</td> --}}
            <td>{{$name}}</td>
            <td>*********</td>
        </tr>
        {{-- @endforeach --}}
    </tbody>
</table>


</body>
</html>
