# hashtag.io
Hashtag.io is a PHP based social networking website, which supports exclusive multimedia content, sharing and private or group messaging service.

# Quick Links
 1. [Screenshots](#screenshots)
 2. [Features](#features)
 3. [Requirements](#requirements)
 4. [Setup Guide](#setup-guide)
 5. [Contribute](#contribute)
 6. [License](#license)
 

# Screenshots

<img width="960" alt="capture1" src="https://user-images.githubusercontent.com/27961735/38722563-e759e80a-3f1b-11e8-99b1-67c38138cb82.PNG">
<img width="948" alt="capture2" src="https://user-images.githubusercontent.com/27961735/38722566-eac5aed4-3f1b-11e8-8165-1e1efb28ae9a.PNG">
<img width="957" alt="capture3" src="https://user-images.githubusercontent.com/27961735/38722592-fd4dda04-3f1b-11e8-938c-7cbe298b0670.PNG">
<img width="946" alt="capture4" src="https://user-images.githubusercontent.com/27961735/38722594-005daae4-3f1c-11e8-9b18-23262fd79684.PNG">
<img width="958" alt="capture5" src="https://user-images.githubusercontent.com/27961735/38722595-01c5f6d4-3f1c-11e8-9cb3-131334038bd7.PNG">



# Features

1. Login, Signup, Forgot password (with email verification).
2. Quick Login like in Facebook and Instagram (this means app remembers that you had logged in, so you only have enter password to login again).
3. Indicates that users exists as you type username when signing up.
4. About, Developer, Help, 404, No such user, No such group page.
5. AJAX used almost everywhere (From login to logout).
6. Follow, Unfollow, Recommend, Profile views, Block, Unblock.
7. Like, Comment (Sticker, Text, Image), Share, Unshare, Remove share, Tag, Untag, Remove tag, Copy post link, Delete post, Edit post, Open post.
8. Post Text, Image (with filters), Video, Audio, Link, Document, Location with emojis, Font size, Tag, mentions, hashtags and location.
9. Time ago format used everywhere.
10. Custom Video and Audio player.
11. Add tags to describe yourself much more.
12. Edit your profile (From username, Bio, social links to tags).
13. Get suggestions on whome to follow (you can also refresh suggestions).

14. Know what are some of the most popular hashtags.
15. Mutual likes and comments as in Facebook (When you see a post, if your followings have liked or commented on the post, then app re-arranges post's likers and commenters in a way that your followings get the first priority). eg. F1, F2, F3 and 230 others liked where F = Following.
15. Shows images in Theatre mode.
16. Explore people, photos, videos, audios and groups.
17. Get notified on almost everything from your post being liked, commented, shared TO you being added to a group.
18. Create conversation with your followings and give your conversation a title.
19. Message emoji, Text, Image, Sticker.
20. Delete conversation, unsend all your messages, edit conversation title and get all info about the conversation.
21. Create group conversation with your followings.
22. Change admin (if you're an admin), leave group, remove member, change group avatar, add members and get more info about the group.
23. Bookmark the post if you liked it.
24. Make a user favourite if you like him/her.
25. Create a group with your followings.
26. Shows newest member, members you know from the group.
27. Post (Point no. 8).
28. Add/remove members.
29. Edit group's settings.
30. Shows if a user is online.
31. Love a group, invite your followings to the group.
32. Change your avatar from over 200 custom avatars, don't like it upload your avatar with a cropping tool (Same can be done while changing group avatar).
33. If a text post is large, then a glimpse of the post is shown and you can load more.
34. You will be always prompted from deleting a post to blocking someone.
35. Search users, groups and hashtags.
36. Click on a particular user tag such as 'Mumbaikar' and see all users with the same user tag.
37. Google+ style notification bar (one that transitions from the bottom, stays 3 seconds and then goes down).
38. Description provided almost everywhere eg. when you hover over Like (Heart) button, then there'll be description of 'LIKE'.
39. Change you password.
40. Change account type private or public (Default: public).
41. Change email and phone visibility.
42. Get all your login details.


# Requirements

Latest Version of PHP and Apache Server (Xampp/ Wampp).

# Setup Guide

1. Open PHPMyAdmin, create a Database & import hashtag.sql.
2. Open `config/class/needy_class.php` & fill up your PDO, Path & Email details.
3. Open `config/declare.php`, `config/class/needy_class.php` & `public/js/modules.js` & replace DIR variable containing my root path with your root path. (Note: Do not add forward slash in the end!).
4. Open `.htaccess`, go to line 17 & replace it with your root path.
5. If Time ago feature is not working correctly (forward or behind), then go to `config/class/time.class.php` & play around with line no 8.
Enjoy!!


# Contribute

Show your support by 🌟 the project!!
Feel free to contribute!
Credits: @yTakkar

# LICENSE
MIT License
