<html>
    <head>
        <title>Rekomendasi Obat</title>
    

        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Karla|Righteous&display=swap" rel="stylesheet">
    </head>

    <body>   
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
        <main>
            <div id="pilihan">
                <h2>Kamu bisa memasukan penyakit yang terdiagnosa</h2>
                <form action="kontraindikasi.php" method="POST">
                    <select name="daftar_penyakit">
                        <option value="alergi rinitis">Alergi Rinitis</option>
                        <option value="asthma">Asthma</option>
                        <option value="asthma akut">Asthma Akut</option>
                        <option value="kanker">Kanker</option>
                        <option value="kolesterol">Kolesterol</option>
                        <option value="nyeri">Nyeri</option>
                        <option value="eczema">Eczema</option>
                        <option value="eczema mulut">Eczema Mulut</option>
                        <option value="eczema tenggorokan">Eczema Tenggorokan</option>
                        <option value="diabetes">Diabetes</option>
                    </select>

                    <input type="submit" name="submit" value="Submit">

                </form>
                
            </div>
        </main>
    </body>

</html>