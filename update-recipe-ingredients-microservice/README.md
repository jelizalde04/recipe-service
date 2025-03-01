# Update Recipe Ingredients Microservice
Este microservicio permite actualizar los ingredientes de una receta mediante una API en **ReactPHP**.

## 📌 Endpoints
- `PUT /update-recipe-ingredients/{id}`
  - **Body (JSON)**:
    ```json
    {
      "newIngredients": ["Tomato", "Onion", "Garlic"]
    }
    ```
  - **Response (200)**:
    ```json
    {
      "message": "Recipe ingredients updated successfully",
      "recipe": {
        "id": "12345",
        "name": "Pasta Bolognese",
        "ingredients": ["Tomato", "Onion", "Garlic"],
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