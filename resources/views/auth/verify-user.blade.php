<!DOCTYPE html>
<html>

<head>
  <title>Welcome Audiens | TEDxUniversitasBrawijaya 2021</title>
  <style>
    body {
      text-align: center;
    }

    .link {
      display: inline-block;
      padding: .5rem 1.25rem;
      border-radius: .25rem;
      background: #B82B2B;
      color: #FFFFFF !important;
      font-family: 'Open Sans', sans-serif;
      font-size: .8rem;
      font-weight: 500;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <h2>Selamat datang di TEDxUniversitasBrawijaya 2021 {{ $user['first_name'] }} {{ $user['last_name'] }}</h2>
  <p>Terima kasih telah mendaftarkan dirimu dan menjadi bagian dari Manifestasi Peradaban pada kegiatan TEDxUniversitasBrawijaya 2021 ini.</p>
  <hr />
  <h4>Detail Akun</h4>
  <table>
    <tr>
      <td>Nama Depan</td>
      <td>:</td>
      <td>{{ $user['first_name'] }}</td>
    </tr>
    <tr>
      <td>Nama Belakang</td>
      <td>:</td>
      <td>{{ $user['last_name'] }}</td>
    <tr>
      <td>Email Address</td>
      <td>:</td>
      <td>{{ $user['email_address'] }}</td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td>:</td>
      <td>{{ $user['phone_number'] }}</td>
    </tr>
    <tr>
      <td>User Role</td>
      <td>:</td>
      <td>{{ $user['role'] }}</td>
    </tr>
  </table>
  <hr>
  <p>Sebelum kamu melanjutkan pembelian tiket, silahkan konfirmasi akun email kamu dengan klik link di bawah ini.</p>
  <br />
  <a class="link" href="{{ url('member/verify', $user->verifyUser->token) }}">Verify Email</a>
</body>

</html>