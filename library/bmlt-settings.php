<?php

if (!function_exists('bmlt_home_panel')) :
  function bmlt_home_panel() {
    if (class_exists('BMLTWPPlugin')) {
      class CustomBMLTPanel extends BMLTWPPlugin {
        private static $instance;
        public function __construct() {}
        public static function getInstance() {
          return parent::$instance;
        }
        private function __clone() {}
      }
      $customBMLTPanel = new CustomBMLTPanel();
      $bmltcurrentweekday = (int)current_time('w') + 1;
      echo '<h3>' . current_time('l') . ' Meetings</h3>';
      echo $customBMLTPanel -> content_filter('[[BMLT_SIMPLE(switcher=GetSearchResults&amp;block_mode=1&amp;weekdays=' . $bmltcurrentweekday . ')]]');
    } else {
      echo '<!--The BMLT Wordpress Satellite plugin is inactive!-->';
    }
  }

  add_action('plugins_loaded', 'bmlt_home_panel');
endif;
