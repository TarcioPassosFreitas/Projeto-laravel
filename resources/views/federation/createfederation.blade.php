<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federation Register</title>
</head>
<body>
    <form action="{{ route('save_federation') }}" method="POST">
    @csrf
        <div><label for="namefederation">namefederation</label><input type="text" name="namefederation" id="namefederation"></div>
        <div><label for="state">state</label><input type="text" name="state" id="state"></div>
        <div><label for="emailfederation">emailfederation</label><input type="text" name="emailfederation" id="emailfederation"></div>
        <div><label for="passwordfederation">passwordfederation</label><input type="text" name="passwordfederation" id="passwordfederation"></div>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>