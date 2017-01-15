<?php

namespace Drumser\Stack;

use Drumser\Exceptions\EmptyStackException;

/**
 * Class SimpleStack
 * @package Drumser\Stack
 */
class SimpleStack
{
    /**
     * Pointer to current Node
     * @var Node
     */
    private $head;

    /**
     * Current size of stack
     * @var int
     */
    private $size;

    /**
     * SimpleStack constructor.
     */
    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    /**
     * @param $data
     */
    public function push($data) {
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = $this->head;

        $this->head = $newNode;
        $this->size++;
    }

    /**
     * @return mixed
     * @throws EmptyStackException
     */
    public function pop() {
        if ($this->isEmpty()) {
            throw new EmptyStackException("Error when trying to access to empty node");
        }

        $dataForReturn = $this->head->data;
        $this->head = $this->head->next;
        $this->size--;
        return $dataForReturn;
    }

    /**
     * @return mixed
     */
    public function peek() {
        return $this->head->data;
    }

    /**
     * @return bool
     */
    public function isEmpty() {
        return $this->head === null;
    }
}