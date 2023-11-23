<?php

namespace App;

use App\Mappable;

abstract class Fighter
{
    public const MAX_LIFE = 100;

    private string $name;
    private int $strength = 10;
    private int $dexterity = 5;
    protected string $image = 'fighter.svg';
    private int $life = self::MAX_LIFE;
    protected int $xxx;
    protected int $yyy;
    protected float $range = 1;

    protected int $experience = 1000;

    public function __construct(string $name, int $xxx, int $yyy)
    {
        $this->name = $name;
        $this->xxx = $xxx;
        $this->yyy = $yyy;
    }


    public function getDamage(): int
    {
        $damage = $this->getStrength();

        return $damage;
    }

    public function getDefense(): int
    {
        $defense = $this->getDexterity();

        return $defense;
    }



    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return 'assets/images/' . $this->image;
    }

    /**
     * Get the value of image
     */
    public function setImage(string $image)
    {
        $this->image = $image;
    }


    public function fight(Fighter $adversary): void
    {
        $damage = rand(1, $this->getDamage()) - $adversary->getDefense();
        if ($damage < 0) {
            $damage = 0;
        }
        $adversary->setLife($adversary->getLife() - $damage);
    }

    /**
     * Get the value of life
     */
    public function getLife(): int
    {
        return $this->life;
    }

    /**
     * Set the value of life
     *
     */
    public function setLife(int $life)
    {
        if ($life < 0) {
            $life = 0;
        }
        $this->life = $life;
    }

    public function isAlive(): bool
    {
        return $this->getLife() > 0;
    }

    /**
     * Get the value of strength
     */
    public function getStrength(): int
    {
        return $this->strength * Level::calculate($this->getExperience());
    }

    /**
     * Set the value of strength
     *
     */
    public function setStrength($strength): void
    {
        $this->strength = $strength;
    }

    /**
     * Get the value of dexterity
     */
    public function getDexterity(): int
    {
        return $this->dexterity * Level::calculate($this->getExperience());
    }

    /**
     * Set the value of dexterity
     *
     */
    public function setDexterity($dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    /**
     * Get the value of x
     */
    public function getX(): int
    {
        return $this->xxx;
    }

    /**
     * Set the value of x
     */
    public function setX(int $xxx): void
    {
        $this->xxx = $xxx;
    }

    /**
     * Get the value of y
     */
    public function getY(): int
    {
        return $this->yyy;
    }

    /**
     * Set the value of y
     */
    public function setY(int $yyy): void
    {
        $this->yyy = $yyy;
    }

    /**
     * Get the value of range
     */
    public function getRange(): float
    {
        return $this->range;
    }

    /**
     * Get the value of experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set the value of experience
     *
     * @return  self
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }
}
