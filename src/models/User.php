
<?php
// src/models/User.php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    // TODO: add more DB constraints (unique, non-empty, default values)
    #[ORM\Column(type: 'string')]
    private string $username;
    #[ORM\Column(type: 'string')]
    private string $fullName;
    #[ORM\Column(type: 'string')]
    private string $password;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        // TODO: encryption can be done here !!!
        $this->password = $password;
    }

    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
}
