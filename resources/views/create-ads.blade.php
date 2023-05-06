<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/statics/styles/main.css">
    <title>ایجاد آگهی جدید</title>
</head>
<body class="app-body">
<div style="display: flex; flex-direction: column;">
    @if ($errors->any())
        <div class="errors-box">
            @foreach($errors->all() as $error)
                <ul>
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        </div>
    @endif

    <div class="login-box" style="height: 500px !important;">
        <h1 class="login-header">
            ایجاد آگهی جدید
        </h1>
        <form action="/actions/create-ads" method="POST">
            @csrf
            <div class="input-body">
                <input type="text" value="{{ old('name') }}" name="name" id="name" autofocus class="login-input" autocomplete="off" placeholder="نام آگهی خود را وارد کنید"  required />
            </div>
            <div class="input-body">
                <input type="number" value="{{ old('price') }}" name="price" id="price" class="login-input" autocomplete="off" placeholder="مبلغ آگهی خود را وارد کنید"  required />
            </div>
            <div class="input-body">
                <input type="text" value="{{ old('desc') }}" name="desc" id="desc" class="login-input" autocomplete="off" placeholder="توضیحات آگهی خود را وارد کنید" />
            </div>
            <div class="input-body">
                <input type="submit" value="ثبت" class="login-submit-button" id="submit" name="submit" />
            </div>
        </form>
    </div>
</div>
</body>
</html>
