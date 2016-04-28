<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">


    </head>

    <body>
    <header class="header">
        <h1>QTL - Quick Task List</h1>
    </header>
        <div class="pure-g">
            <div class="pure-u-1-4">
                <nav id="menu" class="pure-menu custom-restricted-width">
                    <a href="/" class="pure-menu-heading">QTL</a>
                    <!-- Navbar Contents -->
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item">
                            <a href="#" class="pure-menu-link">Option 1</a>
                        </li>
                        <li class="pure-menu-item">
                            <a href="#" class="pure-menu-link">Option 2</a>
                        </li>
                        <li class="pure-menu-item">
                            <a href="#" class="pure-menu-link">Option 3</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="pure-u-1-2">
                @yield('content')
            </div>
        </div>
    </body>
</html>