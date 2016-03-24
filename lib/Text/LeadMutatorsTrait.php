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

namespace Scribe\Doctrine\ORM\Model\Text;

/**
 * Class LeadMutatorsTrait.
 */
trait LeadMutatorsTrait
{
    /**
     * @var string
     */
    protected $lead;

    /**
     * Init trait.
     */
    public function initializeLead()
    {
        $this->lead = null;
    }

    /**
     * @param string|null $lead the lead string
     *
     * @return $this
     */
    public function setLead($lead = null)
    {
        $this->lead = $lead;

        return $this;
    }

    /**
     * Getter for lead property.
     *
     * @return string|null
     */
    public function getLead()
    {
        return $this->lead;
    }

    /**
     * Checker for lead property.
     *
     * @return bool
     */
    public function hasLead()
    {
        return (bool) ($this->lead !== null);
    }

    /**
     * Nullify the lead property.
     *
     * @return $this
     */
    public function clearLead()
    {
        $this->lead = null;

        return $this;
    }
}

/* EOF */
