<div class="box">
    <!-- /.box-header -->
    <div class="box-body">
        <form action="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="namabarang">Nama Barang</label>
                        <input name="nama" type="text" class="form-control" id="namabarang" placeholder="Masukan Nama Barang ..">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pilih Kategori</label>
                        <select onchange="getSub()" name="kategori" class="kategori form-control select2" style="width: 100%;">
                            <option>-- Pilih Kategori --</option>
                            <?php foreach ($this->db->get('kategori')->result() as $key) : ?>
                                <option value="<?= $key->id_kategori ?>"><?= $key->nama_kategori ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="berat">Berat Barang (Gram)</label>
                        <input name="berat" type="text" class="form-control" id="berat" placeholder="Berat Barang Gram ..">
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                        <label>Pilih Sub Kategori</label>
                        <select name="kategori" id="sub" class="form-control select2" style="width: 100%;">
                            <option>-- Pilih Sub Kategori --</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function getSub(){
        $.post('<?=base_url()?>WebApis/getSub', 'Kategori='+$('.kategori').val(), function(data){
            try{
                data = JSON.parse(data);
                i = 0;
                let sub = "";

                if (data.status == 200){
                    while(i < data.sub_kategori.length){
                        sub += `<option value="${data.sub_kategori[i].id_sub_kategori}">${data.sub_kategori[i].nama_sub_kategori}</option>\n`;
                        i++;
                    }
                }
                
                document.getElementById('sub').innerHTML = sub;
            }catch(e){
                console.log("Cannot access data!");
            }
        })
    }
</script>