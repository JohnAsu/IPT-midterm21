@extends('base')

@section('content')
<body>
    <style>
        body {
            background-image: url("login.jpg");
            background-size: cover;
        }
        .row {
            margin-top: 150px;
        }

    </style>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card bg-success mt-4">
            <div class="card-header bg-white text-grey">
                <h3 class="card-title">
                    User Login
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('/login')}}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-4">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-info" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
    
@endsection