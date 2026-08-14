# Disaster Alert & Resource Allocation System

A disaster-management system designed to support emergency alert handling, resource allocation, and route optimization using PHP, MySQL, and fundamental Data Structures & Algorithms.

## Overview

The Disaster Alert & Resource Allocation System provides a structured approach to managing disaster-related information, emergency resources, and response operations.

The project combines a modular PHP backend with a MySQL database and algorithmic techniques to organize emergency data and optimize resource processing and routing.

## Key Features

- Disaster and emergency event management
- Emergency resource allocation
- Priority-based processing of critical requests
- Route optimization using Dijkstra's algorithm
- Graph traversal using BFS
- Queue and Priority Queue based processing
- HashMap-based data organization
- MySQL database integration
- Modular backend structure

## Data Structures & Algorithms

The project demonstrates the practical application of several data structures and algorithms:

- **Queue** – manages requests and emergency operations
- **Priority Queue** – prioritizes critical emergency resources
- **Graph** – represents locations and connections
- **BFS** – supports graph traversal
- **HashMap** – enables efficient data lookup
- **Dijkstra's Algorithm** – finds optimized routes between locations

## Tech Stack

### Backend
- PHP

### Database
- MySQL

### Data Structures & Algorithms
- Queue
- Priority Queue
- Graph
- BFS
- HashMap
- Dijkstra's Algorithm

### Development Tools
- XAMPP / WAMP
- VS Code
- Git & GitHub

## Project Structure

```text
Disaster-Alert-Resource-Allocation/
│
├── algorithms/
│   ├── bfs.php
│   ├── dijkstra.php
│   └── priority_queue.php
│
├── api/
│   └── ...
│
├── backend/
│   └── ...
│
├── config/
│   └── database.php
│
├── database/
│   └── schema.sql
│
├── README.md
└── .gitignore
