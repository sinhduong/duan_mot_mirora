<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản</title>
    <script>
        function updateRole(userId) {
            var roleSelect = document.getElementById("role_" + userId);
            var selectedRole = roleSelect.value;

            // Gửi AJAX request để cập nhật vai trò
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "update_role.php", true); // Trang xử lý update vai trò
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert("Cập nhật vai trò thành công!"); // Thông báo khi cập nhật thành công
                }
            };
            xhr.send("id=" + userId + "&vai_tro=" + selectedRole);
        }
    </script>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Tài Khoản</th>
                <th scope="col">Tên Tài Khoản</th>
                <th scope="col">Họ Và Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Avt</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Vai trò</th>
                <th scope="col">Thao tác</th>
            </tr>
            <?php
            // Lấy dữ liệu tất cả tài khoản
            $taikhoan = loadall_taikhoan();

            // Duyệt qua từng tài khoản và hiển thị thông tin
            foreach ($taikhoan as $row):
                extract($row);
            ?>
                <tr>
                    <th><?= $id ?></th>
                    <td><?= $name ?></td>
                    <td><?= $ho_ten ?></td>
                    <td><?= $email ?></td>
                    <td><?= $dia_chi ?></td>
                    <td><img style="width:100px;height:150px;" src="../../../public/images/<?= $avt ?>" alt="Ảnh đại diện"></td>
                    <td><?= $pass ?></td>
                    <td><?= $phone ?></td>
                    <td>
                        <select id="role_<?= $id ?>" onchange="updateRole(<?= $id ?>)">
                            <option value="0" <?= $vai_tro == 0 ? "selected" : "" ?>>Người dùng</option>
                            <option value="1" <?= $vai_tro == 1 ? "selected" : "" ?>>Admin</option>
                        </select>
                    </td>
                    <td>
                        <a href="index.php?act=deletetk&header=alltaikhoan&id=id&table=tai_khoan&iddl=<?= $id; ?>"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này không?');">
                            <button class="btn btn-danger">Xóa</button>
                        </a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </thead>
        <tbody>
            <!-- Dữ liệu tài khoản sẽ được hiển thị ở đây -->
        </tbody>
    </table>
</body>
<script>
    function updateRole(userId) {
        var roleSelect = document.getElementById("role_" + userId);
        var selectedRole = roleSelect.value;

        // Gửi AJAX request để cập nhật vai trò
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_role.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                alert("Cập nhật vai trò thành công!"); // Thông báo khi cập nhật thành công
            }
        };
        xhr.send("id=" + userId + "&vai_tro=" + selectedRole);
    }
</script>

</html>