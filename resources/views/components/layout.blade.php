<!DOCTYPE html>
<html class="h-full bg-gray-900" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title }}</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
</head>

<body>
  <div class="bg-gray-900">

    {{ $slot }}

  </div>

</body>

</html>