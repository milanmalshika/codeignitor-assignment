<?php

    class Reg_Model extends CI_Model{
        public function saverecords($nameofbook, $catogary, $nameofauthor, $numberofbooks){
            $query= "insert into books values('','$nameofbook','$catogary','$nameofauthor', '$numberofbooks')";
            $this->db->query($query);
        }

        public function display_books(){
            $query = $this->db->query("select * from books");
            return $query->result(); 
        }

        public function delete_books($id){
            $this->db->query("delete from books where id='".$id. "'");
        }

        public function displaybooksbyid($id){
            $query = $this->db->query("select * from books where id='".$id."'");
            return $query->result();
        }

        public function update_books($id, $nameofbook, $catogary, $nameofauthor, $numberofbooks){
            $query = $this->db->query("update books SET nameofbook = '$nameofbook',  catogary = ' $catogary', nameofauthor = '$nameofauthor', numberofbooks = '$numberofbooks' where id ='".$id."'");
        }

        public function fetchUserDetails()
		{
			$query=$this->db->query('select * from books');

			$output='
			<table>
		      <thead>
		        <tr>
		          <th>Id</th>
		          <th>Name of book</th>
		          <th>Catogary</th>
                  <th>Name of author</th>
                  <th>Number of books</th>
		        </tr>
		      </thead>
		      <tbody>';
		    foreach ($query->result() as $row) 
		    {
		    	$output.='
		    	<tr>
	              <td>'.$row->id.'</td>
	              <td>'.$row->nameofbook.'</td>
	              <td>'.$row->catogary.'</td>
                  <td>'.$row->nameofauthor.'</td>
                  <td>'.$row->numberofbooks.'</td>
	            </tr>';
		    }
		    $output.='
		   		</tbody>
    		</table>';
    		return $output;
		}
    }

?>