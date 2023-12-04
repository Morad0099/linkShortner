<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    <title>Reg</title>
</head>
<body>
    <main class="main flow">
        <h1 class="main__heading" style="color:black;">Register/Login</h1>
        <div class="main__cards cards">
          <div class="cards__inner">
            <div class="cards__card card">
              <p class="card__price">Login</p>
              <ul role="list" class="card__bullets flow">
                <li>Access to standard workouts and nutrition plans</li>
                <li>Email support</li>
              </ul>
              <a href="{{route('login')}}" class="card__cta cta">Login</a>
            </div>
      
            <div class="cards__card card">
            
              <p class="card__price">Register</p>
              <ul role="list" class="card__bullets flow">
                <li>Access to standard workouts and nutrition plans</li>
                <li>Email support</li>
              </ul>
              <a href="{{route('register')}}" class="card__cta cta">Register</a>
            </div>
      
           
          
          <div class="overlay cards__inner"></div>
        </div>
      </main>
</body>
</html>