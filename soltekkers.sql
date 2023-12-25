-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 11:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soltekkers`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `title` varchar(29) NOT NULL,
  `category` int(11) NOT NULL,
  `instructor` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `duration` varchar(19) NOT NULL,
  `lectures` int(11) NOT NULL,
  `deadline` varchar(30) NOT NULL,
  `content` varchar(700) NOT NULL,
  `detail` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `category`, `instructor`, `image`, `price`, `discount`, `duration`, `lectures`, `deadline`, `content`, `detail`) VALUES
(15, 'SEO Course', 6, 7, 'SEO WEB.jpg', 30000, 10, '3 months', 36, '', 'Seo Skills', '<p class=\"MsoNormal\">Unlock the full potential of SEO with our comprehensive course, designed to make you an expert in On-Page SEO, Off-Page SEO, Local SEO, and Technical SEO.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>On-Page SEO:</strong> Dive into the art of optimizing your web content. Learn to craft compelling, search-friendly pages that engage users and capture the attention of search engines.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Off-Page SEO:</strong> Discover the power of authority and credibility in the digital world. Uncover the secrets of link building and content marketing, ensuring your website ranks higher and gets noticed by your target audience.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Local SEO:</strong> If you\'re a local business, this is your golden ticket to online success. Master the tactics to stand out in local searches, using tools like Google My Business, local citations, and customer reviews to draw local customers to your doorstep.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Technical SEO:</strong> Demystify the technical aspects of SEO. We\'ll guide you through the intricacies of website structure, mobile-friendliness, and data markup to ensure search engines find, understand, and love your site.</p>'),
(16, 'Digital marketing', 3, 8, 'digital-marketing-course-banner.jpg', 35000, 10, '3 months', 36, '', 'Digital media skills', '<p><strong>Why join Us ?</strong></p>\r\n<p>Our seasoned instructors, industry experts in their own right, bring real-world insights and case studies into the classroom, ensuring a practical and hands-on learning experience. You\'ll delve into content marketing, analytics, and the latest trends in digital marketing strategy, gaining a holistic understanding of how to create impactful campaigns. By the end of our course, you\'ll not only possess a comprehensive skill set but also a recognized certification, making you an asset in the competitive landscape of digital media marketing. Join us to unlock your potential, stay ahead of industry trends, and drive success in the digital age.</p>\r\n<p><strong>Curriculum Services:</strong></p>\r\n<p>Moreover, our curriculum hones your skills in content marketing, providing you with the ability to create compelling and shareable content. Analytics training is a core component, empowering you to measure and interpret data, refining your decision-making process. With industry experts as instructors, you\'ll gain practical insights and hands-on experience, learning to navigate the latest trends in digital marketing strategy. By the course\'s end, you\'ll not only hold a recognized certification but also boast a versatile skill set, positioning you as a sought-after professional in the competitive field of digital media marketing. Join us to unlock your potential, stay ahead of industry trends, and drive success in the digital age.</p>\r\n<p>.</p>'),
(17, 'Full Stack Development', 1, 8, 'WEB C WEB.jpg', 35000, 10, '3 months', 36, '', 'Css,HTML,Javascript,PHP,laravel', '<p><strong>What Will you get by joining us?</strong></p>\r\n<p>By joining our course, you will gain proficiency in&nbsp;<strong>HTML</strong>, <strong>CSS</strong>, and<strong> JavaScript</strong>, mastering the art of creating responsive and visually appealing user interfaces. Delve into the intricacies of back-end development, learning popular languages like <strong>PHP,</strong>&nbsp; and<strong> laravel</strong>, and exploring databases like MySQL and MongoDB. Our curriculum emphasizes the use of frameworks such as React and Angular for front-end development and Express and Django for back-end, ensuring you\'re equipped with the latest tools and technologies.</p>\r\n<p><strong>Advantages after course:</strong></p>\r\n<p>Led by industry-experienced instructors, our course integrates real-world projects and case studies, providing you with hands-on experience to build a diverse portfolio. Whether you\'re a beginner or an experienced developer looking to broaden your skill set, our Full Stack Web Development course positions you for success in the dynamic and in-demand field of web development. Join us to acquire the comprehensive skills needed to create powerful, end-to-end web applications and excel in the rapidly evolving world of technology.</p>'),
(18, 'Graphic Designing', 4, 7, '7.jpg', 35000, 10, '3 months', 36, '', 'Photoshop,illustrator', '<p class=\"MsoNormal\"><strong>Are you passionate about creating visually stunning designs that captivate the world?</strong> <span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🌍</span> Do you dream of turning your creativity into a thriving career? Look no further! <span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🚀</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🖌</span><strong>️ Why Choose Our Graphic Designing Course? <span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🖌</span></strong>️</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">✅</span><strong> Hands-On Projects:</strong> Put your skills to the test with real-world projects that challenge your creativity and problem-solving abilities. Build an impressive portfolio that showcases your talent to potential clients and employers.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">✅</span> <strong>Flexible Learning: </strong>Our course is designed to fit your busy schedule. Choose from flexible class timings and online resources, allowing you to learn at your own pace and convenience.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">✅</span> <strong>Career Support:</strong> Receive guidance and support from our career counselors who will help you explore job opportunities, internships, and freelance gigs. We\'re committed to helping you launch your graphic design career successfully.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🌟</span> <strong>What You\'ll Learn: </strong><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🌟</span></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Graphic Design Fundamentals:</strong> Master the basics of design theory, color theory, typography, and composition.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Software Proficiency:</strong> Become proficient in industry-standard design software like Adobe Photoshop, and Illustrator.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Logo and Branding Design:</strong> Craft unique and memorable logos and branding materials for businesses.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Print and Digital Media:</strong> Learn to design for various mediums, including print materials, social media, and online platforms.</p>\r\n<p class=\"MsoNormal\"><span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🚀</span> Ready to Transform Your Passion into a Rewarding Career? <span style=\"font-family: \'Segoe UI Symbol\',sans-serif; mso-bidi-font-family: \'Segoe UI Symbol\';\">🚀</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `coursecategory`
--

CREATE TABLE `coursecategory` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursecategory`
--

