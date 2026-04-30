<?php
    class ShowController{
        public function show(){
            $show = new Show();
            if(mysqli_num_rows($show->show())!=0){
                foreach($show->show() as $row):
?>  
                        <p>Nama : <?= $row['name']; ?></p>
<?php
                endforeach;
            } else {
                echo "Gagal";
            }
        }
    }

    class ujiKompetensi{
        public function kuis(){
            $kuis = new kuis();
            $result = $kuis->kuis();
                while($data = mysqli_fetch_assoc($result)){
                    var_dump($data);
                }
        }
    }

?>