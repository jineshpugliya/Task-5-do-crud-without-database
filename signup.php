<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <div class="login">
        <form name='form-login' action="data.php">
    
            <h1>SIGN IN</h1>
    
            <label for="userName">User Name</label>
            <input type="text" id="userName" placeholder="Username" required><br>
    
            <label for="userPw">Password</label>
            <input type="number" id= "userMob" placeholder="Mobile No." required><br>
    
            <input id= "login_btn" type="submit" value="Login" onclick="check()">
    
        </form>
    </div>
</body>
</html>
<script>
    //checking
    function check(){
      var storedUsername = localStorage.getItem('username');
      var storedMob = localStorage.getItem('mob');

      var userName = document.getElementById('userName');
      var userMob = document.getElementById('userMob');
      var userRemember = document.getElementById("rememberMe");

      if(userName.value == storedUsername && userMob.value == storedMob){
          alert('You are logged in.');

          // location.href = "/login/data.php";

      }else{
          alert('Error on login');
      }
    }
</script>