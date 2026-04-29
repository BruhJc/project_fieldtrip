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
?>