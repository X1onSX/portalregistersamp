<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validation</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <form id="passwordForm">
        <label for="password1">Password 1:</label>
        <input type="password" id="password1" name="password1" required><br><br>
        
        <label for="password2">Password 2:</label>
        <input type="password" id="password2" name="password2" required><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <script>
        document.getElementById('passwordForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            var password1 = document.getElementById('password1').value;
            var password2 = document.getElementById('password2').value;

            if (validatePassword(password1) && validatePassword(password2)) {
                if (password1 === password2) {
                    Swal.fire({
                        title: "Success",
                        text: "Passwords are valid and match!",
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                } else {
                    Swal.fire({
                        title: "Error",
                        text: "Passwords do not match!",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            } else {
                Swal.fire({
                    title: "Error",
                    text: "Passwords must be at least 8 characters long and contain at least one uppercase letter!",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });

        function validatePassword(password) {
            var hasUpperCase = /[A-Z]/.test(password);
            var isLongEnough = password.length > 8;
            return hasUpperCase && isLongEnough;
        }
    </script>
</body>
</html>
