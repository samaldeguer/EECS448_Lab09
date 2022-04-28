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

function reset()
{
  document.getElementById("shoe1").value = "";
  document.getElementById("shoe2").value = "";
  document.getElementById("shoe3").value = "";
  document.getElementById("free").checked = false;
  document.getElementById("overnight").checked = false;
  document.getElementById("three").checked = false;
}

function checkInput()
{
  if (document.getElementById("shoe1").value == "" || document.getElementById("shoe1").value < 0 || document.getElementById("shoe2").value == "" || document.getElementById("shoe2").value < 0 || document.getElementById("shoe3").value == "" || document.getElementById("shoe3").value < 0)
  {
    alert("Enter a nonnegative quantity for all items");
    return false;
  }
  else if (document.getElementById("free").checked == false && document.getElementById("overnight").checked == false && document.getElementById("three").checked == false)
  {
    alert("Choose a type of shipping");
    return false;
  }
  else
  {
    return true;
  }
}
