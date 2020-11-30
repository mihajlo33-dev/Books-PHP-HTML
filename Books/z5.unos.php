<?php
class Book
{
	private  $price;
    private  $title;
	
	public function GetPrice()
	{
		return $this->price;
	}
	public function SetPrice($price)
	{
		$this->price = $price;
	}
	
	public function GetTitle()
	{
		return $this->title;
	}
	public function SetTitle($title)
	{
		$this->title = $title;
	}
}

$math = new Book();
$math->SetPrice(1450);
$math->SetTitle("Algebra");
/*
echo $math->GetPrice()."<br>";
echo $math->GetTitle()."<br>";
*/
$physics = new Book();
$physics->SetPrice(1290);
$physics->SetTitle("Physics for High School");
/*
echo $physics->GetPrice()."<br>";
echo $physics->GetTitle()."<br>";
*/
$chemistry = new Book();
$chemistry->SetPrice(999);
$chemistry->SetTitle("Adavanced Chemistry");
/*
echo $chemistry->GetPrice()."<br>";
echo $chemistry->GetTitle()."<br>";
*/

if(ISSET($_POST["submit"],$_POST["title"],$_POST["price"]))
{
	$title = trim($_POST["title"]);
	$price = trim($_POST["price"]);
	
	if($title != "" && $price != "")
    {
		$book = new Book();
		$book->SetPrice($price);
		$book->SetTitle($title);
		
		
		
		printf("Dodata knjiga <strong><h1>%s</h1></strong> Cijena:%dRSD",$book->GetTitle(),$book->GetPrice());
	}
}
?>