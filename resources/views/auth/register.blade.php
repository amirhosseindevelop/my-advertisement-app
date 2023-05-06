<!doctype html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/statics/styles/main.css">
        <title>ثبت نام حساب کاربری</title>
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

        <div class="login-box" style="height: 600px !important;">
            <h1 class="login-header">
                ثبت نام در سایت
            </h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-body">
                    <input type="text" value="{{ old('name') }}" name="name" id="name" autofocus class="login-input" autocomplete="off" placeholder="نام خود را وارد کنید"  required />
                </div>
                <div class="input-body">
                    <input type="email" value="{{ old('email') }}" name="email" id="email" class="login-input" autocomplete="off" placeholder="ایمیل خود را وارد کنید"  required />
                </div>
                <div class="input-body">
                    <input type="password" name="password" id="password" class="login-input" autocomplete="off" placeholder="رمز خود را وارد کنید"  required />
                </div>
                <div class="input-body">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="login-input" autocomplete="off" placeholder="رمز عبور خود را تکرار کنید"  required />
                </div>
                <div class="input-body">
                    <input type="submit" value="ثبت نام" class="login-submit-button" id="submit" name="submit" />
                </div>
            </form>
        </div>
    </div>
    </body>
</html>
