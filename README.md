# 🚀 AWS Multi-Tier Architecture Project (EC2 + RDS + Auto Scaling)
A real-world AWS project demonstrating high availability and scalability using Auto Scaling and RDS.

## 📌 Project Overview

In this project demonstrates how to deploy a highly available PHP web application on AWS using EC2, Auto Scaling, and RDS.

---
### AWS Multi-Tier Architecture
![EC2](architecture.png)

## Architecture Overview

Amazon EC2 for hosting the PHP application
Elastic Load Balancing to distribute traffic
Auto Scaling for high availability
Amazon RDS for MySQL database

---

## ⚙️ Implementation Steps

1. Launched EC2 instance (Ubuntu)
2. Installed Apache, PHP, MySQL client
3. Created Auto Scaling Group (min: 2 instances)
4. Created RDS MySQL database
5. Configured database:

   * Database name: intel
   * Table name: data
6. Connected EC2 to RDS
7. Updated website with RDS endpoint
8. Configured security groups for communication

---

## 📸 Screenshots

### EC2 Instance
![EC2](screenshots-ec2.png)

### Application Running on Public IP
![EC2](screenshots-browser.png)

### Auto Scaling Group
![ASG](screenshots/autoscaling.png)

### RDS Database
![RDS](screenshots/rds.png)

### Website Output
![Output](screenshots/output.png)

---

## 🎯 Key Features

* High Availability using Auto Scaling Group
* Scalable infrastructure to handle traffic spikes
* Fault tolerance with multiple EC2 instances

---

## 🛠️ Tech Stack

* AWS EC2
* AWS RDS
* Auto Scaling
* PHP
* MySQL
