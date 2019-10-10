<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Trains</h1>

@foreach ($trains as $train)
<li> {{ $train}}  </li>
@endforeach

<h1>Only Names Of train</h1>

@foreach ($trains as $train)

<li> {{ $train->train_name}}  </li>

@endforeach

</body>
</html>
