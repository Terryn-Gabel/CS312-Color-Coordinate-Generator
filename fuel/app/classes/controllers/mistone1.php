<?php
class Controller_Mistone1 extends Controller_Template
{
  
  public function action_home()
  {
    $data = array();
    $this->template->title = 'Cams Interior Design';
    $this->template->css = "example.css";
    $this->template->content = View::forge('pages/homepg', $data);
  }
  
  public function action_about()
  {
    $data = array();
    $this->template->title = 'Cams Interior Design About';
    $this->template->css = "example.css";
    $this->template->content = View::forge('pages/Aboutpg', $data);
  }
  
  public function action_color()
  {   
    $data = array();
    $this->template->title = 'Cams Interior Design Color Coordinate';
    $this->template->css = "example.css";
    $this->template->content = View::forge('pages/color', $data);
  }

  public function get_color() {
    $rowcol = Input::get('rowcol');
    $numcolors = Input::get('numcolors');
    
    if ($rowcol < 1 || $rowcol > 26) {
        $fail_view = View::forge("pages/errors/rowcolerr.php");
        $data = array(
            "failure_view" => $fail_view
        );
        $this->template->title = 'Cams Interior Design Color Coordinate';
        $this->template->css = "example.css";
        $this->template->content = View::forge('pages/color', $data);
    } 
    else if ($numcolors < 1 || $numcolors >= 11) {
      $fail_view = View::forge("pages/errors/colorserr.php");
      $data = array(
          "failure_view" => $fail_view
      );
      $this->template->title = 'Cams Interior Design Color Coordinate';
      $this->template->css = "example.css";
      $this->template->content = View::forge('pages/color', $data);
    } 
    else {
      $table_data = array(
        "rowcol" => $rowcol,
        "numcolors" => $numcolors,
      );
      $table_view = View::forge("pages/table.php", $table_data);
      $data = array(
        "table_view" => $table_view,
      );
  
      $this->template->title = 'Cams Interior Design Color Coordinate';
      $this->template->css = "example.css";
      $this->template->content = View::forge('pages/color', $data);
    }
  }
}
?>