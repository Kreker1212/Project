<?php

setcookie('admin', $user['login'], time() - 3600, "/");
setcookie('user', $user['name'], time() - 3600, "/");
header('location:/project');