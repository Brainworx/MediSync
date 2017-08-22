<?php

class ArrayOfCompendiumInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CompendiumInfo[] $CompendiumInfo
     */
    protected $CompendiumInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CompendiumInfo[]
     */
    public function getCompendiumInfo()
    {
      return $this->CompendiumInfo;
    }

    /**
     * @param CompendiumInfo[] $CompendiumInfo
     * @return ArrayOfCompendiumInfo
     */
    public function setCompendiumInfo(array $CompendiumInfo = null)
    {
      $this->CompendiumInfo = $CompendiumInfo;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->CompendiumInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CompendiumInfo
     */
    public function offsetGet($offset)
    {
      return $this->CompendiumInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CompendiumInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CompendiumInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CompendiumInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CompendiumInfo Return the current element
     */
    public function current()
    {
      return current($this->CompendiumInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CompendiumInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CompendiumInfo);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->CompendiumInfo);
    }

    /**
     * Countable implementation
     *
     * @return CompendiumInfo Return count of elements
     */
    public function count()
    {
      return count($this->CompendiumInfo);
    }

}
