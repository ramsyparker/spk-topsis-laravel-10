<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>

  {{-- Icon --}}
  <link rel="icon" href="{{ asset('Assets/Img/apps-line.png') }}" type="image/x-icon">

  {{-- Styles --}}
  @yield('styles')

  {{-- Custom Style --}}
  <link rel="stylesheet" href="{{ asset('Assets/Css/auth.css') }}">
</head>

<body>
  {{-- Sweet alert --}}
  @include('sweetalert::alert')
  
  <section class="login d-flex justify-content-center justify-content-lg-between">
    <div class="login-left w-50 h-100 d-none d-lg-block">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-4">
          @yield('asset-image')
        </div>
      </div>
    </div>
    
    <div class="login-right w-50 w-sm-75 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 border border-2 signin-box p-3 p-sm-5 rounded rounded-5 col-lg-6">
          <div class="header">
            <div class="text-center">
              <h1 class="my-0 mt-lg-3">@yield('title')</h1>
            </div>

            {{-- Alert --}}
            @if($errors->any())
            <div class="alert alert-danger m-2">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>

          @yield('content')
        </div>
      </div>
    </div>
  </section>
  
  {{-- Scripts --}}
  @yield('scripts')
</body>

</html>