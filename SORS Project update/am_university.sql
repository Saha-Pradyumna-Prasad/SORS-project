-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2026 at 03:41 PM
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
-- Database: `am_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `description`, `image_url`) VALUES
(1, 'Computer Club', 'Coding, AI, and Cybersecurity', 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070'),
(2, 'English Club', 'Literature, Debate, and Creative Writing', 'https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=1973'),
(3, 'Medical Club', 'Healthcare, First Aid, and Research', 'https://blog.globalbrigades.org/hubfs/Medical%20Club%20Ideas.jpg'),
(4, 'Robotics Club', 'Engineering and Automation', 'https://csweb.rice.edu/sites/g/files/bxs4941/files/2020-08/yatesHSweb.jpg'),
(5, 'Architecture Club', 'Design, Planning, and Urban Arts', 'https://content.manhattan.edu/life/clubs-images/AIAA_768x576.jpg'),
(6, 'Sports Club', 'Athletics, Teamwork, and Competition', 'https://pxl-v6-stiracuk.terminalfour.net/fit-in/578x358/filters:quality(90)/filters:format(webp)/filters:no_upscale()/prod01/cdn/media/stirling/services/sports-centre/images/medium/Football-760X470.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `course_link` varchar(255) NOT NULL,
  `faculty_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `image_url`, `course_link`, `faculty_link`) VALUES
