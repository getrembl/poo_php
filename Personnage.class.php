#! /usr/bin/php
<?PHP

class Personnage
{
    private $_localisation;
    private $_experience;
    private $_degats;
    public $vie;

    function __construct()
    {
        $this->_experience = 1;
        $this->_degats = mt_rand(15, 25);
        $this->vie = mt_rand(90, 110);
    }

    public function frapper($victime)
    {
        $victime->_degats = $this->_force / 10 * sqrt($_experience);
    }

    public function gagnerExperience()
    {
        $this->_experience = $this->_experience + 1;
    }

    public function afficherExperience()
    {
        echo "Tu la sens ma grosse intlligence? Mon Q.I. est maintenant de  : " . $this->_experience . PHP_EOL;
    }

    public function deplacer()
    {
    }

    public function discour()
    {
        if ($this->vie >= 100)
            echo "Take this, biatch ! My life is : " . $this->vie . PHP_EOL;
        else if ($this->vie < 100 && $this->vie >= 75)
            echo "You think you strong? Because I did not feel anything. My life is : " . $this->vie . PHP_EOL;
        else if ($this->vie < 75 && $this->vie >= 50)
            echo "Ok, you touched me. But I'm till far from dead, Me life is : " . $this->vie . PHP_EOL;
        else if ($this->vie < 50 && $this->vie >= 25)
            echo "You actually believe that you will manage to kill me? My life is : " . $this->vie . PHP_EOL;
        else if ($this->vie < 25 && $this->vie >= 10)
            echo "I'm still life bitch. My life is : " . $this->vie . PHP_EOL;
        else if ($this->vie < 10 && $this->vie >=1)
            echo "WAIT. Please don't kill me. I'm good guy... see my life : " . $this->vie . PHP_EOL;
        else
            echo "I'm dead.\n\n\n\n\n\t\t\tGAME OVER" . PHP_EOL;
    }
}

$perso = new Personnage;
$perso2 = new Personnage;

while ($perso->vie)
{
    $perso->discour();
    $perso->frapper($perso2);
    $perso->gagnerExperience();
    $perso->afficherExperience();
    $perso2->frapper($perso);
    $perso2->gagnerExperience();
    $perso2->afficherExperience();
}
?>
