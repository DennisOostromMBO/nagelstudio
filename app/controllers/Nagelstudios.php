<?php
class Nagelstudios extends BaseController
{
    public function __construct()
    {
        // Initialize the controller
    }

    // Index method to display the form
    public function index()
    {
        $data = [
            'title' => 'Bling bling master'
        ];

        $this->view('nagelstudios/index', $data);
    }
}
?>
