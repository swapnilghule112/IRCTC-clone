@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
<!--     <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" /> -->

    <!-- Custom stlylesheet -->
<!--     <link type="text/css" rel="stylesheet" href="css/style.css" /> -->

</head>

<body>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row">
                    <div class="booking-form">
                        <div class="form-header">
                            <h1>Book Your Train</h1>
                        </div>
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{$e}}</li>
                            @endforeach
                        </ul>
                        <form action="availibility" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="form-checkbox">
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="source" type="text">
                                <span class="form-label">Source</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="destination" type="text">
                                <span class="form-label">Destination</span>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="date" type="date">
                                        <span class="form-label">Date</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>AC</option>
                                            <option>Sleeper</option>
                                            <option>General</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Travel class</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name = "adults">
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Adults</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input class="form-control" type='number' name = "children">
                                        <span class="select-arrow"></span>
                                        <span class="form-label">Children</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Book</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>


</div>
@endsection
