<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    class Registration extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->database();
            $this->load->model('Reg_Model');
            $this->load->library('pdf');
        }

        public function savedata(){
            $this->load->view('registration_form');

            if($this->input->post('save')){
                $nameofbook = $this->input->post('nameofbook');
                $catogary = $this->input->post('catogary');
                $nameofauthor = $this->input->post('nameofauthor');
                $numberofbooks = $this->input->post('numberofbooks'); 
                
                $this->Reg_Model->saverecords($nameofbook, $catogary,$nameofauthor, $numberofbooks);
                redirect('http://localhost/myapp/index.php/Registration/displaydata');
            }
        }

        public function displaydata(){ 
            $result['data'] = $this->Reg_Model->display_books();
            $this->load->view('display_books', $result);
        }

        public function deletedata(){
            $id = $this->input->get('id');
            $this->Reg_Model->delete_books($id);
            $this->load->helper('url');
            redirect('http://localhost/myapp/index.php/Registration/displaydata'); 
        }

        public function updatedata(){
            $id = $this->input->get('id');
            $result['data'] = $this->Reg_Model->displaybooksbyid($id);
            $this->load->view('update_books', $result);

            if($this->input->post('update')){
                $id = $this->input->get('id');
                $nameofbook = $this->input->post('nameofbook');
                $catogary = $this->input->post('catogary');
                $nameofauthor = $this->input->post('nameofauthor');
                $numberofbooks = $this->input->post('numberofbooks');
                $this->Reg_Model->update_books($id, $nameofbook, $catogary, $nameofauthor, $numberofbooks);
                redirect('http://localhost/myapp/index.php/Registration/displaydata');
            }
        }

        public function pdfdetails(){
			$html_content='<style>
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			td, th {
			  border: 1px solid #dddddd;
			  text-align: left;
			  padding: 8px;
			}
			</style>';
			$html_content.='<center><h3>User Details Report</h3>';
			$html_content.=$this->Reg_Model->fetchUserDetails();
			$html_content.='</center>';
			$this->pdf->LoadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("report.pdf",array("Attachment"=>0));
		}

    }

?>