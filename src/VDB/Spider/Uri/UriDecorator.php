<?php

namespace VDB\Spider\Uri;

use VDB\Uri\UriInterface;

abstract class UriDecorator implements UriInterface
{
    /**
     * @var UriInterface
     */
    protected $decorated;

    public function __construct(UriInterface $decorated)
    {
        $this->decorated = $decorated;
    }

    public function toString()
    {
        return $this->decorated->toString();
    }

    /**
     * @param UriInterface $that
     * @param boolean $normalized whether to compare normalized versions of the URIs
     * @return boolean
     */
    public function equals(UriInterface $that, $normalized = false)
    {
        return $this->decorated->equals($that, $normalized);
    }

    /**
     * @return UriInterface
     */
    public function normalize()
    {
        return $this->decorated->normalize();
    }

    /**
     * Alias of Uri::toString()
     *
     * @return string
     */
    public function __toString()
    {
        return $this->decorated->__toString();
    }

    /**
     * @return string|null
     */
    public function getHost()
    {
        return $this->decorated->getHost();
    }

    /**
     * @return string|null
     */
    public function getPassword()
    {
        return $this->decorated->getPassword();
    }

    /**
     * @return string|null
     */
    public function getPath()
    {
        return $this->decorated->getPath();
    }

    /**
     * @return int|null
     */
    public function getPort()
    {
        return $this->decorated->getPort();
    }

    /**
     * @return string|null
     */
    public function getQuery()
    {
        return $this->decorated->getQuery();
    }

    /**
     * @return string|null
     */
    public function getScheme()
    {
        return $this->decorated->getScheme();
    }

    /**
     * @return string|null
     */
    public function getUsername()
    {
        return $this->decorated->getUsername();
    }

    /**
     * @return string|null
     */
    public function getFragment()
    {
        return $this->decorated->getFragment();
    }
}
