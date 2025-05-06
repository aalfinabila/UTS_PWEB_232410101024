<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cofee</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                coffee: {
                  light: '#B89F8D',
                  DEFAULT: '#8B5A2B',
                  dark: '#A58D7F',
                }
              }
            }
          }
        }
      </script>
</head>
<body>
    @include('components.navbar')
    
    @yield('content')
</body>
</html>