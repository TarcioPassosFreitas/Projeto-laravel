<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General</title>
    <style>
        body{
            background-image: url("{{asset('img/background_blue1.jpg')}}");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<body>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name EJ</th>
            <th scope="col">E-mail</th>
            <th scope="col">Name Federation</th>
            <th scope="col">Name State</th>
          </tr>
        </thead>
        <tbody>

                @foreach ($companies as $company)
                <tr>

                    <td>{{$company->name}}</td>
                    <td>{{$company->email}}</td>
                    @foreach ($federations as $federation)
                        @if ($federation->id == $company->federation_id)
                            <td>{{$federation->name}}</td>
                            <td>{{$federation->state}}</td>
                            @break;
                        @endif

                    @endforeach
                </tr>


                @endforeach

        </tbody>
      </table>


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

      <style>
          .table{
            font-size: 14pt;
            background-color: white;
            color: whitrgb(14, 12, 12)
          }
      </style>
</body>
</html>
