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
            <h1 class="header">REGISTRATION FORM</h1>   
            <h6 class="headersubtext"><i>RUMAH SAKIT RUMAH SEHAT</i></h6>
            
            <form action="/user-regis" method="POST" id="form">
                @csrf
                <div>
                    <label for="username"></label>    
                    <input type="text" name="username" id="username" placeholder="Username">
                    <label for="ErrorUsername" id="ErrorUsername" class="errortext"></label>
                </div>

                <div>
                    <label for="namauser"></label>
                    <input type="text" name="namauser" id="namauser" placeholder="Nama Lengkap">
                    <label for="ErrorNama" id="ErrorNama" class="errortext"></label>
                </div>
                
                <div>
                    <label for="email"></label>
                    <input type="text" name="email" id="email" placeholder="Email">
                    <label for="ErrorEmail" id="ErrorEmail" class="errortext"></label>
                </div>

                <div>
                    <label for="notelp"></label>
                    <input type="text" name="notelp" id="notelp" placeholder="No Telepon">
                    <span class="input-border"></span>
                    <label for="ErrorTelp" id="ErrorTelp" class="errortext"></label>
                </div>

                <div>
                    <label for="alamat"></label>    
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat">
                    <label for="ErrorAlamat" id="ErrorAlamat" class="errortext"></label>
                </div>
                
                <div>
                    <label for="Password"></label>
                    <input type="password" name="Password" id="pwd1" placeholder="Password">
                    <label for="ErrorPwd" id="ErrorPwd" class="errortext"></label>
                </div>
                    
                <button type="submit">Submit</button>

                </form>

                <br>
                <h6 style="text-align: center">Sudah memiliki akun? <a href="/login">Klik disini</a></h6>
            </div>
        </div>          
    </body>
    {{-- <script type="text/javascript" src="/js/formScript.js"></script> --}}
</html>
@endsection