<!-- Main Wrapper Start -->
<style>
    .toggle-password {
        cursor: pointer;
        position: absolute;
        /* Đặt nó vào vị trí chính xác */
        right: 15px;
        /* Điều chỉnh theo cần thiết */
        top: 38px;
        /* Điều chỉnh cho phù hợp với chiều cao của ô input */
    }

    .password-group {
        position: relative;
        /* Để định vị biểu tượng "mắt" chính xác */
    }

    .error-message {
        color: red;
        /* Màu chữ đỏ cho thông báo lỗi */
        display: none;
        /* Ẩn thông báo lỗi ban đầu */
    }
</style>

<div style="padding-left:700px" class="main-content-wrapper">
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <center>
                        <h2 class="heading-secondary mb--30">Đăng ký</h2>
                    </center>
                    <div class="login-reg-box p-4 bg--2">
                    
                        <form class="form" action="" method="post" onsubmit="validateForm(event)">
                            <div class="form__group mb--20">
                                <label class="form__label" for="name">
                                    Tên tài khoản <span>*</span>
                                </label>
                                <input type="text" name="name" id="name" class="form__input form__input--2">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="email">
                                    Email <span>*</span>
                                </label>
                                <input type="email" name="email" id="email" class="form__input form__input--2">
                                <span id="email-error" class="error-message"></span> <!-- Thêm span cho thông báo lỗi email -->
                            </div>
                            <div class="form__group mb--20 password-group">
                                <label class="form__label" for="password">
                                    Mật khẩu <span>*</span>
                                </label>
                                <input type="password" name="pass" id="password" class="form__input form__input--2">
                                <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
                            </div>
                            <div class="form__group mb--20 password-group">
                                <label class="form__label" for="cfpassword">
                                    Nhập lại mật khẩu <span>*</span>
                                </label>
                                <input type="password" name="cfpass" id="cfpassword" class="form__input form__input--2">
                                <span class="toggle-password" onclick="togglePassword('cfpassword')">👁️</span>
                                <span id="password-error" class="error-message"></span> <!-- Thêm span cho thông báo lỗi mật khẩu -->
                            </div>
                            <div class="form__group">
                                <button type="submit" name="dangky" class="btn btn-5 btn-style-2">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Wrapper End -->

<script>
    function togglePassword(inputId) {
        const passwordField = document.getElementById(inputId);
        if (passwordField.type === "password") {
            passwordField.type = "text";
        } else {
            passwordField.type = "password";
        }
    }

    function validateForm(event) {
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("cfpassword").value;
        const email = document.getElementById("email").value;
        const passwordError = document.getElementById("password-error");
        const emailError = document.getElementById("email-error");

        // Ẩn thông báo lỗi trước khi kiểm tra
        passwordError.style.display = "none";


        // Kiểm tra độ dài mật khẩu
        if (password.length < 8 || password.length > 20) {
            passwordError.innerText = "Mật khẩu phải từ 8 đến 20 ký tự.";
            passwordError.style.display = "block"; // Hiện thông báo lỗi
            event.preventDefault(); // Ngăn không cho gửi biểu mẫu
            return;
        }

        // Kiểm tra mật khẩu có khớp
        if (password !== confirmPassword) {
            passwordError.innerText = "Mật khẩu và xác nhận mật khẩu không khớp.";
            passwordError.style.display = "block"; // Hiện thông báo lỗi
            event.preventDefault(); // Ngăn không cho gửi biểu mẫu
            return;
        }
    }
</script>