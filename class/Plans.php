<?php

class Plans extends Connection
{
    private $plans = array();

    public function getAllPlans()
    { // method buat ambil semua data plans, return value nya berupa array
        $sql = "SELECT * FROM tbl_plans";
        $result = mysqli_query($this->connect, $sql);

        if ($result) {
            while ($data = mysqli_fetch_assoc($result)) {
                $plan = array(
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'price' => $data['price'],
                    'duration' => $data['duration'],
                    'description' => $data['description']
                );
                array_push($this->plans, $plan); // hati-hati disini berbeda antara plans (banyak data) dan plan(1 row data doang)
            }
        }
        return $this->plans; // return data plans
    }

    public function getPlanById($id)
    {
        $sql = "SELECT * FROM tbl_plans WHERE id='$id'";
        $result = mysqli_query($this->connect, $sql);
        $plan = [];

        if ($result) {
            $plan = mysqli_fetch_assoc($result);
        }
        return $plan;
    }

    public function addPlan($name, $price, $duration, $description)
    {
        $sql = "INSERT INTO tbl_plans (name, price, duration, description) VALUE ($name, $price, $duration, $description)";
        $result = mysqli_query($this->connect, $sql);

        if ($result) {
            return true;
        }
        return false;
    }

    public function updatePlan($id, $name, $price, $duration, $description)
    {
        $sql = "UPDATE tbl_plans SET (
            name = $name,
            price = $price,
            duration = $duration,
            description = $description
            ) WHERE id=$id";

        $result = mysqli_query($this->connect, $sql);

        if ($result) {
            return true;
        }
        return false;
    }

    public function deletePlan($id)
    {
        $sql = "DELETE FROM tbl_plans WHERE id=$id";
        $result = mysqli_query($this->connect, $sql);

        if ($result) {
            return true;
        }
        return false;
    }
}
?>