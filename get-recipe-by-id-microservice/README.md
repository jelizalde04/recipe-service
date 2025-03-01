# Get Recipe By ID Microservice
Este microservicio permite obtener los detalles de una receta mediante una API en **ReactPHP**.

## 📌 Endpoints
- `GET /get-recipe-by-id/{id}`
  - **Response (200)**:
    ```json
    {
      "recipe": {
        "id": "1",
        "name": "Spaghetti Carbonara",
        "ingredients": ["Spaghetti", "Eggs", "Bacon"],
        "steps": ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]
      }
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