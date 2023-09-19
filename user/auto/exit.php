<?php

setcookie('user', NULL, time() - 3600, "/");
setcookie('user_id', NULL, time() - 3600, "/");
header('location:/project');