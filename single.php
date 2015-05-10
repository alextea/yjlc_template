<?php
$post = $wp_query->post;
if (in_category('a-z')) {
  include(TEMPLATEPATH.'/single-a-z.php');
} elseif (in_category('legal-updates')) {
  include(TEMPLATEPATH.'/single-legal-updates.php');
} else {
  include(TEMPLATEPATH.'/single-default.php');
}
?>