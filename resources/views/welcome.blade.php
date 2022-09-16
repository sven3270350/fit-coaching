<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/login/login.js"></script>
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        body {
            background-image: url('/assets/img/bg.jpg');
            background-repeat: no-repeat;
        }

        .login_form_container {
            background: rgba(255, 255, 255, 0.5);
        }

        .modal-content {
            background-color: rgba(255, 255, 255, 0.5) !important;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="container row justify-content-center">
            <div class="col-lg-4 col-md-6 login_form_container p-4">
                <form class="login_form bg-white rounded-3 d-flex flex-column align-items-center p-4" method="post" action="/login" >
                    @csrf
                    <h4 class="login_form_title text-black mb-3">SLIM FIT COACHING SYSTEM</h4>
                    <input class="form-control mb-2 rounded-pill" type="text" placeholder="User ID" name="username" required />
                    @if($err == 1)
                        <p class="text-danger align-self-start ms-2">Invalid username!</p>
                    @endif
                    <input class="form-control mb-2 rounded-pill" type="password" placeholder="Password" name="password" required />
                    @if($err == 2)
                        <p class="text-danger align-self-start ms-2">Invalid password!</p>
                    @endif
                    <button class="btn btn-link text-danger mb-2 align-self-start py-0" type="button">forgot password?</button>
                    <button class="btn btn-lg btn-block w-100 btn-success px-5 rounded-pill mb-1 login_btn" type="submit">Login</button>
                    <button class="btn btn-link mb-0 text-primary align-self-end py-0" type="button" data-bs-toggle="modal" data-bs-target="#regModal1">New Coach?</button>
                    <button class="btn btn-link text-primary align-self-end py-0" type="button" data-bs-toggle="modal" data-bs-target="#regModal2">New Coachee?</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="regModal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-5 py-4 border-0 rounded-0">

                <!-- Modal body -->
                <div class="modal-body bg-white d-flex flex-column align-items-center rounded-3">
                    <h5 class="mb-3 text-dark">SLIM FIT COACHING SYSTEM</h5>
                    <h3 class="mb-3 text-dark">NEW COACH</h3>
                    <input id="reg1_name" class="form-control mb-2 rounded-pill" type="text" placeholder="Name" name="name" />
                    <input id="reg1_hid" class="form-control mb-2 rounded-pill" type="text" placeholder="Herbal Live ID" name="hid" />
                    <input id="reg1_ic" class="form-control mb-2 rounded-pill" type="text" placeholder="Ic Number" name="ic" />
                    <input id="reg1_phone" class="form-control mb-2 rounded-pill" type="text" placeholder="Phone Number" name="phone" />
                    <input id="reg1_add" class="form-control mb-2 rounded-pill" type="text" placeholder="Address" name="add" />
                    <input id="reg1_gmail" class="form-control mb-2 rounded-pill" type="email" placeholder="Gmail" name="gmail" />
                    <input id="reg1_uname" class="form-control mb-2 rounded-pill" type="text" placeholder="Username as your User ID" name="uname" />
                    <input id="reg1_pswd" class="form-control mb-2 rounded-pill" type="password" placeholder="Password" name="pswd" />
                    <input id="reg1_conf" class="form-control mb-2 rounded-pill" type="password" placeholder="Retype password" name="conf" />
                    <div class="d-flex">
                        <button class="btn btn-lg btn-success rounded-pill me-3 reg1_btn">Register</button>
                        <button class="btn btn-lg btn-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="regModal2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content px-5 py-4 border-0 rounded-0">

                <!-- Modal body -->
                <div class="modal-body bg-white d-flex flex-column align-items-center rounded-3">
                    <h5 class="mb-3 text-dark">SLIM FIT COACHING SYSTEM</h5>
                    <h3 class="mb-3 text-dark">NEW COACHEE</h3>
                    <input id="reg2_name" class="form-control mb-2 rounded-pill" type="text" placeholder="Name" name="name" />
                    <input id="reg2_ic" class="form-control mb-2 rounded-pill" type="text" placeholder="IC Number" name="ic" />
                    <input id="reg2_age" class="form-control mb-2 rounded-pill" type="number" placeholder="Age" name="age" />
                    <input id="reg2_phone" class="form-control mb-2 rounded-pill" type="text" placeholder="Phone Number" name="phone" />
                    <input id="reg2_add" class="form-control mb-2 rounded-pill" type="text" placeholder="Address" name="add" />
                    <input id="reg2_gmail" class="form-control mb-2 rounded-pill" type="email" placeholder="Gmail" name="gmail" />
                    <select id="reg2_coach" class="form-select rounded-pill mb-2">
                        @foreach ($coachs as $coach)
                            <option>{{$coach->username}}</option>
                        @endforeach
                    </select>
                    <input id="reg2_uname" class="form-control mb-2 rounded-pill" type="text" placeholder="Username as your User ID" name="uname" />
                    <input id="reg2_pswd" class="form-control mb-2 rounded-pill" type="password" placeholder="Password" name="pswd" />
                    <input id="reg2_conf" class="form-control mb-2 rounded-pill" type="password" placeholder="Retype password" name="conf" />
                    <div class="d-flex">
                        <button class="btn btn-lg btn-success rounded-pill me-3 reg2_btn">Register</button>
                        <button class="btn btn-lg btn-secondary rounded-pill" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>