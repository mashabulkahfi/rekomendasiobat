<html>

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

<?php
    session_start();
    $gejala=$_SESSION["penyakit"];
    $kontra=$_POST['daftar_kontra'];
    echo "List obat yang bisa diberikan :";
    ?> <br>
    <?php
    if(($gejala=="alergi rinitis") and ($kontra=="tidak ada")) {
        echo "1. Cetrizine";
    }
    elseif (($gejala=="asthma") and ($kontra=="tidak ada")){
        echo "1. Singulair" ;?> <br><?php
        echo "2. Montelukast";?> <br><?php
        echo "3. Dulera";?> <br><?php
        echo "4. Prednisone";?> <br><?php
    }
    elseif (($gejala=="asthma") and ($kontra=="infeksi jamur sistemik")){
        echo "1. Singulair" ;?> <br><?php
        echo "2. Montelukast";?> <br><?php
        echo "3. Dulera";?> <br><?php
    }
    elseif (($gejala=="asthma") and ($kontra=="sensitif mometasone furoate")){
        echo "1. Singulair" ;?> <br><?php
        echo "2. Montelukast";?> <br><?php
        echo "3. Prednisone";?> <br><?php
    }
    elseif (($gejala=="asthma") and ($kontra=="sensitif ormoterol furmarate")){
        echo "1. Singulair" ;?> <br><?php
        echo "2. Montelukast";?> <br><?php
        echo "3. Prednisone";?> <br><?php
    }
    elseif (($gejala=="asthma akut") and ($kontra=="tidak ada")){
        echo "1. Singulair" ;?> <br><?php
        echo "2. Montelukast";?> <br><?php
        echo "3. Prednisone";?> <br><?php
    }
    elseif (($gejala=="kanker") and ($kontra=="tidak ada")){
        echo "1. Carboplatin" ;?> <br><?php
        echo "2. Adriamycin";?> <br><?php
    }
    elseif (($gejala=="kanker") and ($kontra=="sensitif doxorubicin")){
        echo "1. Carboplatin" ;?> <br><?php
    }
    elseif (($gejala=="kanker") and ($kontra=="alergi cisplatin")){
        echo "1. Adriamycin" ;?> <br><?php
    }
    elseif (($gejala=="kanker") and ($kontra=="alergi platinum")){
        echo "1. Adriamycin" ;?> <br><?php
    }
    elseif (($gejala=="kanker") and ($kontra=="depresi sumsum tulang")){
        echo "1. Adriamycin" ;?> <br><?php
    }
    elseif (($gejala=="kolesterol") and ($kontra=="tidak ada")){
        echo "1. Simvastatin" ;?> <br><?php
        echo "2. Atorvastatin";?> <br><?php
    }
    elseif (($gejala=="kolesterol") and ($kontra=="ibu hamil")){
        echo "1. Simvastatin" ;?> <br><?php
    }
    elseif (($gejala=="kolesterol") and ($kontra=="ibu menyusui")){
        echo "1. Simvastatin" ;?> <br><?php
    }
    elseif (($gejala=="kolesterol") and ($kontra=="penyakit hati aktif")){
        echo "1. Simvastatin" ;?> <br><?php
    }
    elseif (($gejala=="kolesterol") and ($kontra=="gangguan hati")){
        echo "1. Atorvastatin" ;?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="tidak ada")){
        echo "1. Tramadol" ;?> <br><?php
        echo "2. Ibuprofen";?> <br><?php
        echo "3. Acetaminophen";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="asma bronkial akut")){
        echo "1. Acetaminophen" ;?> <br><?php
        echo "2. Ibuprofen";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="depresi penapasan")){
        echo "1. Acetaminophen" ;?> <br><?php
        echo "2. Ibuprofen";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="penyakit hati")){
        echo "1. Acetaminophen" ;?> <br><?php
        echo "2. Tramadol";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="radang usus")){
        echo "1. Acetaminophen" ;?> <br><?php
        echo "2. Tramadol";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="sulit bernafas")){
        echo "1. Ibuprofen" ;?> <br><?php
        echo "2. Tramadol";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="tukak lambung")){
        echo "1. Acetaminophen" ;?> <br><?php
        echo "2. Tramadol";?> <br><?php
    }
    elseif (($gejala=="nyeri") and ($kontra=="umur < 12")){
        echo "1. Acetaminophen" ;?> <br><?php
        echo "2. Ibuprofen";?> <br><?php
    }
    elseif (($gejala=="eczema") and ($kontra=="tidak ada")){
        echo "1. Memetazone" ;?> <br><?php
        echo "2. Elidel";?> <br><?php
    }
    elseif (($gejala=="eczema") and ($kontra=="sensitif pimecrolimus")){
        echo "1. Memetazone" ;?> <br><?php
    }
    elseif (($gejala=="eczema mulut") and ($kontra=="tidak ada")){
        echo "1. Triamcinolone" ;?> <br><?php
    }
    elseif (($gejala=="eczema tenggorokan") and ($kontra=="tidak ada")){
        echo "1. Triamcinolone" ;?> <br><?php
    }
    elseif (($gejala=="diabetes") and ($kontra=="tidak ada")){
        echo "1. Metformin" ;?> <br><?php
        echo "2. Januvia";?> <br><?php
        echo "3. Victoza";?> <br><?php
    }
    elseif (($gejala=="diabetes") and ($kontra=="asidosis metabolik akut")){
        echo "1. Victoza" ;?> <br><?php
        echo "2. Januvia";?> <br><?php
    }
    elseif (($gejala=="diabetes") and ($kontra=="disfungsi ginjal berat")){
        echo "1. Victoza" ;?> <br><?php
        echo "2. Januvia";?> <br><?php
    }
    elseif (($gejala=="diabetes") and ($kontra=="MTC")){
        echo "1. Metformin" ;?> <br><?php
        echo "2. Januvia";?> <br><?php
    }
    elseif (($gejala=="diabetes") and ($kontra=="MEN 2")){
        echo "1. Metformin" ;?> <br><?php
        echo "2. Januvia";?> <br><?php
    }
    elseif (($gejala=="diabetes") and ($kontra=="sensitif sitagliptin")){
        echo "1. Metformin" ;?> <br><?php
        echo "2. Victoza";?> <br><?php
    }

?>
</html>