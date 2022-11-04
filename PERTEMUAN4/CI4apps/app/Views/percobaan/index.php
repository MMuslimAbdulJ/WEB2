<?php
$query = $this->db->get('mahasiswa');
foreach($query->result() as $row) {
    echo $row->nama;
    echo $row->nim;
    echo $row->fakultas;
    echo $row->jurusan;
}