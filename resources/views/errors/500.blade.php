<!-- resources/views/errors/500.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 - Server Error</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
<div class="text-center">
    <h1 class="text-6xl font-bold text-red-600">500</h1>
    <h2 class="mt-4 text-2xl font-semibold text-gray-800">Server Error</h2>
    <p class="mt-2 text-gray-600">Sorry, something went wrong on our end.</p>
    <a href="{{ url('/') }}" class="mt-6 inline-block px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700">Return
        to Home</a>
</div>
</body>
</html>
