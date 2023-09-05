<?php
//class dbController
class dbController
{
    //Property private
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'sekolah2';
    private $koneksi;

    //contruct
    public function __construct()
    {
        $this->koneksi = $this->koneksiDB();
    }

    //method koneksiDB
    public function koneksiDB()
    {
        $koneksi = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $koneksi;
    }

    public function getALL($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        return $data;
    }

    public function getITEM($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function rowCount($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        $count = mysqli_num_rows($result);
        return $count;
    }

    public function runSQL($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
    }

    public function pesan($text = '')
    {
        echo $text;
    }
}