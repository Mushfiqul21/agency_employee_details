<?php
class crudApp{
    private $con;

    public function __construct(){
        $db_host = 'localhost';
        $db_user = 'root';
        $db_pass = '';
        $db = 'oop_crud';

        $this->con = mysqli_connect($db_host, $db_user, $db_pass, $db);

        if(!$this->con){
            die("error");
        }
    }

    public function insertData($data)
    {
        $emp_name = $data['name'];
        $emp_dept = $data['dept'];
        $emp_salary = $data['salary'];

        $sql = "INSERT INTO employee(name, dept, salary) VALUES('$emp_name','$emp_dept','$emp_salary')";

        if(empty($emp_name))
        {
            header('location:insert.php');
            exit();
        }
        else if(empty($emp_dept))
        {
            header('location:insert.php');
            exit();
        }
        else if(empty($emp_salary))
        {
            header('location:insert.php');
            exit();
        }
        else
        {
            if(mysqli_query($this->con, $sql))
            {
                header('location:index.php');
            }
        }
    }

    public function showData()
    {
        $sql = "SELECT * FROM employee";

        if(mysqli_query($this->con, $sql))
        {
            $return_data = mysqli_query($this->con, $sql);
            return $return_data;
        }
    }

    public function showDataByid($id)
    {
        $sql = "SELECT * FROM employee WHERE id = '$id'";

        if(mysqli_query($this->con, $sql))
        {
            $return_data = mysqli_query($this->con, $sql);
            $emp_details = mysqli_fetch_assoc($return_data);
            return $emp_details;
        }
    }

    public function updateData($data){
        $emp_name = $data['name'];
        $emp_dept = $data['dept'];
        $emp_salary = $data['salary'];
        $emp_id = $data['id'];
        $sql = "UPDATE employee SET name='$emp_name', dept='$emp_dept', salary='$emp_salary' WHERE id='$emp_id'";

        if(mysqli_query($this->con, $sql))
        {
            header('location:index.php');
        }
    }

    public function removeData($id){
        $sql = "DELETE FROM employee WHERE id = '$id'";
        if(mysqli_query($this->con, $sql))
        {
            header('location:index.php');
        }
    }
}
?>