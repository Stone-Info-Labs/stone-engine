<?php

return (object) array(
 'mode' => 'development' ,
 'helpers' => scandir("core/helpers/") ,
 'apps' => scandir("applications/") ,
 'models' => scandir("core/model/") ,
 'views' => scandir("core/view/") ,
 'controllers' => scandir("core/controllers") ,
 'layouts' => scandir("core/layouts/")
);