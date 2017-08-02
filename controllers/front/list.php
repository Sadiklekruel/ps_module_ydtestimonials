<?php

class ydtestimonialslistModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();
        $testimonials = $this->getTestimonials();
        $this->setTemplate('list.tpl');
        // foreach ($testimonialslist as $testimonial) {
        //     $testimonial
        // }
		//
		$this->context->smarty->assign('testimonials', $testimonials);
		// $this->setTemplate('verification_execution.tpl');
	}

    public function getTestimonials()
    {
        global $smarty;
        $testimonials = array();
        $dbquery- = new DbQuery();
        $dbquery->select('*');
        $dbquery->from('testimonials')
        return Db::getInstance()->executeS($dbquery);
    }
}
