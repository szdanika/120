<?
session_start();
$adat = $_POST['url'];
$keresonezo = 0;
$utolsoszo = "";
$tartalom[0] = "a";
if($adat == "")
{
	echo "<script>alert('kérem adjon meg egy url-t!');</script>";
}
else
{
	$vanesor = false;
	$i = 1;
	$url = fopen($adat, "r");
	while($vanesor == false)
	{
				$i++;
		$sor = fgets($url, $i);
		if($sor == "")
		{
			$vanesor = true;
		}
		else
		{
				$sor= str_replace("<", ' ', $sor);
				$sor = str_replace("=", ' ', $sor);
				$sor = str_replace(">", ' ', $sor);
				$sor = str_replace("/", ' ', $sor);
				$sor = str_replace("href", ' ', $sor);
				$sor = str_replace('"', ' ', $sor);
				$sor = str_replace('.', ' ', $sor);
				$sor = str_replace('-', ' ', $sor);
				$sor = str_replace('_', ' ', $sor);
				$sor = str_replace(',', ' ', $sor);
				$sor = str_replace('.', ' ', $sor);
				$sor = str_replace('&', ' ', $sor);
				$sor = str_replace('@', ' ', $sor);
				$sor = str_replace(':', ' ', $sor);
				$sor = str_replace(';', ' ', $sor);
			$szavak = explode(' ', $sor);
			for($x = 0; $x< count($szavak); $x++)
			{
				
				$pos = strpos($szavak[$x], "ly");
				if($pos == true)
				{
					/*if($utolsoszo != $szavak[$x])
					{
						$utolsoszo = $szavak[$x];
						echo $szavak[$x];
						echo"<br>";
					}
					else
					{
					}*/
					
					if(in_array($szavak[$x], $tartalom))
					{
					}
					else
					{
						$asd = count($tartalom)+1;
						$tartalom[$asd] = $szavak[$x];
					}
					
				}
					
			}
		}
		
		
		
		
	}
	for($i = 0; $i <= count($tartalom);$i++)
	{
		echo $tartalom[$i];
		echo "<br>";
	}
	
	
	
	
}


?>