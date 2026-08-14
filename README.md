# Disaster Alert & Resource Allocation System

A modular PHP + MySQL academic project for managing disaster alerts, emergency resources, and route selection.

> **Note:** This repository is a clean reconstruction based on the project's documented features. It is not claimed to be the exact original source code if the original files are no longer available.

## Features
- Disaster and resource management
- Priority-based emergency processing
- Graph-based route calculation using Dijkstra
- BFS traversal for connected locations
- Queue and priority queue implementations
- Simple PHP API endpoints
- MySQL schema and seed data

## Stack
PHP, MySQL, HTML/CSS/JavaScript, Data Structures & Algorithms

## Setup
1. Install XAMPP/WAMP.
2. Put the project folder inside `htdocs`.
3. Create a MySQL database named `disaster_alert`.
4. Import `database/schema.sql`.
5. Update credentials in `config/database.php`.
6. Start Apache and MySQL.
7. Open `api/disasters.php` in the browser or use Postman/cURL.

## API examples
- `GET api/disasters.php`
- `POST api/disasters.php` with JSON: `{"title":"Flood","location":"Area A","severity":5}`
