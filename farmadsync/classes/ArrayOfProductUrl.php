<?php

class ArrayOfProductUrl implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProductUrl[] $ProductUrl
     */
    protected $ProductUrl = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductUrl[]
     */
    public function getProductUrl()
    {
      return $this->ProductUrl;
    }

    /**
     * @param ProductUrl[] $ProductUrl
     * @return ArrayOfProductUrl
     */
    public function setProductUrl(array $ProductUrl = null)
    {
      $this->ProductUrl = $ProductUrl;
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
      return isset($this->ProductUrl[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProductUrl
     */
    public function offsetGet($offset)
    {
      return $this->ProductUrl[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProductUrl $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProductUrl[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProductUrl[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProductUrl Return the current element
     */
    public function current()
    {
      return current($this->ProductUrl);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProductUrl);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProductUrl);
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
      reset($this->ProductUrl);
    }

    /**
     * Countable implementation
     *
     * @return ProductUrl Return count of elements
     */
    public function count()
    {
      return count($this->ProductUrl);
    }

}
