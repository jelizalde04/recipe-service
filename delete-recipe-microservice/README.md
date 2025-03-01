# Delete Recipe Microservice
Este microservicio permite eliminar una receta mediante una API en **ReactPHP**.

## 📌 Endpoints
- `DELETE /delete-recipe/{id}`
  - **Response (200)**:
    ```json
    {
      "message": "Recipe deleted successfully"
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