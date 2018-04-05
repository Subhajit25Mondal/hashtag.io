<?php include 'config/declare.php'; ?>

<!-- a universal file that has all the classes included -->
<?php include 'config/classesGetter.php'; ?>

<!-- creating objects -->
<?php
  $universal = new universal;
  $avatar = new Avatar;
  $noti = new notifications;
  $message = new message;
?>

<?php
  if (!$universal->isLoggedIn() || $universal->e_verified($_SESSION['id'])) {
    header('Location: '.DIR.'/login');
  }
?>

<?php
  $title = "Thanks for registering • Hashtag";
  $keywords = "Hashtag, Share and capture world's moments, share, capture, about";
  $desc = "Hashtag lets you capture, follow, like and share world's moments in a better way and tell your story with photos, messages, posts and everything in between";
?>

<?php 
  include 'includes/header.php';
  include 'needs/heading.php';
  include 'needs/nav.php';
?>

<div class="badshah">

  <div class="about_div inst thanks_div">
    <img src="<?php echo DIR; ?>/images/needs/glyph-instagram.png" alt="Hashtag" height="50px" width="50px">
    <div class="">
      <span>
          <center><p>Thanks for registering your Account, Enjoy <b>Hashtag.io</b>.</p>
        
        <br>
          You are Currently at your Homepage. Please use the sidebars to navigate.
        
          </center></span>
    </div>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