INSERT INTO `coursecategory` (`id`, `category`) VALUES
(1, 'Website development'),
(3, 'Digital marketing'),
(4, 'Graphics desgining'),
(6, 'SEO course');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `course` varchar(29) NOT NULL,
  `name` varchar(40) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(19) NOT NULL,
  `gname` varchar(40) NOT NULL,
  `gnumber` int(19) NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `cnic` varchar(19) NOT NULL,
  `lastDegree` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `course`, `name`, `dob`, `gender`, `email`, `phone`, `gname`, `gnumber`, `address`, `image`, `cnic`, `lastDegree`) VALUES
(2, 'Graphics Designing', 'Muhammad Usama', '2023-10-29', 'male', 'alviu027@gmail.com', '03213386966', 'aufiai', 2147483647, 'p-129 st#6 M. Ali park dhudiwala jalvi market fsd', 'FB_IMG_1698869700073.jpg', '32423423424', 'ICS');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `expertise` text NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`id`, `name`, `expertise`, `img`) VALUES
(7, 'Sir Khalil', 'Senior Graphics Designer', 'FB_IMG_1698869700073.jpg'),
(8, 'Usama Awan', 'PHP & laravel developer', '1676141475816.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(29) NOT NULL,
  `phone` varchar(29) NOT NULL,
  `email` varchar(35) NOT NULL,
  `service` varchar(50) NOT NULL,
  `query` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `service`, `query`) VALUES
(3, 'Muhammad Usama', '03213386966', 'alviu027@gmail.com', 'Website developmentt', 'dljhfadfasjkhdfahfasfuieyhjdkasuhf'),
(9, 'Muhammad Usama', '03117549897', 'admin@rifah.pk', 'Website developmentt', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(250) NOT NULL,
  `detail` varchar(700) NOT NULL,
  `price` varchar(9) NOT NULL,
  `discount` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `detail`, `price`, `discount`) VALUES
