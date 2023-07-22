<div class="row">
    <div class="logo-row">
        <img width="200" height="200" src="/img/logo/magis.png" alt="logo" class="logo">
    </div>         
        
<link href="css-login.css" rel="stylesheet">
<div class="logo"></div>
<div class="login-block">
<form method="POST" action="{{ route('login') }}">
                        @csrf
    <h1>MAGIS | BAPPEDA KAB. MALANG
    </h1>
    <div>
        <input type="text" value="" placeholder="Username" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus/>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                    </span>
                        @enderror
    </div>
    <div>
        <input type="password" value="" placeholder="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                        </span>
                            @enderror
    <div>                            
    <button>LOGIN</button>
    </div>
</div>