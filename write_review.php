<?php
session_start();

if ($_SESSION['user_name'] != true)
{
    header("location: SignIn.php");
}
?>
<html>
    <title>Post</title>
    <body>
            <style>
                    input[type=text] {
                        width: 100%;
                        padding: 100px 300px;
                        margin: 8px 0px;
                        box-sizing: border-box;
                    }
                    </style>
        <br>
		<br><br><br><br><br><br><br><br><br><br><br>
		<form>
        <table align="center" border="1">
              <tr>
                  <td align="center"><?php echo $_SESSION['user_name']?>
                      </td>
                  </tr>
              <tr>
                  <td>
                    Post a Comment:<br>
    				          <textarea rows="7" cols="52">
                        Write here a comment(max. 300 characters limit).
    	               </textarea>&emsp;&emsp;&emsp;&emsp;&emsp;<button type="button">Save</button>&emsp;<button type="button">Cut</button>
                  </td>
              </tr>
              <tr>
                  <td>
                  Give a rating:
                      <input type="radio" name="star" value="1">5 Stars
                      <input type="radio" name="star" value="1">4 Stars
                      <input type="radio" name="star" value="1">3 Stars
                      <input type="radio" name="star" value="1">2 Stars
                      <input type="radio" name="star" value="1">1 Stars
                    </td>
              </tr>
              <tr>
                  <td>
                    Will You Recommend?
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" name="optradio" class="form-check-input" value="1">
                      </label>
                    </div>
                    <div class="form-check-inline">
                      <label class="form-check-label">
                        <input type="radio" name="optradio" class="form-check-input" value="0">
                      </label>
                    </div>


                       <input type="radio" name="yes" value="1">YES <input type="radio" name="no" value="1">NO
                  </td>
              </tr>
          </table>
    </form>
		<div align="center"><br>
		<a href="ProfileHome.php">Submit</a> OR <a href="ProfileHome.php">Cancel</a>
</div>
    </body>
</html>