(1, 'Website  Development', 'WEB SERVICE.jpg', '<p><strong>Welcome to our Web Development Services!</strong></p>\r\n<p>As a premier web development services provider, we specialize in crafting tailored and cutting-edge digital solutions to elevate your online presence. Our expert team combines creativity and technical prowess to design and develop websites that not only captivate users but also deliver seamless and intuitive experiences. From responsive and mobile-friendly designs to robust e-commerce platforms, we leverage the latest technologies to ensure your website is a powerful asset for your business. Our commitment extends beyond aesthetics; we prioritize functionality, security, and user-centric design to create a digital storefron', '35000', '10%'),
(6, 'Graphics Designing', 'graphic web service.jpg', '<p><strong>Welcome to our Graphic Designing Services!</strong><br><br>We are here to bring your vision to life through stunning visuals. Whether you need eye-catching logos, engaging social media graphics, or captivating brochures, our team of talented designers is dedicated to creating designs that leave a lasting impression. Let\'s transform your ideas into compelling visuals that speak volumes about <strong>your brand!</strong></p>', '35000', '10%'),
(7, 'Digital marketing', 'ed489dcc29014a94b5a6c59648792fd4.jpg', '<p><strong>Welcome to our Digital marketing Services!</strong></p>\r\n<p>&nbsp;</p>\r\n<p>As a leading digital marketing services provider, we empower businesses to thrive in the ever-evolving online landscape. Our comprehensive suite of services encompasses strategic search engine optimization (SEO), driving organic visibility and website traffic. Through targeted search engine marketing <strong>(SEM)</strong> and pay-per-click <strong>(PPC) </strong>campaigns, we ensure your brand stands out in search results, maximizing reach and conversion. Leveraging the influence of social media, our expert social media marketing <strong>(SMM)</strong> team crafts engaging campaigns on platforms like Faceb', '35000', '10%'),
(8, ' SEO Services', 'SEO MARKETING SERVICE.jpg', '<p>&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>What is SEO&nbsp;?</strong></p>\r\n<p class=\"MsoNormal\">SEO, or Search Engine Optimization, is the art and science of optimizing a website to improve its visibility on search engines like Google. It involves various techniques and strategies to boost a website\'s rankings in search results, ultimately driving more organic traffic and enhancing its online presence.</p>\r\n<p class=\"MsoNormal\"><strong>Our On-Page SEO Services:</strong></p>\r\n<ul>\r\n<li class=\"MsoNormal\"><span style=\"mso-tab-count: 1;\">&nbsp; &nbsp; &nbsp; &nbsp;</span>Content Optimization</li>\r\n<li class=\"MsoNormal\">&nbsp; &nbsp; &nbsp; &nbsp;Keyword Research &amp;Overview</li>\r\n<li class=\"', '30,000', '10%'),
(9, 'Shopify store setup', 'shopify services web.jpg', '<p>Certainly! Writing a compelling description for your service provider Shopify store is crucial for attracting potential clients. Here\'s an example description to get you started:</p>\r\n<p>&nbsp;</p>\r\n<p><strong>*1. Unparalleled Expertise:*</strong><br>&nbsp; &nbsp;- Our team of seasoned professionals brings years of expertise to the table. we\'ve got you covered with unmatched skill and precision.</p>\r\n<p><strong>*2. Tailored Services:*</strong><br>&nbsp; &nbsp;- We understand that every client is unique, and so are their needs. Our services are fully customizable to ensure a perfect fit for your specific requirements.</p>\r\n<p><strong>*3. Hassle-Free Transactions:*</strong><br>&nbsp; &nbsp;', '30000', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(29) NOT NULL,
  `password` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'Soltekkers@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursecategory`
--
ALTER TABLE `coursecategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coursecategory`
--
ALTER TABLE `coursecategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
