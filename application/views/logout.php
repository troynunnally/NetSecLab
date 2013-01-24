<?php

session_start();
//commented out
//unset($_SESSION); 

//Delete session cookie
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time()-60); 
}

echo "
<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" />
<meta http-equiv=\"refresh\" content=\"3; URL=/" />
</head>
<body class=\"main\">
<table>
<tr>
";

//Check if actually logged out
$action = session_destroy();
if($action)
echo "
  <td><h3>You have Successfully Logged out</h3></td>
</tr>

<tr>
  <td>This page will auto reload to the main website in 3 seconds</td>
</tr>
<tr>
  <td><a href=\"/\" >Or you can click this link</a></td>
</tr>
</table>
</body>
</html>
";
else if(!$action) echo "<td>ERROR, logout script returned: $action, please email webmaster with this message</td></tr></table></body></html>";
else echo "<td>ERROR, please email webmaster with this message: CRITICAL!! - Action value was: $action, Error Code 42</td></tr></table></body></html>";

?>
