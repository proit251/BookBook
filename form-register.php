<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custom Login & Register CSS -->
</head>
  <body>


      <main class="form-signin w-100 m-auto">
        <form  action="process-register.php" method="POST">
          <center><h1 class="h3 mb-3 fw-normal"><span class="highlight1">Register</span></h1></center>

          <div class="form-floating my-2">
            <input name="username_account" type="text" class="form-control" id="username" placeholder="Enter your username" required>
            <label for="username">Username</label>
          </div>
      
          <div class="form-floating my-2">
            <input name="email_account" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating my-2">
            <input name="password_account1" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
          <div class="form-floating my-2">
            <input name="password_account2"type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password" required>
            <label for="ConfirmPassword">Confirm Password</label>
          </div>
      
          <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
          <p class="mt-5 mb-3 text-body-secondary"><span class="highlight1">Already have an account?</span> <a href="form-login.php">Click here</a> <span class="highlight1">to sign in</span></p>
        </form>
      </main>

      <div class="container">
        <footer class="text-center py-3 my-4 border-top">
            <span class="mb-3 mb-md-0 text-body-secondary">©Electronic book</span>
        </footer>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>