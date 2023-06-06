<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
        <h1>this is a page from Controller</h1>

        <a href="{{route('contact.page')}}">Contact</a>
    </body>
</html>
