<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Page</title>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/back-asset/register.css">
</head>
<body>
<div class="shimmer-bg"></div>
<div class="register-container">
    <h2>Register</h2>
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputName" placeholder="Full Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email address" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputConfirmPassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck">
            <label class="form-check-label" for="exampleCheck">I agree to the terms and conditions</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Register</button>
    </form>
    <div class="mt-3 text-center">
        <p>Already have an account? <a href="login.html" class="text-primary">Login here</a></p>
    </div>
</div>
</body>
</html>
