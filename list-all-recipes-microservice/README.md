# List All Recipes Microservice
Este microservicio permite obtener la lista de todas las recetas mediante una API en **ReactPHP**.

## 📌 Endpoints
- `GET /list-all-recipes`
  - **Response (200)**:
    ```json
    {
      "recipes": [
        {
          "id": "1",
          "name": "Spaghetti Carbonara",
          "ingredients": ["Spaghetti", "Eggs", "Bacon"],
          "steps": ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]
        },
        {
          "id": "2",
          "name": "Chocolate Cake",
          "ingredients": ["Flour", "Sugar", "Cocoa Powder"],
          "steps": ["Mix ingredients", "Bake for 30 minutes"]
        }
      ]
    }
    ```

## 🚀 Instalación y Ejecución
1. Instalar dependencias:
   ```sh
   composer install

2. Ejecutar el servicio:
    ```sh
    php main.php