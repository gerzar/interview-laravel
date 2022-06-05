3. Laravel Test
   Create a simple e-commerce project with below tablesCreate a simple e-commerce project with below tables
1. productsproducts
   name (string)
   price (int)
   category_id (int)
   image (string)
   deleted_at (timestamps) soft delete
   created_at (timestamps)
   updated_at (timestamps)
   NOTE : (price data type is integer but must able able to store float value)
- eg1. 120 -> store as 12000
- eg2. 35.42 -> store as 3542
2. cart_itemscart_items
   id (int)
   product_id (int)
   created_at (timestamps)
   updated_at (timestamps)
3. product_categoriesproduct_categories
   id (int)
   name (string)
   created_at (timestamps)
   updated_at (timestamps)
   TODOTODO
1. create migrations and models
2. add relationships
3. create below REST apis
   Product CRUD
   (response must be with product category) and able to upload product image
   Product categories CRUD
   Cart items CRUD
   (response must be with product and product category)
   NOTE:NOTE:
   Use Laravel resource for response
   Use repository pattern
   Must be able to test all of your codes
