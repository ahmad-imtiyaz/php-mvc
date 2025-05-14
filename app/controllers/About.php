<?php

class About extends Controller
{
    public function index($nama = 'Yazna', $pekerjaan = 'Programmer', $umur = 19)
    {
        $this->view('about/index');
    }

    public function page()
    {
        $this->view('about/page');
    }
}
