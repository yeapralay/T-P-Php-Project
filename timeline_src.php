<?php

		$t_src="SELECT `timeline_url` FROM `timeline` WHERE `sid`='".$_SESSION['suser_info']['sid']."'";
		$t_res=mysql_query($t_src);
		
		if(mysql_num_rows($t_res))
		{
			$x=mysql_fetch_row($t_res);
			$set_timeline=$x[0];
		}
		else
		{
			$set_timeline="images/default_timeline.jpg";
		}

?>