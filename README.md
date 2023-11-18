# Book Rental Website

Create a book rental website where users can rent books for a specific duration.

## Description

Create a book rental website allowing users to rent books for a specific time.

## Screens

### Login and Register

- Create a page for user login and registration.
- Collect user details such as name, email, password, and image.

### Homepage

- After login, redirect users to the homepage.
- Display a paginated list of all books with 20 records per page.

### User Profile

- Create a user profile page.
- Show rented books and allow users to update their profile.

### Book Detail

- When a user clicks on a book, redirect them to a detailed page.
- Include all book details (author, published date, publisher, pages, etc.).

## Database Setup

- Add books directly to the database through seeders or SQL script.

## Features

### Book Listing

- Paginate the list of books on the homepage.

### Book Availability

- Mark books as unavailable when rented by a user.

### User Rental Limit

- Allow users to rent a maximum of 4 books at a time.

### Notification System

- Notify users via email to return a book on the third day (automated through cron job).

### Filters

- Add filters on top of the books list to filter by name, publishing date, and category.
- Allow multiple filters to be applied simultaneously.

### Installation
Follow these steps to set up and run the Book Rental System on your local machine.

### Prerequisites
PHP (>= 7.3)
### Composer
MySQL or another database of your choice
Node.js and NPM (for frontend assets)
### Step 1: Clone the Repository
git clone https://github.com/your-username/book-rental-system.git
### Step 2: Install Dependencies
cd book-rental-system
composer install
npm install
### Step 3: Set Up Environment Variables
Copy the .env.example file to .env and configure the database connection and other settings.
cp .env.example .env
### Step 4: Generate Application Key
php artisan key:generate
### Step 5: Run Migrations and Seeders
php artisan migrate --seed
This command will create the necessary database tables and seed some initial data.
### Step 6: Compile Frontend Assets
npm run dev
### Step 7: Start the Development Server
php artisan serve
Visit http://localhost:8000 in your web browser to access the Book Rental System.
### Step 8: Create an Administrator Account
Register a new user through the system, and then manually update the is_admin field in the users table to designate the user as an administrator.
### Additional Steps
- Set up a cron job for automated email notifications.
- Configure your web server (Apache, Nginx) to serve the application.
### Usage
- Visit the homepage to browse available books and rent them.
- Use the search functionality to find books based on name, author, or other criteria.
- Update your profile to manage rented books and preferences.
### Contributing
- If you'd like to contribute to the project, please follow the contribution guidelines.

### License
- This project is licensed under the MIT License.
## Usage
## 1. User Registration and Login
Start by registering a new user account on the Book Rental System. Provide your name, email, password, and any additional required information during the registration process.

If you already have an account, simply log in using your credentials.

## 2. Explore Available Books
After logging in, you will be redirected to the homepage, where you can explore a list of available books. The books are presented in a paginated list, making it easy to navigate through the collection.

## 3. Rent a Book
To rent a book, click on the book's title to view its details. On the book detail page, you will find information about the author, publication date, publisher, and more. If the book is available for rent, you can select the rental duration and proceed to rent it.

## 4. User Profile
Navigate to your user profile to view a list of books you've currently rented. In the profile section, you can also update your personal information and preferences.

## 5. Search for Books
Use the search functionality to find specific books based on their names, authors, or other criteria. The search feature allows you to filter and locate books efficiently.

## 6. Book Filters
On the homepage, take advantage of the filters provided to refine the book list. You can filter books by name, publishing date, and category simultaneously, allowing for a customized browsing experience.

## 7. Renting Limits
Keep in mind that a user can rent a maximum of four books at a time, and each book can be rented for a duration of three days. Automatic email notifications will be sent to remind users to return rented books on the third day.

## Contributing to the Book Rental System
We welcome contributions from the community! Whether you want to report a bug, suggest a new feature, or submit a code improvement, your input is highly valued. Here's how you can get involved:

## Reporting Issues
If you encounter any issues or have suggestions for improvements, please create an issue on our GitHub repository. Be sure to provide detailed information about the problem you're facing or the feature you're proposing.

## Feature Requests
If you have ideas for new features or enhancements, please open a GitHub issue to discuss and outline your proposed changes.

## Code Contributions
Fork the Repository:

Fork the Book Rental System repository on GitHub.
Clone your Fork:

## Credits

## Open Source Libraries and Frameworks
**Laravel** - A PHP web application framework used for building the backend of the system.
**Vue.js** - A JavaScript framework used for building interactive user interfaces.
**Bootstrap** - A front-end framework for designing responsive and user-friendly interfaces.
## External Packages
**Composer** - Dependency manager for PHP used for managing PHP libraries.
**npm **- Package manager for JavaScript used for managing frontend libraries.
## Development Tools
**Git** - Version control system used for tracking changes in the source code.
**GitHub** - Hosting service for version control and collaboration.
**VS Code **- Code editor used for development.
## Contributors
We would like to thank the following individuals who have contributed to the Book Rental System:

**John Doe** - Implemented the search functionality.
**Jane Smith** - Provided valuable feedback and bug reports.
## Special Thanks
We extend our special thanks to our users and the open-source community for their support and feedback.

## License

Specify the license under which your project is distributed.

## Contact

## Contact
If you have any questions, feedback, or issues, please feel free to reach out. We welcome your input!

- Email: khanusman8685@example.com
- GitHub Issues: Project Issues
- Feel free to open an issue on GitHub for bug reports, feature requests, or general discussions.
