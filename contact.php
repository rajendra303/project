<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000; 
            color: #fff; 
        }

        .contact-container {
            display: flex;
            justify-content: center;
            align-items: stretch; 
            height: 100vh;
        }

        .contact-image {
            flex: 1;
            padding: 20px;
            background: url('https://e0.pxfuel.com/wallpapers/263/444/desktop-wallpaper-landscape-nature-mountains-sea-city-coast.jpg') center/cover no-repeat; 
            min-height: 300px; 
        }

        .contact-form {
            flex: 1;
            background-color: #000; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .contact-form h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff; 
            color: #000; 
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Contact Us</title>
</head>
<body>
    <div class="contact-container">
        <div class="contact-image"></div>
        <div class="contact-form">
            <h1>CONTACT US</h1>
            <p>Planning to visit Indonesia soon? Get insider tips on where to go, things to do, and find the best deals for your next adventure.</p><br><br>
            <form action="conn.php" method="post">
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full-name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="service">Service</label>
                    <input type="text" id="service" name="service" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
