function f1()
{
  var id=document.getElementById("uid").value;
  var pass=document.getElementById("upassword").value;

  if(id==""||pass=="")
  {
    document.getElementById("loginmsg").innerHTML="Null Submission";
  }
  else
  {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST","../php/loginverify.php",true);
    xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xhttp.send('uid='+id+'&pass='+pass);

    xhttp.onreadystatechange = function()
    {
      if (this.readyState == 4 && this.status == 200)
      {

        //alert(this.responseText);



        if(this.responseText.match('admin'))
        {
          window.location.href='../views/home.php';
        }
        else if(this.responseText.match('doctor'))
        {
          window.location.href='../views/profile.php';
        }
        else if(this.responseText.match('patient'))
        {
          window.location.href='../views/patienthome.php';
        }
        else if(this.responseText.match('staff'))
        {
          window.location.href='../views/profileN.php';
        }

        else
        {
          document.getElementById('loginmsg').innerHTML = "Invalid ID and password"
          alert(this.responseText);

        }
      };
    }
  }
}
