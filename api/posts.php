<?php

$posts = file_get_contents(__DIR__ . '/../db/posts.json');

echo $posts;