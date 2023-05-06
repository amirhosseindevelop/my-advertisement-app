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

            .home-header {
                width: 100%;
                height: auto;
                text-align: center;
                display: flex;
                flex-direction: column;
                background-color: white;
            }

            .home-text {
                text-align: center;
                text: black;
                font-size: 32px;
                color: black;
                padding: 32px 0;
            }

            .home-buttons {
                width: 100%;
                height: auto;
                padding: 12px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                max-width: 500px;
                margin: 0 auto;
            }

            .home-buttons > a {
                width: auto;
                height: auto;
                padding: 24px 32px;
                text-align: center;
                color: white;
                border: 1px solid #2563eb;
                border-radius: 16px;
                box-shadow: none;
            }

            a {
                text-decoration: none;
                cursor: pointer;
                color: inherit;
                font-size: 1.1rem;
                font-weight: bold;
            }

            .ads-container {
                width: 100%;
                display: flex;
                flex-direction: column;
                color: black;
                text-align: center;
            }

            .ads-swiper {
                width: 100%;
                display: flex;
                flex-wrap: wrap;
                height: auto;
            }

            .ad-item {
                width: 200px;
                height: 300px;
                border: 1px solid gray;
                padding: 18px;
                overflow: hidden;
                display: flex;
                flex-direction: column;
                border-radius: 6px;
                margin: 25px;
            }

            .ad-item > p,
            .ad-item > span {
                color: black;
                width: 100%;
                display: block;
                text-align: center;
                font-size: 1.1rem;
                font-weight: 600;
                padding: 20px;
            }

            .ad-item > a {
                color: white;
                width: 100%;
                display: block;
                text-align: center;
                padding: 15px;
                border-radius: 6px;
                font-weight: bold;
                font-size: 1.2rem;
                background-color: #2563eb;
            }
        </style>
    </head>
    <body class="app-home">
        <div class="home-header">
            <div class="home-text">به وبسایت ما خوش آمدید</div>
            <div class="home-buttons">
                <a href="/login" style="color: black !important;">وارد شوید</a>
                <a href="/create-ads" style="color: #2563eb !important;">ایجاد آگهی</a>
                <a href="/register" style="background-color: #2563eb;">ثبت نام کنید</a>
            </div>
            <div class="ads-container">
                <h2>آگهی های سایت</h2>
                <div class="ads-swiper">
                    @foreach($ads as $ad)
                        <div class="ad-item">
                            <div style="width: 100%; height: 100px; border-radius: 4px; color: white; display: flex; align-items: center; justify-content: center; background-color: #4b5563">
                                تصویر آگهی
                            </div>
                            <p>{{ $ad->name }}</p>
                            <span>
                                <strong>تومان {{ $ad->price }}</strong>
                            </span>
                            <a href="/ads/all/{{ $ad->name }}">مشاهده</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
