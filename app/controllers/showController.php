<?php
    class ShowController{
        public function show(){
            $show = new Show();
            if(mysqli_num_rows($show->show())!=0){
                foreach($show->show() as $row):
?>  
                    <a href="detail.php?id=<?= $row['id'] ?>">
                        <div class="info">
                            <p>Nama : <?= $row['name']; ?></p>
                        </div>
                    </a>
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