
<?php


	$item=$_GET['item'];

			$con =mysqli_connect('127.0.0.1','root','','webtech');
			$sql = "select * from user where id like '%{$item}%' or name like '%{$item}%' ";
			$result = mysqli_query($con, $sql);
			
			$count =mysqli_num_rows($result);

			//echo($row['name']);



	if($count > 0)
	{
		$data="	
				<table align=center border=3>

				<tr>
					<td>
						User ID
					</td>
					<td>
					User Name
					</td>
				</tr>";

	while($row = mysqli_fetch_assoc($result))
	{

		$data.="<tr>
				<td>
					{$row['id']}
				</td>
				<td>
					<a href=userprofilepage.php?id={$row['id']}>{$row['name']}</a>
				</td>
				</tr>
				";

	}

		$data.=	"

			</table>";

				echo $data;
			}
			else
			{
				echo "No results found";
			}



?>