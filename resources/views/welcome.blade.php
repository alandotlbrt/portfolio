<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['./resources/css/global.css'])
    @vite(['./resources/css/index.css'])
    @vite(['./resources/js/parallax.js'])
</head>
<body>
    <div id="scene">
        <h1 data-depth="0.2" style="color: red;">Layer 1 - Depth 0.2</h1>
        <h1 data-depth="0.4" style="color: green;">Layer 2 - Depth 0.4</h1>
        <h1 data-depth="1.2" style="color: blue;">Layer 3 - Depth 0.6</h1>
    </div>
    <h1 class="my-name">Alan</h1>
</body>
</html>