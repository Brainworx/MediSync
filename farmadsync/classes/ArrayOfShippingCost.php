<?php

class ArrayOfShippingCost implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShippingCost[] $ShippingCost
     */
    protected $ShippingCost = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShippingCost[]
     */
    public function getShippingCost()
    {
      return $this->ShippingCost;
    }

    /**
     * @param ShippingCost[] $ShippingCost
     * @return ArrayOfShippingCost
     */
    public function setShippingCost(array $ShippingCost = null)
    {
      $this->ShippingCost = $ShippingCost;
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
      return isset($this->ShippingCost[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShippingCost
     */
    public function offsetGet($offset)
    {
      return $this->ShippingCost[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShippingCost $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ShippingCost[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ShippingCost[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShippingCost Return the current element
     */
    public function current()
    {
      return current($this->ShippingCost);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ShippingCost);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ShippingCost);
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
      reset($this->ShippingCost);
    }

    /**
     * Countable implementation
     *
     * @return ShippingCost Return count of elements
     */
    public function count()
    {
      return count($this->ShippingCost);
    }

}
