function f1()
{
  var selecteddept=document.getElementById('doc').value;
    //alert(selecteddept);

    var xhttp = new XMLHttpRequest();
      xhttp.open("GET","../php/doctorbydept.php?dept="+selecteddept,true);
      /*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
      xhttp.send();

      xhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200)
        {
          document.getElementById('result').innerHTML=this.responseText;
        }
      }


    var xhttp = new XMLHttpRequest();
      xhttp.open("GET","../php/nursebydept.php?dept="+selecteddept,true);
      /*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
      xhttp.send();

      xhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200)
        {
          document.getElementById('result1').innerHTML=this.responseText;
        }
      }
}

function f2()
{
  var nursename=document.getElementById('selectednurse');
  var nursename=nursename.options[nursename.selectedIndex].text;
}

function f3()
{
  var nursename=document.getElementById('selectednurse');
  var nurse=nursename.options[nursename.selectedIndex].text;
  var selecteddept=document.getElementById('doc').value;
  var docname=document.getElementById('selecteddoc');
  var doctorname=docname.options[docname.selectedIndex].text;
  /*alert(nurse);
  alert(selecteddept);
  alert(doctorname);*/
  /*var doctorname=document.getElementById('selecteddoc');
  var docname=doctorname.options[docname.selectedIndex].text;
  alert(docname);*/
  //alert(doctorname);
  /*var patientname=document.getElementById('patientname').value;
  //alert(patientname);
  var patientproblem=document.getElementById('patientproblem').value;
  var selecteddept=document.getElementById('patientdept').value;*/

  var xhttp = new XMLHttpRequest();
      xhttp.open("POST","../php/assignnurseconfirm.php",true);
      xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
      xhttp.send('name='+nurse+'&dept='+selecteddept+'&doc='+doctorname);
      xhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200)
        {
          alert(this.responseText);
          window.location.href="../views/home.php";
        }
      }
}
