-- Database Creation
CREATE DATABASE IF NOT EXISTS Newaiache;
USE Newaiache;

-- 1. Admin Users Table
CREATE TABLE IF NOT EXISTS admin_users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL
);

-- Seed Admin User
INSERT INTO admin_users (username, password) 
SELECT 'AdminAiAche', 'Admin123@#' 
WHERE NOT EXISTS (SELECT * FROM admin_users WHERE username = 'AdminAiAche');

-- 2. College Events Table
CREATE TABLE IF NOT EXISTS collegeevents (
  id int 11 NOT NULL AUTO_INCREMENT,
  event_name varchar(255) NOT NULL,
  event_description text NOT NULL,
  image_path varchar(255) DEFAULT NULL,
  posted_date timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 3. Region Tables (Original)
CREATE TABLE IF NOT EXISTS TAMILNADU (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS KERALA (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS KARNATAKA (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ANDHRA (Updated with Website column support)
CREATE TABLE IF NOT EXISTS ANDHRA (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  Website varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 4. New Region Tables (Added in previous steps)
CREATE TABLE IF NOT EXISTS NORTHERN (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  Website varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS EASTERN (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  Website varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS NORTHEAST (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  Website varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS WESTERN (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  Website varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS LIFEMEMBERS (
  id int(11) NOT NULL AUTO_INCREMENT,
  LM_NO varchar(50) DEFAULT NULL,
  Name_of_the_College varchar(255) DEFAULT NULL,
  Principal_Name varchar(255) DEFAULT NULL,
  Phone_No varchar(50) DEFAULT NULL,
  Website varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 5. Comments/Contact Table (Used in Admin Dashboard)
CREATE TABLE IF NOT EXISTS viewcomments (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  message text NOT NULL,
  status int(1) DEFAULT 0,
  created_at timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 6. Files & Applications Table (Comprehensive Update)
CREATE TABLE IF NOT EXISTS adminpdfupload (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    filename VARCHAR(255) NOT NULL,
    description TEXT,
    report_date DATE,
    category VARCHAR(50) DEFAULT 'Report',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Seed Historical Reports
INSERT INTO adminpdfupload (report_date, title, filename, description, category) VALUES 
('2020-01-11', 'One Day Workshop Report - CATHOLICATE COLLEGE, PATHANAMTHITTA', 'One_Day_Workshop_Report.pdf', 'One Day Workshop Report - CATHOLICATE COLLEGE, PATHANAMTHITTA', 'Report'),
('2020-03-05', 'AIACHE-UB Programme – LEADERSHIP DEVELOPMENT PROGRAMME FOR SENIOR MID-LEVEL FACULTY', 'AIACHE_UB_Programme_Report.pdf', 'AIACHE-UB Programme – LEADERSHIP DEVELOPMENT PROGRAMME FOR SENIOR MID-LEVEL FACULTY', 'Report'),
('2021-02-01', 'GUIDELINES FOR INDIVIDUAL EXPERTS - AIACHE-ASIA Network', 'Guidelines_Individual_Experts.pdf', 'GUIDELINES FOR INDIVIDUAL EXPERTS - AIACHE-ASIA Network', 'Report'),
('2022-03-28', 'Letter to Principals ASIANetwork - 28th March 2022', 'Letter_to_Principals.pdf', 'Letter to Principals ASIANetwork - 28th March 2022', 'Report'),
('2021-02-01', 'GUIDELINES FOR NODAL MEMBERS - AIACHE-ASIANetwork', 'Guidelines_Nodal_Members.pdf', 'GUIDELINES FOR NODAL MEMBERS - AIACHE-ASIANetwork', 'Report'),
('2021-07-16', 'Updated Workbook - Resilience during Pandemic', 'Workbook_Resilience.pdf', 'Updated Workbook - Resilience during Pandemic', 'Report'),
('2022-03-30', 'AIACHE Think Tank - Invitation to the webinar', 'AIACHE_Think_Tank.pdf', 'AIACHE Think Tank - Invitation to the webinar', 'Report'),
('2023-07-22', '144th Executive Board Meet', '144th_Executive_Board_Meet.pdf', '144th Executive Board Meet', 'Report'),
('2023-08-24', 'Academic Renewal Program', 'Academic_Renewal_Program.pdf', 'Academic Renewal Program', 'Report'),
('2023-04-01', 'Vol. 56 No. 2&3, April-June 2023 and July-September 2023 New Frontiers in Education', 'New_Frontiers_in_Education_Vol56.pdf', 'Vol. 56 No. 2&3, April-June 2023 and July-September 2023 New Frontiers in Education', 'Report'),
('2024-11-03', 'AIACHE Task Force Committee Meet 2024 @MCC, Chennai', 'AIACHE_Task_Force_Meet_2024.pdf', 'AIACHE Task Force Committee Meet 2024 @MCC, Chennai', 'Report');

-- Seed Application Forms
INSERT INTO adminpdfupload (report_date, title, filename, description, category) VALUES 
(NOW(), 'Life Membership', 'Life_Membership_Form.pdf', 'Application form for institutions seeking permanent life membership Status.', 'Application'),
(NOW(), 'Annual Membership', 'Annual_Membership_Form.pdf', 'Application form for institutions renewing or applying for annual membership.', 'Application'),
(NOW(), 'Individual Friend\'s', 'Individual_Friends_Form.pdf', 'Application form for individuals wishing to join as Friends of AIACHE.', 'Application');

-- Verify Tables
SHOW TABLES;
