<div style="padding-left:700px" class="main-content-wrapper">
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-md--40">
                    <center><h2 class="heading-secondary mb--30">Đăng nhập</h2></center>
                    <div class="login-reg-box p-4 bg--2">
                        <form class="form" method="post" action="">
                            <div class="form__group mb--20">
                                <label class="form__label" for="email">
                                    Email <span>*</span>
                                </label>
                                <input type="text" name="email" id="email" class="form__input form__input--2">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="password">
                                    Mật khẩu <span>*</span>
                                </label>
                                <div style="position: relative;">
                                    <input type="password" name="pass" id="password" class="form__input form__input--2">
                                    <span id="togglePassword" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                        👁️
                                    </span>
                                </div>
                            </div>
                            <div class="form__group d-flex align-items-center">
                                <button type="submit" name="dangnhap" class="btn btn-5 btn-style-1 color-1">Đăng nhập</button>
                                <div class="custom-checkbox ml--20">
                                    <input type="checkbox" name="sessionStore" id="sessionStore" class="form__checkbox">
                                    <label for="sessionStore" class="form__checkbox--label">Ghi nhớ tài khoản</label>
                                </div>
                            </div>
                            <a href="index.php?redirect=quenmk" class="forgot-pass">Quên mật khẩu?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // Toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        // Toggle the eye icon (optional)
        this.textContent = type === 'password' ? '👁️' : '🙈';
    });
</script>
