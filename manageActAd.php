<?php
session_start();

if ($_SESSION['loggedIn'] != 1)
{
    header("location: SignIn.php");
}
?>
<html>

<head>
    <title>rePost Ad information</title>
</head>

<body>
<br><br><br><br><br>
    <h1 align="center"><i>Activated Ad Info</i></h1>
    <table align="center">

        <tr>
            <td>
                        Filter By:

                        <select>
                            <option>All</option>
                            <option>Active</option>
                            <option>Expire</option>

                        </select>
            </td>
        </tr>
    </table>
    <table align="center" border="" height="350" width="800">

        <tr align="center">
            <th>Ad ID</th>
            <th>Status</th>
            <th>Accepted Admin</th>
            <th>Location</th>
            <th>Action&emsp;</th>


        </tr>
        <tr align="center">
            <td>
                A1/72
            </td>
            <td>
                Active
            </td>
            <td>imn.admin</td>
            <td>
                <input type="button" style="height:20px;width:55px" value="see" onclick="window.location.href='#.html'" />
                <input type="submit" name="Rechoose" value="Rechoose">
                
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>


        <tr align="center">
            <td>
                A107
            </td>
            <td>
                Active
            </td>
            <td>imn.admin</td>
            <td>
                <input type="button" style="height:20px;width:55px" value="see" onclick="window.location.href='#.html'" />
                <input type="submit" name="Rechoose" value="Rechoose">
                
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>

        <tr align="center">
            <td>
                A177
            </td>
            <td>
                Expire
            </td>
            <td>abc012</td>
            <td>
                <input type="button" style="height:20px;width:55px" value="see" onclick="window.location.href='#.html'" />
                <input type="submit" name="Rechoose" value="Rechoose">
                
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>


        <tr align="center">
            <td>
                A105
            </td>
            <td>
                Expire
            </td>
            <td>xyz34</td>
            <td>
                <input type="button" style="height:20px;width:55px" value="see" onclick="window.location.href='#.html'" />
                <input type="submit" name="Rechoose" value="Rechoose">
                
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            <td>
                A106
            </td>
            <td>
                Active
            </td>
            <td>imn.admin</td>
            <td>
                <input type="button" style="height:20px;width:55px" value="see" onclick="window.location.href='#.html'" />
                <input type="submit" name="Rechoose" value="Rechoose">
                
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>



        <tr align="center">
            <td>
                A712
            </td>
            <td>
                Active
            </td>
            <td>imn.admin</td>
            <td>
                <input type="button" style="height:20px;width:55px" value="see" onclick="window.location.href='#.html'" />
                <input type="submit" name="Rechoose" value="Rechoose">
            </td>
            <td>
                <input type="button" style="height:20px;width:60px" value="Remove" onclick="window.location.href='#.html'" />

            </td>
        </tr>

    </table>
    <div align="center"><br>
    <a href="superAdminPortal.php">Go back to Profile Home</a>
    </div>
</body>

</html>