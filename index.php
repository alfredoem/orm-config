<?php

require __DIR__ . '/vendor/autoload.php';

use App\Models\SecUsers;

$data = SecUsers::all();

include_once('resources/views/users/list.php');






