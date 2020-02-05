<?php

class BattleResult
{

    /**
     * @param bool $usedSpatiodriveBoosters
     * @param Ship $winningShip
     * @param Ship $losingShip
     */
    private $usedSpatiodriveBoosters;
    private $winningShip;
    private $losingShip;

    public function __construct(Bool $usedSpatiodriveBoosters, ?Ship $winningShip, ?Ship $losingShip)
    {
        $this->usedSpatiodriveBoosters = $usedSpatiodriveBoosters;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip() : Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip () : Ship
    {
        return $this->losingShip;
    }

    /**
     * @return Ship
     */
    public function wereBoosterUsed () : Bool
    {
        return $this->usedSpatiodriveBoosters;
    }

    public function isThereAWinner(): Bool {
        return $this->getWinningShip() !== null;
    }
    
}