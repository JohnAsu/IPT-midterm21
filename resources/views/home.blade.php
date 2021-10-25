@extends('base')

@section('content')
    <style>
        body {
            background-color: azure;
        }
        .intro {
            padding: 30px;
        }
        .image {
            background-image: url(sunsets.jpg);
            background-size: cover;
            background-position: center;
	        width: 1640px; 
            height: 650px; 
        }
        .txt {
            position: relative;
	        top: 200px;
            left: 60px;
        }
        h1 {
            text-align: left;
            font-family: Sans-serif;
        }
    </style>

    <body>
        <div>
            <div class="container intro" style="text-align: center">
                <h1><b>Welcome to CheapTalk!!</b></h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="image">
                        <h1 class="txt">Post everything</h1>
                        <h1 class="txt"><b>Before the end of the world!!!</b></h1>
                        <h5 class="txt">
                            <form action="{{url('/register')}}" method="get">
                                <button class="btn btn-success" type="submit">Register ASAP!</button>
                            </form>
                        </h5>
                        <h5 class="txt" style="color: Red">Click Login if you have already an account!</h5>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection