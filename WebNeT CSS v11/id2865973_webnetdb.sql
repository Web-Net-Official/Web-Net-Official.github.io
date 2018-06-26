-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2017 at 03:18 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2865973_webnetdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `title`, `description`, `url`) VALUES
(1, 'Apple', 'get what u want', 'http://www.apple.com'),
(2, 'Amazon', 'get what u need fast', 'http://www.amazon.com'),
(3, 'Web-Net', 'A free fast web-browser and search-engine Owned by M Raahim Khattak-CEO', 'https://webnet.bitballoon.com/'),
(4, 'Web-Net - Facebook', 'Link to webnet:- https://webnet.bitballoon.com/ OR https://webnet.netlify.com/ Owner/Dev/CEO :- M Raahim Khattak [ https://www.facebook.com/mega.mrk ]', 'https://www.facebook.com/webnet.bitballoon/'),
(5, 'Facebook - Log In or Sign Up', 'Create an account or log into Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.', 'https://www.facebook.com/'),
(6, 'Log in to Facebook', 'Log in to Facebook to start sharing and connecting with your ...', 'https://en-gb.facebook.com/login/'),
(7, 'facebook', 'Create an account or log in to Facebook. Connect with friends ...', 'https://en-gb.facebook.com/'),
(8, 'Log into Facebook | Facebook', 'Log into Facebook to start sharing and connecting with your ...', 'https://m.facebook.com/login.php'),
(9, 'Facebook Login', 'Facebook Login is the quick, easy way to sign into apps without ...', 'https://www.facebook.com/about/login/'),
(10, 'Yahoo', 'News, email and search are just the beginning. Discover more every day. Find your yodel.\r\n‎Yahoo Mail · ‎Yahoo Finance · ‎Yahoo Sports · ‎Yahoo News', 'https://www.yahoo.com/'),
(11, 'Yahoo Mail - Free Email with 1TB of Storage', 'Get a free email account from Yahoo Mail. Your email comes with 1TB of free ...', 'https://mg.mail.yahoo.com/'),
(12, 'create a new Yahoo ID - Yahoo - login', 'A description for this result is not available because of this site\'s robots.txt', 'https://login.yahoo.com/account/create'),
(13, 'Sign in - Yahoo - login', 'Network connection timed out. Please try again. Upgrade your app! You are using an older version of app', 'https://www.yahoo.com/'),
(14, 'Yahoo - sign in', 'Tingkatkan aplikasi Anda! Anda menggunakan aplikasi ini dalam versi lebih lama. Sign in. +62. Masukkan Kode Negara. Afghanistan (+93) , Albania (+355) ...', 'https://login.yahoo.com/'),
(15, 'YouTube', 'Enjoy the videos and music you love, upload original content, and share it all with friends, family, and the world on YouTube.', 'https://www.youtube.com/'),
(16, 'YouTube Movies', 'YouTube Movies. SubscribeSubscribedUnsubscri ...', 'https://www.youtube.com/channel/UClgRkhTL3_hImCAmdLfDE4g'),
(17, 'Sign in-YouTube', 'Sign in. to continue to YouTube. Email or phone. Forgot email ...', 'https://www.youtube.com/signin'),
(18, 'webnet-YouTube', 'YouTube top ratings...\r\nYouTube top views rated...', 'https://www.youtube.com/channel/UC2eTGoGsnz0sg7VDcBZggNQ?view_as=subscriber'),
(19, 'YouTube - Home | Facebook', 'YouTube. 83M likes. The latest and greatest music videos, trends and channels from YouTube.', 'https://www.facebook.com/youtube/'),
(20, 'Bing', 'Bing helps you turn information into action, making it faster and easier to go from searching to doing.', 'https://www.bing.com/'),
(21, 'Bing News', 'News from world, national, and local news sources, organized ...', 'https://www.bing.com/news'),
(22, 'Bing - Home | Facebook', 'Bing. 3786631 likes · 2598 talking about this. All the world\'s information is at your fingertips. Bing.com.', 'https://www.facebook.com/Bing/'),
(23, 'Bing Places for Business', 'Bing Places for Business', 'https://www.bingplaces.com/'),
(24, 'Bing Translator', 'Instantly translate your text from one language to another with ...', 'https://www.bing.com/translator'),
(25, 'web-net.tk', 'web-net.tk. ... WebNet Chato\'s is a web based chat messenger for Windows operating systems & any other device. User\'s can connect from all around the world ...', 'http://www.web-net.tk/'),
(26, 'WEB-NET Chato\'s', 'webnet.bitballoon.com logo. tester: as. Copyright © M Raahim Khattak 2017 •All rights reserved.', 'https://webnetchatos.000webhostapp.com/'),
(27, 'latest 2017 intro to webnet - YouTube', 'Link to webnet:- https://webnet.bitballoon.com/ OR https://webnet.netlify.com/ Owner/Dev/CEO :- M ...', 'https://www.youtube.com/watch?v=amrCJWXQUNw'),
(28, 'Web-Net-Blog', 'Web-Net', 'https://webnetsearchengine.blogspot.com/'),
(29, 'Web-Net Register/Login', '\r\nRegister & Login with us!\r\nTo join Web-Net Home\r\n', 'https://mrkfus.000webhostapp.com/Webnet%20login%20n%20register/index.html?x=44&y=37'),
(30, 'Google', 'Search the world\'s information, including webpages, images, videos and more. Google has many special features to help you find exactly what you\'re looking ...', 'https://www.google.com/'),
(31, 'Google Translate', 'Google\'s free service instantly translates words, phrases, and web pages between English and over 100 other languages.', 'https://translate.google.com/'),
(32, 'Google - Home | Facebook', 'Google, Mountain View, CA. 24M likes. Organizing the world\'s information and making it universally accessible and useful.', 'https://www.facebook.com/Google/'),
(33, 'Google - YouTube', 'Experience the world of Google on our official YouTube channel. Watch videos about our products, technology, company happenings and more. Subscribe to ...', 'https://www.youtube.com/user/Google'),
(34, 'Google.org: Home', 'Data-driven, human-focused philanthropy— powered by Google. We bring the best of Google to innovative nonprofits that are committed to creating a world that ...', 'https://www.google.org/'),
(35, 'Create your Google Account - Sign in', 'A single username and password gets you into everything Google (Gmail, Chrome, YouTube, Google Maps). Set up your profile and preferences just the way ...', 'https://accounts.google.com/SignUp?hl=en'),
(36, 'Gmail - Google', 'Gmail is email that\'s intuitive, efficient, and useful. 15 GB of storage, less spam, and mobile access.', 'https://mail.google.com/mail/'),
(37, 'Google Drive - Cloud Storage & File Backup for Pho', 'Get access to files anywhere through secure cloud storage and file backup for your photos, videos, files and more with Google Drive.', 'https://www.google.com/drive/'),
(38, 'Google News', 'Comprehensive up-to-date news coverage, aggregated from sources all over the world by Google News.', 'https://news.google.com/news/'),
(39, 'Download Google Chrome - free - latest version', 'Google Chrome, free and safe download. Google Chrome latest version: The quickest, smartest browser. Google Chrome is Google\'s web browser. With it, you ...', 'https://chrome.en.softonic.com/'),
(40, 'MediaFire', 'MediaFire is a simple to use free service that lets you put all your photos, documents, music, and video in a single place so you can access them anywhere and ...', 'https://www.mediafire.com/'),
(41, 'Tools - MediaFire', 'MediaFire Mobile for Android and iOS. Wherever you go, MediaFire Mobile makes sure that your files are always with you. Learn More ...', 'https://www.mediafire.com/software/'),
(42, 'MediaFire - Wikipedia', 'MediaFire is a file hosting, file synchronization, and cloud storage service based in Shenandoah, Texas, United States. Founded in June 2006 by Derek Labian ...\r\nContent license‎: ‎Proprietary softwar', 'https://en.wikipedia.org/wiki/MediaFire'),
(43, 'MediaFire - Home | Facebook', 'We\'ve heard your requests! MediaFire for Windows Phone (Windows 8 and Windows 10) is now available! Automatically backup all your photos and videos, ...', 'https://www.facebook.com/MediaFire/'),
(44, 'Review of the Online Storage Site MediaFire - The ', 'Sep 2, 2017 - A review of MediaFire, a free online storage service with 10 GB+ of space and file sharing on many devices.', 'https://www.thebalance.com/mediafire-review-1356575'),
(45, 'Netlify-Hosting sites free', 'Want to host your server now! get it here for free.Why not try....Best html5 websites', 'https://www.netlify.com/'),
(46, 'Hosting sites-bitballoon', 'Want to host your server now! get it here for free.Best for html5', 'https://www.bitballoon.com/'),
(47, '000webhostapp-hosting', 'Want to host your server now! get it here for free.Why not try....Best html5,php,java,jquery,mysql,databases... websites', 'https://www.000webhost.com/'),
(48, 'AwardSpace.com: Free Web hosting with PHP, MySQL, ', 'AwardSpace is a free web hosting provider with NO ADS, paid web hosting, VPS hosting, reseller hosting, domain name registration and SSL certificates.', 'https://www.awardspace.com/'),
(49, 'no-ip.com hosting replace ip', 'Free Dynamic DNS and Managed DNS Provider trusted since 1999 with 100% uptime history. Our Free DDNS service points your dynamic IP to a free static ...', 'https://www.noip.com/'),
(50, 'android developer-appsgeyser', 'build you andriod apps with appsgeyser', 'http://www.appsgeyser.com'),
(51, 'android developer-phonegap', 'build you andriod apps with phonegap build', 'https://build.phonegap.com/people/sign_in'),
(52, 'Mohammad Raahim Profiles | Facebook', 'View the profiles of people named Mohammad Raahim. Join Facebook to connect with Mohammad Raahim and others you may know. Facebook gives people ...', 'https://www.facebook.com/mega.mrk'),
(53, 'Web-Net Mohammad Raahim', 'Developer and Founder of Web-Net M Raahim Khattak CEO', 'http://webnet.bitballoon.com/'),
(54, 'Mohammad Raahim - YouTube', 'Follow on:- http://forum.vc-mp.org/inde...... http://samptokyodrift.smfne... https://sites.google.com/vi...... http://vcmphostingmrdk.boar.', 'https://www.youtube.com/channel/UC2eTGoGsnz0sg7VDcBZggNQ'),
(55, 'mohammad raahim-google images', 'Youtuber,Web-Net,Software Engineer', 'https://www.google.com/search?client=firefox-b&tbm=isch&q=mohammad+raahim&nfpr=1&sa=X&ved=0ahUKEwjNn6rd7tTWAhWIK8AKHaORA6gQvgUIJCgB&biw=1280&bih=691&d'),
(56, 'mohammad raahim-Megamind & Khattaks', 'TDCS.org - Google Sites\r\nhttp://tdcs.bitballoon.com/\r\nTDCS slowly started to get enhancing and get itself on to GTA VC-MP on 2013.When TDCS got much player\'s and always got heavily loaded on both ...', 'https://sites.google.com/view/tdcs-org/home'),
(57, 'WhatsApp', 'WhatsApp Messenger: More than 1 billion people in over 180 countries use WhatsApp to stay in touch with friends and family, anytime and anywhere. WhatsApp ...', 'https://www.whatsapp.com/'),
(58, 'WhatsApp - Wikipedia', 'WhatsApp Messenger is a freeware and cross-platform instant messaging service for smartphones. It uses the Internet to make voice calls, one to one video calls ...', 'https://en.wikipedia.org/wiki/WhatsApp'),
(59, 'QQ', 'Tencent QQ (more popularly known as QQ) is an instant messaging (chat-based) social media platform. It became international (with more than 80 countries using it), after it was launched in China.', 'http://www.qq.com/'),
(60, 'WeChat', 'This is an all-in-one communications app for messaging and calling (similar to WhatsApp) ', 'http://www.wechat.com/en/'),
(61, 'QZone', 'Like QQ and WeChat, QZone is yet another social networking service developed by Tencent.', 'https://qzone.qq.com/'),
(62, 'Tumblr', 'Having been owned by Yahoo since 2013, Tumblr serves as a social media cum micro blogging platform that can be used to find...', 'https://www.tumblr.com/'),
(63, 'Instagram', 'Instagram was launched as a unique social networking platform that was completely based on sharing photos and videos.', 'https://www.instagram.com/'),
(64, 'Twitter', 'This social networking site enables you to post short text messages (called tweets), containing a limited number of characters......', 'https://twitter.com/'),
(65, 'Google+', 'Owned by the tech giant Alphabet (Google), this interest-based social networking platform enables you to stay in touch with people ', 'https://plus.google.com/'),
(66, 'Baidu Tieba', 'Offered by Baidu of China, a search engine company, Baidu Tieba (known as Postbar internationally)', 'https://tieba.baidu.com/index.html'),
(67, 'Skype', 'Skype, owned by Microsoft, is one of the most popular communication-based social networking platforms.', 'https://www.skype.com/en/'),
(68, 'Viber', 'This multi-lingual social platform, which is available in more than 30 languages, is known for its instant text messaging and voice messaging capabilities.', 'https://www.viber.com/'),
(69, 'Sina Weibo', 'This is a highly popular microblogging social platform in China that is known for its hybrid mix of Twitter’s and Facebook’s features.', 'https://www.weibo.com/login.php'),
(70, 'LINE', 'LINE is a globally available messaging social network that enables you to share photos, videos, text messages and even audio ', 'https://line.me/en-US/'),
(71, 'Snapchat', 'This is an image messaging social platform that enables you to chat with friends by using pictures.', 'https://www.snapchat.com/'),
(72, 'YY', 'YY is a major video-based social networking platform in China that enables group video chats.', 'http://www.yy.com/'),
(73, 'VKontakte (VK)', 'VK is one of the largest social networking platforms in Russia and has quite similar features to Facebook.', 'https://vk.com/'),
(74, 'Pinterest', 'This is a photo sharing and visual bookmarking social media site or app that enables you to find new ideas for your projects and save them', 'https://www.pinterest.com/'),
(75, 'LinkedIn', 'LinkedIn is easily one of the most popular professional social networking sites or apps and is available in over 20 languages.', 'https://www.linkedin.com/'),
(76, 'Telegram', 'This instant messaging network is similar to WhatsApp and is available across platforms in more than eight languages. ', 'https://telegram.org/'),
(77, 'Reddit', 'This social media platform enables you to submit content and later vote for the content.', 'https://www.reddit.com/'),
(78, 'Taringa', 'Taringa is one of the largest social networking platform in Latin America and allows users to share their experiences, content and more.', 'https://www.taringa.net/'),
(79, 'Foursquare', 'This is a local search- and discovery-based social media platform that enables you to find the ideal places (based on your location) ', 'https://foursquare.com/'),
(80, 'Renren', 'This is the largest social networking site in China and is literally a platform for everyone. ', 'http://www.renren.com/'),
(81, 'Tagged', 'This is a great social media site based on friendship and dating and, in 2011, it acquired another social networking platform called hi5. ', 'https://secure.tagged.com/'),
(82, 'Badoo', 'This dating-based social networking site operates in more than 200 countries.', 'https://badoo.com/'),
(83, 'Myspace', 'This is a music-focused social networking site and provides an interactive and user-submitted network of friends.', 'https://myspace.com/'),
(84, 'StumbleUpon', 'StumbleUpon is an intelligent social networking platform that finds or discovers content and recommends the same to its users. ', 'http://www.stumbleupon.com/'),
(85, 'The Dots', 'the-dots.com is a networking platform that helps everyone involved in the creative process connect,.......', 'https://the-dots.com/'),
(86, 'Kiwibox', 'This is a community-based social networking site, especially for those who live in New York.', 'https://www.kiwibox.com/'),
(87, 'Skyrock', 'Skyrock is a French social networking site that offers its users a free and personal web space to create and post blogs, add profiles ', 'http://www.skyrock.com/'),
(88, 'Delicious', 'It is known for being the leading social bookmarking service. ', 'http://www.delicious.com.au/'),
(89, 'Snapfish', 'Snapfish is a web-based photo sharing social networking site that offers unlimited storage to its members for uploading photos. ', 'https://www.snapfish.com/photo-gift/home'),
(90, 'ReverbNation', 'This is the ideal social networking platform for musicians and professionals to connect with others in the music industry. ', 'https://www.reverbnation.com/'),
(91, 'Flixster', 'This is an American social networking site for people who love movies and want to connect with like-minded people by sharing their...', 'https://www.flixster.com/'),
(92, 'Care2', 'This social media site helps activists connect around the globe with similar individuals, businesses and organisations that are making', 'http://www.care2.com/'),
(93, 'CafeMom', 'This ad-supported social networking website is a community for mothers and mothers-to-be that enables them to get support', 'http://www.cafemom.com/'),
(94, 'Ravelry', 'Ravelry is a community-based social network that is targeted at people who are interested in fibre arts, such as spinning, knitting, ...', 'https://www.ravelry.com/account/login'),
(95, 'Nextdoor', 'This is a private social networking platform for neighbourhoods in the US. The objective is pretty simple: allowing users to get connected with the people in their area.', 'https://nextdoor.com/'),
(96, 'Wayn', 'Wayn is a travel- and lifestyle-based social networking platform and offers its users the ability to discover where to go, what to do and how to meet like-minded people to share their experiences.', 'http://www2.wayn.com/'),
(97, 'Cellufun', 'This social gaming community can easily be accessed on the move from any mobile device.', 'http://www.cellufun.com'),
(98, 'Vine', 'This is an entertainment-based, short-form video sharing social media site where members can easily share videos ', 'https://vine.co/'),
(99, 'Classmates', 'Classmates allows users to find, connect and keep in touch with friends and acquaintances from school and college. ', 'http://www.classmates.com/'),
(100, 'MyHeritage', 'This is an online genealogy social platform which supports more than 42 languages and empowers its users to create family trees, ...', 'https://www.myheritage.com/'),
(101, 'Viadeo', 'Viadeo is an online business-based social networking site that helps business people, mostly those in Europe, connect with one another. ', 'http://www.viadeo.com/en/'),
(102, 'Xing', 'This professional social networking site offers features that are similar to LinkedIn’s features, with its main users based in Switzerland, .....', 'https://www.xing.com/'),
(103, 'Xanga', 'This blogging-based social networking platform hosts weblogs, photo blogs and social networking profiles for its users.', 'http://xanga.com/'),
(104, 'LiveJournal', 'This San Francisco-based social networking site is available in Russia, as Zhivoy Zhurnal or Zhe Zhe. It enables users to maintain a diary, blog or journal, along with privacy controls.', 'www.livejournal.com'),
(105, 'Friendster', 'Friendster was previously a social networking site to find friends and stay in touch, but is now a social gaming network for game lovers in Asia.', 'http://www.friendster.com/'),
(106, 'Funny or Die', 'This comedy video social website is aimed at bringing together the funniest videos from the web. Celebrities follow this social platform a lot and it enables users to share, upload and rate videos.', 'http://www.funnyordie.com/'),
(107, 'Gaia Online', 'Gaia Online is an anime-themed social networking and forums-based website. It gives users access to avatars, virtual world, games and so on.', 'https://www.gaiaonline.com/'),
(108, 'We Heart It', 'This photo-sharing social media site, which is available in more than 20 languages, is ideal for users’ daily dose of inspiration or motivation. ', 'http://weheartit.com/'),
(109, 'Buzznet', 'This social media site allows users to share content on the basis of their personal interests in the form of videos, photos and journals. It also seamlessly integrates with Facebook.', 'http://www.buzznet.com/'),
(110, 'DeviantArt', 'DeviantArt is regarded as the largest online social networking community for art lovers and artists. It enables users to take photos of their artwork and share them with others.', 'https://www.deviantart.com/'),
(111, 'Flickr', 'This is another highly popular photo-sharing website. It serves as a platform to upload numerous high quality images', 'https://www.flickr.com/'),
(112, 'MeetMe', 'Formerly known as myYearbook, MeetMe is aimed at users who want to find new friends and chat with them. This makes it highly popular among teens and young students.', 'https://www.meetme.com/'),
(113, 'Meetup', 'This social networking portal enables you to find groups of like-minded people, who have similar interest to you', 'https://www.meetup.com/'),
(114, 'Tout', 'Tout is a social networking cum micro-blogging platform that allows you to view and share videos that are 15 seconds long. The videos that are shared on this platform are known as touts.', 'http://corp.tout.com/'),
(115, 'Mixi', 'This is a popular Japanese social networking service that has around 20 million active users.', 'https://mixi.jp/'),
(116, 'Douban', 'This Chinese social networking site has something for registered as well as unregistered users', 'https://www.douban.com/'),
(117, 'vcmp', 'From race to deathmatch to roleplay, VC:MP lets you do it. An extensible mod. Not only does VC:MP add multiplayer functionality, it offers server owners a large ...', 'https://vc-mp.org/'),
(118, 'samp', 'SA-MP (San Andreas Multiplayer) is a multiplayer mod for Grand Theft Auto San Andreas allowing users to play against each other over the internet or LAN.', 'http://www.sa-mp.com/'),
(119, 'lump', 'Liberty Unleashed - A free online multiplayer modification for GTA3.', 'http://liberty-unleashed.co.uk/'),
(120, 'samp hosting', 'Ultra Host - Free and Cheap SA:MP Server Hosting.', 'https://ultra-h.com/'),
(121, 'gta', 'Grand Theft Auto - Rockstar Games\r\nhttps://www.rockstargames.com/gta/\r\nRockstar Games Presents: Grand Theft Auto.', 'https://www.rockstargames.com/grandtheftauto/'),
(122, 'OLX', 'https://www.olx.com/Join the millions who buy and sell from each other everyday in local communities around the world. Find your community below. North America Flag', 'https://olx.com/'),
(123, 'Home - Welcome to the OLX career site', 'Everything you need to know about working at OLX: who we are, how to join us, contact information and the latest jobs we have.', 'https://www.joinolx.com/'),
(124, 'Wikipedia', 'Wikipedia is a free online encyclopedia, created and edited by volunteers around the world and hosted by the Wikimedia Foundation.', 'https://www.wikipedia.org/'),
(125, 'Wikipedia - Home | Facebook', 'Wikipedia. 5579750 likes · 59987 talking about this. A free, collaborative, multilingual Internet encyclopedia.', 'https://www.facebook.com/wikipedia/'),
(126, 'Amazon Prime', 'Get what you need fast.', 'https://www.amazon.com/prime'),
(127, 'Amazon UK', 'Amazon, but in the UK', 'http://www.amazon.com/uk'),
(128, 'Apple Products on Amazon', 'Apple on Amazon.', 'http://www.amazon.com/products/apple'),
(129, 'Google', 'Google Inc. is an American multinational public corporation invested in Internet search.....', 'https://www.google.com'),
(130, 'Bing', 'Bing (formerly Live Search, Windows Live Search, and MSN Search) is a web search engine (advertised as a \"decision engine\") from Microsoft.', 'https://www.bing.com'),
(131, 'Yahoo!', 'Yahoo! Inc.  is an American internet corporation founded in Santa Clara, California and headquartered in Sunnyvale, California, United States.', 'https://www.yahoo.com'),
(132, 'Jesus is a brand of jeans -- New Internationalist', 'Much of advertising power comes from this belief that it does not affect us', 'https://newint.org/features/2006/09/01/culture'),
(133, 'Orkut', 'Orkut is a social networking website that is owned and operated by Google Inc', 'http://www.orkut.com/index.html'),
(134, 'Beemp3.com - MP3 Search & Free MP3 Downloads', 'Free mp3 music search & download. Top artists and hit music free for download.', 'https://beemp3s.net/'),
(135, 'MP3-India - MP3 Search & Free Mp3 Downloads', '1 - 25 – MP3-India - MP3 Search, MP3-India - Free Mp3 Downloads ...', 'https://www.indiamp3.com/'),
(136, 'Free Mp3 Downloads with Bee Mp3', 'Specialized mp3 search engines that let users download the mp3 songs found for free seem to appear by the', 'https://www.mp3juices.cc/'),
(137, 'WapKing.co', 'Free Mobile Ringtones, Wallpapers, Games, Themes ...', 'http://wapking.co/'),
(138, 'Songs.PK', 'Download Bollywood Songs,Songspk,Mp3 Songs,Bollywood ...', 'https://songs.pk/browse/bollywood-albums'),
(139, 'Airtel', 'airtel: Mobile Prepaid, GSM Mobile services, Broadband Internet connection, postpaid mobile connections,broadband service, DTH, blackberry ', 'http://www.airtel.in/'),
(140, 'A-Z Lyrics Universe', 'Lyrics collection organized by artists alphabetically. Search engine included.', 'https://www.azlyrics.com/'),
(141, 'Google AdSense', 'Make money online by monetizing your website and YouTube channel with Google AdSense.', 'https://www.google.com/adsense/start/#/?modal_active=none'),
(142, 'Google Advertising ', 'Find out how Google Ads can help you get your business in front of your customers using display, video, search, and mobile advertising.', 'https://www.google.com/ads/'),
(143, 'Google AdWords', 'Start to advertise online with Google AdWords. Get targeted ...', 'https://adwords.google.com/intl/en_au/home/#?modal_active=none'),
(144, 'Welcome to adidas', 'Welcome to adidas Shop for adidas shoes, clothing and view new collections for adidas Originals, running, football, training and much more.', 'http://www.global.adidas.com/'),
(145, 'Nike - Home', 'Nike.com is your destination for the best selection of innovative, must-have products. Enjoy free shipping and returns with NikePlus.', 'https://store.nike.com/us/en_us/'),
(146, 'Picasa 3', 'Oct 14, 2015 - Picasa 3.9.141.259 free download. ... Google\'s Picasa is photo editing software, but its abilities are not limited .... Ranking in Graphic Design: 3.', 'http://picasa.en.downloadastro.com/'),
(147, 'my ip', 'This is the public IP address of your computer. If your computer is behind a router or used a proxy server to view this page, the IP address shown is your router or proxy server.', 'http://whatismyipaddress.com/'),
(148, 'webnet search', 'Web-Net search is a powerful and a fast search engine developed and founded by respective CEO M Raahim Khattak', 'https://mrkfus.000webhostapp.com/latest/index.php'),
(149, 'samsung', 'Discover the latest in electronic & smart appliance technology with Samsung. Find the next big thing from tablets & smartphones to laptops & tvs.', 'https://www.samsung.com'),
(150, 'Microsoft Lumia', 'Microsoft Mobile Devices official website. Discover the latest Lumia smartphones and accessories, explore the range mobile apps and get support.', 'https://www.microsoft.com/en/mobile/'),
(151, 'nokia lumia', 'Microsoft Mobile Devices official website. Discover the latest Lumia smartphones and accessories, explore the range mobile apps and get support.', 'https://www.microsoft.com/en/mobile/'),
(152, 'Samsung Mobile Phones: Android Galaxy Smartphones ', 'Discover a galaxy of possibilities with the line of mobile phones from Samsung. From the Galaxy S to the Galaxy Note, there is one Galaxy phone made for you.', 'https://www.samsung.com/us/mobile/phones/'),
(153, 'Android Phones : Latest & New Android Mobile Phone', 'List of all the latest and new android mobile phones available from various mobile companies and brands.', 'http://gadgets.ndtv.com/mobiles/android-phones-os'),
(154, 'Microsoft - Official Home Page', 'At Microsoft our mission and values are to help people and businesses ...', 'https://www.microsoft.com/'),
(155, 'Microsoft - Home | Facebook', 'Microsoft. 11798794 likes · 14068 talking about this. Welcome to the official Microsoft Facebook page, your source for news and conversation about...', 'https://www.facebook.com/MSFTPK/?brand_redir=20528438720'),
(156, 'progression formation', 'PROGRESSION FORMATION est un organisme de formation professionnelle....', 'http://www.moncpf.org/'),
(157, 'beaconhouse', 'The branch has been operational since 2002.\r\nIt caters four academic levels: Early Years,Primary, Middle, Matric & O-Levels\r\nFounded in 2012', 'https://www.beaconhouse.net/'),
(158, 'BeaconhouseValencia Town Campus Lahore-|Facebook', '29-30 B-Block. ... BSS, Valencia Town Campus revamped! ... Maneehay Gauhar, Zeeshan Arif Chaudhary, Noureen Asim and 25 others like this.', 'https://www.facebook.com/BeaconhouseSchoolSystemValenciaTownCampus/'),
(159, 'lol', 'LOL, or lol, is an acronym for laugh(ing) out loud or lots of laughs, and a popular element of Internet slang. It was first used almost exclusively on Usenet, but has ...', 'https://en.wikipedia.org/wiki/LOL'),
(160, 'todaypk.com', 'https://www.todaypk.com/\r\nTodayPk Watch Free Online Movies, Watch Telugu Movies Online, Songs Download, DVDrip Mp4 TodayPk Movies Bollywood Hindi, Hollywood, Tamil, ...', 'https://www.todaypk.ag/'),
(161, 'Download Firefox', 'Download Mozilla Firefox, a free Web browser. Firefox is created ...', 'https://www.mozilla.org/en-US/firefox/new/'),
(162, 'Mozilla - Wikipedia', 'Mozilla (stylized as moz://a) is a free-software community created in 1998 by members of Netscape. The Mozilla community uses, develops, spreads and ...', 'https://en.wikipedia.org/wiki/Mozilla'),
(163, 'Download utorrent - free - latest version', 'Download uTorrent for Windows now from Softonic: 100% safe and virus free. More than 172451 downloads this month. Download uTorrent latest version 2017.', 'https://utorrent.en.softonic.com/'),
(164, 'uTorrent - Download', 'Download uTorrent for Windows now from Softonic: 100% safe and virus free. More than 172451 downloads this month. Download uTorrent latest version 2017.', 'https://utorrent.en.softonic.com/'),
(165, 'english movies', 'Check out new English movies released in the year 2017. Stay updated with the latest English movie trailers, ratings & reviews at BookMyShow.', 'http://www.hotstar.com/movies/popular-english-movies/5989/17'),
(166, 'indian movies', 'Chef (2017) Hindi Full Movie Watch Online HD Print Quality F... ... Lucknow Central (2017) Full Movie Watch Online HD Print Free... ... Toilet – Ek Prem Katha (2017) Full Movie Watch Online HD P...', 'http://www.watchonlinemovies.com.pk/category/indian-movies/2017-full-movies/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
