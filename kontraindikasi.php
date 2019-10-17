<html>

<?php
    session_start();
    $penyakit=$_POST['daftar_penyakit'];
    $_SESSION["penyakit"]= $penyakit;
    
    if($penyakit=="alergi rinitis") {
         ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="tidak ada">Tidak ada</option>
                </select>

                <input type="submit" name="submit" value="Submit">

            </form>
    <?php ; }
    elseif($penyakit=="asthma" ){
        ?>

        <nav>
            <div id="logo-img">
              <a href="#">
                <img src="src/drugs.png" alt="Rekomendasi Obat logo">
              </a>
            </div>
        </nav>     
        <div id="banner">
            <h1>Rekomendasi Obat</h1>
        </div>
        <div id="pilihan">
            <h2>Apakah ada penyakit lain yang diidap?</h2>
            <form action="listobat.php" method="POST">
                    <select name="daftar_kontra">
                        <option value="infeksi jamur sistemik">Infeksi Jamur Sistemik</option>
                        <option value="sensitif mometasone furoate">Senitif Mometasone Furoate</option>
                        <option value="sensitif ormoterol fumarate">Sensitif Ormoterol Fumurate</option>
                        <option value="tidak ada">Tidak ada</option>

                    </select>

                    <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    <?php ; }
    elseif($penyakit=="asthma akut"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="kanker"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="alergi cisplatin">Alergi Cisplatin</option>
                    <option value="alergi platinum">Alergi Platinum</option>
                    <option value="depresi sumsum tulang">Depresi Sumsum Tulang</option>
                    <option value="sensitif doxorubicin">Sensitif Doxorubicin</option>
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="kolesterol"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="gangguan hati">Gangguan Hati</option>
                    <option value="ibu hamil">Ibu Hamil</option>
                    <option value="ibu menyusui">Ibu Menyusui</option>
                    <option value="penyakit hati aktif">Penyakit Hati Aktif</option>
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="nyeri"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="asma bronkial akut">Asma Bronkial Akut</option>
                    <option value="depresi pernapasan">Depresi Pernapasan</option>
                    <option value="penyakit hati">Penyakit Hati</option>
                    <option value="radang usus">Radang Usus</option>
                    <option value="sulit bernafas">Sulit Bernafas</option>
                    <option value="tukak lambung">Tukak Lambung</option>
                    <option value="umur < 12">Umur < 12</option>
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="eczema"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="sensitif pimecrolimus">Sensitif Pimecrolimus</option>
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="eczema mulut"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="eczema tenggorokan"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ; }
    elseif($penyakit=="diabetes"){
        ?>
        <form action="listobat.php" method="POST">
                <select name="daftar_kontra">
                    <option value="asidosis metabolik akut">Asidosis Metabolik Akut</option>
                    <option value="disfungsi ginjal berat">Disfungsi Ginjal Berat</option>
                    <option value="MTC">Medullary Thyroid Carcinoma (MTC)</option>
                    <option value="MEN 2">Multiple Endocrine Neoplasia Syndrome type 2</option>
                    <option value="sensitif sitagliptin">Sensitif Sitagliptin</option>
                    <option value="tidak ada">Tidak ada</option>
                </select>
                <input type="submit" name="submit" value="Submit">
        </form>
    <?php ;}
?>
</html>