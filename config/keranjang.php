<?php
  if(isset($_POST["beli"])){
    if(isset($_SESSION["keranjang"]))
    	{
    		$obat_array_id = array_column($_SESSION["keranjang"], "id_obat");
    		if(!in_array($_GET["id_obat"], $obat_array_id))
    		{
    			$obat_array = array(
    				'id_obat'		=>	$_GET["id_obat"],
    				'nama_obat'	=>	$_POST["hidden_nama_obat"],
    				'harga'		  =>	$_POST["hidden_harga"],
            'foto_obat'	=>	$_POST["hidden_foto_obat"],
    				'jumlah'		=>	$_POST["jumlah"]
    			);
    			array_push($_SESSION['keranjang'], $obat_array);
          $modal=true;
    		}
    		else
    		{
    			echo "<div class='text-warning text-center small'>Mohon maaf, obat tersebut sudah masuk dalam keranjang</div>";
    		}
    	}
    	else
    	{
        $obat_array = array(
          'id_obat'		=>	$_GET["id_obat"],
          'nama_obat'	=>	$_POST["hidden_nama_obat"],
          'harga'		  =>	$_POST["hidden_harga"],
          'foto_obat'	=>	$_POST["hidden_foto_obat"],
          'jumlah'	 	=>	$_POST["jumlah"]
        );
    		$_SESSION["keranjang"][0] = $obat_array;
        $modal=true;
    	}
    }

    if(isset($_GET["beli"]))
    {
    	if($_GET["beli"] == "hapus")
    	{
    		foreach($_SESSION["keranjang"] as $keys => $values)
    		{
    			if($values["id_obat"] == $_GET["id_obat"])
    			{
    				unset($_SESSION["keranjang"][$keys]);
    				echo '<script>window.location="detailobat.php?id_obat='.$values["id_obat"].'"</script>';
            echo "<div class='text-success text-center small'>Obat telah dihapus dari daftar keranjang</div>";
    			}
    		}
    	}
    }
 ?>
