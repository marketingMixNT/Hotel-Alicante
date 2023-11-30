<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hotel</title>
  
    @include('includes.styles')
    @include('includes.fonts')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    
</head>
<body
class="home page-template-default page page-id-15020 theme-hotale gdlr-core-body tourmaster-body woocommerce-no-js hotale-body hotale-body-front hotale-full hotale-with-sticky-navigation hotale-blockquote-style-3 gdlr-core-link-to-lightbox"
data-home-url="index.html" 
>
{{$slot}}



@include('includes.scripts')
</body>
</html>