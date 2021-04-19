<?php
    include_once 'Node.php';
class LinkedList
{
    public $firstNode;
    public $lastNode;
    public $count;
    function __construct()
        {
            $this->firstNode = null;
            $this->lastNode = null;
            $this->count = 0;
        }

    public function insertFirst($data)
        {
            $link = new Node($data);
            if ($this->firstNode == null) {
                $link->next = null;
                $this->firstNode = $link;
                $this->lastNode = $link;

            } else {
                $link->next = $this->firstNode;
                $this->firstNode = $link;
            }
                $this->count ++;
        }

    public function insertLast($data)
        {
            $link = new Node($data);
         if($this->firstNode != null)
         {
             $this->lastNode->next = $link;
             $link->next = null;
             $this->lastNode = $link;
             $this->count++;
         }
           else
           $this->insertFirst($data);
        }

    public function totalNode()
        {
            return $this->count;
        }

    public function readList()
        {
            $listData = [];
            $current = $this->firstNode;

            while ($current != null)
            {
               array_push($listData,$current->readNode());
               $current = $current->next;
            }
            return $listData;
        }

}
