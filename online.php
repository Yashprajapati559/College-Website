<!DOCTYPE html>
<html>
<head>
    <title>Online Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: lightblue;
        }

        .wrapper {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
			overflow-y: auto; /* Add vertical scrollbar */
            max-height: 150vh; /* Set maximum height for scrollbar */
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 10px 0;
            background-color: #343a40;
            color: #ffffff;
            border-radius: 0 0 8px 8px;
        }

        .btn-submit {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        /* Media Queries */
        @media screen and (max-width: 768px) {
            .wrapper {
                max-width: 90%;
            }
            .btn-submit {
                font-size: 16px;
            }
        }

		input[type="text"],
		input[type="email"],
		select,
		textarea {
    	width: 100%;
    	padding: 10px;
    	margin-bottom: 20px;
    	border: 2px solid black; /* Increase border thickness */
    	border-radius: 4px;
    	box-sizing: border-box;
}
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h1 class="heading">Govt. Engineering College Baran</h1>
        <h2 class="heading2">REGISTRATION FORM</h2>
    </div>
    <form action="online.php" method="POST">

	<div class="content">
            <?php
            if (isset($_POST['submit'])) {
                $conn = mysqli_connect('localhost', 'root', '', 'imperial_college');
                if (!$conn) {
                    echo mysqli_error();
                }
                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $surname = $_POST['surname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $programme = $_POST['programme'];
                $education = $_POST['education'];
                $mathematics = $_POST['mathematics'];
                $physics = $_POST['physics'];
                $chemistry = $_POST['chemistry'];
                $biology = $_POST['biology'];
                $english = $_POST['english'];
                $certificate = $_POST['certificate'];
                $relationship = $_POST['relationship'];
                $query = "INSERT INTO `application` VALUES ('','$firstname','$middlename','$surname','$phone','$email','$programme','$education','$mathematics','$physics','$chemistry','$biology','$english','$certificate','$relationship')";
                if ($query_run = mysqli_query($conn, $query)) {
                    echo "<center>Thank you for your application we shall contact you as soon as possible..!</center>";
                } else {
                    echo "<center>Sorry Try again..!</center>";
                }
            } else {
                echo "<center><b>*All field are required</b></center>";
            }
            ?>
            <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">FIRSTNAME</label>
                        <input type="text" class="form-control" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="middlename">MIDDLENAME</label>
                        <input type="text" class="form-control" name="middlename">
                    </div>
                    <div class="form-group">
                        <label for="surname">SURNAME</label>
                        <input type="text" class="form-control" name="surname" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">PHONE NO:</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">EMAIL</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="programme">PROGRAMME</label>
                        <select class="form-control" name="programme" required>
                            <option value="">Choose programme</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Agriculture Engineering">Agriculture Engineering</option>
                            <option value="Computer Science">Computer Science</option>
                        </select>
                    </div>
					<div class="form-group">
                        <label for="relationship">RELATIONSHIP</label>
                        <select class="form-control" name="relationship" required>
                            <option value="">Choose relationship status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Engaged">Engaged</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="education">EDUCATION LEVEL</label>
                        <select class="form-control" name="education" required>
                            <option value="">Choose education level</option>
                            <option value="Form four">Form four</option>
                            <option value="Form six">Form six</option>
                            <option value="Certificate">Certificate</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>MARKS</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>SUBJECT</th>
                                    <th>GRADE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mathematics</td>
                                    <td><input type="text" class="form-control" name="mathematics" required></td>
                                </tr>
                                <tr>
                                    <td>Physics</td>
                                    <td><input type="text" class="form-control" name="physics" required></td>
                                </tr>
                                <tr>
                                    <td>Chemistry</td>
                                    <td><input type="text" class="form-control" name="chemistry" required></td>
                                </tr>
                                <tr>
                                    <td>Biology</td>
                                    <td><input type="text" class="form-control" name="biology" required></td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td><input type="text" class="form-control" name="english" required></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="certificate">UPLOAD CERTIFICATE</label>
                        <input type="file" class="form-control-file" name="certificate" required>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-submit">Submit</button>
            </div>
        </div>
	</div>
    </form>
    <div class="footer">
        <p>&copy; 2017 Engineering College Baran</p>
        <p>Designed By: HOD Computer Science Department</p>
    </div>
</div>
</body>
</html>
