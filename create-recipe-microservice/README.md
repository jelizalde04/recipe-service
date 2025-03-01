# Create Recipe Microservice
Este microservicio permite la creación de recetas mediante una API en **ReactPHP**.

## 📌 Endpoints
- `POST /create-recipe`
  - **Body (JSON)**:
    ```json
    {
      "name": "Spaghetti Carbonara",
      "ingredients": ["Spaghetti", "Eggs", "Bacon", "Parmesan"],
      "steps": ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]
    }
    ```
  - **Response (201)**:
    ```json
    {
      "message": "Recipe created successfully",
      "recipe": {
        "name": "Spaghetti Carbonara",
        "ingredients": ["Spaghetti", "Eggs", "Bacon", "Parmesan"],
        "steps": ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]
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