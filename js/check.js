
		function f3()
		{
			var id=document.getElementById('rid').value;
			//alert(id);
			

			var xhttp = new XMLHttpRequest();
				xhttp.open("GET","../php/searchuserid.php?id="+id,true);
				/*xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');*/
				xhttp.send();

				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						//alert(this.responseText);
						document.getElementById('iderrordiv').innerHTML=this.responseText;
					}
				}
		}
