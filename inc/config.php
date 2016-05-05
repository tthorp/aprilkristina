<?php
//set the page section calls using functions so that they are easier and cleaner to call on the page
function head(){
	require('inc/head.php');
}
function foot(){
	require('inc/foot.php');
}

//on a page, insert the full sized image and create a nav of images in its container folder
//$directory is the location of the gallery. $top and $left are absolute positioning of the page nav, which could be different for any gallery
function gallery($directory){
	/* step one:  read directory, make array of images */
	if ($handle = opendir($directory)) {  
		while (false !== ($file = readdir($handle)))  
		{  
			if ($file != '.' && $file != '..')  
			{  
				$files[] = $file;  
			}  
		}  
		closedir($handle);  
	}  
	/* step two: loop through, format gallery */  
	if(count($files))  
	{
		sort($files);
		$count=0;
		foreach($files as $file)  
		{  
			if($count == 0){$class = 'class="active"';}else{$class='';}
			$count++;
			if(strpos($file, '>')){$start = strpos($file, '>')+1;}else{$start = 0;}
			if(strpos($file, '>')){$end = strpos($file, '.jpg')-2;}else{$end = strpos($file, '.jpg');}
			$caption = substr($file, $start, $end);
			$caption = str_replace('-',' ',$caption);
			$caption = str_replace('@','#',$caption);
			$caption = str_replace('*','-',$caption);
		echo "<div class='slide $class' >
		<img src='$directory$file' alt='gallery'/>
		</div>";
		}  
	}  
	else  
	{  
		echo '<p>There are no images in this gallery.</p>';  
	}
}
?>