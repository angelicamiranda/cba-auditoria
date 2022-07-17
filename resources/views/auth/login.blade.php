<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.cba.com.bo/cba/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 03:09:14 GMT -->
<head>
    <title>CBA</title>
    <!-- Required meta tags -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS justified-nav -->
     <link rel="stylesheet" href="lib/libgui/bootstrap/css/bootstrap.min.css">
     
  </head>
  <body>
    <div class="container">  
      <div class="col-xs-12 col-sm-12 col-md-12"> 
 
        <div class="modal fade" id="modalFormLogin" tabindex="-1" role="dialog" aria-labelledby="TitleModalForm" aria-hidden="false">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header" style="background-color:#233871; color: antiquewhite">
                <h6 class="modal-title" id="TitleModalForm">CBA</h6>
              </div>
              <div class="modal-body">                
              <form method="POST" action="{{ route('login') }}">
                        @csrf
                 
                        <div class="form-group">
                            <label for="LOGINUSER" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                         
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         
                            <small class="form-text text-muted">Email de Estudiante</small>
                        </div>

                        <div class="form-group">
                            <label for="PASSWORDUSER" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <small class="form-text text-muted">Su Password</small>
                  
                           
                        </div>

                        

                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Estudiante CBA con Codigo') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

              </div>
            
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <!--<script src="lib/libgui/bootstrap/js/jquery-3.3.1.slim.min.js" ></script> -->
    <script src="lib/libgui/jquery/jquery-3.3.1.min.js" ></script>
    <script src="lib/libgui/bootstrap/js/popper.min.js" ></script>
    <script src="lib/libgui/bootstrap/js/tether.min.js" ></script>
    <script src="lib/libgui/bootstrap/js/bootstrap.min.js"  ></script>
    <!-- jAlert. -->
    <link rel="stylesheet" href="lib/libgui/jAlert-master/src/jAlert.css">
    <script src="lib/libgui/jAlert-master/src/jAlert-functions.js"></script>
    <script src='lib/libgui/jAlert-master/src/jAlert.js'></script>
        

    <script src="lib/libgui/base_64.js"  ></script>
    <script src="index.js"  ></script>
    <script src="main_index.js"  ></script>
	
	<div id="fb-root"></div>
    <script async defer src="../../connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2"></script>
  </body>

<!-- Mirrored from www.cba.com.bo/cba/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 03:09:17 GMT -->
</html>