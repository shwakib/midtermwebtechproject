function f2()
{
  var searchitem=document.getElementById('ptsearch').value;
  //alert(searchitem);

  //

  var xhttp = new XMLHttpRequest();
      xhttp.open("GET","../php/searchpatientinfo.php?item="+searchitem,true);
      /*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
      xhttp.send();

      xhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200)
        {
          document.getElementById('searchresult').innerHTML=this.responseText;
        }
      }
}
