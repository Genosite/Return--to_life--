<?php

function	view_logout_form($args)
{
  echo '<form method="post">';
  echo '<input type="submit" value="logout" name="return_logout_form"/>';
  echo '</form>';
}
