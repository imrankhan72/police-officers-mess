<!-- resources/views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
</head>
<body
    style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f8f9fa; color: #333; display: flex; justify-content: center; align-items: center; height: 100vh;">
<div style="text-align: center;">
    <h1 style="font-size: 80px; font-weight: bold; color: #dc3545;">404</h1>
    <h2 style="font-size: 24px; margin-top: 10px;">Page Not Found</h2>
    <p style="font-size: 16px; margin-top: 10px;">Sorry, the page you are looking for does not exist.</p>
    <a href="{{ url('/') }}"
       style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">Return
        to Home</a>
</div>
</body>
</html>
