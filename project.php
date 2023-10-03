<?php
class product
{
    private int $id;
    private string $name;
    private float $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getFormattedPrice()
    {
        return "$" . $this->price;
    }
    public function showDetails()
    {
        echo "producte Details\n";
        echo "-ID: " . $this->id . PHP_EOL;
        echo "-Name: " . $this->name . PHP_EOL;
        echo "-Price: " . $this->getFormattedPrice();

    }
}
$obj = new product(1, "T-shirt", 19.99);
$obj->showDetails();

?>