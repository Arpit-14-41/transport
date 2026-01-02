<html>
    <body>
        <style>
            #img
            {
                width:100%;
                position: relative;
            }
            form
            {
               
                width: 26%;
                height: 50%;
                position: absolute;
                margin-top: -30%;
                margin-left: 31.9%;
                opacity: 0.9;
                font-size: large;
                background-color: lightgrey;
                border-radius: 10px;
                position: absolute;
                box-shadow: 1px 7px 15px 5px #10f71fff, 1px 7px 15px 4px #fe0202ff;

            }
            #aa
            {
                width: 10%;
            }
            #h1a
            {
                position: absolute;
                margin-left: 15%;
                margin-top: -50%;
                opacity: 0.9;
                font-size: xx-large;
                width: 80%;
                background-image: radial-gradient(whitesmoke 20%, blue 60%,yellow 10%);
                text-shadow:whitesmoke;
            }
                        
            
        </style>
           
        <div id="a"><img src="Bus model _ Premium Vector.jpeg"  alt="loss" width="100%"></div>
        <form action="busCopy.php" method=GET>
            <h1 id="h1a">Bus Booking</h1>
            <label>name:</label>
            <input type="text" placeholder="enter your name" name="name"><br>
            <label>email:</label><input type="text" placeholder="enter your email" name="email"><br>
            <label>adhar:</label>
            <input type="text" placeholder="enter your adhar-no" name="adhar"><br>
            <input type="text"  id="u" placeholder="FROM STATION" name="from_stn">
            <input type="text" id="aa" placeholder="<->">
            <input type="text" placeholder="TO STATION" name="to_stn"><br>
            <label>Date:</label>
            <input type="date" name="date"><br>
            <label>gender:
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female<br></label>
            <label>bus type:
            <input type="radio" name="bus_type" value="AC">AC
            <input type="radio" name="bus_type" value="NON-AC">NON-AC<br></label>
            <input type="reset">
            <input type="submit" onclick="su()"><br>       
        </form>
        <?php
        function su() 
        {
        $conn=mysqli_connect("localhost","root","","fleet");
        $name=$_GET['name'];
        $email=$_GET['email'];
        $adhar=$_GET['adhar'];
        $from_stn=$_GET['from_stn'];
        $to_stn=$_GET['to_stn'];
        $date=$_GET['date'];
        $gender=$_GET['gender'];
        $bus_type=$_GET['bus_type'];
        $run="INSERT INTO `bus_record`(`Name`, `Email`, `Addhar`, `From_desti`, `To_desti`, `date`, `Gender`, `type`) VALUES ('$name','$email','$adhar','$from_stn','$to_stn','$date','$gender','$bus_type')";
        $check=mysqli_query($conn,$run);
        if($check)
        {
            echo"inserted";
        }
        else
        {
            echo"fail";
        }
        }
        su();
        ?>
    </body>
</html>