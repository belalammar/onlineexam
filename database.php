

-- Database: `online-exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL
);

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'php'),
(2, 'html'),
(3, 'css'),
(4, 'javascript'),
(5, 'jquery'),
(6, 'bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
);

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, ' What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'none of them', 0, 1),
(2, 'How do you write "Hello World" in PHP', 'echo "Hello World";', '"Hello World";', ' Document.Write("Hello World");', 'none of them', 0, 1),
(3, ' The PHP syntax is most similar to:', 'Perl and C', 'VBScript', 'JavaScript', 'none of them', 0, 1),
(4, 'When using the POST method, variables are displayed in the URL:', 'true', 'false', 'none of them', 'return 1', 1, 1),
(5, 'PHP server scripts are surrounded by delimiters, which?', '&lt;?php...?&gt;', '&lt;?php&gt;...&lt;/?&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '&lt;script&gt;...&lt;/script&gt;', 0, 1),
(6, 'All variables in PHP start with which symbol?', '@', '%', '$', '&amp;', 2, 1),
(7, '', '', '', '', '', 0, 0),
(8, 'What is the correct way to end a PHP statement?', '.', ';', 'new line', '&lt;php&gt;', 1, 1);
(9, ' What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'none of them', 0, 1),

(10, 'What is the correct way to end a PHP statement?', '.', ';', 'new line', '&lt;php&gt;', 1, 1);

(11, ' What does PHP stand for?', 'PHP: Hypertext Preprocessor', 'Private Home Page', 'Personal Hypertext Processor', 'none of them', 0, 1),
(12, 'How do you write "Hello World" in PHP', 'echo "Hello World";', '"Hello World";', ' Document.Write("Hello World");', 'none of them', 0, 1),
(13, ' The PHP syntax is most similar to:', 'Perl and C', 'VBScript', 'JavaScript', 'none of them', 0, 1),
(14, 'When using the POST method, variables are displayed in the URL:', 'true', 'false', 'none of them', 'return 1', 1, 1),
(15, 'PHP server scripts are surrounded by delimiters, which?', '&lt;?php...?&gt;', '&lt;?php&gt;...&lt;/?&gt;', '&lt;&amp;&gt;...&lt;/&amp;&gt;', '&lt;script&gt;...&lt;/script&gt;', 0, 1),
(16, 'All variables in PHP start with which symbol?', '@', '%', '$', '&amp;', 2, 1),
(17, '', '', '', '', '', 0, 0),
(18, 'What is the correct way to end a PHP statement?', '.', ';', 'new line', '&lt;php&gt;', 1, 1);


-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
);

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `pass`, `img`) VALUES
(1, 'belal', 'me32219@gmail.com', '1234', 'bebo.jpeg');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
