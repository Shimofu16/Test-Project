<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free-6.0.0-web/css/all.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .bjmp-form-logo {
            height: 70px;
            width: 70px;
        }

        label:not(.gender).form-title::after {
            content: ":";
        }

        .radio-col {
            display: flex;
            flex-direction: column;
        }

        .form-control-border-bottom,
        .form-control-border-bottom:focus-visible {
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: #000 solid 2px;
            display: block;
            width: 100%;
            padding: .375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            background-clip: padding-box;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .form-control {
           
        }

    </style>
    {{-- Livewire CSS --}}
    @livewireStyles
</head>

<body style="background-color: #E9EBFC;">
    <div class="container">
        <div class="row flex-nowrap mb-3" style="margin-top:50px">
            <center>
                <div class="col-md-7 col-lg-8 col-xl-7 ">
                    <div class="top d-flex justify-content-center align-items-center">
                        <div class="left">
                            <img src="{{ asset('img/bjmp icon 1.png') }}" alt="" class="bjmp-form-logo">
                        </div>
                        <div class="middle d-flex flex-column mx-2">
                            <h2>Republic of the Philippines</h2>
                            <hr class="mx-3 my-0">
                            <h2>Municipal Jail of Los Baños Laguna</h2>
                        </div>
                        <div class="right">
                            <img src="{{ asset('img/bjmp icon 2.png') }}" alt="" class="bjmp-form-logo">
                        </div>
                    </div>
                    <div class="middle mt-2">
                        <h4>Appointment & Health Declaration Form</h4>
                    </div>
                    <div class="bottom">
                        @livewire('multistepform')
                    </div>
                </div>
            </center>
        </div>
    </div>
    {{-- Livewire JS --}}
    @livewireScripts
</body>

</html>
