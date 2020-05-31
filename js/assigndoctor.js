function f1()
{
    var selecteddept=document.getElementById('patientdept').value;
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
}

function f2()
{
  var docname=document.getElementById('selecteddoc');
  var doctorname=docname.options[docname.selectedIndex].text;
  //alert(doctorname);



}


function f3()
{
  var docname=document.getElementById('selecteddoc');
  var doctorname=docname.options[docname.selectedIndex].text;
  /*var doctorname=document.getElementById('selecteddoc');
  var docname=doctorname.options[docname.selectedIndex].text;
  alert(docname);*/
  //alert(doctorname);
  var patientname=document.getElementById('patientname').value;
  //alert(patientname);
  var patientproblem=document.getElementById('patientproblem').value;
  var selecteddept=document.getElementById('patientdept').value;

  var xhttp = new XMLHttpRequest();
      xhttp.open("POST","../php/admitpatient.php",true);
      xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
      xhttp.send('name='+patientname+'&prob='+patientproblem+'&dept='+selecteddept+'&doc='+doctorname);
      xhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200)
        {
          alert(this.responseText);
          window.location.href="../views/home.php";
        }
      }
}
