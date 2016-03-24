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
 * Class ContentMutatorsTrait.
 */
trait ContentMutatorsTrait
{
    /**
     * The content property.
     *
     * @var string
     */
    protected $content;

    /**
     * Init trait.
     */
    public function initializeContent()
    {
        $this->content = null;
    }

    /**
     * Setter for content property.
     *
     * @param string|null $content the content string
     *
     * @return $this
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Getter for content property.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Checker for content property.
     *
     * @return bool
     */
    public function hasContent()
    {
        return (bool) ($this->getContent() !== null);
    }

    /**
     * Nullify the content property.
     *
     * @return $this
     */
    public function clearContent()
    {
        $this->content = null;

        return $this;
    }
}

/* EOF */
