# Update Recipe Name Microservice
Este microservicio permite actualizar el nombre de una receta mediante una API en **ReactPHP**.

## 📌 Endpoints
- `PUT /update-recipe-name/{id}`
  - **Body (JSON)**:
    ```json
    {
      "newName": "New Recipe Name"
    }
    ```
  - **Response (200)**:
    ```json
    {
      "message": "Recipe name updated successfully",
      "recipe": {
        "id": "12345",
        "name": "New Recipe Name",
        "ingredients": ["Ingredient 1", "Ingredient 2"],
        "steps": ["Step 1", "Step 2"]
      }
    }
    ```

## 🚀 Instalación y Ejecución
1. Instalar dependencias:
   ```sh
   composer install
2. Ejecutar el servicio:
    ```sh
    php main.php