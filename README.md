# TODO List Application

This is a simple TODO list application built with Laravel. The application allows users to add, update, and delete TODO items. The TODO list is automatically reset when the browser tab is closed or after a period of inactivity.

## Features

- Add new TODO items with a title and description.
- Mark TODO items as completed.
- Delete TODO items.
- TODO list data is cleared when the browser tab is closed or after a period of inactivity.

## Installation

Follow these steps to install and run the application:

### Prerequisites

- PHP >= 7.3
- Composer
- A web server (e.g., Apache, Nginx)
- MySQL or any other supported database

### Steps

1. **Clone the repository:**

    ```sh
    git clone https://github.com/your-username/todolist.git
    cd todolist
    ```

2. **Install dependencies:**

    ```sh
    composer install
    ```

3. **Copy the example environment file and configure the environment variables:**

    ```sh
    cp .env.example .env
    ```

    Edit the `.env` file to set your database connection details and other environment variables.

4. **Generate an application key:**

    ```sh
    php artisan key:generate
    ```

5. **Run the database migrations:**

    ```sh
    php artisan migrate
    ```

6. **Serve the application:**

    ```sh
    php artisan serve
    ```

    The application will be accessible at `http://localhost:8000`.

## Usage

1. **Open the application in your browser:**

    Navigate to `http://localhost:8000` to access the TODO list application.

2. **Add a TODO item:**

    - Enter a title and description for your TODO item.
    - Click the "ADD" button to add the item to the list.

3. **Mark a TODO item as completed:**

    - Click the checkbox button next to the TODO item to mark it as completed.

4. **Delete a TODO item:**

    - Click the delete button (trash icon) next to the TODO item to remove it from the list.

## Auto-reset Feature

The TODO list data is automatically cleared when the browser tab is closed or after a period of inactivity. This is implemented using JavaScript to send a DELETE request to the server when the tab visibility changes.

## Contributing

If you would like to contribute to this project, please fork the repository and create a pull request with your changes. All contributions are welcome!

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

