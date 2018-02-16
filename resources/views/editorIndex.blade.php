<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="http://tanvirpro.com/styles.69d46984369a61068e4d.bundle.css">

    <title>Editor</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="row">
    <div class="col-12">
        <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> You successfully save.
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('welcome.create') }}"
                   content-id="{{ route('welcome.update', 1) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Welcome Msg
                </a>
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="{{ route('editor.show', 1) }}"
                   content-id="{{ route('editor.update', 1) }}" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    Home
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 2) }}"
                   content-id="{{ route('editor.update', 2) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    RMG-ERP
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 3) }}"
                   content-id="{{ route('editor.update', 3) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    3D MainPage
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 4) }}"
                   content-id="{{ route('editor.update', 4) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    3D Washing
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 5) }}"
                   content-id="{{ route('editor.update', 5) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    3D Solar
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 6) }}"
                   content-id="{{ route('editor.update', 6) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    2D MainPage
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 7) }}"
                   content-id="{{ route('editor.update', 7) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    2D Sweet Dreams
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 8) }}"
                   content-id="{{ route('editor.update', 8) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Hobby
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 9) }}"
                   content-id="{{ route('editor.update', 9) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Video Making
                </a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="{{ route('editor.show', 10) }}"
                   content-id="{{ route('editor.update', 10) }}" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Graphics
                </a>

            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <form id="my-form" >
                    {{ method_field('PUT') }}
                    <div class="" id="mydiv">
                        <h4>1st</h4>
                        <textarea class="form-control" name="aboutMe" rows="6" cols="120">{{ $content->aboutMe }}</textarea>
                        <h4>2nd</h4>
                        <textarea class="form-control" name="what_iDo" rows="6" cols="120">{{ $content->what_iDo }}</textarea>
                        <h4>3rd</h4>
                        <textarea class="form-control" name="talkWithMe" rows="6" cols="120">{{ $content->talkWithMe }}</textarea>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-1">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="" id="">
                    <button class="btn btn-primary btn-lg" type="button" id="submit-btn">Save</button>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="web-loading">
    <div>
        <img src="http://tanvirpro.com/assets/img/gif/ring-alt.svg" alt="">
        <h2 class="h2">LOADING</h2>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.8.0/adapters/jquery.js"></script>
<script>
    $(window).on('load', function () {
        $('#web-loading').fadeOut('slow');
        $("textarea").ckeditor();
    });
    $('.alert-success').hide();
    var formUrl = '{{ route('editor.update', ':id') }}';
    $('#v-pills-tab a').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var contentId = $(this).attr('content-id');
        formUrl = contentId;
        $.ajax({
            url: url,
            success: function (data) {
                $('#mydiv').html(data);
                $("textarea").ckeditor();
            },
            error: function () {
                alert('err');
            }
        });
    });

    $('#submit-btn').click(function (e) {
        $('.alert-success').hide();
        e.preventDefault();
        var n = formUrl.includes(':id');
        if (n == true) {
            formUrl = formUrl.replace(':id', 1);
        }
        $.ajax({
            type: 'post',
            url: formUrl,
            data: $('#my-form').serialize(),
            success: function (data) {
                console.log(data);
                $('.alert-success').show().fadeOut(5000);
            }
        });
    });
</script>
</body>
</html>