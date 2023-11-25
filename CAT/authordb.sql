-- Create the database
CREATE DATABASE IF NOT EXISTS authordb;

-- Switch to the database
USE authordb;

-- Create the table
CREATE TABLE IF NOT EXISTS authorstb (
    AuthorId INT AUTO_INCREMENT PRIMARY KEY,
    AuthorFullName VARCHAR(255) NOT NULL,
    AuthorEmail VARCHAR(255) NOT NULL,
    AuthorAddress VARCHAR(255) NOT NULL,
    AuthorBiography TEXT NOT NULL,
    AuthorDateOfBirth DATE NOT NULL,
    AuthorSuspended BOOLEAN NOT NULL
);