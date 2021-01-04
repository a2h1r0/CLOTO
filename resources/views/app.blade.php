<!DOCTYPE html>
<html lang="ja">

<head>
    @include('head')
</head>

<body>
    <!-- PleaseWait.js & Spinkit -->
    <link rel="stylesheet" href="{{ mix('css/please-wait.css') }}">
    <link rel="stylesheet" href="{{ mix('css/spinkit.min.css') }}">
    <style>
        .pg-loading-logo {
            max-width: 95%;
        }
        .sk-wave {
            margin: 0 auto;
        }
        .sk-wave-rect {
            background-color: #ffffff;
        }
    </style>
    <script src="{{ mix('js/please-wait.min.js') }}"></script>
    <script>
        window.loading_screen = window.pleaseWait({
            logo: '{{ config("consts.storage.system") . "header-logo.svg" }}',
            backgroundColor: '#f6bf00',
            loadingHtml: '<div class="sk-wave"><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div><div class="sk-wave-rect"></div></div>'
        });
        window.onload = function () {
            loading_screen.finish();
        };
    </script>


    <!-- App -->
    <div id="app"></div>
    <!-- built files will be auto injected -->
</body>

</html>