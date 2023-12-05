# MyBlog

## Description

MyBlog is a simple and elegant blogging platform designed for ease of use and efficient content management. The platform features a robust admin panel that allows administrators to create, edit, and manage blog posts effortlessly. With a clean and intuitive user interface, the admin panel provides a seamless experience for content creators to share their thoughts, stories, and insights with the world.

On the user side, MyBlog caters to a simple user role, offering an uncomplicated and enjoyable reading experience. Users can easily navigate through the blog, view posts, and engage with the content without any unnecessary complexity. The focus is on delivering a user-friendly environment that encourages exploration and interaction.

## Key Features

- **Admin Panel:** A powerful admin interface for managing blog content, including post creation, editing, and deletion.
- **User-Friendly Design:** A clean and intuitive user interface that ensures a pleasant experience for both administrators and regular users.
- **Effortless Content Management:** Simplified processes for creating and organizing blog posts, streamlining the content creation workflow.
- **Engaging User Experience:** A straightforward user role allowing readers to access and enjoy blog content without unnecessary complications.

MyBlog is not just a platform; it's a space for sharing ideas and stories with a focus on simplicity and accessibility. Whether you're an administrator shaping the narrative or a reader exploring the latest posts, MyBlog is tailored to make your blogging experience seamless and enjoyable.

### Backend Dependencies

- None for this example (assuming a pure PHP backend).

### Frontend Dependencies

- Bootstrap: 3.4.1
  - CSS: [https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css](https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css)
  - JS: [https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js](https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js)
- jQuery: 3.7.1
  - JS: [https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js](https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js)
- Ionicons: 7.1.0
  - JS Module: [https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js](https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js)
  - JS Non-Module: [https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js](https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js)

### Custom Styles

- Main CSS: ./assets/css/main.css

## Setup and Installation

To set up and install the project, follow these steps:

1. **Clone the Project:**

   ```bash
   git clone https://github.com/your-username/your-project.git
   cd your-project
   ```

2. Set an empty password for initial setup
   Make variable $db_pass empty!

<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'PHP_PROJEKT';
$db_user = 'root';
$db_pass = '';  
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
} catch (PDOException $i) {
    die("Error with connecting to database");
}

?>
