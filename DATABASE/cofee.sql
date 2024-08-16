
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `price` Float NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `price`, `title`, `quantity`, `date`, `user_id`) VALUES
(1, '300', 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, '2023-04-21', 0),
(2, '400', 'AMERICANO - HOT ESPRESSO (12 OZ)', 1,  '2024-04-21', 0),
(3, '450', 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, '2024-07-21',  2),
(4, '200', 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, '2024-06-01', 2),
(5, '200', 'AMERICANO - HOT ESPRESSO (12 OZ)', 1, '2024-07-02',  2),
(6, '220', 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, '2024-04-21',  2);

ALTER TABLE orders
ADD COLUMN subtotal_amount FLOAT NOT NULL DEFAULT 0;


UPDATE orders
SET subtotal_amount = price;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'Rovie', '', 'rovie20@gmail.com', '123', '2024-07-18 08:59:41'),
(2, 'admin', 'admin', 'admin@gmail.com', '456', '2024-04-18 11:00:40'),
(3, 'sample', 'smple', 'sample', 'abc', '2024-07-28 11:03:23'),
(4, 'Rovic', 'Ram', 'Ram@gmail.com', 'abc', '2024-04-19 12:14:34');

--
-- 
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--table structure for contacts--
 CREATE TABLE contacts (
        id INT AUTO_INCREMENT PRIMARY KEY,
       email VARCHAR(255) NOT NULL,
       message TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
--table structure for subscribers--
 CREATE TABLE subscribers (
       id INT AUTO_INCREMENT PRIMARY KEY,
       email VARCHAR(255) NOT NULL UNIQUE,
        subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
     );