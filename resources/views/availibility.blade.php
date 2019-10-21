<!DOCTYPE html>
<html>
<head>
    <title>Availibility</title>
</head>
<body>
<div class="table-responsive">
  <table class="table table-striped table-hover table-condensed">
    <thead>
        <h1>Ticket booked successfully</h1>
        <tr>
            <th>Source</th>
            <th>Destination</th>
            <th>Date</th>
            <th>adults</th>
            <th>children</th>
        </tr>
        @foreach($op as $key => $data)
            <tr>
            <th>{{$data->source}}</th>
            <th>{{$data->destination}}</th>
            <th>{{$data->date}}</th>
            <th>{{$data->adults}}</th>
            <th>{{$data->children}}</th>
            </tr>
        @endforeach
    </thead>
  </table>
</div>

</body>
</html>

