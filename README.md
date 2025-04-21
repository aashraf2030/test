# PHP MVC API Project

This is a simple PHP-based MVC (Model-View-Controller) API for managing products. The API allows you to retrieve product data and filter them based on expiration criteria. This project is built using clean PHP without any frameworks such as Laravel.

## Project Structure

```
store-api-php/
│
├── config/
│   └── database.php           # Database connection configuration.
│
├── controllers/
│   └── ProductController.php  # Handles product-related HTTP requests.
│
├── models/
│   └── Product.php            # Defines the Product model.
│
├── routes/
│   └── api.php               # Defines the API routes and HTTP methods.
│
├── services/
│   └── ProductService.php     # Contains business logic for managing products.
│
├── helpers/
│   └── response.php          # Utility functions for API response handling.
│
└── public/
    └── index.php             # The front controller that handles all incoming requests.
```

## Features

- **GET /api/products**: Returns all product data.
- **GET /api/expiring-products**: Returns products that meet specific expiration criteria (e.g., products with 3 unique expiration dates).

## Setup

1. **Clone the repository**:
   ```
   git clone https://github.com/yourusername/store-api-php.git
   ```

2. **Database Setup**:
   - Ensure you have a MySQL database running.
   - Create a database named `store_db` (or change the database name in `config/database.php`).
   - Update the `config/database.php` file with your database credentials (`host`, `db`, `user`, `password`).

3. **File Configuration**:
   - The `.htaccess` file is configured to handle URL rewriting. Ensure that Apache is enabled with mod_rewrite.
   - If you are using a different web server, adjust the configuration as needed.

4. **Accessing the API**:
   - Navigate to the public directory and use your browser or API testing tool (such as Postman) to access the API endpoints:
     - `GET /api/products`: Retrieve all products.
     - `GET /api/expiring-products`: Retrieve products based on expiration logic.

## API Response Format

The API returns data in the following JSON format:

### Success Response:

```json
{
  "status": "success",
  "message": "Request was successful",
  "data": [
    {
      "id": 1,
      "name": "Product 1",
      "expiry_dates": ["2025-04-21", "2025-06-21"],
      "stock": 10
    },
    ...
  ]
}
```

### Error Response:

```json
{
  "status": "error",
  "message": "Route not found"
}
```

## Files Description

- **`public/index.php`**: This is the front controller. It handles all incoming HTTP requests and routes them to the appropriate controller and method.
- **`routes/api.php`**: This file contains the routing logic that maps requests to controller methods.
- **`controllers/ProductController.php`**: This controller is responsible for managing product-related requests, including fetching all products and expiring products.
- **`models/Product.php`**: This model defines the product structure and provides methods for data handling.
- **`services/ProductService.php`**: Contains business logic to retrieve products from the database and filter them based on specific rules (e.g., expiration).
- **`helpers/response.php`**: Utility functions that standardize API responses (success or error).
- **`.htaccess`**: Configures URL rewriting to make URLs more user-friendly and route requests correctly.

## Contributing

Feel free to fork this repository, make changes, and submit pull requests. We appreciate any improvements or fixes!

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
