
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Regestration</title>
      <link rel="stylesheet" href=" {{url('css/reg-style.css')}}"/>
        <style>
            body{
                margin: 0px;
                padding: 0px;
                background: url('{{url("css/images/reg.PNG")}}');
                background-size: cover;
                
            }
        </style>
    </head>   

    <body>
     <form method="POST" action="{{ route('register') }}">
         {{ csrf_field() }}
        <fieldset>
                  
            <legend><input type="file" value="add"/></legend>
            <label style="margin-right: 48px">Fullname:</label>
          
              <input  type="text" name="fullname" placeholder="Your real name" required autofocus>
           
            <label style="margin-right: 43px">Username:</label>
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                 @if ($errors->has('name'))
                <span class="invalid-feedback">
              <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
          
            <label style="margin-right: 90px">Age:</label>
             <input  type="number" name="age" placeholder="Your age" required autofocus>
         
            <label style="margin-right: 48px">Password:</label>
           
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
             <label style="margin-right: 20px">ConfirmPassword: </label>
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
<br>
           
            <label style="margin-right: 77px">Email: </label>
                <input id="email" placeholder="Sample@sample.com" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                 <span class="invalid-feedback">
                 <strong>{{ $errors->first('email') }}</strong>
                     </span>
                     @endif

        
            <label style="margin-right: 7px">number:</label>
              <input  type="number"  name="phone" placeholder="012 3456 7891 " required>
             <br><br>
            
              <button type="submit" class="btn btn-primary" value="Register" id="but">register</button>
                
                  
        </fieldset>
          </form>
    <track src="{{url('css/lol.mp3')}}">
    </body>
    
</html>