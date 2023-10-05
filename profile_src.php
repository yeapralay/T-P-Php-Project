<?php

		$p_src="SELECT `prof_url` FROM `profile` WHERE `sid`='".$_SESSION['suser_info']['sid']."'";
		$p_res=mysql_query($p_src);
		
		if(mysql_num_rows($p_res))
		{
			$x=mysql_fetch_row($p_res);
			$set_prof=$x[0];
		}
		else
		{
			$set_prof="images/userpic.png";
		}

?>