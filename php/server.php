<?php

function login($username, $password) {
global $conn_link;
$query = "SELECT * FROM users WHERE user_name='$username' and 
user_pass='$password'";
if ($result = mysqli_query($conn_link,$query))
{
if(mysqli_num_rows($result) == '1')
{
return true;
}
else
{
return false;
}
}
else
{
return false;
}
}

?>