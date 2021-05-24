<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Register</title>
</head>
<body>
    <form action="{{ route('save_company') }}" method="POST">
    @csrf
        <div><label for="ej">ej</label><input type="text" name="ej" id="ej"></div>
        <div><label for="namefederation">namefederation</label><input type="text" name="namefederation" id="namefederation"></div>
        <div><label for="emailcompany">emailcompany</label><input type="text" name="emailcompany" id="emailcompany"></div>
        <div><label for="passwordcompany">passwordcompany</label><input type="text" name="passwordcompany" id="passwordcompany"></div>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>