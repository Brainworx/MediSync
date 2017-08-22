<?php

class ArrayOfCategory implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Category[] $Category
     */
    protected $Category = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Category[]
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param Category[] $Category
     * @return ArrayOfCategory
     */
    public function setCategory(array $Category = null)
    {
      $this->Category = $Category;
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
      return isset($this->Category[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Category
     */
    public function offsetGet($offset)
    {
      return $this->Category[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Category $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->Category[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Category[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Category Return the current element
     */
    public function current()
    {
      return current($this->Category);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Category);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Category);
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
      reset($this->Category);
    }

    /**
     * Countable implementation
     *
     * @return Category Return count of elements
     */
    public function count()
    {
      return count($this->Category);
    }

}
