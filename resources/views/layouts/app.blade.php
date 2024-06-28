<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: poppins;
        }

        header {
            min-width: 100vw;
            height: 70px;
            display: flex;
            background: rgba(116, 63, 145, 0.83);
            color: whitesmoke;
            justify-content: space-between;
            align-items: center;
            padding-inline: 2rem 
        }

        header > ul {
            display: flex;
            width: 90%;
            display: flex;
            gap: 2rem

        }

        header > ul > li {
            list-style: none;
        }

        main {
            margin: 2rem;
        }

        a {
            color: whitesmoke;
            text-decoration: none;
        }

        @media(max-width: 450px){
            header {
                gap: 1rem;
                color: green;
                font-size: .7rem;
                justify-content: center;
            }

            header > ul {
                justify-content: center;
                width: 100%;
            }

        
        }
        @media(min-width: 450px){
            header {
                gap: 1rem;
                color: green;
                font-size: .9rem;
            }

            header > ul {
                width: 100%;
            }

        }
        @media(min-width: 768px){
            header {
                gap: 1rem;
                color: green;
                font-size: 1rem;
            }

            header > ul {
                width: 100%;
            }

        
        }
        


        @yield('styles')

    </style>
</head>
<body>
    <header>
        <h1><a>AVIÕES</a></h1>
        <ul>
            <li><a href="{{route("home")}}">Home</a></li>
            <li><a href="{{route("page", 1)}}">Produtos</a></li>
            <li><a href="{{route("formplanes")}}">Criar Produtos</a></li>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>