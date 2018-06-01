<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $angkutan = $_POST['angkutan'];
        $rusak = $_POST['rusak'];
        $ket = $_POST['ket'];
        $tanggal = $_POST['tanggal'];
        $tanggal = date('Y-m-d', strtotime($tanggal));
        $status ='Belum diperbaiki';
        $eksistensi_file = array('png','jpg');
        $nama = $_FILES['file']['name'];
        $x = explode('.',$nama);
        $eksitensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_temp = $_FILES['file']['tmp_name'];

        if(in_array($eksitensi,$eksistensi_file) == TRUE){
            if($ukuran < 1044070){
                move_uploaded_file($file_temp, 'file/'.$nama);
                $sql ="INSERT INTO kerusakan (NRP_sopir,no_angkutan,kerusakan, keterangan,tanggal, status,file)  VALUES ('$id','$angkutan','$rusak','$ket','$tanggal','$status','$nama')";
                $query = mysqli_query($db,$sql);

                if($query){
                    header('location: pageSopir.php');
                }else{
                    header('location: pageRusak.php?status=gagal');
                }
            }else{
                header('location: pageRusak.php?status=ukuran-terlalu-besar');
            }
        }else{
            header('location: pageRusak.php?status=eksitensi-file-tidak-tepat');
        }
    }

?>