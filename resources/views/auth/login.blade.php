
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<img style="position: absolute; inset: 0; height: 100vh; width: 100%;" src="https://i.ytimg.com/vi/mntTbM7AQ8U/maxresdefault.jpg" alt="">
<div style="position: relative; padding-top: 0%"  class="container-fluid" >
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mt-5 bg-dark p-4 card rounded padding-top: 0%">
                <img style="position: justify-center; padding-left: 30%; height: 30vh; width: 550px;" src="android-chrome-512x512.png" alt="">
                <div class="card-body text-white">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4 d-flex justify-between">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        <a class="text-white" href="/register">Need an account?</a>
                                    </label>
                                </div>
                                <div class="row mb-0">
                                    <div class="offset-lg-10">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div>
                                {{-- <h5>BY USING THIS SITE YOU AGREE WITH THE TERMS AND CONDITIONS AND THE PRIVACY POLICY</h5> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
