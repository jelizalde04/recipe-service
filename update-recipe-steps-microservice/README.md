# Update Recipe Steps Microservice
Este microservicio permite actualizar los pasos de una receta mediante una API en **ReactPHP**.

## 📌 Endpoints
- `PUT /update-recipe-steps/{id}`
  - **Body (JSON)**:
    ```json
    {
      "newSteps": ["Preheat oven", "Mix ingredients", "Bake for 30 minutes"]
    }
    ```
  - **Response (200)**:
    ```json
    {
      "message": "Recipe steps updated successfully",
      "recipe": {
        "id": "12345",
        "name": "Chocolate Cake",
        "ingredients": ["Flour", "Sugar", "Cocoa Powder"],
        "steps": ["Preheat oven", "Mix ingredients", "Bake for 30 minutes"]
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