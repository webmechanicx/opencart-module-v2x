<?php
class ControllerModuleHelloworld extends Controller {
    public function index() {
        $this->load->language('module/helloworld'); // loads the language file of helloworld
         
        $data['heading_title'] = $this->language->get('heading_title'); // set the heading_title of the module
         
        $data['helloworld_value'] = html_entity_decode($this->config->get('helloworld_text_field')); // gets the saved value of helloworld text field and parses it to a variable to use this inside our module view
        
            return $this->load->view('module/helloworld', $data);
    }
}
