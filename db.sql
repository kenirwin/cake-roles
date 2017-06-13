-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2017 at 12:20 PM
-- Server version: 10.0.30-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wittproj_roles`
--

-- --------------------------------------------------------

--
-- Table structure for table `convents`
--

CREATE TABLE `convents` (
  `id` int(11) NOT NULL,
    `name` varchar(255) DEFAULT NULL,
      `name_english` varchar(255) DEFAULT NULL,
        `name_spanish` varchar(255) DEFAULT NULL,
	  `name_portuguese` varchar(255) DEFAULT NULL,
	    `name_other` varchar(255) DEFAULT NULL,
	      `city` varchar(255) DEFAULT NULL,
	        `country` varchar(255) DEFAULT NULL,
		  `date_founding` int(4) DEFAULT NULL,
		    `date_closing` int(4) DEFAULT NULL,
		      `latitude` varchar(255) DEFAULT NULL,
		        `longitude` varchar(255) DEFAULT NULL,
			  `created` datetime DEFAULT NULL,
			    `modified` datetime DEFAULT NULL
			    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

			    -- --------------------------------------------------------

			    --
			    -- Table structure for table `roles`
			    --

			    CREATE TABLE `roles` (
			      `id` int(11) NOT NULL,
			        `woman_id` int(11) NOT NULL,
				  `convent_id` int(11) NOT NULL,
				    `role` varchar(255) DEFAULT NULL,
				      `start_year` int(4) DEFAULT NULL,
				        `end_year` int(4) DEFAULT NULL
					) ENGINE=InnoDB DEFAULT CHARSET=latin1;

					-- --------------------------------------------------------

					--
					-- Table structure for table `women`
					--

					CREATE TABLE `women` (
					  `id` int(11) NOT NULL,
					    `name` varchar(255) NOT NULL,
					      `viaf_url` varchar(255) DEFAULT NULL,
					        `name_english` varchar(255) DEFAULT NULL,
						  `name_spanish` varchar(255) DEFAULT NULL,
						    `name_portuguese` varchar(255) DEFAULT NULL,
						      `name_other` varchar(255) DEFAULT NULL,
						        `birth_approx` int(1) DEFAULT '0',
							  `birth_year` year(4) DEFAULT NULL,
							    `death_approx` int(1) DEFAULT '0',
							      `death_year` year(4) DEFAULT NULL,
							        `related_to` text,
								  `religious_order` varchar(255) DEFAULT NULL,
								    `notes` text,
								      `created` datetime DEFAULT NULL,
								        `modified` datetime DEFAULT NULL
									) ENGINE=InnoDB DEFAULT CHARSET=latin1;

									--
									-- Indexes for dumped tables
									--

									--
									-- Indexes for table `convents`
									--
									ALTER TABLE `convents`
									  ADD PRIMARY KEY (`id`),
									    ADD UNIQUE KEY `name` (`name`);

									    --
									    -- Indexes for table `roles`
									    --
									    ALTER TABLE `roles`
									      ADD PRIMARY KEY (`woman_id`,`convent_id`),
									        ADD KEY `convent_key` (`convent_id`);

										--
										-- Indexes for table `women`
										--
										ALTER TABLE `women`
										  ADD PRIMARY KEY (`id`),
										    ADD UNIQUE KEY `name` (`name`);

										    --
										    -- AUTO_INCREMENT for dumped tables
										    --

										    --
										    -- AUTO_INCREMENT for table `convents`
										    --
										    ALTER TABLE `convents`
										      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
										      --
										      -- AUTO_INCREMENT for table `women`
										      --
										      ALTER TABLE `women`
										        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
											--
											-- Constraints for dumped tables
											--

											--
											-- Constraints for table `roles`
											--
											ALTER TABLE `roles`
											  ADD CONSTRAINT `convent_key` FOREIGN KEY (`convent_id`) REFERENCES `convents` (`id`),
											    ADD CONSTRAINT `convent_woman_key` FOREIGN KEY (`woman_id`) REFERENCES `women` (`id`);

											    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
											    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
											    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
											    