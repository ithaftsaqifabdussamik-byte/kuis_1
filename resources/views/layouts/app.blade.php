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
            padding: 20px 20px;
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


        .profil p {
            font-size: 16px;
            line-height: 1.8;
            text-align: justify;
            
        }

        
        .judul-prodi {
            text-align: center;
            color: #005baa;
            font-size: 28px;
            margin-bottom: 25px;
        }

        .prodi-container {
            display: flex;
            gap: 20px;
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

        .icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background-color: #e3f2fd;
            color: #005baa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: bold;
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

            <div class="garis"></div>


        </div>



    @yield('content')

    </body>
</html>