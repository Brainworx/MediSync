<?php

class ArrayOfProductInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductInfo[] $ProductInfo
     */
    protected $ProductInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductInfo[]
     */
    public function getProductInfo()
    {
      return $this->ProductInfo;
    }

    /**
     * @param ProductInfo[] $ProductInfo
     * @return ArrayOfProductInfo
     */
    public function setProductInfo(array $ProductInfo = null)
    {
      $this->ProductInfo = $ProductInfo;
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
      return isset($this->ProductInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductInfo
     */
    public function offsetGet($offset)
    {
      return $this->ProductInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductInfo[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductInfo Return the current element
     */
    public function current()
    {
      return current($this->ProductInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductInfo);
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
      reset($this->ProductInfo);
    }

    /**
     * Countable implementation
     *
     * @return ProductInfo Return count of elements
     */
    public function count()
    {
      return count($this->ProductInfo);
    }

}
