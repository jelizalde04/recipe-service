# Recipe Modification Permission Microservice
Este microservicio permite verificar si un usuario tiene permiso para modificar una receta mediante una API en **ReactPHP**.

## 📌 Endpoints
- `GET /check-permission/{userId}/{recipeId}`
  - **Response (200)**:
    ```json
    {
      "permission": true,
      "message": "User has permission to modify this recipe"
    }
    ```
  - **Response (403)**:
    ```json
    {
      "permission": false,
      "message": "User does not have permission to modify this recipe"
    }
    ```
  - **Response (404)**:
    ```json
    {
      "error": "Recipe not found"
    }
    ```

## 🚀 Instalación y Ejecución
1. Instalar dependencias:
   ```sh
   composer install

2. Ejecutar el servicio:
    ```sh
    php main.php