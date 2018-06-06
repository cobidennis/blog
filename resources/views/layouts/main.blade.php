<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>CodeCampus Sample Blog</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="/css/blog.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            @include('layouts.header')
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                    <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
                    <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
        </div>
        
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    @yield('content')
                </div>
                <!-- /.blog-main -->
                <aside class="col-md-4 blog-sidebar">
                    @include('layouts.sidebar')
                </aside>
                <!-- /.blog-sidebar -->
            </div>
            <!-- /.row --> 
        </main>
        <footer class="blog-footer">
            @include('layouts.footer')
        </footer>
    </body>
</html>