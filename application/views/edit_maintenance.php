<td align="center"><h1>Form Edit Data</h1></td>

<?php 
    foreach ($tampil as $data) {
?>

    <form action="" method="POST">
        <div class="form-group">
            <p> Kode Maintenance :<input type="text" name="Kd_Maintenance" class="form-control" value="<?php echo $data['Kd_Maintenance']?>" disabled="disabled"/></p>
        </div>
        
        <div class="form-group">
            <p> Tanggal Perbaikan :<input type="text" name="Tgl_Perbaikan" class="form-control" value="<?php echo $data['Tgl_Perbaikan'] ?>"/></p>
        </div>
        
        <div class="form-group">
            <p> Kode Alat :<input type="text" name="Kd_Alat" class="form-control" value="<?php echo $data['Kd_Alat'] ?>" disabled="disabled"/></p>
        </div>
        
        
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="save" value="Save" class="btn btn-success"/>
        </div>
    </form>

    <?php
    }
?>
