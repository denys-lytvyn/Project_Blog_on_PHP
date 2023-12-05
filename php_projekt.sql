-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 05 2023 г., 03:33
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_projekt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_topic` int(12) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `id_user`, `title`, `img`, `content`, `status`, `id_topic`, `created_date`) VALUES
(35, 43, 'Introduction to PHP: Getting Started with Server-Side Scripting', '1701740253_php.png', '<p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. In general, PHP web applications run on a web server, and serves web pages to visitors on request. One key features of PHP is that you can embed PHP code within HTML web pages, making it very easy for you to create dynamic content quickly.</p><h2>Why you should you consider using PHP?</h2><p>First of all, PHP is completely free and it is very easy to learn when compared to other scripting languages.</p><p>One of the great features of PHP is that it is cross-platform which means that you can run PHP programs on Windows, Linux, Mac OS and Solaris among others. This is also true for web servers as PHP engine can be integrated with all common web servers, including IIS, Apache and Zeus.</p><p>According to the web site <a href=\"https://w3techs.com/\">w3techs.com</a>, PHP is used by 82.1% of all the websites whose server-side programming language we know by the time of this writing reflecting its importance on the market.</p><p>If you search on the web about the advantages and disadvantages of PHP when compared to <a href=\"https://asp.net/\">ASP.NET</a> MVC, for instance, you will note the majority of the answers are that it depends. That is why in my humble opinion I believe that it is important considering this technology when choosing the programming language for your web application.</p><h2>Integrated Development Environment options</h2><p>For developers who loves Visual Studio, there is a good and a bad news for you. The good news is that there are some Visual Studio extensions that let you develop PHP web application using Visual Studio, taking advantage of its main features. Nevertheless, the bad news is that I couldn’t find any free extension. One of them is called “PHP Tools for Visual Studio”. After installing this extension, you will realize that you can only use it for free during a small period of time to test it. For more information please visit <a href=\"http://visualstudiogallery.msdn.microsoft.com/6eb51f05-ef01-4513-ac83-4c5f50c95fb5\">this page</a>.</p><p>For this reason, I will show you how to develop PHP using Eclipse. I am going to write some blog posts about Java so this is a good opportunity for you to get started with Eclipse, one of the main IDE for Java.</p><h2>Installing PDT on Eclipse</h2><p>Eclipse is an <a href=\"http://en.wikipedia.org/wiki/Integrated_development_environment\">integrated development environment</a> (IDE). It contains a base <a href=\"http://en.wikipedia.org/wiki/Workspace\">workspace</a> and an extensible <a href=\"http://en.wikipedia.org/wiki/Plug-in_(computing)\">plug-in</a> system for customizing the environment. It is mostly used for Java development but it can be used to PHP development as well. If do not have Eclipse, you can download it from <a href=\"https://www.eclipse.org/downloads/\">Eclipse web site</a>.</p><p>In order to develop PHP in Eclipse, one of the options is to install the PDT (PHP Development Tools) package. Please follow the procedure in order to install this package:</p><ol><li>Open Eclipse (my version is Kepler Service Release 2).</li><li>Go to Help --&gt; Install New Software...</li><li>Expand the \"Work with\" drop down and select: \"Kepler - <a href=\"http://download.eclipse.org/releases/kepler\">http://download.eclipse.org/releases/kepler</a>\".</li><li>Expand \"Programming Languages\" from the list.</li><li>Check PHP Development Tools (PDT) SDK Feature.</li><li>Click \"Next &gt;\" at the bottom and follow the further instruction of Eclipse.</li><li>After successful installation of PDT: Go to Window --&gt; Preferences and make sure you will find PHP listed on the left panel.</li></ol><h2>Installing XAMPP</h2><p>On the previous section, it was shown how to install the package for Eclipse in order to develop in PHP. Nevertheless, there are many products that still need to be installed like Apache HTTP Server and PHP binaries. In this blog post, we are going to install it using a solution package called XAMPPP, which is a free and open source cross-platform web server solution stack package, consisting mainly of the Apache HTTP Server, MySQL database, and interpreters for scripts written in the PHP and Perl programming languages.</p><p>In my case, I have downloaded version 1.8.1 from <a href=\"http://sourceforge.net/projects/xampp/files/XAMPP%20Windows/\">this website</a> but more recent versions should work as well. After the download is complete just execute the setup and follow the steps.</p><h2>Setting up XDebug</h2><p>If you want to have the possibility to debug PHP code within Eclipse you should configure XDebug or Zend. In this blog post, we are going to set up the XDebug.</p><p>XDebug is an opensource Debugger and Profiler for PHP. PDT has built in support for XDebug, which allows you to step-debug through your PHP projects. It is already included on the XAMPP solution.</p>', 1, 16, '2023-12-05 02:06:32'),
(36, 44, 'HTML Essentials: Building the Foundation of Web Pages', '1701740461_html.jpg', '<p>Dive into the core elements of HTML and master the art of structuring web pages. This in-depth post covers HTML tags, document structure, and semantic markup, providing a solid foundation for creating well-structured, accessible, and content-rich web pages.</p><p>Elevate your HTML skills and unleash the true potential of web development. Learn about HTML5 features, forms, multimedia integration, and the latest best practices to create modern and standards-compliant web pages. Explore accessibility considerations, meta tags, and SEO-friendly HTML practices to ensure your web pages are not only well-structured but also optimized for search engines. Whether you\'re a beginner or a seasoned developer, this post equips you with the knowledge and skills to create web pages that are not only visually appealing but also optimized for performance and search engine visibility.</p>', 1, 12, '2023-12-05 02:22:24'),
(37, 43, 'Building a PHP Web Application: From Database Connection to User Authentication', '1701740275_php2.jpg', '<p>Take a deep dive into the intricate process of constructing a robust PHP web application. This post goes beyond the basics, addressing crucial aspects such as connecting to a database, implementing secure user authentication, and managing sessions effectively.</p><p>Explore the Model-View-Controller (MVC) architecture and learn how to structure your PHP projects for scalability and maintainability. Gain practical insights and hands-on experience in creating dynamic, secure, and feature-rich web applications powered by PHP. By the end of this guide, you\'ll be well-equipped to build sophisticated PHP applications with a solid foundation in database interactions and user authentication. Whether you\'re a seasoned developer or aspiring to build complex web applications, this post will guide you through the essential steps of creating a secure and scalable PHP project.</p>', 1, 16, '2023-12-05 02:35:34'),
(38, 44, 'Mastering CSS: Styling Web Pages with Elegance', '1701740526_css.jpg', '<p>Immerse yourself in the world of Cascading Style Sheets (CSS) and discover the art of crafting visually stunning web pages. This comprehensive post delves into CSS selectors, styling properties, and responsive design techniques.</p><p>Elevate your web design skills as you learn to create elegant, responsive, and visually appealing websites with the power of CSS. Explore flexbox and grid layout systems, CSS animations, and preprocessors to streamline your styling workflow. Understand the importance of cross-browser compatibility and explore modern CSS frameworks and methodologies, ensuring your web pages not only look great but also function seamlessly across different devices and browsers. Whether you\'re a designer looking to enhance your CSS skills or a developer aiming to create modern and responsive web pages, this post provides the insights and techniques you need to master the art of CSS.</p>', 1, 11, '2023-12-05 02:39:21'),
(39, 44, 'Optimizing PHP Performance: Tips and Best Practices', '1701740638_php3.png', '<p>In today\'s fast-paced digital world, website performance is a critical factor that can significantly impact user experience and business success. If you\'re a PHP app developer or part of <a href=\"https://www.wamatechnology.com/website-development/\"><strong>a web development company in USA</strong></a>, you understand the importance of optimizing PHP performance to create faster and more efficient websites. In this blog post, we\'ll explore valuable tips and best practices to help you enhance your website\'s performance and keep your users engaged.</p><p>&nbsp;</p><p>Understanding the Significance of PHP Performance</p><p>PHP, a versatile scripting language widely used in web development, plays a pivotal role in the performance of your website. A slow-loading website can lead to a higher bounce rate, decreased user satisfaction, and potential revenue loss. To address these issues, consider the following PHP performance optimization strategies:</p><p>&nbsp;</p><p>1. Code Efficiency</p><p>Efficient code is the foundation of any high-performing PHP application. Minimize unnecessary loops, use proper data structures, and avoid redundant database queries. Ensure that your PHP app developers in the USA are well-versed in writing clean and optimized code.</p><p>&nbsp;</p><p>2. Caching Mechanisms</p><p>Implement effective caching mechanisms to reduce server load and enhance website speed. Leverage technologies like Memcached or Redis to store frequently accessed data, reducing the need for resource-intensive database queries.</p><p>&nbsp;</p><p>3. Content Delivery Networks (CDNs)</p><p>Integrate a Content Delivery Network to distribute website content across multiple servers and geographically diverse locations. This reduces latency and accelerates content delivery, benefiting users across the United States and beyond.</p><p>&nbsp;</p><p>4. Database Optimization</p><p>Optimize your database queries by indexing tables, removing unnecessary data, and using efficient SQL queries. These steps can significantly enhance your website\'s overall performance.</p><p>&nbsp;</p><p>5. Server Configuration</p><p>Fine-tune your server configuration settings to match the requirements of your PHP application. Adjust memory limits, server software, and other parameters to ensure the best performance.</p><p>&nbsp;</p><p>6. PHP Profilers</p><p>Leverage PHP profiling tools to identify performance bottlenecks and areas for improvement in your code. Xdebug and Blackfire are popular profilers that can help you analyze and optimize your PHP application.</p><p>&nbsp;</p><p>7. Use PHP Accelerators</p><p>Implement PHP accelerators like APCu or OPcache to cache compiled PHP scripts, reducing the need for recompilation and improving overall response time.</p><p>&nbsp;</p><p>8. Monitor and Analyze</p><p>Constantly monitor your website\'s performance using tools like New Relic or Google PageSpeed Insights. Regularly analyze your site\'s metrics to identify performance issues and potential improvements.</p><p>&nbsp;</p><p>9. Mobile Optimization</p><p>Ensure that your PHP application is optimized for mobile devices. Responsive design and efficient code can lead to faster load times on smartphones and tablets, catering to a broader audience.</p><p>&nbsp;</p><p>10. Regular Updates</p><p>Keep your PHP version and web server software up to date. Updates often include performance enhancements and security fixes, which are crucial for maintaining a high-performing website.</p><p>&nbsp;</p><p>By implementing these PHP performance optimization tips and best practices, your <a href=\"https://www.wamatechnology.com/php-web-development/\"><strong>PHP app development company in USA</strong></a> can deliver faster, more efficient websites that will impress clients and end users alike. In an era where every millisecond counts, optimizing PHP performance is a vital aspect of web development that can make a significant difference in your website\'s success.</p>', 1, 16, '2023-12-05 02:43:58'),
(40, 43, 'Demystifying SQL: A Beginner\'s Guide to Database Queries', '1701740708_sql.png', '<p>Uncover the secrets of Structured Query Language (SQL) with this beginner-friendly guide. Dive into the world of database queries, mastering SELECT statements, filtering data, and performing CRUD operations.</p><p>Gain the essential skills to interact with databases, retrieve information efficiently, and lay the groundwork for becoming a proficient SQL developer. Explore database design principles, normalization, and advanced querying techniques to enhance your ability to work with relational databases. Understand transaction management, indexing, and optimization strategies for handling large datasets, ensuring that your interactions with databases are not only effective but also optimized for performance. Whether you\'re a beginner taking your first steps into the world of databases or a developer looking to solidify your SQL skills, this post provides a clear and comprehensive guide to mastering the fundamentals of SQL and database querying.</p>', 1, 18, '2023-12-05 02:45:08');

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE `topics` (
  `id` int(12) NOT NULL,
  `name` varchar(121) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(11, 'CSS', 'css3'),
(12, 'HTML', 'html5'),
(16, 'PHP', 'PHP COOL !!!'),
(18, 'SQL', 'SQL');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(34, 1, 'root', 'root@gmail.com', '$2y$10$tC2G6XzunyT7U6mfW9vQ1OIN3IvKRHP.nG0yUuPBqcFVJg7/RLgoq', '2023-12-03 21:18:20'),
(38, 0, 'TeYzee', 'lytvyn.den2003@gmail.com', '$2y$10$SdivlKv6VeGHFBokwhgi8ua9QagQQiZb8AA9oheitg.gr3L3FDoDu', '2023-12-04 15:05:39'),
(43, 1, 'Denys Lytvyn', 'lytvyn.denys@gmail.com', '$2y$10$7f2wRZnk3jmW1Zo/kn73i.b5dYgcog0UocOMXyhnU2CtrWy3CT9VO', '2023-12-05 01:37:20'),
(44, 1, 'Serhii Kovbas', 'serhii.kovbas@gmail.com', '$2y$10$taEcc/IppFPzBzSqCZj.zu9wWnf5qd7NedWRIEhRdgQqFvLATI5tG', '2023-12-05 01:40:42');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_topic` (`id_topic`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_topic`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
