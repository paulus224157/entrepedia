<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/storage/css/main.css">
    <link rel="stylesheet" href="/storage/css/home.css">
    <title>Home</title>
</head>
<body>
    @include('component.navbar')
    <div class="bodyContainer">
        
        <div class="homeContainer">
            <h1 class="textHeader">Headline News</h1>
            {{-- Load Headline --}}
            @include('component.headline')
            @include('component.headline')
            @include('component.headline')

            <h1 class="textHeader mt-30">Other News</h1>
            <div class="homeNewsContainer">
                @include('component.newscard')
                @include('component.newscard')
                @include('component.newscard')
                @include('component.newscard')
            </div>
        </div>
    </div>
</body>
</html>