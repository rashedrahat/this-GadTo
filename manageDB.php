<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>DB Backup/Restore</title>
</head>

<body>
    <br><br><br><br>
    <h2 align="center"><i>Manage Database</i></h2>
    <table align="center" height="200" width="400">

        <tr align="center">
            <td>
                <img src="imge.jpg" width="300" height="200">
            </td>
        </tr>
    </table>
    <table align="center" border="" height="200" width="500">
        <tr aria-rowspan="2">
            <td td rowspan="5">&emsp;D
                <br/>&emsp;A
                <br/>&emsp;T
                <br/>&emsp;A
                <br/>&emsp;B
                <br/>&emsp;A
                <br/>&emsp;S
                <br/>&emsp;E</td>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;BACK UP</td>
        </tr>
        <tr>
            <td>&emsp;&emsp;Upload SQL File:
                <input type="file" name="choose" value="choose">
                <br/>
                <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <input type="submit" name="ok" value="Backup Database" />
            </td>
        </tr>
        <tr>
            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;RESTORE</td>
        </tr>

        <tr>
            <td>&emsp;&emsp;Restore SQL File:
                <input type="file" name="choose" value="choose">
                <br/>
                <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <input type="submit" name="ok" value="Restore Database" />
            </td>
        </tr>
    </table>
<div align="center"><br>
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>