<?php
class TestimonialsModel extends ObjectModel
   {
       public $id_testimonials;
       public $testimonials_name;
       public $testimonials_description;
       public $date_testimonials;
       public static $definition = array(
           'table' => 'testimonials',
           'primary' => 'id_testimonials',
           'fields' => array(
               'testimonials_name' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
               'testimonials_description' => array('type' => self::TYPE_STRING, 'validate' => 'isString'),
               'date_testimonials' => array('type' => self::TYPE_DATE, 'validate' => 'isString'),
           ),
       );
   }
