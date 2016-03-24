<?php

/*
 * This file is part of the arthur-doctrine-entity-traits-library.
 *
 * (c) Scribe Inc. <scr@src.run>
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\Doctrine\ORM\Model\Person;

/**
 * Class SurnameMutatorsTrait.
 */
trait SurnameMutatorsTrait
{
    /**
     * The surname property.
     *
     * @var string
     */
    protected $surname;

    /**
     * Init trait.
     */
    public function initializeSurname()
    {
        $this->surname = null;
    }

    /**
     * Setter for surname property.
     *
     * @param string|null $surname the surname string
     *
     * @return $this
     */
    public function setSurname($surname = null)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Getter for surname property.
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Checker for surname property.
     *
     * @return bool
     */
    public function hasSurname()
    {
        return (bool) ($this->getSurname() !== null);
    }

    /**
     * Nullify the surname property.
     *
     * @return $this
     */
    public function clearSurname()
    {
        $this->setSurname(null);

        return $this;
    }
}

/* EOF */
