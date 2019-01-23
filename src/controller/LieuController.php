<?php
    class Lieu
    {
        public function __construct()
        {
        }
        public function liste()
        {
            echo "Liste des lieux";
        }
        public function edit($id)
        {
            echo $id;
        }
        public function delete($id)
        {
            echo $id;
        }
        public function add($id)
        {
            echo "Formulaire des lieux";
        }
    }
?>