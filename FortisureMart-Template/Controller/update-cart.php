<?php

// start the session
session_start();

// check if anything is in the form
if(!isset($_SESSION['cart']))
{
    //create session to be used
    $_SESSION['cart'] = array();
}

// if a card is clicked add item to cart
if(isset($_POST['code'])) {
    // get info out of POST
    $prodCode = $_POST['code'];
    $prodName = $_POST['name'];
    $prodImg = $_POST['img'];
    $prodPrice = $_POST['price'];


//get cart array
$cartArray = $_SESSION['cart'];

// variable for the storage index set to the next open index by default
$storedIndex = count($cartArray);

// loop through the cart to see if this item has already been picked
for($index = 0; $index < count($cartArray); $index++) {
    // if  the item is found to already be stored
        if($cartArray[$index]['code'] == $prodCode){
            $storedIndex = $index;
        }
    }

    //if this item has not been stored before
    if(!isset($cartArray[$storedIndex]['code'])) {
        // store the item info
        $cartArray[$storedIndex]['code'] = $prodCode;
        $cartArray[$storedIndex]['name'] = $prodName;
        $cartArray[$storedIndex]['img'] = $prodImg;
        $cartArray[$storedIndex]['price'] = $prodPrice;

        //set quantity to 1
        $cartArray[$storedIndex]['qty'] = 1;
    }
    else{
        // just add 1 to the qty
        $cartArray[$storedIndex]['qty'] +=1;
    }

    // add cartArray to the cart session
    $_SESSION['cart'] = $cartArray;

    // clear the post for  the next input
    $_POST = array();

}


?>