(1, 'CSE', 'Coding, AI, and Cybersecurity', 'https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=2070', 'Course/CSE.php', 'Faculty/CSE.php'),
(2, 'ENG', 'Literature, Debate, and Creative Writing', 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070', 'Course/ENG.php', 'Faculty/ENG.php'),
(3, 'Pharmacy', 'Healthcare, First Aid, and Research', 'https://images.unsplash.com/photo-1600959907703-125ba1374a12?q=80&w=2070', 'Course/PHA.php', 'Faculty/PHA.php'),
(4, 'EEE', 'Engineering and Automation', 'https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?q=80&w=2070', 'Course/EEE.php', 'Faculty/EEE.php'),
(5, 'Civil', 'Design, Planning, and Urban Arts', 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2070', 'Course/CE.php', 'Faculty/CE.php'),
(6, 'BBA', 'Athletics, Teamwork, and Competition', 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2070', 'Course/BBA.php', 'Faculty/BBA.php'),
(7, 'IT', 'Coding, AI, and Cybersecurity', 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070', 'Course/IT.php', 'Faculty/IT.php');

-- --------------------------------------------------------

--
-- Table structure for table `department_courses`
--

CREATE TABLE `department_courses` (
  `id` int(11) NOT NULL,
  `dept_code` varchar(20) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `focus` text NOT NULL,
  `needed_for` text NOT NULL,
  `builds` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_courses`
--

INSERT INTO `department_courses` (`id`, `dept_code`, `course_name`, `focus`, `needed_for`, `builds`) VALUES
(1, 'BBA', 'Marketing Mgmt', 'Brand building.', 'Startup growth.', 'Strategic empathy.'),
(2, 'BBA', 'Financial Accounting', 'Fiscal reports.', 'Banking.', 'Ethical precision.'),
(3, 'BBA', 'Supply Chain', 'Global logistics.', 'E-commerce.', 'Organizational flow.'),
(4, 'BBA', 'Strategic Mgmt', 'Long-term vision.', 'CEO roles.', 'Decision-making power.'),
(5, 'BBA', 'Human Resources', 'Talent hiring.', 'Leadership.', 'Interpersonal skills.'),
(6, 'BBA', 'Business Statistics', 'Data trends.', 'Market research.', 'Quantitative logic.'),
(7, 'BBA', 'Entrepreneurship', 'New ventures.', 'Business owners.', 'Resilience and vision.'),
(8, 'CE', 'Structural Analysis', 'Stability.', 'Skyscrapers.', 'Material safety sense.'),
(9, 'CE', 'Geotechnical Eng', 'Soil mechanics.', 'Foundations.', 'Site assessment skills.'),
(10, 'CE', 'Hydraulics', 'Fluid flow.', 'Dam construction.', 'Resource planning.'),
(11, 'CE', 'Surveying', 'Land mapping.', 'Road design.', 'Spatial accuracy.'),
(12, 'CE', 'Transportation', 'Traffic flow.', 'Urban planning.', 'Logistical strategy.'),
(13, 'CE', 'Environmental Eng', 'Waste control.', 'Smart cities.', 'Ecological responsibility.'),
(14, 'CE', 'Construction Mgmt', 'Budget/Timelines.', 'Large projects.', 'Leadership discipline.'),
(15, 'CSE', 'Algorithms', 'Problem solving.', 'High-end coding.', 'Analytical optimization.'),
(16, 'CSE', 'Artificial Intelligence', 'Neural networks.', 'Future automation.', 'Predictive modeling.'),
(17, 'CSE', 'Database Systems', 'Data storage.', 'Enterprise backend.', 'Query and management rigor.'),
(18, 'CSE', 'Cyber Security', 'Network defense.', 'Digital safety.', 'Ethical hacking expertise.'),
(19, 'CSE', 'Software Engineering', 'Project lifecycle.', 'Industry teamwork.', 'Collaborative discipline.'),
(20, 'CSE', 'Machine Learning', 'Pattern recognition.', 'Big data analytics.', 'Statistical intelligence.'),
(21, 'EEE', 'Circuit Theory', 'Network analysis.', 'Hardware design.', 'Mathematical precision.'),
(22, 'EEE', 'Control Systems', 'Automation.', 'Robotics.', 'System stability logic.'),
(23, 'EEE', 'Renewable Energy', 'Solar/Wind.', 'Green tech.', 'Sustainable innovation.'),
(24, 'EEE', 'Signal Processing', 'Data filtering.', 'Telecomm.', 'Real-time analysis.'),
(25, 'EEE', 'Microprocessors', 'Integrated circuits.', 'IoT devices.', 'Low-level coding.'),
(26, 'EEE', 'Power Transmission', 'Grid management.', 'Infrastructure.', 'Safety rigor.'),
(27, 'EEE', 'Electromagnetics', 'Wave propagation.', 'Wireless tech.', 'Physical intuition.'),
(28, 'ENG', 'Creative Writing', 'Fiction & Poetry.', 'Publishing.', 'Narrative imagination.'),
(29, 'ENG', 'Modern Linguistics', 'Language structure.', 'Communications.', 'Analytical speech skills.'),
(30, 'ENG', 'Victorian Prose', '19th-century literature.', 'Cultural research.', 'Critical historical context.'),
(31, 'ENG', 'Shakespearean Drama', 'Classical plays.', 'Performing arts.', 'Deep textual interpretation.'),
(32, 'ENG', 'Rhetoric & Debate', 'Persuasion.', 'Law and Politics.', 'Oratory confidence.'),
(33, 'ENG', 'Academic Research', 'Methodology.', 'Thesis writing.', 'Investigative rigor.'),
(34, 'ENG', 'Post-Colonial Lit', 'Global narratives.', 'Social advocacy.', 'Global empathy.'),
(35, 'IT', 'Web Development', 'Full-stack apps.', 'Digital products.', 'Creative design skills.'),
(36, 'IT', 'Cloud Computing', 'Serverless tech.', 'Enterprise IT.', 'Scalability mindset.'),
(37, 'IT', 'Data Science', 'Big data insights.', 'Business Intel.', 'Statistical expertise.'),
(38, 'IT', 'Network Admin', 'Connectivity.', 'IT support.', 'Troubleshooting rigor.'),
(39, 'IT', 'Mobile App Dev', 'iOS/Android.', 'App industry.', 'UI/UX awareness.'),
(40, 'IT', 'IT Project Mgmt', 'Agile methods.', 'Tech lead roles.', 'Timeline management.'),
(41, 'IT', 'E-Commerce Tech', 'Online payments.', 'Digital retail.', 'Transaction security sense.'),
(42, 'PHA', 'Pharmacology', 'Drug action.', 'Clinical practice.', 'Biological reasoning.'),
(43, 'PHA', 'Medicinal Chemistry', 'Drug design.', 'Lab research.', 'Synthetic chemistry skills.'),
(44, 'PHA', 'Biopharmaceutics', 'Absorption.', 'Dosage optimization.', 'Pharmacokinetic expertise.'),
(45, 'PHA', 'Clinical Pharmacy', 'Patient care.', 'Hospital practice.', 'Diagnostic support.'),
(46, 'PHA', 'Forensic Pharmacy', 'Drug laws.', 'Legal compliance.', 'Ethical judgment.'),
(47, 'PHA', 'Microbiology', 'Pathogens.', 'Infection control.', 'Lab safety discipline.'),
(48, 'PHA', 'Cosmetic Science', 'Topical agents.', 'Derma-industry.', 'Formulation precision.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `subtitle` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `subtitle`, `image_url`) VALUES
(1, 'Seminar', 'Academic discussions & Research', 'https://images.unsplash.com/photo-1475721027785-f74eccf877e2?q=80&w=2070'),
(2, 'Swarosshoti Puja', 'Festival of Wisdom & Art', 'https://www.aiub.edu/Files/Uploads/original/saraswatipujaobservedataiub2502202417.jpg'),
(3, 'Iftar Party', 'Community, Prayer & Togetherness', 'https://thumbs.dreamstime.com/b/kolkata-india-may-iftar-party-kolkata-india-may-iftar-party-iftar-party-was-organised-aliah-university-149619966.jpg'),
(4, 'Pitha Utsob', 'Traditional Bengali Winter Cakes', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQezLtcAeE7TFcLFAHFTIT8xNqc1P4fFQCeIQ&s'),
(5, 'Bosonto Utsob', 'Celebrating the Colors of Spring', 'https://www.shutterstock.com/editorial/image-editorial/M3zaUb45M2D0E83aMjI4NQ==/celebrating-coming-spring-boshonto-utshob-fine-arts-440nw-3558487a.jpg'),
(6, 'Cultural Program', 'Music, Dance & Drama', 'https://www.ewubd.edu/storage/app/uploads/public/64b/38e/707/64b38e707ac45150614462.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'Library', 'Quiet study spaces, digital resources, and academic support.', 'https://images.pexels.com/photos/8199613/pexels-photo-8199613.jpeg?_gl=1*1tp2w8o*_ga*NTgzODYzODExLjE3Njk0MDE0NjY.*_ga_8JE65Q40S6*czE3Njk0MDE0NjYkbzEkZzEkdDE3Njk0MDE1MTIkajE0JGwwJGgw'),
(2, 'Stationary', 'Essential books, stationery items, and academic supplies.', 'https://media.istockphoto.com/id/2151314310/photo/school-supplies-concept-back-to-school-colored-stationery-is-arranged-in-white-organizers.jpg?s=612x612&w=0&k=20&c=IUa5AFGNl5B8g4t3InQnir2KbTuhrrol1WF1tBBIWI8='),
(3, 'Gym', 'Fitness equipment and spaces for physical well-being.', 'https://images.unsplash.com/photo-1576678927484-cc907957088c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGd5bXxlbnwwfHwwfHx8MA%3D%3D'),
(4, 'Medical Room', 'On-campus healthcare, first aid, and emergency support.', 'https://media.istockphoto.com/id/920723384/photo/hospital-room.webp?a=1&b=1&s=612x612&w=0&k=20&c=IU9XSn8G97swZYm4MrwE_4Ai3MKxepDhAATvzFyULnQ='),
(5, 'Canteen', 'Fresh meals, snacks, and comfortable dining spaces.', 'https://media.istockphoto.com/id/507882923/photo/office-cafeteria.webp?a=1&b=1&s=612x612&w=0&k=20&c=-N9RK1q4FL4LlXRZATRPK_sdONbBkvuLN0-EJLSTgsI='),
(6, 'Garden', 'Relaxing green spaces for rest and mental refreshment.', 'https://media.istockphoto.com/id/1029795144/photo/young-female-student-in-the-park-stock-image.webp?a=1&b=1&s=612x612&w=0&k=20&c=ly1_j5XDW2ge9HGUIw6EwsBaeSOzz-aYvYJ8TAiY2qA='),
(7, 'Rooftop', 'Open space for study breaks, gatherings, and fresh air.', 'https://media.istockphoto.com/id/1583614881/photo/female-friends-studying-at-the-rooftop.webp?a=1&b=1&s=612x612&w=0&k=20&c=bViDzyTEefbVsDrbhSfp7a7J--dS0IoBnnEYC6nms-g='),
(8, 'Playground', 'Outdoor sports facilities for games and physical activities.', 'https://images.unsplash.com/photo-1719469202552-3a86b1bf5ff0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dW5pdmVyc2l0eSUyMGZpZWxkfGVufDB8fDB8fHww'),
(9, 'Wifi', 'High-speed internet access across the campus.', 'https://media.istockphoto.com/id/1481197951/photo/connecting-your-laptop-to-high-speed-wi-fi-an-open-laptop-and-a-wi-fi-icon-on-a-blue.webp?a=1&b=1&s=612x612&w=0&k=20&c=-sdZnsnnJho1mya6QNReBlQxGvVWl37_PZ4zXAS3mEY='),
(10, 'Transport', 'Reliable transportation services for students and staff.', 'Bus Am.jpg'),
(11, 'Parking', 'Organized and secure parking for vehicles.', 'https://images.unsplash.com/photo-1590674899484-d5640e854abe?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dW5kZXJncm91bmQlMjBwYXJraW5nfGVufDB8fDB8fHww'),
(12, 'Lift', 'Easy vertical access for all floors and facilities.', 'https://images.unsplash.com/photo-1624342057927-64d60f69b94d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZWxldmF0b3J8ZW58MHx8MHx8fDA%3D');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `dept_code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `dept_code`, `name`, `designation`, `specialization`, `image_url`) VALUES
(1, 'CSE', 'Dr. Mahfuzur Rahman', 'Head of Dept', 'Expert in AI & Logic.', 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400'),
(2, 'CSE', 'Prof. Shamima Nasrin', 'Professor', 'Compiler Design Specialist.', 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400'),
(3, 'CSE', 'Dr. Tanvir Ahmed', 'Associate Professor', 'Algorithm Analysis.', 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400'),
(4, 'CSE', 'Mr. Kamrul Islam', 'Assistant Professor', 'Java & Systems Architecture.', 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400'),
(5, 'CSE', 'Ms. Afsana Mimi', 'Lecturer', 'Human-Computer Interaction.', 'https://images.unsplash.com/photo-1567532939604-b6c5b0ad2e01?w=400'),
(6, 'CSE', 'Dr. Sajjad Hossain', 'Associate Professor', 'Blockchain & Cybersecurity.', 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400'),
(7, 'BBA', 'Dr. Abul Kashem', 'Head of Dept', 'Strategic Management.', 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400'),
(8, 'BBA', 'Prof. Farhana Haque', 'Professor', 'Marketing Strategy Expert.', 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400'),
(9, 'BBA', 'Dr. Jahangir Alam', 'Associate Professor', 'Organizational Behavior.', 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400'),
(10, 'BBA', 'Ms. Nusrat Jahan', 'Assistant Professor', 'Micro & Macro Economics.', 'https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400'),
(11, 'BBA', 'Mr. Tanvir Chowdhury', 'Lecturer', 'Corporate Finance.', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400'),
(12, 'BBA', 'Dr. Rezwanul Huq', 'Professor', 'International Trade.', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400'),
(13, 'EEE', 'Dr. Ashraful Islam', 'Head of Dept', 'AC Systems & Magnetic Fields.', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400'),
(14, 'EEE', 'Prof. Mehedi Hasan', 'Professor', 'Electromagnetism Expert.', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400'),
(15, 'EEE', 'Dr. Sultana Razia', 'Associate Professor', 'Power System Analysis.', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400'),
(16, 'EEE', 'Mr. Arifur Rahman', 'Assistant Professor', 'Control Systems Engineering.', 'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=400'),
(17, 'EEE', 'Ms. Sumaiya Akter', 'Lecturer', 'Renewable Energy Systems.', 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400'),
(18, 'ENG', 'Dr. Selina Hossain', 'Head of Dept', 'Literature & Modern Poetry.', 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400'),
(19, 'ENG', 'Prof. Humayun Ahmed', 'Professor', 'Creative Writing Expert.', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400'),
(20, 'ENG', 'Dr. Syeda Tahmina', 'Associate Professor', 'Victorian Literature Studies.', 'https://images.unsplash.com/photo-1554151228-14d9def656e4?w=400'),
(21, 'ENG', 'Mr. Zafar Iqbal', 'Assistant Professor', 'Post-Colonial Narrative.', 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=400'),
(22, 'ENG', 'Ms. Rokeya Sakhawat', 'Senior Lecturer', 'Linguistics & Phonetics.', 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400'),
(23, 'PHA', 'Dr. Zafrullah Chowdhury', 'Head of Dept', 'Pharmacology & Drug Research.', 'https://images.unsplash.com/photo-1559839734-2b71f1536783?w=400'),
(24, 'PHA', 'Dr. Rokeya Begum', 'Professor', 'Radiology & Clinical Science.', 'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400'),
(25, 'PHA', 'Dr. Enamul Huq', 'Associate Professor', 'Medicinal Chemistry.', 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=400'),
(26, 'PHA', 'Ms. Tasnim Jara', 'Assistant Professor', 'Public Health & Pharmacy.', 'https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400'),
(27, 'PHA', 'Mr. Faisal Ahmed', 'Lecturer', 'Biotechnology & Vaccines.', 'https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400'),
(28, 'IT', 'Dr. Mustafa Jabbar', 'Head of Dept', 'World Wide Web & Networking.', 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400'),
(29, 'IT', 'Dr. Sabina Yasmin', 'Professor', 'Network Protocol Design.', 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400'),
(30, 'IT', 'Mr. Monirul Islam', 'Associate Professor', 'Cloud Computing & DevOps.', 'https://images.unsplash.com/photo-1566492031773-4f4e44671857?w=400'),
(31, 'IT', 'Ms. Jesmin Ara', 'Assistant Professor', 'Database Administration.', 'https://images.unsplash.com/photo-1567532939604-b6c5b0ad2e01?w=400'),
(32, 'IT', 'Dr. Tareq Aziz', 'Senior Lecturer', 'Cyber Forensics.', 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400'),
(33, 'CE', 'Engr. Jamilur Reza Choudhury', 'Head of Dept', 'Bridge & Structural Design.', 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400'),
(34, 'CE', 'Prof. Khaleda Shahriar', 'Professor', 'Urban Planning Specialist.', 'https://images.unsplash.com/photo-1566492031773-4f4e44671857?w=400'),
(35, 'CE', 'Dr. Ainun Nishat', 'Associate Professor', 'Water Resource Management.', 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400'),
(36, 'CE', 'Engr. Musharraf Hossain', 'Assistant Professor', 'Geotechnical Engineering.', 'https://images.unsplash.com/photo-1552058544-f2b08422138a?w=400'),
(37, 'CE', 'Ms. Shamim Zafar', 'Lecturer', 'Transportation Engineering.', 'https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_courses`
--
ALTER TABLE `department_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_courses`
--
ALTER TABLE `department_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
