<!doctype html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/statics/styles/main.css">
        <title>ورود به حساب کاربری</title>
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

            <div class="login-box">
                <h1 class="login-header">
                    ورود به حساب کاربری
                </h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-body">
                        <input type="email" value="{{ old('email') }}" name="email" id="email" autofocus class="login-input" autocomplete="off" placeholder="ایمیل خود را وارد کنید"  required />
                    </div>
                    <div class="input-body">
                        <input type="password" name="password" id="password" class="login-input" autocomplete="off" placeholder="رمز عبور خود را وارد کنید"  required />
                    </div>
                    <div class="input-body">
                        <input type="submit" value="ورود" class="login-submit-button" id="submit" name="submit" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
