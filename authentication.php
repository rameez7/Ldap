<html>
<title>Test authentication page</title>
<head>
<style>
body {text-align:center;}
form{margin: 0 auto; width: 500px;}
input{padding: 10px; font-size:20;}


</style>
</head>
<body>
<h1>Authentication with Active Directory</h1>

<form action="ldap.php" method="post">

    <input type="text" name="username" /><br><br>
    <input type="password" name="password" /><br><br>
    <input type="submit" value="Login" />
</form>


</body>
</html>