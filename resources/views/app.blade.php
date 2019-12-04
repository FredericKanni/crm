<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <!-- XCSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>





    <!-- Fonts -->
    <!---->  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">


    <link href="{{asset('css/app.css')}}" rel="stylesheet"> 

    <!-- Styles -->

</head>

<body>

   

    <div id="app">
       <layout></layout>

    </div>

    <script src="{{ asset('js/app.js')}}"></script>

</body>

</html>