---
extends: _layouts.post
section: content
title: Trying to build a forum software - Initial thoughts
date: 2023-07-20
---

Some time ago I read an blog article that stated that forum software is harder
to build than it seems at first. Viewing, creating, updating and deleting
entries is a task nearly every developer can achieve but there are many other
things that have to be taken into account. The list below is not exhaustive: 

<details id="basic-forum-features">
<summary>List of basic forum features</summary>
<ul>
  <li>User Registration: Allows users to create an account and establish a unique identity within the forum.</li>
  <li>User Profiles: Provides a space for users to customize their profiles, add avatars, and provide information about themselves.</li>
  <li>Threaded Discussions: Enables users to create new discussion threads and reply to existing ones, organizing conversations in a hierarchical manner.</li>
  <li>Categories and Boards: Allows the creation of different categories and boards to organize discussions based on topics or themes.</li>
  <li>Moderation Tools: Provides features for forum moderators to manage and moderate discussions, including the ability to delete posts, ban users, and enforce community guidelines.</li>
  <li>Search Functionality: Enables users to search for specific discussions or topics within the forum.</li>
  <li>Notifications: Alerts users about new posts, replies, or updates to threads they are following.</li>
  <li>User Permissions: Provides various levels of access and permissions to users, such as administrators, moderators, and regular users.</li>
  <li>Post Formatting: Supports basic formatting options like bold, italic, lists, quotes, and hyperlinks to enhance the appearance and readability of posts.</li>
  <li>Multimedia Integration: Enables users to embed images, videos, and other media content within their posts.</li>
  <li>Polls and Surveys: Allows users to create and participate in polls or surveys to gather opinions and feedback.</li>
  <li>User Reputation System: Provides a mechanism for users to rate or give reputation points to each other based on their contributions to the forum.</li>
  <li>Mobile Responsiveness: Ensures that the forum is accessible and usable on mobile devices, with responsive design and optimized user experience.</li>
  <li>Customization Options: Offers customization features, such as customizable themes, colors, and layout options, allowing forum administrators to tailor the appearance of the forum to their liking.</li>
  <li>Analytics and Statistics: Provides administrators with insights into forum usage, user engagement, and other relevant data.</li>
  <li>Integration with Social Media: Allows users to share forum discussions or posts on social media platforms to increase visibility and reach.</li>
</ul>

</details>

As you can see it gets pretty complex quickly even if you "only" want to support
the feature set of [phpBB](https://www.phpbb.com/). There are many other
alternatives out there: flarum, discourse, nodeBB, ... I can't name them all.

Recently I discovered [waterhole](https://waterhole.dev) by [Toby
Zerner](https://twitter.com/tobyzerner). It is a forum software which can be
extended with Laravel. Even though I like its intentions there are some issues
in my opinion. On the one hand it is not truly open source (which I'm fine with,
it just doesn't fit my use case) but one the other hand it has some great ideas
I really like:

1. It is a forum software which is built with Laravel 
2. They got reactions right. You can react to a post with an emoji and you can
   see who reacted to a post. Just like on Github Discussions.
3. You can enable topics to be voted on which is practical for roadmap planning
   or feature requests. 
4. You can enable topics to be marked as solved. This is great for support
   forums.
5. You can enable topics to be displayed like a blog post preview. This is great
   for announcements or blog posts.

With that in my mind I feel like I could also build a forum software. Not as a
competitor to already existing projects but as a playground to learn more about
Laravel and to build something I can use for my own projects.

I recently started reading "Learning Domain Driven Design" by [Vlad
Khononov](https://vladikk.com/page/about/) and I think it is a great way to
approach this project. I will try to document my journey here. I hope you will
enjoy it.

If you would like to comment it you can do this on [twitter](https://twitter.com/alexfwulf/status/1670050990937247745).
