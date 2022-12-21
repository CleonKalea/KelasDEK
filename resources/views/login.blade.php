@extends('layout.main')
@section('top')
    
<html>
    <head>
        <title>Form JavaScript</title>
        <link rel="stylesheet" type="text/css" href="/css/formStyle.css">

    </head>
    
    <body>
        <div class="box">
            <div style="text-align: center"> 
                <div class="loader">
                    <svg viewBox="0 0 80 80">
                        <circle id="test" cx="40" cy="40" r="32"></circle>
                    </svg>
                </div>
                
                <div class="loader triangle">
                    <svg viewBox="0 0 86 80">
                        <polygon points="43 8 79 72 7 72"></polygon>
                    </svg>
            </div>
            
            <div class="loader">
                <svg viewBox="0 0 80 80">
                    <rect x="8" y="8" width="64" height="64"></rect>
                </svg>
            </div>
        </div>
            <h1 class="header">HALAMAN LOGIN</h1>   
            <h6 class="headersubtext"><i>RUMAH SAKIT RUMAH SEHAT</i></h6>
            
            <form action="/admin/home" method="POST" id="form">
                @csrf
                <div>
                    <label for="username"></label>    
                    <input type="text" name="username" id="username" placeholder="Username">
                    <label for="ErrorUsername" id="ErrorUsername" class="errortext"></label>
                </div>

                <div>
                    <label for="Password"></label>
                    <input type="password" name="Password" id="pwd1" placeholder="Password">
                    <label for="ErrorPwd" id="ErrorPwd" class="errortext"></label>
                </div>
                    
                <button type="submit">Submit</button>

                </form>
                <br>
                <h6 style="text-align: center">Belum memiliki akun? <a href="/registrasi/daftar">Klik disini</a></h6>
            </div>
        </div>          
    </body>
    <script type="text/javascript" src="/js/formScript.js"></script>
</html>
@endsection