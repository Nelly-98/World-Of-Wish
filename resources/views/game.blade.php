@extends('app')
@section('content')
    <script>
        function startGame() {
            gameArea.start();
            gamePlayer = new component(30, 30, "red", 10, 120);
        }

        var gameArea = {
            canvas: document.createElement("canvas"),
            start: function() {
                this.canvas.width = 480;
                this.canvas.height = 270;
                this.context = this.canvas.getContext("2d");
                document.body.insertBefore(document.getElementById("nav"), this.canvas.nextSibling);
            }

        }



        function component(width, height, color, x, y) {
            this.width = width;
            this.height = height;
            this.x = x;
            this.y = y;
            ctx = gameArea.context;
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    </script>
@endsection
