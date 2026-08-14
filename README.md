````markdown
# Disaster Alert & Resource Allocation System

A disaster-management system developed using **PHP and MySQL** to manage emergency alerts, prioritize resources, and optimize routes using Data Structures and Algorithms.

## Features

- Disaster and emergency alert management
- Priority-based resource allocation
- Emergency request processing
- Route optimization using Dijkstra's Algorithm
- Graph traversal using BFS
- Queue and Priority Queue based processing
- MySQL database integration
- Modular backend structure

## Data Structures & Algorithms

- **Queue** — manages emergency requests and operations
- **Priority Queue** — prioritizes critical emergency requests
- **Graph** — represents locations and routes
- **BFS** — performs graph traversal
- **HashMap** — supports efficient data lookup
- **Dijkstra's Algorithm** — finds optimized routes between locations

## Tech Stack

- **Backend:** PHP
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Algorithms:** DSA, Graph Algorithms
- **Tools:** XAMPP / WAMP, VS Code, Git, GitHub

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
│   └── disasters.php
│
├── backend/
│   └── graph_demo.php
│
├── config/
│   └── database.php
│
├── database/
│   └── schema.sql
│
├── README.md
└── .gitignore
````

## Setup

### Prerequisites

* XAMPP or WAMP
* PHP
* MySQL
* Web browser

### Installation

1. Clone the repository:

```bash
git clone https://github.com/Rimjhim-16/Disaster-Alert-Resource-Allocation.git
```

2. Move the project into the XAMPP/WAMP web directory.

For XAMPP:

```text
C:\xampp\htdocs\
```

3. Start **Apache** and **MySQL**.

4. Create a MySQL database named:

```text
disaster_alert
```

5. Import:

```text
database/schema.sql
```

6. Update the database credentials in:

```text
config/database.php
```

7. Open the project through your local server.

## Author

**Rimjhim Saxena**

GitHub: https://github.com/Rimjhim-16

```
```
