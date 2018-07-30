<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>Ad Confirmation</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Ad Confirmation Info</i></h1>
    <table align="center" border="" height="350" width="700">

        <tr align="center">
            <th>Ad Confirmation ID</th>
            <th>Ad ID</th>
            <th>Location</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            <td>
                101
            </td>
            <td>
                202
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>

        <tr align="center">
            <td>
                102
            </td>
            <td>
                203
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>


        <tr align="center">
            <td>
                214
            </td>
            <td>
                354
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>


        <tr align="center">
            <td>
                353
            </td>
            <td>
                333
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accepted" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>

        <tr align="center">
            <td>
                337
            </td>
            <td>
                244
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accepted" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>
        <tr align="center">
            <td>
                344
            </td>
            <td>
                399
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accept" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>

        <tr align="center">
            <td>
                350
            </td>
            <td>
                440
            </td>
            <td>
                <input type="submit" name="Choose" value="Choose">
                <input type="submit" name="ok" value="&nbsp;ok&nbsp;" />
            </td>
            <td>
                <input type="button" style="height:20px;width:66px" value="Accepted" onclick="window.location.href='#.html'" />
                <input type="button" style="height:20px;width:66px" value="Decline" onclick="window.location.href='#'"
                />
            </td>
        </tr>
    </table><br/>
    <div align="center">
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>