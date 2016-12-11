<?php

class Matches extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $local;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $visiting;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $scheduled;

    /**
     *
     * @var integer
     * @Column(type="integer", nullable=false)
     */
    protected $local_sets;

    /**
     *
     * @var integer
     * @Column(type="integer", nullable=false)
     */
    protected $visiting_sets;

    /**
     *
     * @var integer
     * @Column(type="integer", nullable=false)
     */
    protected $partial_results;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $category;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $cover;

    /**
     *
     * @var integer
     * @Column(type="integer", nullable=false)
     */
    protected $order;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $parent_category;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $chronicle_link;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $finished;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $location;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field local
     *
     * @param string $local
     * @return $this
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Method to set the value of field visiting
     *
     * @param string $visiting
     * @return $this
     */
    public function setVisiting($visiting)
    {
        $this->visiting = $visiting;

        return $this;
    }

    /**
     * Method to set the value of field scheduled
     *
     * @param string $scheduled
     * @return $this
     */
    public function setScheduled($scheduled)
    {
        $this->scheduled = $scheduled;

        return $this;
    }

    /**
     * Method to set the value of field local_sets
     *
     * @param integer $local_sets
     * @return $this
     */
    public function setLocalSets($local_sets)
    {
        $this->local_sets = $local_sets;

        return $this;
    }

    /**
     * Method to set the value of field visiting_sets
     *
     * @param integer $visiting_sets
     * @return $this
     */
    public function setVisitingSets($visiting_sets)
    {
        $this->visiting_sets = $visiting_sets;

        return $this;
    }

    /**
     * Method to set the value of field partial_results
     *
     * @param integer $partial_results
     * @return $this
     */
    public function setPartialResults($partial_results)
    {
        $this->partial_results = $partial_results;

        return $this;
    }

    /**
     * Method to set the value of field category
     *
     * @param string $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Method to set the value of field cover
     *
     * @param string $cover
     * @return $this
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Method to set the value of field order
     *
     * @param integer $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Method to set the value of field parent_category
     *
     * @param string $parent_category
     * @return $this
     */
    public function setParentCategory($parent_category)
    {
        $this->parent_category = $parent_category;

        return $this;
    }

    /**
     * Method to set the value of field chronicle_link
     *
     * @param string $chronicle_link
     * @return $this
     */
    public function setChronicleLink($chronicle_link)
    {
        $this->chronicle_link = $chronicle_link;

        return $this;
    }

    /**
     * Method to set the value of field finished
     *
     * @param string $finished
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Method to set the value of field location
     *
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Returns the value of field visiting
     *
     * @return string
     */
    public function getVisiting()
    {
        return $this->visiting;
    }

    /**
     * Returns the value of field scheduled
     *
     * @return string
     */
    public function getScheduled()
    {
        return $this->scheduled;
    }

    /**
     * Returns the value of field local_sets
     *
     * @return integer
     */
    public function getLocalSets()
    {
        return $this->local_sets;
    }

    /**
     * Returns the value of field visiting_sets
     *
     * @return integer
     */
    public function getVisitingSets()
    {
        return $this->visiting_sets;
    }

    /**
     * Returns the value of field partial_results
     *
     * @return integer
     */
    public function getPartialResults()
    {
        return $this->partial_results;
    }

    /**
     * Returns the value of field category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Returns the value of field cover
     *
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Returns the value of field order
     *
     * @return integer
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Returns the value of field parent_category
     *
     * @return string
     */
    public function getParentCategory()
    {
        return $this->parent_category;
    }

    /**
     * Returns the value of field chronicle_link
     *
     * @return string
     */
    public function getChronicleLink()
    {
        return $this->chronicle_link;
    }

    /**
     * Returns the value of field finished
     *
     * @return string
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Returns the value of field location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'matches';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Matches[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Matches
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'local' => 'local',
            'visiting' => 'visiting',
            'scheduled' => 'scheduled',
            'local_sets' => 'local_sets',
            'visiting_sets' => 'visiting_sets',
            'partial_results' => 'partial_results',
            'category' => 'category',
            'cover' => 'cover',
            'order' => 'order',
            'parent_category' => 'parent_category',
            'chronicle_link' => 'chronicle_link',
            'finished' => 'finished',
            'location' => 'location'
        ];
    }

}
