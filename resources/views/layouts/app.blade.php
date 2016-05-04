<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS And JavaScript -->
        <link rel="stylesheet" type="text/css" href="css/all.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
    </head>

    <body>
        <div class="pure-g" id="layout">
            <div class="pure-u-1-4">
                <div id="menu">
                    <div class="pure-menu">
                        <a href="/" class="pure-menu-heading">QTL</a>
                        <!-- Navbar Contents -->
                        <ul class="pure-menu-list">
                            <li class="pure-menu-item">
                                <a href="#" class="pure-menu-link">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="main" class="pure-u-1-2">
                <header class="header">
                    <h1>QTL - Quick Task List</h1>
                </header>
                <div id="content">
                    @yield('content')
                </div>
            </div>
        </div>
         <script type="text/javascript" src="js/ui.js"></script>
    </body>
</html>