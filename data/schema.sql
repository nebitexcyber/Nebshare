-- schema.sql

-- Create the 'files' table to store file information
CREATE TABLE files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL,
    filepath VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create the 'users' table (you can extend this for user management in the future)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- If you want to associate files with users, you can add a foreign key to the 'files' table
-- ALTER TABLE files
-- ADD COLUMN user_id INT,
-- ADD FOREIGN KEY (user_id) REFERENCES users(id);
