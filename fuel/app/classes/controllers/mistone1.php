<?php
use \Model\ColorsDBModel;

class Controller_Mistone1 extends Controller_Template
{

  public function action_home()
  {
    $data = array();
    $this->template->title = 'Home Page';
    $this->template->css = "example.css";
    $this->template->js = "color.js";
    $this->template->content = View::forge('pages/homepg', $data);
  }
  
  public function action_about()
  {
    $data = array();
    $this->template->title = 'About Page';
    $this->template->css = "example.css";
    $this->template->js = "color.js";
    $this->template->content = View::forge('pages/Aboutpg', $data);
  }
  
  public function action_color()
  {   
    $data = array();
    $this->template->title = 'Virtual Painting Tool';
    $this->template->css = "example.css";
    $this->template->js = "color.js";
    $this->template->content = View::forge('pages/color', $data);
  }

  public function get_color() {
    $rowcol = Input::get('rowcol');
    $numcolors = Input::get('numcolors');

    $data = array();
    $fail_view = null;

    if ($rowcol < 0 || $rowcol > 26) {
      $fail_view = View::forge("pages/errors/rowcolerr.php");
      $data += array(
          "failure_view" =>  $fail_view
      );
    }else if ($numcolors < 0 || $numcolors >= 11) {
      $fail_view = View::forge("pages/errors/colorserr.php");
      $data += array(
          "failure_view" => $fail_view
      );
    }else {
      $table_data = array(
        "rowcol" => $rowcol,
        "numcolors" => $numcolors,
      );
      $table_view = View::forge("pages/table.php", $table_data);
      $data += array(
        "table_view" => $table_view,
      );
    }

    $this->template->title = 'Virtual Painting Tool';
    $this->template->css = "example.css";
    $this->template->js = "color.js";
    $this->template->content = View::forge('pages/color', $data);
  }

    public function post_index() {
        if (isset($_POST['add']) && isset($_POST['todo_text'])) {
          ColorsDBModel::add_todo($_POST['todo_text']);
        }
        if (isset($_POST['delete']) && isset($_POST['todocheck'])) {
            $checked_todos = array();
            foreach ( $_POST['todocheck'] as $id ) {
                $checked_todos[] = $id;
            }
            ColorsDBModel::delete_todos($checked_todos);
        }
        $data = array(
            'todos' => ColorsDBModel::read_todos(),
            'todo_count' => ColorsDBModel::todo_count()
        );
        return Response::forge(View::forge('tododbviews/todomaincontent', $data));
    }
}

?>
