function validateEmail(email)
{
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

function checkLogin()
{
  if (validateEmail(document.getElementById("username").value) == false)
  {
      alert("Username must be an email (name@domain.com)");
  }
  else if (document.getElementById("password").value == null || document.getElementById("password").value == "")
  {
    alert("Must enter a password");
  }
  else
  {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    document.getElementById("login").style.display = "none";
    document.getElementById("shop").style.display = "block";
    alert("Welcome to Sam's shoes, " + username + "!\nYour password is " + password);
  }
}
