<?php

function	view_header($args)
{
  $args = array('next_event' => array('id' => 0,
				      'date' => '10-02-2012',
				      'name' => 'Nocturne Epitanime'));

  echo '
     <div id="header">
       <a href=".">
	 <div class="logo"></div>
       </a>
       <div class="name">
	 <a href=".">
	   <h1>return (to_life);</h1>
	   <h3>/* Le Portail des &Eacute;tudiants */</h3>
	 </a>
	 <div class="menu">
	   <a href="#"><img src="img/interface/calendar.png" /> 
	   Prochain &Eacute;v&eacute;nement : 
	   [',$args['next_event']['date'],'] 
	   ',$args['next_event']['name'],'
	   </a>
	   <form class="search" method="post">
	     <input type="text" />
	     <input type="submit" class="submit" value="Rechercher" />
	   </form>
	 </div>
       </div>
     </div>
   </a>';
}
