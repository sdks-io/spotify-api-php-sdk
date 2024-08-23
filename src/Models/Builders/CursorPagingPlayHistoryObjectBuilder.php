<?php

declare(strict_types=1);

/*
 * SpotifyWebAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace SpotifyWebAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use SpotifyWebAPILib\Models\CursorObject;
use SpotifyWebAPILib\Models\CursorPagingPlayHistoryObject;

/**
 * Builder for model CursorPagingPlayHistoryObject
 *
 * @see CursorPagingPlayHistoryObject
 */
class CursorPagingPlayHistoryObjectBuilder
{
    /**
     * @var CursorPagingPlayHistoryObject
     */
    private $instance;

    private function __construct(CursorPagingPlayHistoryObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cursor paging play history object Builder object.
     */
    public static function init(): self
    {
        return new self(new CursorPagingPlayHistoryObject());
    }

    /**
     * Sets href field.
     */
    public function href(?string $value): self
    {
        $this->instance->setHref($value);
        return $this;
    }

    /**
     * Sets limit field.
     */
    public function limit(?int $value): self
    {
        $this->instance->setLimit($value);
        return $this;
    }

    /**
     * Sets next field.
     */
    public function next(?string $value): self
    {
        $this->instance->setNext($value);
        return $this;
    }

    /**
     * Sets cursors field.
     */
    public function cursors(?CursorObject $value): self
    {
        $this->instance->setCursors($value);
        return $this;
    }

    /**
     * Sets total field.
     */
    public function total(?int $value): self
    {
        $this->instance->setTotal($value);
        return $this;
    }

    /**
     * Sets items field.
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Initializes a new cursor paging play history object object.
     */
    public function build(): CursorPagingPlayHistoryObject
    {
        return CoreHelper::clone($this->instance);
    }
}
