<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        @unless(count($listings) == 0)
            <h1>{{ $heading }}</h1>

            

            @foreach($listings as $listing)
                <a href="listings/{{ $listing['id'] }}">
                    {{ $listing['id'] . '. ' . $listing['title'] }}
                </a>

                <p>
                    {{ $listing['description'] }}
                </p>
            @endforeach

        @else
            <p>No Listings</p>
        @endunless
    </section>
</body>
</html>