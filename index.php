<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <title>Falcontrac</title>
</head>


<body>
    <!-- navbar start   -->
    <div class="container py-4">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <img src="assets/images/logo.png" alt="">
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">test</a>
                </li>

            </ul>
        </div>
        <!-- navbar end   -->

        <!-- login form start  -->
        <div class="d-flex justify-content-center pt-5">
            <form class="bg-light p-5 rounded shadow w-75" action="routes/monitor.php">
                <h1 class="text-center login-text">Login</h1>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
                </div>
                <div class="mb-3 forget-password">
                    <p data-bs-toggle="modal" data-bs-target="#exampleModal">Forgot your passwoed ?</p>
                </div>
                <button type="submit" name="loginSubmit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- login form end  -->

    <!-- password rest modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">resset password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- rest password modal start  -->
                    <form class="rounded  w-100">
                        <div class="mb-3">
                            <label for="resetUsernameInput" class="form-label">username</label>
                            <input type="text" class="form-control" name="resetUsernameInput" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">phone number</label>
                            <input type="number" id="phoneNumber" class="form-control" minlength="11" name="phoneNumber" placeholder="ex: 07701234567">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
            <!-- rest password modal end  -->
        </div>

    </div>
    </div>
    </div>
    <!-- end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/falcon.js"></script>

</body>

</html>