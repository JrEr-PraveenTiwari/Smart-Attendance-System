<?php

include('adnav.php');

?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title>Responsive Registaration Form</title>



    <style type="text/css">
        body {
            background: linear-gradient(90deg, #C7C5F4, #776BCC);
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        input[type=email],
        input[type=number],
        input[type=select],
        input[type=date],
        input[type=select],
        input[type=password],
        input[type=tel] {
            width: 45%;
            padding: 12px;
            border: 1px solid rgb(168, 166, 166);
            border-radius: 4px;
            resize: vertical;
        }

        textarea {
            width: 45%;
            padding: 12px;
            border: 1px solid rgb(168, 166, 166);
            border-radius: 4px;
            resize: vertical;
        }

        input[type=radio],
        input[type=checkbox] {
            width: 1%;
            padding-left: 0%;
            border: 1px solid rgb(168, 166, 166);
            border-radius: 4px;
            resize: vertical;
        }

        h1 {
            font-family: Arial;
            font-size: medium;
            font-style: normal;
            font-weight: bold;
            color: brown;
            text-align: center;
            text-decoration: underline;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #0ca116;
            color: yellow;
            word-spacing: 10px;
            font-weight: bold;
            padding: 12px 30%;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: left;
            margin-left: 20px;
        }

        input[type=submit]:hover {
            background-color: #32a336;
        }

        .container {
            border-radius: 5px;

            padding: 20px;

        }

        .col-10 {
            float: left;
            width: 10%;
            margin-top: 6px;
        }

        .col-90 {
            float: left;
            width: 90%;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        form {
            margin-left: 99px;
        }

        @media screen and (max-width: 600px) {

            .col-10,
            .col-90,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        select {
            width: 45%;
            padding: 12px;
            border: 1px solid rgb(168, 166, 166);
            border-radius: 4px;
            resize: vertical;
        }
    </style>

</head>

<body>
    <br>
    <h1>Student Registration Form</h1>
    <center>
        <form action="qrgen.php" method="POST">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <label for="fname">First Name:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="name" name="name" placeholder="Enter your first name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="fname">Roll No:</label>
                    </div>
                    <div class="col-90">
                        <input type="text" id="rollno" name="rollno" placeholder="Enter your Roll No">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="email">Email:</label>
                    </div>
                    <div class="col-90">
                        <input type="email" id="email" name="email" placeholder="it should contain @,.">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="mobile">Mobile:</label>
                    </div>
                    <div class="col-90">
                        <input type="tel" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="gender" required>Gender:</label>
                    </div>
                    <div class="col-90">
                        <input type="radio" id="male" name="gender" value="male" />Male
                        <input type="radio" id="female" name="gender" value="female" />Female
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="dob">Date Of Birth:</label>
                    </div>
                    <div class="col-90">
                        <input type="Date" id="dob" name="dob">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="address">Address:</label>
                    </div>
                    <div class="col-90">
                        <textarea name="address" id="address" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10">
                        <label for="qualification" required>Qualification:</label>
                    </div>
                    <div class="col-90">
                        <select name="qualification" id="qualification">
                            <option value=" ">Select Qualification:</option>
                            <option value="Graduation">Graduation</option>
                            <option value="BTech.">BTech.</option>
                            <option value="MTech.">MTech.</option>
                            <option value="MCA">MCA</option>
                            <option value="BCA">BCA</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <label for="specialization">Specialization:</label>
                    </div>
                    <div class="col-90">
                        <!--  <input type="checkbox" class="specialization" id="cs" name="specialization" value="Computer Science">Computer Science<br/>
                    <input type="checkbox" class="specialization" id="it" name="specialization" value="Information Technology">Information Technology<br/>
                    <input type="checkbox" class="specialization" id="ca" name="specialization" value="Computer Architecture">Computer Architecture<br/>
                    <input type="checkbox" class="specialization" id="tc" name="specialization" value="Tele Communication">Tele Communication<br/>
                -->
                        <select name="specialization" id="specialization">
                            <option value=" ">Select specialization:</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Electrical">Electrical</option>
                            <option value="Machenical">Machenical</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Cement Technology">Cement Technology</option>
                        </select>


                    </div>
                </div>
                <div class="row">
                    <!--  <div class="col-10">
                        <label for="password">Password:</label>
                    </div>
                    <!-- <div class="col-90">
                        <input type="password" id="password" name="password" maxlength="8">
                    </div>-->
                </div><br><br>
                <div class="row">
                    <input type="submit" value="Register" onclick="SaveStudentDetails()">
                </div>
            </div>
            </div>
        </form>
    </center>
</body>

</html>