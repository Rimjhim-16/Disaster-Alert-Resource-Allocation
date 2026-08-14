CREATE DATABASE IF NOT EXISTS disaster_alert;
USE disaster_alert;

CREATE TABLE IF NOT EXISTS disasters (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(120) NOT NULL,
    location VARCHAR(120) NOT NULL,
    severity INT NOT NULL CHECK (severity BETWEEN 1 AND 5),
    status VARCHAR(30) DEFAULT 'ACTIVE',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS resources (
    id INT AUTO_INCREMENT PRIMARY KEY,
    resource_name VARCHAR(120) NOT NULL,
    quantity INT NOT NULL,
    location VARCHAR(120) NOT NULL
);

INSERT INTO disasters (title, location, severity) VALUES
('Flood Alert', 'Dehradun', 5),
('Landslide Alert', 'Mussoorie', 4);

INSERT INTO resources (resource_name, quantity, location) VALUES
('Medical Kits', 120, 'Dehradun'),
('Food Packets', 300, 'Haridwar'),
('Water Bottles', 500, 'Rishikesh');
