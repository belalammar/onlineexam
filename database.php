CREATE database  exam;



-- Table structure for table `category`

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `cat_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf-8;


-- Dumping data for table `category`


INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'computer science'),
(2, 'system information'),
(3, 'accounting managment'),
(4, 'sociology');

-- --------------------------------------------------------


-- Table structure for table `questions`


CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf-8;



INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES










-- Table structure for table `signup`

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf-8;



-- Indexes for table `category`

ALTER TABLE `category`

    ADD PRIMARY KEY (`id`);


-- Indexes for table `questions`

ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);


-- Indexes for table `signup`

ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for dumped tables

 AUTO_INCREMENT for table `category`

ALTER TABLE `category`

    MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

-- AUTO_INCREMENT for table `questions`


-- ALTER TABLE `questions`
  
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `signup`

ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
  
