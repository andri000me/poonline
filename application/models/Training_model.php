<?php
class Training_model extends CI_Model{
    
    function get_all_submit_public(){
        $query = $this->db->query("SELECT * FROM public_training where active='0'");
        return $query->result();
    }

    function get_all_savedraft_public(){
        $query = $this->db->query("SELECT * FROM public_training where active='1'");
        return $query->result();
    }

    function add_inhouse_training(
        $pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang, $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, $metode_pemilihan_vendor, $jumlah_peserta, $catatan, $active, $tb_pelatihan, $kurs_pelatihan, $konversi_pelatihan, $tb_akomodasi, $kurs_akomodasi, $konversi_akomodasi, $tb_sppd, $kurs_sppd, $konversi_sppd
    ){
        $data = array(
            'pengirim_ro' => $pengirim_ro,
            'nomor_ro' => $nomor_ro, 
            'judul' => $judul,
            'kategori_pelatihan' => $kategori_pelatihan,
            'kompetensi_bidang' => $kompetensi_bidang,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'provinsi' => $provinsi,
            'kota' => $kota, 
            'tempat' => $tempat, 
            'metode_penyelenggaraan' => $metode_penyelenggaraan,
            'vendor_penyelenggara' => $vendor_penyelenggara,
            'metode_pemilihan_vendor' => $metode_pemilihan_vendor,
            'jumlah_peserta' => $jumlah_peserta, 
            'catatan' => $catatan,
            //'form_usulan' => $form_usulan,
            //'brosur' => $brosur,
            'active' => $active,
            'tb_pelatihan' => $tb_pelatihan,
            'kurs_pelatihan' => $kurs_pelatihan,
            'konversi_pelatihan' => $konversi_pelatihan,
            'tb_akomodasi' => $tb_akomodasi,
            'kurs_akomodasi' => $kurs_akomodasi,
            'konversi_akomodasi' => $konversi_akomodasi,
            'tb_sppd' => $tb_sppd,
            'kurs_sppd' => $kurs_sppd,
            'konversi_sppd' => $konversi_sppd
        );
        $output = $this->db->insert('inhouse_training', $data);
        return $output;
    }
    function get_edit_inhouse_training($id){
       $query=$this->db->query("SELECT * from inhouse_training where id='$id'");
        return $query->result();
    }
    function edit_inhouse_training($id,$pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang, $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, $metode_pemilihan_vendor, $jumlah_peserta, $catatan, $active, $tb_pelatihan, $kurs_pelatihan, $konversi_pelatihan, $tb_akomodasi, $kurs_akomodasi, $konversi_akomodasi, $tb_sppd, $kurs_sppd, $konversi_sppd){
        $data = array(
            'pengirim_ro' => $pengirim_ro,
            'nomor_ro' => $nomor_ro, 
            'judul' => $judul,
            'kategori_pelatihan' => $kategori_pelatihan,
            'kompetensi_bidang' => $kompetensi_bidang,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'provinsi' => $provinsi,
            'kota' => $kota, 
            'tempat' => $tempat, 
            'metode_penyelenggaraan' => $metode_penyelenggaraan,
            'vendor_penyelenggara' => $vendor_penyelenggara,
            'metode_metode_pemilihan_vendor' => $metode_pemilihan_vendor,
            'jumlah_peserta' => $jumlah_peserta, 
            'catatan' => $catatan,
            //'form_usulan' => $form_usulan,
            //'brosur' => $brosur,
            'active' => $active,
            'tb_pelatihan' => $tb_pelatihan,
            'kurs_pelatihan' => $kurs_pelatihan,
            'konversi_pelatihan' => $konversi_pelatihan,
            'tb_akomodasi' => $tb_akomodasi,
            'kurs_akomodasi' => $kurs_akomodasi,
            'konversi_akomodasi' => $konversi_akomodasi,
            'tb_sppd' => $tb_sppd,
            'kurs_sppd' => $kurs_sppd,
            'konversi_sppd' => $konversi_sppd
        );
        $this->db->where('id',$id);
        $output = $this->db->update('inhouse_training',$data);
        return $output;
    }

    function edit_public_training(
        $id, $pengirim_ro, $nomor_ro, $kategori_pelatihan, $judul, $metode_penyelenggaraan, $kompetensi_bidang,
        $tanggal_mulai, $tanggal_selesai, $provinsi, $kota, $tempat, $vendor_penyelenggara, $jumlah_peserta, 
        $catatan, $active
    ){
        $data = array(
            'pengirim_ro' => $pengirim_ro,
            'nomor_ro' => $nomor_ro, 
            'judul_pelatihan' => $judul,
            'kategori_pelatihan' => $kategori_pelatihan,
            'kompetensi_bidang' => $kompetensi_bidang,
            'jenis_kompetensi' => $jenis_kompetensi,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_selesai' => $tanggal_selesai,
            'provinsi' => $provinsi,
            'kota' => $kota, 
            'tempat' => $tempat, 
            'metode_penyelenggaraan' => $metode_penyelenggaraan,
            'vendor_penyelenggara' => $vendor_penyelenggara,
            'metode_pemilihan_vendor' => $pemilihan_vendor,
            'jumlah_peserta' => $jumlah_peserta, 
            'catatan' => $catatan,
            'biaya_pelatihan' => $biaya_pelatihan,
            'biaya_pelatihan_konver' => $biaya_akomodasi_konver,
            'biaya_akomodasi' => $biaya_akomodasi,
            'biaya_akomodasi_konver' => $biaya_akomodasi_konver,
            'biaya_sppd' => $biaya_sppd,
            'baiaya_sppd_konver' => $biaya_sppd_konver,
            //'form_usulan' => $form_usulan,
            //'brosur' => $brosur,
            'active' => $active
        );
        $this->db->where('id', $id);
        $output = $this->db->update('public_training', $data);
        return $output;
    }

    function get_edit_public_training($id){
        $query=$this->db->query("SELECT * FROM public_training WHERE id='$id'");
        return $query->result();
    }
}
