<?PHP
	echo "Hello Digital Academy";

   class Product {
    var $name;
    function __construct($value) {
        if (is_a($value, 'Product')) {
            $this->name = $value->name;
        } else {
            $this->name = $value;
        }
    }
}
?> 