<?php
include "../lib/global.inc.php";

require_valid_user();

$me->add_favorite_actor($_GET['id']);
redirect_to("../actor.php?id=".$_GET['id']);

?>