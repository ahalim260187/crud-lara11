<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>CRUD LARAVEL 11</title>
</head>

<body>
    <section id="user-data" class="container mx-auto mt-10 max-w-screen-lg">
        <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow">
            <div class="px-4 py-5 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card headers on desktop than on body sections -->
                <h1 class="text-2xl mb-3">Customers</h1>
                @yield('subcontent')
            </div>
            <div class="px-4 py-5 sm:p-6">
                <!-- Content goes here -->
                @yield('content')
            </div>
        </div>
    </section>
</body>

</html>
