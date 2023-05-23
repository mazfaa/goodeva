<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Login | Goodeva Technology</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
</head>
<body>
  <div class="col-md-3 position-absolute top-50 start-50 translate-middle">
    <h3 class="text-primary text-center mb-5">Goodeva Technology</h3>
      <div class="card">
          <div class="card-content">
              <div class="card-body">
                  <form action="{{ route('login') }}" method="post" class="form form-vertical">
                    @csrf
                      <div class="form-body">
                          <div class="row">
                              <div class="col-12 mb-2">
                                  <div class="form-group has-icon-left">
                                      <label for="email-id-icon">Email</label>
                                      <div class="position-relative">
                                          <input type="text" name="email" class="form-control" placeholder="Email" id="email-id-icon">
                                          <div class="form-control-icon">
                                              <i class="bi bi-envelope"></i>
                                          </div>
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="col-12">
                                  <div class="form-group has-icon-left">
                                      <label for="password-id-icon">Password</label>
                                      <div class="position-relative">
                                          <input type="password" name="password" class="form-control" placeholder="Password"
                                              id="password-id-icon">
                                          <div class="form-control-icon">
                                              <i class="bi bi-lock"></i>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-12 d-flex justify-content-start mt-2">
                                  <button type="submit" class="btn btn-sm btn-primary me-1 mb-1"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      
    <footer>
      <div class="footer clearfix mb-0 text-muted">
        <div class="text-center">
          <p>2023 &copy; Goodeva Technology</p>
        </div>
      </div>
    </footer>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/app.js"></script>
</body>
</html>
