<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEDxUniversitasBrawijaya 2021 | Core's TEDxUB Droplink</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="coreDroplink">
    <div class="_tedx_core_profile_container">
      <div class="_tedx_avatar">
        <img src="{{ asset('img/cores/' . $core['url'] . '.svg') }}" alt="{{ $name }}">
      </div>
      <div class="_tedx_profile_name">
        <h1>{{ $name }}</h1>
      </div>
      <div class="_tedx_droplink">
        <ul>
          @foreach ($detail as $key => $value)
          <li>
            <a href="{{ $value }}" target="_blank">{{ $key }}</a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</body>
</html>