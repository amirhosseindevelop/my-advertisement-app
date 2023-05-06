<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/statics/styles/main.css">
    <title>وبسایت آگهی</title>
    <style>
        html {
            width: 100%;
            height: 100%;
            background-color: white;
            position: relative;
        }

        * {
            box-sizing: border-box;
            outline: 0;
            margin: 0;
            padding: 0;
            font-family: "B Nazanin", vazir, Arial, sans-serif;
            direction: rtl;
        }

        .app-home {
            width: 100%;
            height: 100%;
            background-color: white;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow-x: hidden;
            padding: 0;
            margin: 0;
            outline: 0;
        }

        a {
            text-decoration: none;
            cursor: pointer;
            color: inherit;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .ad-swiper {
            width: 100%;
            max-width: 800px;
            margin-top: 45px !important;
            border: 1px solid gray;
            border-radius: 16px;
            display: flex;
            flex-direction: column;
            background-color: white;
            height: auto;
            padding : 30px;
        }

        .ad-img {
            width: 100%;
            height: 300px;
            background-color: #2d3748;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
        }

        .ad-name, .ad-price, .ad-button {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            padding: 30px;
        }

        .ad-button > div {
            width: 100%;
            background-color: #2563eb;
            color: white;
            font-weight: bold;
            border-radius: 14px;
            border: none;
            cursor: pointer;
            padding: 20px;
            text-align: center;
            font-size: 1.4rem !important;
        }
    </style>
</head>
<body class="app-home">
    <div class="ad-swiper">
        <div class="ad-img">تصویر آگهی</div>
        <div class="ad-name">نام آگهی : {{ $info->name }}</div>
        <div class="ad-price">قیمت آگهی :{{ $info->price }}   تومان</div>
        <div class="ad-price">توضیحات : {{ $info->description }}</div>
        <div class="ad-button">
            <div>تماس با فروشنده</div>
        </div>
    </div>
</body>
</html>
