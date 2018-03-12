<?php session_start(); ?>

<body>
    
<?php
    $this->load->helper('html');
    $this->load->helper('text');

    
    echo meta('description', 'Product Info');
    // Instead of writing all this:  <meta name="description" content="Product Info" />
    
    echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
    // Note the third parameter.  Can be "equiv" or "name"
    // Generates:  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    
    echo meta(array('name' => 'robots', 'content' => 'no-cache'));
    // Generates:  <meta name="robots" content="no-cache" />
    
    
    print "Product ID: " . $id . "<br/>";
    print "Name: " . $name . "<br/>";
    print "Description: " . $description. "<br/>"; 
    print "Rate: " . $rate . "<br/>"; 
    print "Price: " . $price . "<br/>"; 
    print "Image: <img src='http://aldayaj.co.uk/Project/uploads/product/$image' width='300px'/>";

?>