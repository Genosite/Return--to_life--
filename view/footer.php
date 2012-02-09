<?php

function	view_footer($args)
{
   $buttons = array('Home'	  => '#',
		    'Rubriques'  => '#',
		    'Staff'  => '#',
		    'Forum'  => '#',
		    'IRC'  => '#',
		    'Contact'  => '#',
		    'Participer'  => '#',
		    'Mon compte'  => '#',
		    'D&eacute;connection'  => '?logout',
		    );

   $colors = array('grey', 'green', 'blue', 'orange');

  echo '<div id="footer">
   <div class="menu">';
  $i = 0;
  foreach ($buttons as $name => $link)
    {
      echo '<a href="',$link,'"><span class="button"><span class="',$colors[($i % count($colors))],
	'">', $name,'</span></span></a>';
      ++$i;
    }
  echo '</div>
</div>';

}

?>
