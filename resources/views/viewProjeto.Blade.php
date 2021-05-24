<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>View de teste</title>
    
</head>
<body>
    <h1>Cadastro Federation</h1>
    
    <form action="/federation/new" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter name Federation">
        <input type="text" name="companyJr" placeholder="Enter state">
        <button type="submit" class="btn btn-success">Register</button>
    </form>
    <form action="/federation/find/id" method="post">
        @csrf
        <input type="text" name="filter" placeholder="Filtrar:" class="form-control">
        <button type="submit" class="btn btn-success">List General</button>
    </form>
    

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    
    
</body>
</html>