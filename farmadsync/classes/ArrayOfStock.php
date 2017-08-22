<?php

class ArrayOfStock implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Stock[] $Stock
     */
    protected $Stock = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Stock[]
     */
    public function getStock()
    {
      return $this->Stock;
    }

    /**
     * @param Stock[] $Stock
     * @return ArrayOfStock
     */
    public function setStock(array $Stock = null)
    {
      $this->Stock = $Stock;
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
      return isset($this->Stock[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Stock
     */
    public function offsetGet($offset)
    {
      return $this->Stock[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Stock $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Stock[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Stock[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Stock Return the current element
     */
    public function current()
    {
      return current($this->Stock);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Stock);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Stock);
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
      reset($this->Stock);
    }

    /**
     * Countable implementation
     *
     * @return Stock Return count of elements
     */
    public function count()
    {
      return count($this->Stock);
    }

}
