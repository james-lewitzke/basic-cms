<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title }}</title>
    <!-- Links natively to the standalone stylesheet in your public folder -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body>

    <main>
        <h1>{{ $page->title }}</h1>
        
        <div class="content-body">
            {!! $page->content !!}
        </div>

    </main>

</body>
</html>
