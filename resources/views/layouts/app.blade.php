<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #eef3f8;
            color: #333;
        }

        .hero {
            background: linear-gradient(135deg, #005baa, #0088cc);
            color: white;
            padding: 10px 10px;
            text-align: center;
        }

        .hero h1 {
            margin: 0;
            font-size: 38px;
        }

        .hero p {
            margin-top: 15px;
            font-size: 18px;
        }


        .container {
            width: 85%;
            max-width: 1050px;
            margin: 40px auto;
        }

        
        .judul-prodi {
            text-align: center;
            color: #005baa;
            font-size: 28px;
            margin-bottom: 25px;
        }

        .prodi-container {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .prodi {
            background-color: white;
            flex: 1;
            min-width: 250px;
            padding: 30px 20px;
            border-radius: 15px;
            text-align: center;
        }



        .prodi h3 {
            color: #005baa;
            font-size: 19px;
            line-height: 1.4;
        }

        .prodi p {
            color: #666;
            line-height: 1.6;
            font-size: 14px;
        }

        .info {
            margin-top: 35px;
            background-color: #005baa;
            color: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
        }

        .info h2 {
            margin-top: 0;
        }

        .info p {
            line-height: 1.7;
        }

    </style>
</head>

    <body>


        <div class="hero">

            <h1>Politeknik Negeri Malang</h1>

        </div>



    @yield('content')

    </body>
</html>