<!-- <div class="container">
    <h2>SignUp Page</h2>
    <form method="POST" action="controls/createUsers.php">
        <div class="mb-3">
            <label for="firstname" class="">Firstname</label>
            <input type="text" name="first_name">
        </div>

        <div>
            <label for="">Lastname</label>
            <input type="text" name="last_name">
        </div>

        <div>
            <label for="">Address</label>
            <textarea name="address" id=""></textarea>
        </div>

        <div>
            <label for="">Phone</label>
            <input type="text" name="phone">
        </div>

        <div>
            <label for="">E-Mail</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>

        <button type="submit">SignUp NOW!!</button>
    </form>
</div> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background: linear-gradient(to right,rgba(78, 78, 78, 1),rgba(117, 145, 105, 1));">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 900px;">
        <div class="card" style="width: 100%;">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body p-4">
                        <!-- เข้าสู่ระบบ -->
                        <h2 class="text-center">Sign Up</h2>
                        <form method="POST" action="controls/createUsers.php">
                            <div class="mb-3">
                                <label for="firstname" class="">Firstname</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="">Lastname</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="">Address</label>
                                <textarea name="address" id="" class="form-control" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="">E-Mail</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">SignUp NOW!!</button>

                        </form>
                        <!-- กลับไปหน้าเข้าสู่ระบบ -->
                        <div class="text-center mt-3">
                            <span>Already have an account?</span>
                            <a href="signin.php">Sign In</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.pexels.com/photos/19139426/pexels-photo-19139426.jpeg" class="img-fluid" style="object-fit: cover; width: 100%; height: 100%"
                        alt="Robux gif">
                </div>
            </div>
        </div>
    </div>
</body>

</html>