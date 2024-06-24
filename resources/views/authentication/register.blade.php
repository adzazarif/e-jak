<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('styles/authentication.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="login mt-4">

        <div class="box">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
            @endif
            <div class="header-login">
                <svg width="63" height="60" viewBox="0 0 63 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.1875 15.9375C31.1875 23.5314 25.0314 29.6875 17.4375 29.6875H3.6875V15.9375C3.6875 8.34358 9.84358 2.1875 17.4375 2.1875C25.0314 2.1875 31.1875 8.34358 31.1875 15.9375Z" fill="#212A3E" stroke="white" stroke-width="0.625" />
                    <path d="M31.8125 44.0625C31.8125 36.4686 37.9686 30.3125 45.5625 30.3125H59.3125V44.0625C59.3125 51.6564 53.1564 57.8125 45.5625 57.8125C37.9686 57.8125 31.8125 51.6564 31.8125 44.0625Z" fill="#212A3E" stroke="white" stroke-width="0.625" />
                    <path d="M17.4375 57.8125C9.84358 57.8125 3.6875 51.6564 3.6875 44.0625C3.6875 36.4686 9.84358 30.3125 17.4375 30.3125C25.0314 30.3125 31.1875 36.4686 31.1875 44.0625V57.8125H17.4375Z" fill="#5F8D4E" stroke="white" stroke-width="0.625" />
                    <path d="M45.5625 2.1875C53.1564 2.1875 59.3125 8.34358 59.3125 15.9375C59.3125 23.5314 53.1564 29.6875 45.5625 29.6875C37.9686 29.6875 31.8125 23.5314 31.8125 15.9375V2.1875H45.5625Z" fill="#5F8D4E" stroke="white" stroke-width="0.625" />
                </svg>
                <h2>Register</h2>
                <p>Buat akun anda</p>
            </div>

            <div class="body-login">
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Nomor Identitas/KTP</label>
                        <input type="text" placeholder="Input your email here" name="nik" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" placeholder="Input your email here" name="nama" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" placeholder="Input your email here" name="email" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
                        <input type="text" placeholder="Input your email here" name="no_telp" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" placeholder="Input your email here" name="alamat" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label ">Password</label>
                        <div class="d-flex" style="position: relative">
                            <input type="text" class="form-control p-3" name="password" placeholder="Input your password here" id="password">
                            <i class="bi-eye-slash icon-pw" type="hidden" id="togglePassword"></i>
                        </div>
                    </div>

                    <div class="d-flex mt-4" style="justify-content: space-between">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input " id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>

                        <a class="btn-lupa-pass" href="#">Lupa password ?</a>
                    </div>

                    <button class="btn-submit" type="submit">Login Now</button>
                </form>

                @error('err')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror

                <p>Not Register Yet , <a class="btn-lupa-pass" href="/register">Create an Account ?</a></p>
            </div>
        </div>

    </div>
    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
