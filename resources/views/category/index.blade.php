<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                    <th>Description</th>
                </tr>
                    @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->type_desc }}
                            <br>
                            <div style="margin-left: 15px;">
                            <table border="1">
                                @foreach ($result->charterResource as $resource)
                                <tr>
                                    <td style="padding: 5px;">{{$resource->res_desc}}</td>
                                    <td style="padding: 5px;">{{$resource->capacity}}</td>
                                    <td style="padding: 5px;">{{ date('d-m-Y', strtotime($resource->timestamp)) }}</td>
                                    <td style="padding: 5px;">{{$resource->trip_duration}}</td>

                                </tr>
                                @endforeach
                            </table>
                        </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
