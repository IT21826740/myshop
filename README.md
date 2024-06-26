# My Shop

A simple web application for managing a list of clients using PHP and MySQL.

## Features
- Add new clients
- View a list of clients
- Edit client information
- Delete clients

## Prerequisites

Before you begin, ensure you have met the following requirements:
- You have installed [XAMPP](https://www.apachefriends.org/index.html) or any other local server environment.
- You have a basic understanding of PHP and MySQL.

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/IT21826740/myshop.git
   ```

2. **Navigate to the project directory:**
   ```sh
   cd myshop
   ```

3. **Set up the database:**
   - Open `phpMyAdmin` or any MySQL management tool.
   - Create a new database named `myshop`.
   - Import the `clients.sql` file to create the `clients` table and insert sample data.
     ```sql
     CREATE TABLE clients (
         id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
         name VARCHAR(100) NOT NULL,
         email VARCHAR(200) NOT NULL UNIQUE,
         phone VARCHAR(100) NULL,
         address VARCHAR(200) NULL,
         created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
     );

     INSERT INTO clients (name, email, phone, address) VALUES
     ('nimal', 'nima@gmail.com', '0759825614', 'avissawella'),
     ('kamal', 'kamal@gmail.com', '0759845614', 'avissawella'),
     ('sunil', 'sunil@gmail.com', '0759826314', 'avissawella');
     ```

4. **Configure the database connection:**
   - Open the PHP files (`index.php`, `AddClient.php`, `edit.php`, `delete.php`) and update the database connection parameters if necessary.
     ```php
     $connection = new mysqli("localhost", "root", "YOUR_PASSWORD", "myshop");
     ```

5. **Start the local server:**
   - Open XAMPP or your local server environment.
   - Start Apache and MySQL.

6. **Access the application:**
   - Open your web browser and go to `http://localhost/myshop/index.php`.

## Usage

### Viewing the list of clients
- On the main page (`index.php`), you will see a list of clients.

### Adding a new client
- Click the "Add New Client" button to navigate to the form for adding a new client.

### Editing a client
- Click the "Edit" button next to the client you wish to edit. This will take you to the edit form.

### Deleting a client
- Click the "Delete" button next to the client you wish to delete. This will remove the client from the database.

## Screenshots

### List of Clients
![Screenshot 2024-06-26 170830](https://github.com/IT21826740/myshop/assets/111214065/ab7d7e46-c6b0-48d0-949d-74a1ecbfe32d)


### Add New Client
![Screenshot 2024-06-26 170902](https://github.com/IT21826740/myshop/assets/111214065/045aea0c-1220-4647-8445-e955289340c8)


## Contributing
If you would like to contribute, please fork the repository and make changes as you'd like. Pull requests are warmly welcome.

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License.

1ST YR 2ND SEM 
