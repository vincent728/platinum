<?php
$this->load->view('includes/header');
$this->load->view('includes/content');
?>
<div id="menu">

    <ul>
        <?php
        if ($results->num_rows() > 0) {
            $li_out = '';
            foreach ($results->result_array() as $value) {

                //check if the menu has submenu
                $submenu_results = $this->site_model->getsubmenu($value['menu_id']);
                if ($submenu_results->num_rows() > 0) {

                    $sub_li_out = '';
                    foreach ($submenu_results->result_array() as $rows) {
                        $sub_li_out.='<li>' . anchor('pages/functio/', $title = $rows['submenu_description']) . '</li>';
                    }
                    $submenu_listing = '<ul>' . $sub_li_out . '</ul>';
                } else {
                    $submenu_listing = '';
                }
                //  echo $submenu_listing;

                $li_out.='<li><a href="">' . $value['menu_description'] . '</a>' . $submenu_listing . '</li>';
            }
            echo $li_out;
        }
        ?>


    </ul>



</div>


<?php
$this->load->view('includes/footer');
?>
