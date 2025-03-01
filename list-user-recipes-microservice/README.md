# List User Recipes Microservice
Este microservicio permite obtener la lista de todas las recetas creadas por un usuario mediante una API en **ReactPHP**.

## 📌 Endpoints
- `GET /list-user-recipes/{userId}`
  - **Response (200)**:
    ```json
    {
      "recipes": [
        {
          "id": "1",
          "name": "Spaghetti Carbonara",
          "userId": "user1",
          "ingredients": ["Spaghetti", "Eggs", "Bacon"],
          "steps": ["Boil pasta", "Fry bacon", "Mix with eggs and cheese"]
        },
        {
          "id": "3",
          "name": "Pancakes",
          "userId": "user1",
          "ingredients": ["Flour", "Milk", "Eggs", "Sugar"],
          "steps": ["Mix all ingredients", "Fry on pan"]
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