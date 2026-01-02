<html>
    <body>
        <h1>Welcome to Our Transportation Service</h1>
        <p>We offer a variety of transportation options to suit your needs.</p>
        <p>Contact us today !</p>

        <style>
            body 
            {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
            }
            h1 
            {
                color: #333;
            }
            p 
            {
                color: #666;
            }
            #b
            {
                background-color: #fff;
                border: 1px solid #ccc;
                padding: 10px;
                margin-top: 20px;
            }
            </style>
            <form action="customer.php" method=GET>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" value="Submit" onclick="submitForm()">
            </form>
        <?php
        function submitForm()
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $conn = mysqli_connect("localhost", "root", "", "fleet");
            $run = "INSERT INTO `feedback`(`name`, `email`, `feedback`) VALUES ('$name', '$email', '$message')";
            $check = mysqli_query($conn, $run);
        }
        submitForm();
        ?>
        <script>
            function submitForm() {
                alert("Thank you for your feedback!");
            }
        </script>
        <div id ="b"><p>For inquiries, please email us at:</p>
        <p><a href="mailto:narpit717@gmail.com">narpit717@gmail.com</a></p>
        </div>
    </body>

</html>