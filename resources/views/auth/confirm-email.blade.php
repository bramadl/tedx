<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>TEDxUniversitasBrawijaya | Confirm Email</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" href="/favicon/favicon.ico">
  <meta name="theme-color" content="#ffffff">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      background: linear-gradient(-45deg, #860b0b, #350517, #000000, #c20909);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
    }

    div.confirm-email {
      background: #ffffff;
      border-radius: .5rem;
      font-family: "Open Sans", sans-serif;
      text-align: center;
      padding: 2rem 2rem;
      color: #101010;
    }

    div.confirm-email h1 {
      font-size: 1.5rem;
      font-weight: bold;
    }

    div.confirm-email p {
      margin: 1.5rem 0;
      font-weight: 300;
      background: #B82B2B;
      color: #ffffff;
      padding: 1rem;
      border-radius: .5rem;
    }

    div.confirm-email a {
      color: #B82B2B;
    }

    div.confirm-email p a {
      color: #ffffff;
    }
  </style>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <div class="confirm-email">
    <h1>Hai, {{ $user->first_name }} {{ $user->last_name }}!</h1>
    <p>
      Terimakasih telah mendaftar untuk TEDxUniversitasBrawijaya2021.
      <br><br>
      Mohon verifikasi email kamu untuk dapat mengakses member area akun kamu.
      <br><br>
      Kami sudah mengirimkan email verifikasi ke alamat email <strong>{{ $user->email_address }}</strong>
      <br><br>
      Silahkan cek email dan verifikasi akun kamu ya.
      <br><br>
      <small>Tidak mendapatkan email ? <a href="{{ url('member/resend/confirm') }}">Kirim ulang email</a></small>
    </p>
    <span>&copy; <a href="/">TEDxUniversitasBrawijaya</a> - with &hearts;</span>
  </div>
</body>

</html>