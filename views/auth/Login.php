<div class="container-fluid h-100 login">
    <div class="row h-100 p-3">
        <!-- Sezione sinistra -->
        <div
            class="col-md-6 d-none d-md-flex flex-column justify-content-center align-items-center text-white p-5"
            style="
            background-image: url('./assets/imgs/girl-headphone-2.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 25px;
          ">
            <h5 class="text-uppercase">dimazanre.com</h5>
            <h1 class="display-4 fw-bold">Techs are anywere</h1>
            <p class="mt-3 fs-5">
                You can get everything you want if you work hard, trust the process,
                and stick to the plan.
            </p>
        </div>

        <!-- Sezione destra -->
        <div
            class="col-md-6 h-100  d-flex flex-column justify-content-center align-items-center p-5">
            <div class="w-75">
                <!-- Logo -->
                <div class="mb-4 text-center">
                    <img
                        src="./assets/imgs/logo.png"
                        alt="Logo"
                        style="width: 50px" />
                </div>

                <button
                    type="submit"
                    class="btn btn-dark w-100 mb-3 fw-bold py-3 my-btn">
                    Guest
                </button>

                <h2 class="text-center fw-bold fs-1">Welcome Back</h2>
                <p class="text-center mb-4">
                    Enter your email and password to access your account.
                </p>

                <form method="post" action="/login">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter your email" />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                id="password"
                                placeholder="Enter your password" />
                            <button
                                class="btn btn-outline-secondary"
                                type="button"
                                id="togglePassword">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div
                        class="d-flex justify-content-between align-items-center mb-3 py-2">
                        <div>
                            <input type="checkbox" id="remember" />
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot Password?</a>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-dark w-100 mb-3 fw-bold py-4 my-btn">
                        Sign In
                    </button>

                    <button
                        type="button"
                        class="btn btn-outline-secondary w-100 py-3">
                        <i class="fas fa-envelope me-2"></i> Sign In with Google
                    </button>

                    <p class="text-center mt-4">
                        Don’t have an account?
                        <a href="/register" class="text-decoration-none">Sign Up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
    // Mostrare/Nascondere la password
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", function() {
        const type =
            passwordInput.getAttribute("type") === "password" ?
            "text" :
            "password";
        passwordInput.setAttribute("type", type);
        this.querySelector("i").classList.toggle("fa-eye");
        this.querySelector("i").classList.toggle("fa-eye-slash");
    });
</script>