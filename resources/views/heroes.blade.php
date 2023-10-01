
<html>
<head>
    <title>Lista de Personajes de Marvel</title>
 
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<body>
    <div class="container">
    <h1>Lista de Personajes de Marvel</h1>
    <table class="table table-conceded table-hover table striped">
        <thead>
            <tr>
                <th class="bg-dark" style="color: white; text-align: center">Nombre</th>
                <th class="bg-dark" style="color: white; text-align: center">Descripción</th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <td>{{ $character['name'] }}</td>
                <td>{{ $character['description'] }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
