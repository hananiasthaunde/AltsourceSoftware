-- ============================================
-- AltSource Software — Database Schema
-- ============================================

CREATE DATABASE IF NOT EXISTS altsource_db
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE altsource_db;

-- Users table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Portfolio table
CREATE TABLE IF NOT EXISTS portfolio (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  description TEXT,
  image_path VARCHAR(255),
  category ENUM('software', 'maintenance', 'design') NOT NULL DEFAULT 'software',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- Default admin user (password: admin123)
INSERT INTO users (username, email, password) VALUES
('admin', 'info.altsourcesoftware@gmail.com', '$2y$10$Um6vMRnaOxdujz14nSbduO1lTc6rGpSAUwmxxcbGZ.jKdbM3D933e');
