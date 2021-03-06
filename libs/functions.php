<?php
  function loadView($viewFile, $vars = false) {
    if (is_array($vars) === true) {
      extract($vars, EXTR_OVERWRITE);
    }
    if (file_exists(APP_PATH . '/view/' . $viewFile) === true) {
      include APP_PATH . '/view/' . $viewFile;
    }
    else {
      die('<h1>404 Page not found</h1>');
    }
  }

  function loadCompleteView($viewLocation, $vars = false) {
    loadHeader();
    loadView($viewLocation, $vars);
    loadFooter();
  }

  function loadHeader() {
    include APP_PATH . '/view/theme/header.php';
  }
  function loadFooter() {
    include APP_PATH .'/view/theme/footer.php';
  }
  function siteURL() {
    return($GLOBALS['config']['base_url']);
  }

  function redirect($newLocation) {
    header("Location: " . siteURL() . $newLocation);
  }


?>
