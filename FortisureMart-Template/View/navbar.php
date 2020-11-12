  <!-- Navigation Bar - Inline styles -->
  <div class='navbar-grid'>
                <button class='btn-shop btn btn-primary'
                        onclick="location.href='?'">
                Shop</button>
                        
                <h1 class='fortisuremart-logo'>
                    <span style='color: #3B3A6D;'>Fortisure</span><span style='color: #9F1224;'>Mart</span>
                </h1>
                
                <div class='cart-container'>

                    <?php
                    
                        //total variable
                        $itemCount = 0;

                        // loop to see how many items are in the cart
                        for($index = 0; $index < count($_SESSION['cart']); $index++) {
                            // add item quantity
                            $itemCount += $_SESSION['cart'][$index]['qty'];
                        }

                        // display how many items are in the cart
                        echo "<sub class='items-in-cart'>{$itemCount}</sub> ";


                    ?>

                </div>             


                <img class='shopping-cart-img' src='./View/Public/Images/shopping-cart.png'
                data-toggle="modal" data-target="#modal-users-cart">
            </div>
        <!-- Navigation Bar -->


<!-- Cart Modal -->

    <div class="modal fade" id="modal-users-cart" role="dialog">
        <div class="modal-dialog">
        <!-- modal content -->
            <div class="modal-content">

        
        <!-- modal header -->
                <div class="modal-header">
                    <!-- title -->
                        <h4 class="modal-title">Your Cart</h4>

                    <!-- closing 'X' button -->
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <!-- modal header -->

        <!-- modal body -->
                <div class="modal-body">
                    <?php
                        include './Controller/modal-display.php';
                    ?>

                </div>
        <!-- modal body -->

        <!-- modal footer -->
                <div class="modal-footer">
                    <!-- second close button -->
                    <button type="button" class="btn btn-default" 
                    data-dismiss="modal"> Close </button>
                </div>

        <!-- modal footer -->
        </div>
    <!-- Modal content -->
     </div>
</div>

<!-- Cart Modal -->