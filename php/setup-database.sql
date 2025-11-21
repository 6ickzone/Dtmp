-- Create Database
CREATE DATABASE IF NOT EXISTS test_db;
USE test_db;

-- Create Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL -- Length 255 to store Hash
);

-- Insert Dummy Data (ESSENTIAL FOR DEMO)
-- Password 'admin123' (bcrypt hash) for testing Secure script
INSERT INTO users (username, password) VALUES 
('admin', '$2y$10$8.Xh/x...LongHashGoesHere...'), 
('user', 'user123'); -- Plaintext for testing Vulnerable script
