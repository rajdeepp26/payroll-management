-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 03:55 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `empid` int(11) NOT NULL COMMENT 'user id (PK)(FK)',
  `pwd` varchar(200) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`empid`, `pwd`) VALUES
(1001, 'cool');

-- --------------------------------------------------------

--
-- Table structure for table `annualinc`
--

CREATE TABLE `annualinc` (
  `aincrement` double NOT NULL COMMENT 'annual increment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annualinc`
--

INSERT INTO `annualinc` (`aincrement`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `deptinfo`
--

CREATE TABLE `deptinfo` (
  `deptname` varchar(100) NOT NULL COMMENT 'dept.name(PK)',
  `deptaddr` varchar(200) NOT NULL COMMENT 'HQ address',
  `dcontact` varchar(15) NOT NULL COMMENT 'dept.phone-no',
  `demail` varchar(50) NOT NULL COMMENT 'dept.email-id',
  `dwebsite` varchar(50) NOT NULL COMMENT 'dept.website',
  `toemp` int(11) NOT NULL COMMENT 'total emp',
  `toorg` int(11) NOT NULL COMMENT 'total no. of organisation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptinfo`
--

INSERT INTO `deptinfo` (`deptname`, `deptaddr`, `dcontact`, `demail`, `dwebsite`, `toemp`, `toorg`) VALUES
('Education', 'Kahilipara, Guwahatiâ€“19', '1122334455', 'edugov@gmail.com', 'http://www.assam.gov.in/web/education-department', 10000, 3),
('Social Welfare', 'Kachari Ghat, MG Road, Uzanbazar, Guwahati-1, MG Road, Latasil, Uzan Bazar, Guwahati', '88769 37435', 'wellfare@gmail.com', 'http://www.assam.gov.in/web/social-welfare-departm', 13253, 3),
('Agriculture', 'RG Baruah Rd, Commerce Point, Chandmari, Guwahati', '1800 180 1551', 'agri@gmail.com', 'http://www.assam.gov.in/web/agriculture-department', 15378, 3),
('Handloom', 'Maligaon, Guwahati', '9900988776', 'hadlm@gmail.com', 'www.handloom.com', 100998, 3);

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `da` double NOT NULL COMMENT 'dearness allowance',
  `hra` double NOT NULL COMMENT 'house rent allowance',
  `ma` double NOT NULL COMMENT 'medical allowance'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`da`, `hra`, `ma`) VALUES
(131, 10, 600);

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `empid` int(11) NOT NULL COMMENT 'employee id',
  `ename` varchar(50) NOT NULL COMMENT 'employee name',
  `edesig` varchar(50) NOT NULL COMMENT 'employee designator',
  `empgrade` varchar(50) NOT NULL COMMENT 'employee grade',
  `emporg` varchar(100) NOT NULL COMMENT 'employee organiisation',
  `deptname` varchar(50) NOT NULL COMMENT 'department name (FK)',
  `doj` date NOT NULL COMMENT 'date of joining',
  `dor` date NOT NULL COMMENT 'date of retirement',
  `dob` date NOT NULL COMMENT 'date of birth',
  `basicpay` double NOT NULL COMMENT 'basic pay',
  `empgradepay` double NOT NULL COMMENT 'employee grade pay',
  `empcaste` varchar(10) NOT NULL COMMENT 'employee caste',
  `empemail` varchar(50) NOT NULL COMMENT 'employee''s email-id',
  `emphone` varchar(15) NOT NULL COMMENT 'employee''s phone-id',
  `empage` varchar(10) NOT NULL COMMENT 'employee''s age',
  `empgender` varchar(5) NOT NULL COMMENT 'employee''s gender',
  `empmstat` varchar(20) NOT NULL COMMENT 'marital status',
  `mname` varchar(100) NOT NULL COMMENT 'Mother''s name',
  `fname` varchar(100) NOT NULL COMMENT 'father''s name',
  `emppaddr` varchar(300) NOT NULL COMMENT 'employee''s portal address',
  `empperaddr` varchar(300) NOT NULL COMMENT 'employee''s permanent address'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`empid`, `ename`, `edesig`, `empgrade`, `emporg`, `deptname`, `doj`, `dor`, `dob`, `basicpay`, `empgradepay`, `empcaste`, `empemail`, `emphone`, `empage`, `empgender`, `empmstat`, `mname`, `fname`, `emppaddr`, `empperaddr`) VALUES
(1001, 'raj', 'Director', 'Grade-I', 'farming', 'Agriculture', '2015-01-01', '2050-01-01', '1996-02-06', 30000, 17500, 'general', 'raj@gmail.com', '1537394857', '32', 'male', 'maried', 'sasas', 'fashd', 'gsahdhasdgffqweiuqoizn', 'cznzcbsjahdjhasdipqwiue'),
(1002, 'deep', 'Joint Director', 'Grade-I', 'Cooperation', 'Agriculture', '2016-01-01', '2050-01-01', '1992-02-06', 30000, 17500, 'obc', 'deep@gmail.com', '0011199273', '30', 'male', 'unmarried', 'qwertyuio', 'poiuytre', 'dwfegrhjtyklu', 'awsedrftyhuji'),
(1003, 'mina', 'Agriculture Economist', 'Grade-I', 'Industries', 'Agriculture', '2017-01-01', '2050-01-01', '1992-12-07', 30000, 17500, 'sc', 'mina@gmail.com', '1234569876', '34', 'femal', 'married', 'qwer', 'poiu', 'wsdfvbnokjn', 'zxcvbnlkjhgf'),
(1005, 'aliya', 'Deputy Director ', 'Grade-I', 'probation', 'Social Welfare', '2013-01-01', '2050-01-01', '1991-06-28', 30000, 14500, 'general', 'aliya@gmail.com', '5363947590', '34', 'femal', 'married', 'sdf', 'ldjdjd', 'iqiqqweqweqe', 'fdgdfgdgrrtyr'),
(1005, 'alok', 'Special Officer', 'Grade-I', 'youth welfare', 'Social Welfare', '2000-01-01', '2050-01-01', '1997-03-04', 30000, 14500, 'sc', 'alok@gmail.com', '5274966059', '23', 'male', 'unmarried', 'wuqyeqeqwehe', 'jbcnbcnvljsdj', 'wteqqteqetoqo', 'asdkhagdagdah'),
(1006, 'abhay', 'Research Officer', 'Grade-I', 'survey planning cell', 'Social Welfare', '2016-01-01', '2050-01-01', '1990-07-26', 30000, 14500, 'obc', 'abhay@gmail.com', '2527373838', '28', 'male', 'married', 'asdakhdjahdja', 'asbadja', 'dhakhdahdkakdakdkwiquqw', 'zczbcm,zbcsdkjakdjuwiqu'),
(1007, 'bishal', 'District Social Welfare Officer', 'Grade-II', 'farming', 'Agriculture', '2003-01-01', '2050-01-01', '1985-01-01', 22000, 9700, 'st', 'bishal@gmail.com', '8888776654', '38', 'male', 'unmarried', 'nnxbbchh', 'mmxknxashah', 'dhjahsdjhiiye', 'nbcnbwyiwqyesab'),
(1008, 'rakibul', 'Supervisor (ICDS) ', 'Grade-III', 'farming', 'Agriculture', '2013-01-01', '2050-01-01', '1986-01-01', 14000, 6200, 'sc', 'rakibul@gmail.com', '1100228836', '41', 'male', 'married', 'nmnzmncmzncm', 'znczmncznxcsa', 'znbzbxcasjkjad', 'jadjaksjduwequiuwq'),
(1009, 'ritu', 'Kendra Sahayak ', 'Grade-IV', 'farming', 'Agriculture', '2000-01-01', '2050-01-01', '1980-01-01', 12000, 3900, 'general', 'ritu@gmail.com', '8726354759', '41', 'femal', 'married', 'gaajsahdashdas', 'sdasdahdka', 'adhjahdjha', 'qagdjasjdjahsd'),
(1010, 'juyal', 'Technical Assistant (AFC) ', 'Grade-II', 'Cooperation', 'Agriculture', '2000-10-01', '2050-01-01', '1980-01-01', 22000, 9700, 'general', 'juyal@gmail.com', '1898787878', '25', 'male', 'unmaried', 'mooms', 'saadddd', 'saafsdfg', 'hgfhfhfhf'),
(1011, 'mina', 'Field Assistant ', 'Grade-III', 'Cooperation', 'Agriculture', '2017-01-01', '2050-02-05', '1987-07-31', 14000, 6200, 'obc', 'mina@gmail.com', '6282928276', '33', 'femal', 'unmarried', 'mama', 'fathe', 'rryqieiueiwreir', 'zbxnnzbcbzsahhajhdsad'),
(1012, 'rahul', 'Soil Survey Attendant ', 'Grade-IV', 'Cooperation', 'Agriculture', '2000-01-01', '2050-02-02', '1990-10-10', 12000, 3900, 'general', 'rahul@gmail.com', '8288282273', '39', 'male', 'unmarried', 'vfvdvf', 'dad', 'qwuiququiuqweweq', 'qwhqhwhudsaiuidus'),
(1013, 'roy', 'Fertillizer Inspector', 'Grade-II', 'Industries', 'Agriculture', '2015-10-10', '2050-10-10', '1975-10-10', 22000, 9700, 'general', 'roy@gmail.com', '9988776602', '40', 'male', 'married', 'jsis', 'dad', 'asdsdsdsdfgrtyrt', 'cvbcbcbfgrtt'),
(1014, 'chettry', 'Jute Field Assistant', 'Grade-III', 'Industries', 'Agriculture', '2000-10-10', '2050-10-10', '1987-10-10', 14000, 6200, 'obc', 'chettyry@gmail.com', '2232435460', '29', 'male', 'maried', 'vfvdvf', 'fffff', 'oiuytrew', 'xcvbnmkjhgfeo'),
(1015, 'ojha', 'Gardener (FTS)', 'Grade-IV', 'Industries', 'Agriculture', '2000-10-10', '2050-10-10', '1985-10-10', 12000, 3900, 'st', 'ojha@gmail.com', '1677982673', '40', 'male', 'maried', 'mooms', 'fathe', 'poiuytt', 'ssdghjkkjhv'),
(1016, 'edge', 'Programme Officer ', 'Grade-II', 'probation', 'Social Welfare', '2015-01-01', '2050-01-01', '1996-01-01', 22000, 9700, 'general', 'edge@gmail.com', '9988770872', '28', 'male', 'unmarried', 'adadasd', 'zxczcc', 'wqqwew', 'ghghfhf'),
(1017, 'bigshow', 'District Social Welfare Officer', 'Grade-III', 'probation', 'Social Welfare', '2015-01-01', '2050-10-01', '1995-02-07', 14000, 9000, 'obc', 'bigshow@gmail.com', '1627384990', '45', 'male', 'unmaried', 'vfvdvf', 'fathe', 'qiiwewquwe', 'nzbxcvzvl'),
(1018, 'kane', 'Kendra Sahayak ', 'Grade-IV', 'probation', 'Social Welfare', '2001-10-10', '2050-10-10', '1982-10-10', 12000, 3900, 'st', 'kane@gmail.com', '1122765489', '41', 'femal', 'unmarried', 'ssss', 'fffff', 'qrytwwqieu', 'bnzBnbcjhasdhiy122'),
(1019, 'roman', 'Vice-Principal', 'Grade-II', 'youth welfare', 'Social Welfare', '2015-10-10', '2050-10-10', '1992-02-07', 22000, 9700, 'obc', 'roman@gmail.com', '1223456744', '39', 'male', 'maried', 'jsis', 'asas', 'wqewqeewqeqwe', 'qweewtryty'),
(1020, 'dipak', 'Graduate Treacher', 'Grade-III', 'youth welfare', 'Social Welfare', '2002-10-10', '2050-02-02', '1998-02-01', 14000, 9000, 'general', 'dipak@gmail.com', '1426387649', '24', 'male', 'married', 'mooms', 'dad', 'quwqweqoueeueun81273', 'hdah72317salkdkj'),
(1021, 'susmita', 'Skilled Helper ', 'Grade-IV', 'youth welfare', 'Social Welfare', '2003-10-10', '2050-10-01', '1991-12-09', 12000, 3900, 'general', 'sus@gmail.com', '7659520384', '25', 'femal', 'unmaried', 'vfvdvf', 'adada', 'sadaacz', 'dvssaa advsf312 '),
(1022, 'hardy', 'Deputy Director', 'Grade-II', 'survey planning cell', 'Social Welfare', '2015-12-12', '2060-10-01', '1990-12-12', 22000, 9700, 'sc', 'hardy@gmail.com', '6283983749', '31', 'male', 'unmarried', 'sadffdvc ', 'verartert', 'wrweretr', 'rtetetet'),
(1023, 'becky', 'Child Development Project Officer', 'Grade-III', 'survey planning cell', 'Social Welfare', '2015-10-10', '2055-10-10', '1980-08-29', 14000, 9000, 'obc', '1023@gmail.com', '7189292764', '55', 'femal', 'married', 'sadasdafew', 'rertytut', 'cvbcbcv   cv', 'ccbcvbgt'),
(1024, 'duke', 'Helper to Electrician', 'Grade-IV', 'survey planning cell', 'Social Welfare', '2017-10-10', '2050-10-10', '1996-02-06', 12000, 3900, 'st', 'deke@gmail.com', '4342346789', '29', 'femal', 'married', 'jsis', 'dad', 'sadda', 'sadadw'),
(1025, 'chinmoi', 'Director Higher Education', 'Grade-I', 'higher education', 'Education', '1987-01-10', '2050-10-10', '1991-08-27', 30000, 17000, 'general', 'chin@gmail.com', '3748392837', '31', 'male', 'unmarried', 'mooms', 'saadddd', 'ddw3ww', 'dads33dasad'),
(1026, 'kalita', 'Vice-Princiapl', 'Grade-II', 'higher education', 'Education', '2017-12-31', '2050-10-10', '1996-10-10', 22000, 11500, 'sc', 'kalita@gmail.com', '2161231633', '39', 'femal', 'married', 'sdavvre', 'vvrefrerer', 'rertrnn', 'nnrwwerw'),
(1027, 'kumar', 'Graduate Teacher of Higher Secondary Schools', 'Grade-III', 'higher education', 'Education', '2012-10-10', '2050-10-10', '1992-10-10', 14000, 9100, 'obc', 'ahsjkdhwhdwwq@gmail.com', '3773737372', '26', 'male', 'maried', 'mummy', 'papa', 'uqiwuewque', 'wqeiuqedsds'),
(1028, 'Bapan', 'Laboratory Bearer', 'Grade-IV', 'higher education', 'Education', '1990-10-10', '2050-10-10', '1970-07-26', 12000, 3900, 'st', 'bapan@gmail.com', '7128282839', '38', 'male', 'unmarried', 'abbshhssn', 'qyuywywqi', 'csdcsmndcncmn', 'nnmnmnz,zakjduuwqw'),
(1029, 'vidya', 'Director, Secondary Education', 'Grade-I', 'secondary education', 'Education', '2016-10-10', '2050-10-10', '1990-12-28', 30000, 17000, 'general', 'vidya@gmail.com', '1231231231', '29', 'femal', 'unmarried', 'zxcxzxcv', 'asdsdsd', 'ewqeqer', 'cvbcbcbcb'),
(1030, 'kiloni', 'Post Graduate Teacher', 'Grade-II', 'secondary education', 'Education', '2000-10-10', '2050-10-10', '1981-12-07', 22000, 11500, 'general', 'kiloni@gmail.com', '5656568791', '41', 'male', 'married', 'qwqweqeqwe', 'wqeqeqeqeqw', 'qweqeqweqw', 'weqeqeqe'),
(1031, 'aditya', 'Head Master', 'Grade-III', 'secondary education', 'Education', '2000-10-10', '2050-12-16', '1979-12-28', 14000, 9100, 'st', 'aditya@gmail.com', '9876789067', '36', 'male', 'maried', 'wdqweq', 'wqesad', 'adads', 'dadsdas'),
(1032, 'murli', 'Library Bearer', 'Grade-IV', 'secondary education', 'Education', '2000-10-21', '2045-02-08', '1987-12-28', 12000, 3900, 'general', 'murli@gmail.com', '2929229922', '32', 'male', 'maried', 'mooms', 'paaaa', 'wwaadada', 'wadaas'),
(1033, 'vox', 'Director', 'Grade-I', 'Elementary Education ', 'Education', '1998-02-07', '2050-12-07', '1980-12-17', 30000, 17000, 'general', 'vox@gmail.com', '3311222222', '35', 'femal', 'married', 'weqeqwe', 'weqeqwew', 'qweqweqeqwgrhu', 'kiukukiuopui'),
(1034, 'bhuvan', 'Block Elementary Education Officer', 'Grade-II', ' Elementary Education', 'Education', '2000-02-06', '2050-12-26', '1992-05-17', 22000, 11500, 'sc', 'bhuvan@gmail.com', '5125812582', '32', 'male', 'married', 'wmfwjiejje', 'eefwffd', 'dfdfreyryuy', 'iooiuyqqass'),
(1035, 'alixa', 'Graduate Teacher', 'Grade-III', 'Elementary Education ', 'Education', '2013-03-12', '2045-12-31', '1992-02-11', 14000, 9100, 'obc', 'alixa@gmail.com', '1212222222', '29', 'femal', 'unmarried', 'mooms', 'dad', 'wqwqewqwegfy', 'bvnvnvbvbb'),
(1035, 'ben', 'Counter Attendant', 'Grade-IV', 'Elementary Education ', 'Education', '2014-10-10', '0000-00-00', '1995-12-01', 12000, 3900, 'obc', 'ben@gmail.com', '4567845678', '39', 'male', 'unmarried', 'ssss', 'saadddd', 'dsfsdfsdf', 'dfsfsfsfdser'),
(1036, 'jhonny', 'Additional Director ', 'Grade-I', 'handloom and commerce', 'Handloom', '2008-10-20', '2050-10-10', '1984-08-27', 30000, 15100, 'general', 'jhonny@gmail.com', '8282828282', '37', 'male', 'married', 'mummy', 'fffff', 'fwfwefwe', 'efwfwfwef'),
(1037, 'brock', 'Registrar ', 'Grade-II', 'handloom and commerce', 'Handloom', '2009-12-21', '2030-02-02', '1982-01-01', 22000, 10900, 'sc', 'brock@gmail.com', '7374859572', '37', 'male', 'unmaried', 'qwqweqweqw', 'wqsdsdds', 'ggrt', 'trgtrgrt'),
(1038, 'lita', 'Statistical Officer ', 'Grade-III', 'handloom and commerce', 'Handloom', '1990-03-21', '2040-09-08', '1977-06-02', 14000, 8700, 'obc', 'lita@gmail.com', '2342445643', '35', 'femal', 'married', 'dqdbjtjuy', 'fgvxbvbg', 'cbcvbgxf', 'ghfghfnn'),
(1039, 'lesnar', 'Technician', 'Grade-IV', 'handloom and commerce', 'Handloom', '2000-03-04', '2050-02-12', '1980-02-13', 12000, 3900, 'st', 'lesnar@gmail.com', '1231234567', '36', 'male', 'married', 'sdfsfds', 'sdfsdfg', 'hjyi', 'rtyry5d'),
(1041, 'alexaa', 'Deputy Registrar ', 'Grade-I', 'textile', 'Handloom', '1996-02-06', '2050-02-16', '1982-06-12', 30000, 15100, 'obc', 'alexaa@gmail.com', '1235677894', '34', 'femal', 'married', 'wdqdfdgh', 'k,iulioj', 'mbnmnbmbn', 'nmjhkhkhj'),
(1042, 'blaze', 'Superintendent of Loan', 'Grade-II', 'textile', 'Handloom', '1992-03-21', '2050-02-13', '1978-02-13', 22000, 10900, 'general', 'blaze@gmail.com', '7373794857', '59', 'femal', 'married', 'dhfhjd', 'yyyibx', 'zgs', 'tyty'),
(1043, 'john', 'Publicity Officer ', 'Grade-III', 'textile', 'Handloom', '1990-02-01', '2055-12-31', '1971-12-31', 14000, 8700, 'general', 'john@gmail.com', '9090908768', '24', 'male', 'unmarried', 'fregwatyhtr', 'zzfgfhysz', 'fgFD', 'rytsyt'),
(1044, 'hrithik', 'Master Weaver ', 'Grade-IV', 'textile', 'Handloom', '1990-02-23', '0057-12-31', '1968-02-02', 12000, 3900, 'general', 'hrithik@gmail.com', '4564453332', '45', 'male', 'married', 'dqwdwq', 'assdad', 'asdada', 'asasda'),
(1045, 'asha', 'Assistant Director, sericulture ', 'Grade-I', 'sericulture ', 'Handloom', '2000-02-05', '2050-02-09', '1980-02-07', 30000, 15100, 'sc', 'asha@gmail.com', '7384596312', '34', 'femal', 'married', 'oqiwry', 'DFOEWH', 'hhefwfewf', 'wefgewgfwpw'),
(1046, 'ravindra', 'Superintendent', 'Grade-II', 'sericulture ', 'Handloom', '2000-07-26', '2050-02-16', '1960-02-23', 22000, 10900, 'general', 'ra@gmail.com', '3234342344', '36', 'male', 'married', 'fcawfarf', 'gtrhrthy6u', 'ikyuiuk', 'xghjgjghj'),
(1047, 'kane', 'Information Officer', 'Grade-III', 'sericulture ', 'Handloom', '2004-04-05', '2050-03-26', '1971-06-07', 14000, 8700, 'st', 'kane@gmail.com', '8787986527', '30', 'femal', 'married', 'sjbfdsjkb', 'eewbjddd', 'dd', 'ddd'),
(1048, 'sunny', 'Blue Printer ', 'Grade-IV', 'sericulture ', 'Handloom', '2000-07-31', '2050-02-13', '1970-07-22', 12000, 3900, 'st', 'sun@gmail.com', '9809879082', '31', 'femal', 'married', 'sadad', 'safgfdh', 'hjgkj', 'iouiou');

-- --------------------------------------------------------

--
-- Table structure for table `payscale`
--

CREATE TABLE `payscale` (
  `startbasicp` double NOT NULL COMMENT 'start basic pay',
  `endbasicp` double NOT NULL COMMENT 'end basic pay',
  `empgradepay` double NOT NULL COMMENT 'grade pay',
  `deptname` varchar(100) NOT NULL COMMENT 'Department Name (pk)',
  `empgrade` varchar(50) NOT NULL COMMENT 'Employee Grade'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payscale`
--

INSERT INTO `payscale` (`startbasicp`, `endbasicp`, `empgradepay`, `deptname`, `empgrade`) VALUES
(30000, 110000, 17500, 'Agriculture', 'Grade-I'),
(22000, 87000, 9700, 'Agriculture', 'Grade-II'),
(14000, 49000, 6200, 'Agriculture', 'Grade-III'),
(12000, 37500, 3900, 'Agriculture', 'Grade-IV'),
(30000, 110000, 17000, 'Education', 'Grade-I'),
(22000, 87000, 11500, 'Education', 'Grade-II'),
(14000, 49000, 9100, 'Education', 'Grade-III'),
(12000, 37500, 3900, 'Education', 'Grade-IV'),
(30000, 110000, 15100, 'Handloom', 'Grade-I'),
(22000, 87000, 10900, 'Handloom', 'Grade-II'),
(14000, 49000, 8700, 'Handloom', 'Grade-III'),
(12000, 37500, 3900, 'Handloom', 'Grade-IV'),
(30000, 110000, 14500, 'Social Welfare', 'Grade-I'),
(22000, 87000, 9700, 'Social Welfare', 'Grade-II'),
(14000, 49000, 9000, 'Social Welfare', 'Grade-III'),
(12000, 37500, 3900, 'Social Welfare', 'Grade-IV'),
(0, 0, 0, 'Select', 'select');

-- --------------------------------------------------------

--
-- Table structure for table `ptaxdeduction`
--

CREATE TABLE `ptaxdeduction` (
  `gd1` double NOT NULL COMMENT 'p.tax for grade 1',
  `gd2` double NOT NULL COMMENT 'p.tax for grade 2',
  `gd3` double NOT NULL COMMENT 'p.tax for grade 3',
  `gd4` double NOT NULL COMMENT 'p.tax for grade 4'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptaxdeduction`
--

INSERT INTO `ptaxdeduction` (`gd1`, `gd2`, `gd3`, `gd4`) VALUES
(142, 150, 170, 208);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `pstatno` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `pmonth` varchar(15) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `empid` int(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `deptname` varchar(30) NOT NULL,
  `emporg` varchar(50) NOT NULL COMMENT 'employee''s organitation',
  `empgrade` varchar(10) NOT NULL,
  `basicpay` double NOT NULL,
  `empgradepay` double NOT NULL,
  `pda` double NOT NULL,
  `phra` double NOT NULL,
  `pma` double NOT NULL,
  `totalearning` double NOT NULL,
  `grosspay` double NOT NULL,
  `pnps` double NOT NULL,
  `ptax` double NOT NULL,
  `pgis` double NOT NULL,
  `pnetpay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`pstatno`, `pdate`, `pmonth`, `pyear`, `empid`, `ename`, `deptname`, `emporg`, `empgrade`, `basicpay`, `empgradepay`, `pda`, `phra`, `pma`, `totalearning`, `grosspay`, `pnps`, `ptax`, `pgis`, `pnetpay`) VALUES
(101, '2017-08-27', 'August', '2017', 1001, 'raj', 'Agriculture', '', 'Grade-I', 30000, 17500, 131, 10, 600, 67575, 115075, 0, 142, 0, 115075),
(102, '2017-08-27', 'August', '2017', 1002, 'deep', 'Agriculture', '', 'Grade-I', 30000, 17500, 131, 10, 600, 67575, 115075, 0, 142, 0, 114933),
(103, '2017-09-02', 'September', '2017', 1015, 'ojha', 'Agriculture', '', 'Grade-IV', 12000, 3900, 131, 10, 600, 23019, 38919, 0, 142, 0, 38777),
(104, '2017-09-02', 'September', '2017', 1016, 'edge', 'Social Welfare', '', 'Grade-II', 22000, 9700, 131, 10, 600, 45297, 76997, 0, 142, 0, 76855),
(105, '2017-09-07', 'September', '2017', 1035, 'alixa', 'Education', 'Elementary Education ', 'Grade-III', 14000, 9100, 131, 10, 600, 33171, 56271, 0, 142, 0, 56129),
(106, '2017-09-07', 'September', '2017', 1041, 'alexaa', 'Handloom', 'textile', 'Grade-I', 30000, 15100, 131, 10, 600, 64191, 109291, 0, 142, 0, 109149),
(107, '2017-09-09', 'September', '2017', 1033, 'vox', 'Education', 'Elementary Education ', 'Grade-I', 30000, 17000, 131, 10, 600, 66870, 113870, 0, 142, 0, 113728);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `empid` int(50) NOT NULL COMMENT 'user id (PK)(FK)',
  `pwd` varchar(200) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`empid`, `pwd`) VALUES
(1002, 'cool');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`pstatno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
