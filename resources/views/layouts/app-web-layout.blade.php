<!DOCTYPE html>
<html lang="{{str_replace('_','-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Google Font --}}
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
    {{-- Bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>{{$title ?? 'Laravel 10'}}</title>
    <style>
        /* Banner styling */
        .banner {
            background-color: #ffc107; /* Choose your desired background color */
            padding: 10px; /* Adjust padding as needed */
            text-align: center; /* Center align the content */
            margin-bottom: 20px; /* Add some margin to separate from the content below */
        }
        svg {
            font-family: 'Russo One', sans-serif;
            width: 100%; height: 70%;
        }
        svg text {
            text-transform: uppercase;
            animation: stroke 5s infinite alternate;
            stroke-width: 2;
            stroke: #000000;
            font-size: 120px;
        }
        @keyframes stroke {
            0%   {
                fill: rgba(72,138,20,0); stroke: rgb(13, 13, 14);
                stroke-dashoffset: 25%; stroke-dasharray: 0 50%; stroke-width: 2;
            }
            70%  {fill: rgba(72,138,20,0); stroke: rgb(13, 13, 14); }
            80%  {fill: rgba(72,138,20,0); stroke: rgb(13, 13, 14); stroke-width: 3; }
            100% {
                fill: rgb(13, 13, 14); stroke: rgba(54,95,160,0); 
                stroke-dashoffset: -25%; stroke-dasharray: 50% 0; stroke-width: 0;
            }
        }
        /* Homepage styling */
        .card-front {
            background-image: url('https://images.unsplash.com/photo-1589880768855-b106592ac541?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YmFjayUyMG11c2NsZXxlbnwwfHwwfHx8MA%3D%3D');
            background-size: 100% cover;
            background-position: calc(100% - 10px) center;
            width: 500px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card h1 {
            text-transform: uppercase;
            font-weight: 800;
            font-size: 40px;
        }

        .greeting-text {
            font-size: 24px;
        }

        .button {
            padding: 10px 20px;
            font-size: 18px;
        }
        /* dumbell size */
        .icon svg {
            width: 24px; /* Set the width of the SVG icon */
            height: 24px; /* Set the height of the SVG icon */
        }
        /* timer styling */
        .demo {
            
            text-align: center; /* Center align the text */
            color: #FFC107; /* Set text color to Bootstrap's "text-warning" */
        }
    </style>
</head>
<body  class="bg-dark text-light">
    <x-partials.navbar/>
    <!-- Banner -->
    <div class="banner">
        <svg viewBox="0 0 1800 200">
            <text x="50%" y="50%" dy=".35em" text-anchor="middle">
              never back down
            </text>
          </svg> 
    </div>
    <div>
        {{$slot}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{$scripts ?? ''}}
</body>
</html>