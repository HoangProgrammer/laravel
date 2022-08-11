<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        .containers {

            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #E2CF81
        }

        .containers .card {   
            height: 700px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Source Sans Pro', sans-serif;
            border-radius: 10px;
            height:auto;
        }

        .containers .card .form {
            width: 100%;
            height: 100%;
            display: flex
        }

        .containers .card .left-side {
            width: 50%;
            background-color: #000;
            height: 100% !important;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            overflow: hidden
        }

        .left-side img {
            height: 100%!important;
            width: 100%!important;
            object-fit: cover
        }

        .containers .card .right-side {
            width: 50%;
            background-color: #efecf2;
            height: 100%;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 20px
        }

        .main {
            display: none
        }

        .active {
            display: block
        }

        .register p {
            display: flex;
            justify-content: end;
            font-size: 13px;
            font-weight: 600;
            color: #2a2739
        }

        .register p a {
            text-decoration: none;
            color: blue;
            margin-left: 3px
        }

        .hello {
            margin-top: 40px;
            text-align: center;
            color: #2a2739
        }

        .hello h4 {
            margin-top: 5px
        }

        .input_text {
            position: relative;
            margin-top: 20px
        }

        input[type="text"] {
            height: 45px;
            width: 100%;
            border: none;
            outline: 0;
            padding: 0 10px;
            font-size: 13px;
            border-radius: 10px;
            border: 1px solid #fff
        }

        input[type="password"] {
            height: 45px;
            width: 100%;
            border: none;
            outline: 0;
            padding: 0 10px;
            font-size: 13px;
            border-radius: 10px;
            padding-right: 33px;
            border: 1px solid #fff
        }

        .input_text p {
            margin-top: 4px;
            font-size: 13px;
            margin-left: 10px;
            color: red
        }

        .danger {
            display: none
        }

        .input_text p i {
            margin-right: 2px
        }

        .fa-eye-slash {
            position: absolute;
            top: 15px;
            right: 8px;
            cursor: pointer;
            color: #727286
        }

        .fa-eye {
            position: absolute;
            top: 15px;
            right: 8px;
            cursor: pointer;
            color: #727286
        }

        .recovery {
            margin-top: 15px;
            font-size: 13px;
            text-align: end
        }

        .btnS {
            margin-top: 15px
        }

        .btnS button {
            height: 45px;
            width: 100%;
            border: none;
            outline: 0;
            background-color: #fe6b68;
            border-radius: 10px;
            transition: all 0.5s;
            cursor: pointer;
            font-size: 13px;
            color: #fff
        }

        .btnS button:hover {
            background-color: #f1221e
        }

        .right-side hr {
            margin-top: 30px;
            color: #fff;
            border: 0;
            border-top: 1px solid #fff
        }

        .or {
            display: flex;
            justify-content: center;
            font-size: 13px
        }

        .or p {
            z-index: 2;
            margin-top: -10px;
            background-color: #efecf2;
            padding: 0 4px
        }

        .boxes {
          position:relative;
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 30px
        }

        .boxes span {
            height: 45px;
            width: 60px;
            border: 1px solid #fff;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            transition: all 0.5s
        }

        .boxes span img {
            width: 30px;
            cursor: pointer;
            transition: all 0.5s
        }

        .boxes span:hover img {
            width: 35px
        }

        .boxes span:hover {
            border: 4px solid #fff
        }

        .warning {
            border: 1px solid red !important
           
        }

        @media (max-width:750px) {
            .containers .card {
                max-width: 350px
            }

            .containers .card .right-side {
                border-radius: 10px;
                width: 100%
            }

            .containers .card .left-side {
                display: block
            }
        }
    </style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css  ">
<body>

    <div class="containers" style="">
   @yield('content')
    </div>
    @include('sweetalert::alert')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

