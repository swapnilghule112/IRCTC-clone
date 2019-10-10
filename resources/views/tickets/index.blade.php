<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h1>All Information About Devices</h1>

@foreach ($tickets as $ticket)
<li> {{ $ticket}}  </li>
@endforeach

<h1></h1>

@foreach ($tickets as $ticket)

<li> {{ $ticket->source}}  </li>
<li> {{ $ticket->destination}}  </li>
<li> {{ $ticket->date}}  </li>
<li> {{ $ticket->adults}}  </li>
<li> {{ $ticket->children}}  </li>
@endforeach

<h1>Only Description Of Devices</h1>

@foreach ($devices as $device)

<li> {{ $device->description}}  </li>

@endforeach

</body>
</html>
