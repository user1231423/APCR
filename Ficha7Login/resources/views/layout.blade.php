<!doctype html>
<html>
    <head>
        <title>Ficha 7</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    </head>
        <style>
            .is-complete{
                text-decoration: line-through;
            }
        </style>
    <body style="padding: 20px;">
        <div style="height:100px;" class="topnav">
            <nav>
                <a href="/" class="dropbtn">Index</a>
                <a href="/articles" class="dropbtn">Articles</a>
                <a href="/projects" class="dropbtn">Projects</a>
            </nav>

        </div>

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>