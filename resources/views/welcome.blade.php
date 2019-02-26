<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<div class="container">
    <header class="py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="text-dark" href="#">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary" href="{{ route('home') }}">admin</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">World</a>
            <a class="p-2 text-muted" href="#">U.S.</a>
            <a class="p-2 text-muted" href="#">Technology</a>
            <a class="p-2 text-muted" href="#">Design</a>
            <a class="p-2 text-muted" href="#">Culture</a>
            <a class="p-2 text-muted" href="#">Business</a>
            <a class="p-2 text-muted" href="#">Politics</a>
            <a class="p-2 text-muted" href="#">Opinion</a>
            <a class="p-2 text-muted" href="#">Science</a>
            <a class="p-2 text-muted" href="#">Health</a>
            <a class="p-2 text-muted" href="#">Style</a>
            <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Lorem Ipsum</h1>
            <p class="lead my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In lobortis nulla dui, ac
                volutpat felis sollicitudin ut. Aliquam diam nulla, fermentum non felis sit amet, dapibus sodales
                nisi. </p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div id="banner-top"></div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h3 class="mb-0">Post title</h3>
                    <div class="mb-1 text-muted">Nov 11</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                        additional content.</p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                         preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                         aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c"/>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <main role="main" class="container">
        <div class="row">
            <div class="col-8">
                <h3 class="border-bottom">Lorem Ipsum</h3>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis volutpat sodales. Curabitur varius viverra gravida. Morbi consequat mi dui, sit amet molestie ligula sodales id. Pellentesque condimentum, ligula id eleifend venenatis, nisi velit dictum justo, vel pulvinar ante tortor ut risus. Nam auctor nunc sit amet diam pulvinar ullamcorper. Curabitur ut nulla felis. Pellentesque molestie metus ut velit interdum, at molestie nulla posuere. Donec eget consequat nulla. Sed odio urna, viverra ut enim id, ultricies hendrerit libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam eu orci aliquam, egestas diam vitae, tempus tellus. Ut varius mollis turpis, a fringilla dolor iaculis eu. Nullam hendrerit accumsan nulla eget sagittis.

                    Nullam ac tempus neque, non pulvinar ipsum. Quisque vitae nisi eget libero condimentum dictum ut non urna. Curabitur commodo, elit eget varius lobortis, orci felis semper magna, quis ultrices neque metus vitae ante. Maecenas scelerisque quam orci. Integer sed ornare odio, quis pulvinar magna. Aenean posuere volutpat est eu iaculis. Suspendisse id felis vitae leo fermentum commodo quis non ante. Integer ultricies dui quis congue porta. Quisque rhoncus tincidunt dolor, sit amet faucibus tellus accumsan in. Nunc volutpat lacus augue, nec vehicula libero lobortis sit amet. Praesent nunc metus, gravida ac congue nec, sollicitudin sit amet velit. Sed laoreet nisl tortor, sed pulvinar purus sagittis vel. Praesent leo tortor, egestas non finibus non, iaculis ac leo. Sed convallis libero turpis, in tincidunt erat placerat sed.

                    Nullam vel arcu a sapien faucibus tincidunt. Maecenas eu neque euismod, facilisis tortor eget, cursus est. Vivamus tempor purus ut quam aliquam pharetra. Cras convallis purus vel nisl pharetra luctus. Sed at mi dolor. Fusce odio diam, efficitur id nulla nec, viverra laoreet purus. Nunc porttitor magna eu orci gravida, vitae sodales est scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc ornare tempor neque ut mollis. Nulla pellentesque orci et lectus blandit, eu interdum sem accumsan. Nunc sit amet felis blandit, tincidunt diam vulputate, iaculis dui. Aenean non tristique turpis. Vestibulum in orci pellentesque, tincidunt nisi vel, pellentesque massa. Quisque velit metus, accumsan a arcu vel, consectetur ultricies ipsum.

                    Vestibulum ligula erat, pretium sed dapibus at, viverra eget turpis. Fusce faucibus ex vitae dolor rhoncus lacinia. In nulla nibh, iaculis vitae porttitor id, suscipit eu metus. Vestibulum diam justo, convallis nec elit sit amet, posuere auctor nibh. Vivamus tincidunt urna quis nisi vehicula efficitur. Vestibulum luctus tortor in massa tristique iaculis. Quisque ut lorem vitae erat feugiat consectetur ac in lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut gravida nisl eu mauris sollicitudin, eget lacinia justo commodo. Quisque posuere sodales imperdiet.

                    Sed lacinia turpis eu malesuada egestas. Ut quis lobortis felis, in facilisis ante. Integer cursus erat non leo faucibus, quis porta diam tincidunt. Suspendisse potenti. Phasellus pulvinar dictum eros sed posuere. Ut laoreet quam quis erat mollis suscipit in ac urna. Etiam condimentum orci et posuere facilisis. Aliquam eu velit placerat, dictum est vel, pretium erat. Fusce lacinia elit erat, a sollicitudin urna fermentum vel. Etiam pellentesque, neque in eleifend bibendum, purus arcu tristique est, in tempus quam orci vel elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consequat tincidunt mi, et tempus ex rhoncus in. Vestibulum porta molestie ipsum, a aliquet ipsum tempor non. Vivamus tempor, nulla eget ullamcorper aliquam, mi enim faucibus lacus, ut aliquet ante lectus quis lacus.

                    Vivamus metus metus, porta sed facilisis facilisis, venenatis nec tellus. Aenean efficitur dui sapien. Curabitur nisl libero, fringilla vel pretium vel, vulputate vitae elit. Nam hendrerit tellus enim, sed semper libero imperdiet ac. Nullam vitae orci nibh. Ut nulla purus, eleifend ornare purus ut, ornare gravida nulla. Nulla placerat tellus volutpat purus laoreet posuere quis eu erat. Morbi aliquet nibh quis eros vulputate, in facilisis justo commodo. Nulla consectetur purus dolor, eget convallis orci euismod eget. Nulla metus justo, egestas vitae luctus sit amet, commodo sit amet lorem. Nunc lectus purus, ullamcorper quis velit quis, malesuada imperdiet quam. Curabitur id enim et felis ultrices feugiat ut sit amet mi. Nunc rhoncus tortor sit amet justo laoreet, at scelerisque erat vehicula. Aliquam faucibus, tortor vel laoreet sagittis, tortor metus hendrerit felis, eu pulvinar nisl mauris et arcu. Cras ornare eleifend arcu, sed pulvinar magna commodo ac.

                    Pellentesque non odio ullamcorper, lacinia nunc nec, vehicula nisi. Nulla non lacus non mi finibus imperdiet. Pellentesque lobortis, enim at pretium luctus, libero libero elementum est, in consectetur elit justo eget orci. Fusce placerat purus non lacinia egestas. Sed sodales, sem et facilisis aliquam, justo dolor pretium nisi, at facilisis leo arcu at enim. Vestibulum lacus justo, venenatis et porta a, placerat sit amet mi. Sed dictum orci nec lorem efficitur, sed convallis ligula cursus. Phasellus lacinia metus vitae suscipit elementum. Aenean et ex laoreet, dapibus nisl ac, tempor ligula.</div>
            </div>
            <div class="col-4" id="side-banner-container">
                <h3 class="border-bottom">Publicity</h3>
                <iframe src="http://localhost/links/banner/9" frameborder="0" scrolling="no" width="300" height="250"></iframe>
                <iframe src="http://localhost/links/banner/8" frameborder="0" scrolling="no" width="300" height="250"></iframe>
            </div>
        </div>
    </main>
</div>
<footer class="container-fluid mt-5">
    <h5>about</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque mollis volutpat sodales. Curabitur varius viverra gravida. Morbi consequat mi dui, sit amet molestie ligula sodales id.</p>
</footer>
</div>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
