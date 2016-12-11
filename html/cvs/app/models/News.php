<?php

class News extends \Phalcon\Mvc\Model
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
    protected $subject;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $body;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $creation_date;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $visible;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $fixed;

    /**
     *
     * @var integer
     * @Column(type="integer", nullable=true)
     */
    protected $order;

    /**
     *
     * @var integer
     * @Column(type="integer", nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $cover;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $type;

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
     * Method to set the value of field subject
     *
     * @param string $subject
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Method to set the value of field body
     *
     * @param string $body
     * @return $this
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Method to set the value of field creation_date
     *
     * @param string $creation_date
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    /**
     * Method to set the value of field visible
     *
     * @param string $visible
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Method to set the value of field fixed
     *
     * @param string $fixed
     * @return $this
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;

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
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

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
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

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
     * Returns the value of field subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Returns the value of field body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Returns the value of field creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Returns the value of field visible
     *
     * @return string
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Returns the value of field fixed
     *
     * @return string
     */
    public function getFixed()
    {
        return $this->fixed;
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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
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
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'news';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return News[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return News
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
            'subject' => 'subject',
            'body' => 'body',
            'creation_date' => 'creation_date',
            'visible' => 'visible',
            'fixed' => 'fixed',
            'order' => 'order',
            'user_id' => 'user_id',
            'cover' => 'cover',
            'type' => 'type'
        ];
    }

}
