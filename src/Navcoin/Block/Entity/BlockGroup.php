<?php

namespace App\Navcoin\Block\Entity;

use App\Navcoin\Common\Entity\DateRangeInterface;

class BlockGroup implements DateRangeInterface
{
    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var int
     */
    private $blocks;

    /**
     * @var int
     */
    private $transactions;

    /**
     * @var float
     */
    private $stake;

    /**
     * @var float
     */
    private $fees;

    /**
     * @var float
     */
    private $spend;

    /**
     * @var int
     */
    private $height;

    public function __construct(
        \DateTime $start,
        \DateTime $end,
        int $blocks,
        int $transactions,
        float $stake,
        float $fees,
        float $spend,
        int $height
    ) {
        $this->start = $start;
        $this->end = $end;
        $this->blocks = $blocks;
        $this->transactions = $transactions;
        $this->stake = $stake;
        $this->fees = $fees;
        $this->spend = $spend;
        $this->height = $height;
    }

    public function getStart(): \DateTime
    {
        return $this->start;
    }

    public function getEnd(): \DateTime
    {
        return $this->end;
    }

    public function getBlocks(): int
    {
        return $this->blocks;
    }

    public function getTransactions(): int
    {
        return $this->transactions;
    }

    public function getStake(): float
    {
        return $this->stake;
    }

    public function getFees(): float
    {
        return $this->fees;
    }

    public function getSpend(): float
    {
        return $this->spend;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
