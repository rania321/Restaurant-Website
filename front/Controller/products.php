<?php
     if(isset($_POST['search_box']) OR isset($_POST['search_btn'])){
     $search_box = $_POST['search_box'];
     $select_products = $conn->prepare("SELECT * FROM `products` WHERE name LIKE '%{$search_box}%'"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   
         }
      }else{
         echo '<p class="empty">no products found!</p>';
      }
   }
   ?>

<?php
     $select_products = $conn->prepare("SELECT * FROM `products`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   
      }
   }else{
      echo '<p class="empty">no products found!</p>';
   }
   ?>
