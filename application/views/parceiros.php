
	<?php
    			if(isset($dados)){
                 foreach ($dados as $item) { 

                 	 echo "<li><img src=http://graph.facebook.com/".$item->fan_page."/picture?type=square>";	    
                     echo $item->titulo."<br>";
                     echo $item->site."</li>";
                    
                    }
                }
                   
    ?> 