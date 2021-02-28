<?php
class LRUCache
{

    public $size = 0;
    public $count = 0;
    public $head;
    public $tail;
    public $hash = [];

    /**
     * @param Integer $capacity
     */
    function __construct($capacity)
    {
        $this->count = $capacity;
        $this->size = 0;

        $this->head = new Node(-1, -1);
        $this->tail = new Node(-1, -1);

        $this->head->next = $this->tail;
        $this->tail->prev = $this->head;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key)
    {
        if (isset($this->hash[$key])) {
            $node = $this->hash[$key];
            $this->put($key, $this->hash[$key]->value);
            return $node->value;
        } else {
            return -1;
        }
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value)
    {
        if (isset($this->hash[$key])) {

            $node = $this->hash[$key];
            $node->prev->next = $node->next;
            $node->next->prev = $node->prev;
            unset($this->hash[$key]);
        } else {
            if ($this->size == $this->count) {

                unset($this->hash[$this->tail->prev->key]);
                $this->tail->prev->prev->next = $this->tail;
                $this->tail->prev = $this->tail->prev->prev;
            } else {
                $this->size++;
            }
        }

        $node = new Node($key, $value);
        $this->hash[$key] = $node;
        $this->head->next->prev = $node;
        $node->next = $this->head->next;
        $this->head->next = $node;
        $node->prev = $this->head;
    }
}

class Node
{
    public $key;
    public $value;
    public $next;
    public $prev;

    function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */
