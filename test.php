<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script>
$(document).ready(function(){
    $("#frmReg").validate({
      rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      firstname: "please enter your first name",
      lastname: "please enter your last name",
      email: {
        required: "please enter your emailaddress",
        email: "please enter your valid email address"
      },
      password: {
        required: "please enter you password",
        minlength: 5
      }
    },
  });
});
</script>
</head>
<body>
<form id="frmReg" id="frmReg" action="welcome.php" method="post">
firstname: <input type="text" name="firstname" ><br>
lastname: <input type="text" name="lastname"><br>
Email: <input type="text" name="email" ><br>
<input type="submit">
</form>
</body>
</html>
