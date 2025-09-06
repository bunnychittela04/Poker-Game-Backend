# 🎯 Real-Time Poker Game Backend

A **proof-of-concept backend** for a real-time online poker game, built to demonstrate **Core PHP**, **WebSockets**, and **modern backend architecture**.  
The system is **scalable**, **maintainable**, and aligned with the requirements of high-performance online gaming platforms.

---

## 🚀 Key Features

- **🔴 Real-Time Communication**  
  Powered by the **Ratchet WebSocket** server for instant, bidirectional player–server messaging, enabling a live, multiplayer game experience.

- **🛠 Object-Oriented PHP**  
  Built with **Core PHP OOP principles**, ensuring the codebase is modular, reusable, and easy to extend.

- **🐳 Containerized Development**  
  Fully managed using **Docker & Docker Compose** for consistent environments, simplifying setup, and mirroring professional DevOps workflows.

- **⚡ High-Performance Caching**  
  Utilizes **Redis** for fast, in-memory caching and message brokering to minimize database load and improve responsiveness.

- **💾 Reliable Data Persistence**  
  Integrates with **MySQL** for secure, persistent storage of:
  - Game state
  - Player profiles
  - Betting history

- **📦 Modern Dependency Management**  
  Uses **Composer** to keep libraries organized and up-to-date.

---

## 🛠 Technology Stack

| Component       | Technology |
|-----------------|------------|
| **Backend**     | PHP (Core PHP, OOP) |
| **Web Server**  | Nginx (Docker) |
| **Database**    | MySQL (Docker) |
| **Caching/Broker** | Redis (Docker) |
| **Real-Time**   | Ratchet (WebSockets) |
| **Dependencies**| Composer |
| **DevOps**      | Docker, Docker Compose |

---

## 📦 Setup & Installation

### 1️⃣ Prerequisites
- Install **Docker Desktop** and ensure it is running.
- Install **Git**.

### 2️⃣ Clone the Repository
```bash
git clone [[your_repo_link](https://github.com/bunnychittela04/Poker-Game-Backend)]
cd poker-backend

3️⃣ Start All Services
docker-compose up -d --build


This spins up PHP, MySQL, Redis, and Nginx containers.

4️⃣ Access the PHP Container
docker-compose exec php bash

5️⃣ Install PHP Dependencies
composer install

6️⃣ Start the WebSocket Server
php src/WebSocket/Server.php


The WebSocket server will now listen on port 8080.
