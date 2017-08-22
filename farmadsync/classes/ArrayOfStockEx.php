<?php

class ArrayOfStockEx implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StockEx[] $StockEx
     */
    protected $StockEx = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StockEx[]
     */
    public function getStockEx()
    {
      return $this->StockEx;
    }

    /**
     * @param StockEx[] $StockEx
     * @return ArrayOfStockEx
     */
    public function setStockEx(array $StockEx = null)
    {
      $this->StockEx = $StockEx;
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
      return isset($this->StockEx[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StockEx
     */
    public function offsetGet($offset)
    {
      return $this->StockEx[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StockEx $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->StockEx[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->StockEx[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StockEx Return the current element
     */
    public function current()
    {
      return current($this->StockEx);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StockEx);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StockEx);
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
      reset($this->StockEx);
    }

    /**
     * Countable implementation
     *
     * @return StockEx Return count of elements
     */
    public function count()
    {
      return count($this->StockEx);
    }

}
