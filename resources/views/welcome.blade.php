<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Events</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-teal-900 border-bottom">
            <h3 class="my-0 mr-md-auto font-weight-normal">
                Event
            </h3>
            <nav class="my-2 my-md-0 mr-md-3">
                <a href="" class="p-2 text-dark">Login</a>
                <a href="" class="p-2 text-dark">Register</a>
            </nav>
        </div>
        <div class="nav-scroller bg-white shadow-sm">
            <nav class="nav nav-underline ml-4 py-2">
                <a href="" class="nav-link"> <h6 class="text-muted">Home</h6></a>
            <a href="{{ route('users.kegiatan.index') }}" class="nav-link"> <h6 class="text-muted">Kegiatan</h6></a>
                <a href="" class="nav-link"> <h6 class="text-muted">Daftar</h6></a>
            </nav>
        </div>
         <div class="jombotron" style="background-image: url('Folder/Opening.png')">
           <div class="container">
             <h3 class="text-center">Aplikasi Management Kegiatan</h3>
             <h1 class="display-3 text-center">ABV</h1>
           </div>
         </div>
        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('Folder/Show.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>manage event</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Tempore possimus ad facere error eligendi facilis ab, 
                                        aspernatur laudantium perferendis asperiores natus maxime animi maiores mollitia ea eaque, 
                                        suscipit itaque placeat.</p>
                                </div>
                            </div>
                        </div> <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('Folder/waktu.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>manage register</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quas, quod velit? Recusandae eveniet unde harum corrupti laboriosam porro repudiandae, 
                                        voluptas molestiae. Odio labore ad voluptatem molestiae obcaecati rem provident dolor.</p>
                                </div>
                            </div>
                        </div> <div class="col-md-4">
                            <div class="card border-0">
                                <img src="{{ asset('Folder/undraw_Steps_re_odoy.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>shcedul event</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                         Eaque quae voluptatibus culpa nam voluptas molestiae saepe veritatis ratione aliquid iure, 
                                         recusandae atque nemo quasi natus possimus eveniet aliquam! Incidunt, excepturi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white">
                    <li class="breadcrumb-item active" aria-current="page">Kegiatan</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0">
                                <img src="{{ asset('Folder/time.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>Kegiatan non-active</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Tempore possimus ad facere error eligendi facilis ab, 
                                        aspernatur laudantium perferendis asperiores natus maxime animi maiores mollitia ea eaque, 
                                        suscipit itaque placeat.</p>
                                        <button type="submit" class="btn btn-outline-info btn-lg btn-unblock" disable>Coming Soon</button>
                                </div>
                            </div>
                        </div> <div class="col-md-6">
                            <div class="card border-0">
                                <img src="{{ asset('Folder/manage.png') }}" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h3>kegiatan active</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Quas, quod velit? Recusandae eveniet unde harum corrupti laboriosam porro repudiandae, 
                                        voluptas molestiae. Odio labore ad voluptatem molestiae obcaecati rem provident dolor.</p>
                                        <button type="submit" class="btn btn-outline-secondary btn-lg btn-unblock" disable>Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </body>
    </html>
