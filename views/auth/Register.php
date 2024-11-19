<div class="container-fluid h-100 register">
    <div class="row h-100 p-3">
        <!-- Sezione sinistra -->
        <div
            class="col-md-6 d-flex flex-column justify-content-center align-items-center p-5">
            <div class="w-75">
                <!-- Logo -->
                <div class="mb-4 text-center">
                    <img
                        src="./assets/imgs/logo.png"
                        alt="Logo"
                        style="width: 50px" />
                </div>

                <h2 class="text-center fw-bold fs-1">Nice to meet you</h2>
                <p class="text-center mb-4">Register to create a new account.</p>

                <form method="post" action="/register">
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-5">
                            <label for="first_name" class="form-label">First Name</label>
                            <input
                                type="text"
                                name="first_name"
                                class="form-control"
                                id="first_name"
                                placeholder="Enter your First Name" />
                        </div>
                        <div class="col-5">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input
                                type="text"
                                name="last_name"
                                class="form-control"
                                id="last_name"
                                placeholder="Enter your Last Name" />
                        </div>
                    </div>

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

                    <div class="mb-3">
                        <label for="re_password" class="form-label">Reinsert Password</label>
                        <div class="input-group">
                            <input
                                type="password"
                                name="re_password"
                                class="form-control"
                                id="re_password"
                                placeholder="Enter again your password" />
                            <button
                                class="btn btn-outline-secondary"
                                type="button"
                                id="toggleRePassword">
                                <i class="fa fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="btn btn-dark w-100 mb-3 fw-bold py-4 my-btn">
                        Create Account
                    </button>

                    <button
                        type="button"
                        class="btn btn-outline-secondary w-100 py-3">
                        <i class="fas fa-envelope me-2"></i> Register with Google
                    </button>

                    <p class="text-center mt-4">
                        Already have an account?
                        <a href="/login.html" class="text-decoration-none">Sign In</a>
                    </p>
                </form>
            </div>
        </div>

        <!-- Sezione destra -->
        <div
            class="col-md-6 d-none d-md-flex flex-column justify-content-center align-items-center text-white p-5"
            style="
            background-image: url('./assets/imgs/girl-headphone-3.jpg');
            background-size: cover;
            background-position: center;
            border-radius: 25px;
          ">
            <h5 class="text-uppercase">dimazanre.com</h5>
            <h1 class="display-4 fw-bold">You're Welcome TechsX</h1>
            <p class="mt-3 fs-5">
                You can get everything you want if you work hard, trust the process,
                and stick to the plan.
            </p>
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