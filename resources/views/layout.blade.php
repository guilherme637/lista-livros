<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>@yield('cabecalho')</title>
        <style>
            .jumbotron {
                background: #00FF7F;
            }

            .cabecalho {
                background: #B0E0E6;
                padding: 20px;
                border-radius: 20px
            }

            .visualizacao {
                background: #2F4F4F;
            }

            .font-visualizacao {
                color: whitesmoke;
                text-align: center
            }

            .div-visualizacao {
                background: #20B2AA;
                border-radius: 10px;
            }

            .div-lista-curso {
                background: #4682B4;
            }

            .div-form {
                background: #483D8B;
                border-radius: 15px;
            }

            .div-container-lista-cursos {
                background: #9400D3;
                border-radius: 10px;
            }

            .lista {
                background: #7B68EE;
                border-radius: 20px;
            }

            .lista-font {
                color: black;
                font-size: 20px;
            }

            .font-label {
                color: white;
            }

            body {
                background: #F0FFFF;
            }
        </style>
    </head>
    <body>
        @yield('conteudo')
    </body>
</html>
