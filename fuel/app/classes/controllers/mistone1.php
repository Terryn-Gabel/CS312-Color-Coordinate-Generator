<?php
class Controller_Mistone1 extends Controller_Template
{

  public function action_home()
  {
    $data = array();
    $this->template->title = 'Cams Interior Design';
    $this->template->content = View::forge('pages/homepg', $data);
  }
  
  public function action_about()
  {
    $data = array();
    $this->template->title = 'Cams Interior Design About';
    $this->template->content = View::forge('pages/Aboutpg', $data);
  }
  
  public function action_color()
  {
    $data = array();
    $this->template->title = 'Cams Interior Design Color Coordinate';
    $this->template->content = View::forge('pages/homepg', $data);
  }
}
?>
  
