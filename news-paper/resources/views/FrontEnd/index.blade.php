<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('Front/style.css')}}">
    <title>Comming Soon</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h3 class="title">We are Comming Soon</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt dolor mollitia totam nihil optio, debitis iste tenetur a voluptatem ut ab? Dolorum asperiores provident inventore quasi omnis unde magni error.</p>
            <div class="count-down">
                <div class="box">
                    <h3 id="day">00</h3>
                    <span>day</span>
                </div>
                <div class="box">
                    <h3 id="hour">00</h3>
                    <span>hour</span>
                </div>
                <div class="box">
                    <h3 id="minute">00</h3>
                    <span>minute</span>
                </div>
                <div class="box">
                    <h3 id="second">00</h3>
                    <span>second</span>
                </div>
            </div>
            <a href="#" class="btn">notify me</a>
        </div>
        <div class="image">
            <img src="{{asset('Front/img/Create-bro.png')}}" alt="">
        </div>
    </div>
<!-- script  -->
    <script>
        let countDate = new Date('jun 30, 2022 00:00:00').getTime();

        function countDown(){
            let now = new Date().getTime();
            gap = countDate - now;

            let second = 1000;
            let minute = second * 60;
            let hour = minute * 60;
            let day = hour *24;

            let d  = Math.floor(gap / (day));
            let h  = Math.floor(gap % (day) / (hour));
            let m  = Math.floor(gap % (hour) / (minute));
            let s  = Math.floor(gap % (minute) / (second));

            document.getElementById('day').innerText = d;
            document.getElementById('hour').innerText = h;
            document.getElementById('minute').innerText = m;
            document.getElementById('second').innerText = s;
        }

        setInterval(function(){
            countDown();
        },1000)
    </script>
</body>
</html>