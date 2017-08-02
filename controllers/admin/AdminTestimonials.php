<?php

class AdminTestimonialsController extends ModuleAdminController
{
    public function __construct()
    {
        $this->table = 'testimonials';
        $this->className = 'TestimonialsModel';
        $this->bootstrap = True;

        $this->fields_list = array(
            'testimonials_name' => array(
                'title' => $this->l('Témoignage'),
            ),
            'testimonials_description' => array(
                'title' => $this->l('Description'),
            ),
            'date_testimonials' => array(
                'title' => $this->l('Date'),
            ),
        );

        parent::__construct();


        $this->fields_form = array(
            'legend' => array(
                  'title' => $this->l('Edit comment'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'name' => 'testimonials_name',
                    'label'=> 'Auteur'
            ),
              array(
                'type' => 'textarea',
                'name' => 'testimonials_description',
                'label'=> 'Description'
               ),
              array(
                'type' => 'date',
                'name' => 'date_testimonials',
                'label'=> 'Date'
               ),
            ),
            'submit' => array(
              'title' => $this->l('Save'),
              'class' => 'btn btn-default pull-right'
            )
        );
    }
    public function renderList() {
       $this->addRowAction('edit');
       $this->addRowAction('delete');
       return parent::renderList();
   }
}
