<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <nav>
        <x-nav_links href="/"> Home </x-nav_links>
        <x-nav_links href="/about"> About </x-nav_links>
        <x-nav_links href="/contact"> Contact </x-nav_links>
    </nav>
    
   {{ $slot }} 

</body>
</html>