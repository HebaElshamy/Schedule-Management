# Schedule Management
## Overview

The **Class Scheduling System** is an efficient and scalable platform designed to streamline the assignment of teachers to classes across specific time slots and days. This project integrates a powerful **Laravel** backend with a responsive **AngularJS** frontend, offering an intuitive drag-and-drop interface, real-time updates, and robust API-driven communication. The system is tailored for educational institutions, enabling seamless schedule management with a focus on usability and performance.

## Description

The **Class Scheduling System** addresses the complexities of educational scheduling by providing an interactive solution for assigning teachers to subjects and time slots. It is built on a solid foundation of modern technologies to ensure performance, reliability, and scalability.

### Core Features:
- **Dynamic Scheduling:** Effortlessly create, edit, and remove schedules.
- **Drag-and-Drop Interface:** Intuitive scheduling made simple and user-friendly.
- **Real-Time Updates:** Immediate synchronization between frontend and backend.
- **API-Driven Design:** Reliable communication between components ensures seamless data flow.
- **Responsive Frontend:** Adaptable and visually clear interface for optimal user experience.

This system is designed to simplify the management of educational schedules, making it a valuable tool for administrators.

## Solution Overview

The **Class Scheduling System** is built on a modular and scalable architecture, enabling easy management of schedules and efficient allocation of resources.

### Frontend (AngularJS)
- **Dynamic User Interface:** Powered by AngularJS for responsiveness and interactivity.
- **Drag-and-Drop Functionality:** Simplifies scheduling tasks for users.
- **Real-Time Data Display:** Reflects backend changes instantly in the frontend.

### Backend (Laravel)
- **Secure and Scalable Framework:** Laravel provides a robust backend for API development and database operations.
- **API Endpoints:** RESTful APIs handle CRUD operations for teachers, subjects, time slots, and schedules.
- **Data Validation:** Ensures data integrity during interactions.

### Core Functionalities:
- Manage teachers, subjects, and time slots.
- Assign teachers to specific subjects and time slots using a drag-and-drop system.
- Save, update, and delete schedules dynamically.
- API-driven communication for seamless frontend-backend integration.

This architecture ensures flexibility, maintainability, and scalability for future enhancements.

## Features

### Teacher and Subject Management
- View and manage teacher and subject details directly from the system.

### Time Slot Management
- Display structured and dynamic time slot lists for easy selection during scheduling.

### Schedule Management
- Create, update, and delete schedules with ease.
- Visualize and edit schedules across multiple days.

### Interactive Drag-and-Drop
- Simplifies assigning teachers to specific classes and time slots.

### API Integration
- RESTful APIs enable reliable data communication between components.
- Includes endpoints for retrieving, updating, and deleting data.

### Validation and Error Handling
- Built-in validation ensures data integrity and consistency.
- Clear feedback provided for errors encountered during operations.

### Real-Time Synchronization
- Instant reflection of changes in the frontend upon backend updates.

### Scalable Architecture
- Modular design supports future enhancements and scalability.

## Technical Choices

The project’s development involved deliberate technical choices to maximize efficiency, maintainability, and user experience.

### Frontend
- **Framework:** AngularJS for its dynamic, two-way data binding capabilities.
- **Styling:** Responsive design using HTML/CSS for accessibility across devices.
- **Interactive Features:** Integrated drag-and-drop system for seamless schedule management.

### Backend
- **Framework:** Laravel for its simplicity, scalability, and built-in database and validation tools.
- **Database:** Relational database (e.g., MySQL) managed through Eloquent ORM.
- **API Development:** RESTful APIs for CRUD operations and robust communication.
- **Validation:** Comprehensive request-level validation ensures secure data operations.

### Error Handling and Testing
- **Postman:** Utilized for thorough API testing.
- **API Documentation:** Clear documentation supports collaboration and future development.
- **GitHub:** Used for version control and collaboration, ensuring organized project management.

## How to Run the Program

1. Clone the repository.
  ```bash
   git clone https://github.com/HebaElshamy/Schedule-Management.git

```
2.  Install project dependencies using Composer:
   ```bash
   composer install
```

3. Copy the .env.example file and rename it to .env:
 ```bash
    cp .env.example .env
```
4. Generate the application key:
```bash
    php artisan key:generate
```
5. Configure the .env file with your database connection details   
6. Run the database migrations to create tables:
```bash
    php artisan migrate
```
7. Populate the database with the required data.
```bash
    php artisan db:seed
```
8. Start the local server:
```bash
    php artisan serve
```
9. Running the Project Locally

To fully test and experience the project, follow these steps to set up and run both the backend and frontend components:

1. **Start the Backend Server:**  
   - Ensure that the Laravel backend server is running locally (usually accessible via `http://localhost:8000`).  
   - Use **Postman** or any API client to test the API endpoints. Send requests to `http://localhost:8000`, ensuring you include the appropriate headers and payloads as specified in the [API Documentation](https://documenter.getpostman.com/view/25951230/2sAYBUDCex).  
   - Validate that all endpoints for teachers, subjects, time slots, schedules, and other operations are functioning as expected.

2. **Run the Frontend Application:**  
   - Navigate to the **frontend folder** of the project.  
   - Open the `index.html` file in a browser to launch the frontend interface.  
   - The frontend is designed to communicate with the backend APIs to provide features like teacher assignment, schedule viewing, and schedule modifications.

3. **Testing the Application:**  
   - Use the frontend interface to perform scheduling operations, such as assigning teachers to specific time slots, viewing schedules, and removing assignments.  
   - Verify that all actions trigger the appropriate backend API calls and the results are reflected correctly in the interface.

By following these steps, you can test the full functionality of the project seamlessly, ensuring both frontend and backend components are integrated and working as intended.

10. Enjoy your experience!


 ![لقطة الشاشة 2024-11-24 095904](https://github.com/user-attachments/assets/857863fb-d21e-4aab-a38c-fc460cd6cf66)

 ![لقطة الشاشة 2024-11-24 095810](https://github.com/user-attachments/assets/4bd57793-d7e0-43c7-b993-4d40da5f8af1)




