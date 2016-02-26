<?php
    class Client
    {
        private $client_name;
        private $id;
        private $stylist_id;
        function __construct($client_name, $id = null, $stylist_id)
        {
            $this->client_name = $client_name;
            $this->id = $id;
            $this->stylist_id = $stylist_id;
        }
        function setClientName($new_client_name)
        {
            $this->client_name = $new_client_name;
        }
        function setStylistId($new_stylist_id)
        {
            $this->stylist_id = $new_stylist_id;
        }
        function getClientName()
        {
            return $this->client_name;
        }
        function getId() {
            return $this->id;
        }
        function getStylistId() {
            return $this->stylist_id;
        }

    }
?>
