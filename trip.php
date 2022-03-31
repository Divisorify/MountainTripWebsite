<?php
class Trip{
 
    function __construct(private int $id,
     private string $name,
     private string $continent,
     private string $country,
     private string $period,
     private string $description,
     private string $price
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getContinent(): string
    {
        return $this->continent;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPeriod(): string
    {
        return $this->period;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): string
    {
        return $this->price;
    }


    public function __toString(){
        return "$this->id $this->name $this->price";
    }
}

$Kolorado = new Trip(1,"Kolorado","Ameryka Północna","USA","7 dni","Jest wyżynno-górzystym stanem, którego średnia wysokość nad poziomem morza przekracza 2000 m. Najwyższy szczyt Kolorado, Mount Elbert, wznosi się na 4399 m n.p.m. Zachodnią część stanu zajmują Góry Skaliste i Wyżyna Kolorado, wschodnią – obszar Wielkich Równin.
","15000 PLN");
$Alaska = new Trip(2,"Alaska","Ameryka Północna","USA","7 dni","Pasmo górskie w Ameryce Północnej w stanie Alaska. Jest to najwyższa część łańcucha Kordylierów z najwyższym szczytem kontynentu – Denali (McKinley) (6194 m n.p.m.). Długość ok. 1000 km. Zbudowane z granitów i ze skał osadowych.
","16000 PLN");
$Everest = new Trip(3,"Everest","Azja","Chiny","7 dni","Najwyższy szczyt Ziemi (8848 m n.p.m., podaje się też wysokość 8844 (pomiary chińskie) lub 8850 (pomiary amerykańskie)), ośmiotysięcznik położony w Himalajach Wysokich (Centralnych), na granicy Nepalu i Chińskiej Republiki Ludowej (Tybetu).
","18000 PLN");
// $Alpy = new Trip(4,"Aply","Europa","Austria","7 dni","Najwyższy łańcuch górski Europy, ciągnący się łukiem od wybrzeża Morza Śródziemnego w okolicy Savony po dolinę Dunaju w okolicach Wiednia. Łańcuch ma długość około 1200 km, szerokość od 150 do 250 km i zajmuje powierzchnię około 220 tys. km².
// ","12000 PLN");

$trips = [$Kolorado,$Alaska,$Everest];
// print ($trips[1]);
?>