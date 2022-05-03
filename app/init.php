<?php defined('ABSPATH') || exit('No direct script access allowed');

require_once VV_APP . '/vendor/VVerner/App.php';
require_once VV_APP . '/vendor/VVerner/Views.php';
require_once VV_APP . '/vendor/VVerner/Assets.php';
require_once VV_APP . '/vendor/VVerner/Shortcodes.php';
require_once VV_APP . '/vendor/VVerner/AjaxAPI.php';
require_once VV_APP . '/vendor/VVerner/PostType.php';
require_once VV_APP . '/vendor/VVerner/Files.php';
require_once VV_APP . '/vendor/VVerner/Taxonomy.php';

require_once VV_APP . '/vendor/TGM/TGM_Plugin_Activation.php';

require_once VV_APP . '/controller/suggested-plugins.php';
require_once VV_APP . '/controller/config.php';
require_once VV_APP . '/controller/hooks.php';
require_once VV_APP . '/controller/bus-route/config.php';
require_once VV_APP . '/controller/bus-route/shortcodes.php';
require_once VV_APP . '/controller/bus-stop/config.php';
require_once VV_APP . '/controller/bus-stop/shortcodes.php';
require_once VV_APP . '/controller/time/config.php';
require_once VV_APP . '/controller/time/shortcodes.php';