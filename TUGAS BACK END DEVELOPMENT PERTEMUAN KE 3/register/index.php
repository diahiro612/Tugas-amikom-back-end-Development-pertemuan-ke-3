<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register New Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2e3b4e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            overflow: hidden;
        }
        .image-container {
            padding: 20px;
        }
        .image-container img {
            width: 70%;
            height: auto;
            border-radius: 10px;
        }
        .form-container {
            padding: 40px;
            width: 400px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .radio-group {
            display: flex;
            gap: 10px;
        }
        .form-group button {
            background-color: #ff4d4f;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group button:hover {
            background-color: #e04040;
        }
        .form-footer {
            margin-top: 10px;
            text-align: center;
        }
        .form-footer a {
            color: #0066cc;
            text-decoration: none;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="image-container">
        <img src="https://i.pinimg.com/736x/c1/10/0b/c1100b2ff0e4a9d76c536a2eca56a36a.jpg" alt="A child sitting next to a plant">
    </div>
    <div class="form-container">
        <h2>Register New Account</h2>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="course">Matakuliah:</label>
                <input type="text" id="course" name="course" value="Algoritma & Pemrograman" readonly>
            </div>
            <div class="form-group">
                <label>Kelas:</label>
                <div class="radio-group">
                    <label><input type="radio" name="class" value="01" required> 01</label>
                    <label><input type="radio" name="class" value="02"> 02</label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div class="form-footer">
            <a href="#">Forgot password?</a><br>
            <a href="login.php">have an account? Login here</a>
        </div>
    </div>
</div>

</body>
</html>