<!DOCTYPE html>
<html>
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111424496-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-111424496-1');
  </script>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <title>@yield('title') | Red Sea One</title>

    <!-- Bootstrap CSS 4.0.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    
    <!-- Custom Font -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css?family=Lato|PT+Sans|PT+Serif|Roboto" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/resources/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/resources/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/resources/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/resources/css/font.css')}}">

</head>
<body>

    @include('partials._main_menu')
    @yield('content')
    @include('partials._footer')


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>

    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('assets/resources/js/velocity.min.js')}}"></script>
    <script src="{{asset('assets/resources/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/resources/js/script.js')}}"></script>
    <script src="{{asset('assets/resources/js/sweetalert.min.js')}}"></script>
    <script>

        function notifyMe(element) {
            $(this).attr("disabled", true);
            $.ajax({
                url: "/notify_me",
                type: "post",
                data: {
                    "email": $("#emailfield").val(),
                    "_token": $("#_token").val()
                },
                success: function(response){
                    var result = JSON.parse(response);

                    if (result['success'] == 1) {
                        swal('', result['message'], 'success');
                        $(this).attr("disabled", false);
                        $("#emailfield").val('');
                    } else {
                        swal('', result['message'], 'error');
                        $(this).attr("disabled", false);
                    }
                }
            });
        }

        $(function() {

            // ALERT MESSAGES WHEN SESSION CONTAINS ANY FLASH MESSAGE
            @if (Session::has('success'))
                swal('Success!', '{{ Session::get('success') }}', 'success');
            @endif

            @if (Session::has('warning'))
                swal('Warning!', '{{ Session::get('warning') }}', 'warning');
            @endif

            @if (Session::has('error'))
                swal('Oops!', '{{ Session::get('error') }}', 'error');
            @endif

        });
    </script>

</body>
</html>
