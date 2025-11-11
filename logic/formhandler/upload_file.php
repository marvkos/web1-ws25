<?php

var_dump($_FILES);

$id = "xyz";

move_uploaded_file($_FILES["image"]["tmp_name"], "../../uploads/" . $id . ".png");
