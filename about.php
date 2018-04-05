<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $post = new post;
  $noti = new notifications;
  $message = new message;
?>

<?php
  $title = "{$noti->titleNoti()} About • Hashtag";
  $keywords = "Hashtag, Share and capture world's moments, share, capture, about";
  $desc = "Hashtag lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<!-- including files for header of document -->
<?php
  if ($universal->isLoggedIn()) {
    include 'includes/header.php';
    include 'needs/heading.php';
    include 'needs/nav.php';
    include_once 'needs/search.php';
  } else if ($universal->isLoggedIn() == false) {
    include 'index_include/index_header.php';
  }
?>

<div class="overlay"></div>
<div class="notify"><span></span></div>
<div class="badshah">

  <div class="about_div inst">
      <center><img src="<?php echo DIR; ?>/images/needs/glyph-instagram.png" alt="" height="80px" width="80px"></center>
    <div class="">
      <span>Hashtag is all about exploring, messaging, groups, photos, interacting with other members and much more.</span>
      <span>Finally coming to the point, this website is developed just for fun and I have no copyright claims.</span>
      <span>Hashtag is hosted freely, so you'll find it bit slow and many of its features have been removed, such as real-time notifications and updates.</span>
    </div>
  </div>

</div>

<?php
if ($universal->isLoggedIn()) {
  include 'includes/footer.php';
} else if ($universal->isLoggedIn() == false) {
  include 'index_include/index_footer.php';
}
?>
