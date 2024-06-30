<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .signup-container {
            margin-top: 5vh;
        }
        .signup-title {
            color: #71A430;
        }
        .signup-button {
            background-color: #71A430;
        }
        .signup-input {
            padding: 0.75rem;
            border-radius: 0.5rem;
        }
        .signup-img {
            margin-top: 5vh;
        }
        .error-message {
            color: red;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        /* Tambahkan style untuk shadow merah pada error */
        .signup-input.error {
            border: 2px solid red !important;
            box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25) !important;
        }
    </style>
</head>
<body>
    <nav class="container my-3">
        <div class="col-3">
            <img src="<?=base_url('assets/images/logo.jpg') ?>" class="img-fluid" alt="Logo">
        </div>
    </nav>
    <div class="container d-flex flex-column align-items-center signup-container">
        <div class="row w-100">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center text-center mb-4 mb-md-0">
                <h1 class="fw-bold signup-title">Sign Up</h1>
                <div class="mt-5 w-75">
                    <form id="signupForm" method="POST" action="submit.php">
                        <input class="signup-input w-100 mb-3" type="text" placeholder="Username" name="username" required>
                        <input class="signup-input w-100 mb-3" type="email" placeholder="Your Email" name="email" required>
                        <input style="outline: none;" id="password" name="password" class="signup-input w-100 mb-3" type="password" placeholder="Password" required>
                        <input style="outline: none;" id="confirmPassword" name="confirmPassword" class="signup-input w-100 mb-1" type="password" placeholder="Confirm Password" required>
                        <div id="passwordMismatch" class="error-message"></div>
                        <button type="submit" class="signup-button text-white fw-bold w-100 p-2 mb-3">Create Account</button>
                        <p class="fw-bold">Sudah Punya Akun? <a href="/" class="fw-bold text-primary">Sign In</a></p>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img src="<?=base_url('assets/images/register.svg') ?>" class="img-fluid signup-img" alt="Register Illustration">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('#signupForm');
        const passwordInput = document.querySelector('#password');
        const confirmPasswordInput = document.querySelector('#confirmPassword');
        const passwordMismatchError = document.querySelector('#passwordMismatch');

        confirmPasswordInput.addEventListener('input', function() {
            if (confirmPasswordInput.value !== passwordInput.value) {
                confirmPasswordInput.classList.add('error');
                passwordMismatchError.textContent = 'Password and Confirm Password do not match';
            } else {
                confirmPasswordInput.classList.remove('error');
                passwordMismatchError.textContent = '';
            }
        });

        form.addEventListener('submit', function(event) {
            if (confirmPasswordInput.value !== passwordInput.value) {
                event.preventDefault();
                confirmPasswordInput.classList.add('error');
                passwordMismatchError.textContent = 'Password and Confirm Password do not match';
            }
        });
    });
    </script>
</body>
</html>
