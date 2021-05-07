<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
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

      @keyframes gradient {
        0% {
          background-position: 0% 50%;
        }

        50% {
          background-position: 100% 50%;
        }

        100% {
          background-position: 0% 50%;
        }
      }
    }

    div {
      background: #ffffff;
      border-radius: .5rem;
      font-family: "Open Sans", sans-serif;
      text-align: center;
      padding: 2rem 2rem;
      color: #101010;
    }

    div p {
      margin: 1.5rem 0;
      font-weight: 300;
      background: #B82B2B;
      color: #ffffff;
      padding: 1rem;
      border-radius: .5rem;
      font-size: .8rem;
    }

    div a {
      color: #B82B2B;
    }
  </style>
</head>

<body>
  <div>
    <h1>Hai, {{ $user->first_name }} {{ $user->last_name }}!</h1>
    <p>
      Kami sudah mengirimkan link verifikasi email di email kamu.
      <br>
      Silahkan cek email dan verifikasi akun kamu ya
    </p>
    <span>with &hearts; - <a href="/">TEDxUniversitasBrawijaya</a></span>
  </div>
</body>

</html>