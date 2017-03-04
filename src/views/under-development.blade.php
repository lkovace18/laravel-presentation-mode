<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', '') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.2/css/bulma.min.css" />
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body>
        <section class="hero is-fullheight is-light is-bold">
          <div class="hero-body has-text-centered">
            <div class="container">
              <h1 class="title is-1">
                {{ config('app.name', '') }}
              </h1>
              <h2 class="subtitle is-2">
                {{ trans('presentation-mode::translation.message')}}
              </h2>
            </div>
          </div>
        </section>
    </body>
</html>