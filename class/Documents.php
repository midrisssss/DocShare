<?php
class Documents extends Connection
{
    // d = document
    private $d_id;
    private $d_title;
    private $d_author;
    private $d_description;
    private $d_read;
    private $d_date;
    private $d_status;
    private $d_img;
    private $d_category;
    private $u_id;
    private $d_page;

    public function getAllDocuments() //method mengambil semua data documents
    {
        $sql = "SELECT * FROM tbl_document";
        $result = mysqli_query($this->connect, $sql);

        $documents = array(); // variabel yang akan mengembalikan data array assoc document
        /** Contoh return data document 
         *  $documents = array(
         *  array('d_id' => 2323, 'd_title' => 'Siksa Neraka Season 2', dan lain-lain),
         *  array('d_id' => 2323, 'd_title' => 'Siksa Neraka Season 2', dan lain-lain),
         *  -- array document yang lain nya --
         *  );
         * 
         *  NOTE: didalam code ini dalam penulisan variable ada kemiripan tapi berbeda,
         *  contoh : $document (var yang menyimpan 1 data saja) dan $documents (menyimpan banyak data biasasnya berupa array)
         * 
         *  Happy Coding!
         */
        while ($data = mysqli_fetch_assoc($result)) {
            $arr = array(
                "d_id" => $data["d_id"],
                "d_title" => $data["d_title"],
                "d_author" => $data["d_author"],
                "d_description" => $data["d_description"],
                "d_read" => $data["d_read"],
                "d_date" => $data["d_date"],
                "d_status" => $data["d_status"],
                "d_img" => $data["d_img"],
                "d_category" => $data["d_category"],
                "u_id" => $data["u_id"],
                "d_page" => $data["d_page"],
            );
            array_push($documents, $arr);
        }
        return $documents;
    }

    public function getByCategory($c) // c = category, Method buat ngambil data berdasarkan suatu category
    {
        $sql = "SELECT * FROM tbl_document WHERE d_category='$c' ORDER BY d_read DESC";
        $result = mysqli_query($this->connect, $sql);

        $documents = array();
        while ($data = mysqli_fetch_assoc($result)) {
            $arr = array(
                "d_id" => $data["d_id"],
                "d_title" => $data["d_title"],
                "d_author" => $data["d_author"],
                "d_description" => $data["d_description"],
                "d_read" => $data["d_read"],
                "d_date" => $data["d_date"],
                "d_status" => $data["d_status"],
                "d_img" => $data["d_img"],
                "d_category" => $data["d_category"],
                "u_id" => $data["u_id"],
                "d_page" => $data["d_page"],
            );
            array_push($documents, $arr);
        }
        return $documents;
    }

    public function getCategory() // Method buat ngambil data category, contoh ['biolgy', 'kimia', 'fisika']
    {
        $sql = "SELECT d_category FROM tbl_document GROUP BY d_category";
        $result = mysqli_query($this->connect, $sql);

        $category = array();
        while ($data = mysqli_fetch_assoc($result)) {
            array_push($category, $data["d_category"]);
        }
        return $category;
    }

    public function getByPopular() // method buat ngambil data berdasarkan jumlah kepopuleran(jumlah view)
    {
        $sql = "SELECT * FROM tbl_document ORDER BY d_read DESC";
        $result = mysqli_query($this->connect, $sql);

        $documents = array();
        while ($data = mysqli_fetch_assoc($result)) {
            $arr = array(
                "d_id" => $data["d_id"],
                "d_title" => $data["d_title"],
                "d_author" => $data["d_author"],
                "d_description" => $data["d_description"],
                "d_read" => $data["d_read"],
                "d_date" => $data["d_date"],
                "d_status" => $data["d_status"],
                "d_img" => $data["d_img"],
                "d_category" => $data["d_category"],
                "u_id" => $data["u_id"],
                "d_page" => $data["d_page"],
            );
            array_push($documents, $arr);
        }
        return $documents;
    }

    public function createCardsDocuments($documents, $length = 10) // method buat nampilin data berupa cards, menerima parameter array documents dan jumlah card/data yang di inginkan
    {
        $cards = "";
        $i = 0;
        while ($i < $length && $i < count($documents)) {
            $card = '<li class="flex-none grow w-36 snap-start rounded-xl bg-white dark:bg-black dark:text-white">
                        <a href="./index.php" class="flex flex-column  flex-wrap justify-start items-center w-full h-full p-2 pb-3 border-4 border-transparent rounded-xl hover:border-blue shadow-xl dark:shadow-sm dark:shadow-white">
                            <img src="' . $documents[$i]["d_img"] . '" alt="" title ="' . $documents[$i]["d_title"] . '" class="flex-none h-36 rounded-lg w-full overflow-hidden bg-cover">
                                <h4 class="flex-none w-full h-1/5 font-bold mt-2">
                                    ' . $documents[$i]["d_title"] . '
                                </h4>
                                <p class="text-sm">Contributed by <span class="font-semibold"> ' . $documents[$i]["d_author"] . '</span>
                                </p>
                                <p class="mt-2">
                                    <i class="fi fi-sr-eye"></i> <span class="ml-2 font-semibold"> ' . $documents[$i]["d_read"] . '</span> views
                                </p>
                        </a>
                    </li>';
            $cards .= $card;
            $i++;
        }
        return $cards;
    }
}
?>