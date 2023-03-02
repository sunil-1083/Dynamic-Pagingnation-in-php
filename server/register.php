<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr,th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="reciver.php" method="POST">
        <center>
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Enter Your Name"></td>
                </tr>
                
                <tr>
                    <td>Father Name:</td>
                    <td><input type="text" name="fname" placeholder="Enter Your Father Name"></td>
                </tr>

                <tr>
                    <td>Mother Name</td>
                    <td><input type="text" name="mname" placeholder="Enter Your Mother Name"></td>
                </tr>

                <tr>
                    <td>Number:</td>
                    <td><input type="text" name="number" placeholder="Enter Your Number"></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="email" name="mail" placeholder="Enter Your Email"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                </tr>

                <tr>
                    <td colspan="2"><center><input type="submit" value="Submit"></center></td>
                </tr>

            </table>
            
                <tr>
                    <td> 
                        <a href="http://localhost/pagingnation/server/register.php">Add</a>
                        <a href="http://localhost/pagingnation/server/view.php">View</a>
                    </td>
                </tr>
        </center>
    </form>
   
</body>
</html>