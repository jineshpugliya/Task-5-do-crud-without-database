<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="login">
        <form name='form-login' method="post" action="data.php">
    
            <h1>REGISTER</h1>

            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Name" required><br>

            <label for="fname">Father Name</label>
            <input type="text" id="fname" placeholder="Father Name" required><br>

            <label for="mob">Mobile No.</label>
            <input type="number" id="mob" placeholder="Mobile Number" required><br>

            <label for="fmob"> Father Mobile No.</label>
            <input type="number" id="fmob" placeholder="Father Mobile Number" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" required><br>
    
            <label for="addr">Address</label>
            <input type="text" id= "addr" placeholder="Address" required><br>

            <label for="username">User Name</label>
            <input type="text" id= "username" placeholder="User Name" required><br>
    
            <input id="rgstr_btn" type="submit" value="Register" onclick="store()">
    
        </form>
    </div>

</body>
</html>
<script>
    function store(){

      var name = document.getElementById('name');
      var fname = document.getElementById('fname');
      var mob = document.getElementById('mob');
      var fmob = document.getElementById('fmob');
      var email = document.getElementById('email');
      var addr = document.getElementById('addr');
      var username = document.getElementById('username');

      
      if(name.value.length == 0){
          alert('Please fill in Name');

      }else if(fname.value.length == 0){
          alert('Please fill in Father Name');

      }else if(mob.value.length == 0){
          alert('Please fill in mobile no.');

      }else if(fmob.value.length == 0){
          alert('Please fill in Father mobile no.');

      }else if(email.value.length == 0){
          alert('Please fill in email');

      }else if(addr.value.length == 0){
          alert('please fill in address');

      }else if(username.value.length == 0){
          alert('please fill in User name');

      }else{
          localStorage.setItem('name', name.value);
          localStorage.setItem('fname', fname.value);
          localStorage.setItem('mob', mob.value);
          localStorage.setItem('fmob', fmob.value);
          localStorage.setItem('email', email.value);
          localStorage.setItem('addr', addr.value);
          localStorage.setItem('username', username.value);


          alert('Your account has been created');

          // location.href = "/login/data.php";
          
      }
    }

        
</script>

