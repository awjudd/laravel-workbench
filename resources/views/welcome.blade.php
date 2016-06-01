<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        {{ Asset::add('app-scss', resource_path('assets/sass/app.scss')) }}
        {{ Asset::add('alert-coffee', resource_path('assets/scripts/alert.coffee')) }}
        {{ Asset::add('test-js', resource_path('assets/scripts/test.js')) }}
        {!! Asset::styles() !!}

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>

        {!! Asset::scripts() !!}
    </body>
</html>
