<?php
if(!$_GET['address']){
  header("Location: home.php");
}
if(!$_GET['name']){
  header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  meta tags -->
    <title>Survey Covid19</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <style>
      body {
        background: gray;
      }

      #section-2 {
      }
    </style>
  </head>
  <body>
  <header class="major">
      </header>
    <section id="section-1">
      <img src="images/batuk.jpg" class="img-fluid" alt="Responsive image" style="width: 100% !important" />
    </section>
    <section
      id="section-2"
      style="
        z-index: 1;
        margin-top: -30rem;
        position: absolute;
        width: 100%;
      "
    >
        <br />
        <br />
        <div class="card" style="margin-top: 5rem;">
          <div class="card-body">
            <form id="form-submit">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Ya</th>
                    <th scope="col">Tidak</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <th scope="col">POTENSI TERTULAR DI LUAR RUMAH :</th>
                      <td></td>
                      <td></td>
                    </td>
                  </tr>
                  <tr></tr>
                  <tr>
                    <td scope="row">
                      Saya Pergi Keluar Rumah
                    </td>
                    <td><input type="radio" required value="yes" name="p1" /></td>
                    <td><input type="radio" required value="no" name="p1" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya Menggunakan Transportasi Umum : online,angkot ,bus ,taksi ,kereta api
                    </td>
                    <td><input type="radio" required value="yes" name="p2" /></td>
                    <td><input type="radio" required value="no" name="p2" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak memakai masker pada saat berkumpul dengan orang lain.
                    </td>
                    <td><input type="radio" required value="yes" name="p3" /></td>
                    <td><input type="radio" required value="no" name="p3" /></td>
                  </tr>
                  <tr>
                  <tr>
                    <td scope="row">
                      Saya berjabat tangan dengan orang lain
                    </td>
                    <td><input type="radio" required value="yes" name="p10" /></td>
                    <td><input type="radio" required value="no" name="p10" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak membersihkan tangan dengan handsanitizer / tissue basah sebelum pegang kemudi mobil/motor.
                    </td>
                    <td><input type="radio" required value="yes" name="p11" /></td>
                    <td><input type="radio" required value="no" name="p11" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya menyentuh benda / uang yang juga disentuh orang lain.
                    </td>
                    <td><input type="radio" required value="yes" name="p12" /></td>
                    <td><input type="radio" required value="no" name="p12" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah
                    </td>
                    <td><input type="radio" required value="yes" name="p13" /></td>
                    <td><input type="radio" required value="no" name="p13" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya makan diluar rumah
                    </td>
                    <td><input type="radio" required value="yes" name="p6" /></td>
                    <td><input type="radio" required value="no" name="p6" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                    Saya tidak minum air hangat & cuci tangan dengan sabun setelah tiba di tujuan.
                    </td>
                    <td><input type="radio" required value="yes" name="p14" /></td>
                    <td><input type="radio" required value="no" name="p14" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya berada di wilayah kelurahan tempat pasien tertular.
                    </td>
                    <td><input type="radio" required value="yes" name="p15" /></td>
                    <td><input type="radio" required value="no" name="p15" /></td>
                  </tr>
                  <tr>
                    <th scope="col">POTENSI TERTULAR DIDALAM RUMAH :</th>
                    </td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak memasang handsanitizer didepan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah
                    </td>
                    <td><input type="radio" required value="yes" name="p16" /></td>
                    <td><input type="radio" required value="no" name="p16" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak mencuci tangan dengan sabun setelah tiba dirumah
                    </td>
                    <td><input type="radio" required value="yes" name="p17" /></td>
                    <td><input type="radio" required value="no" name="p17" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak menyediakan : tissue basah/antiseptic,masker,sabun antiseptic bagi keluarga dirumah
                    </td>
                    <td><input type="radio" required value="yes" name="p18" /></td>
                    <td><input type="radio" required value="no" name="p18" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak segera merendam baju & celana bekas pakai diluar rumah kedalam air panas/sabun.
                    </td>
                    <td><input type="radio" required value="yes" name="p19" /></td>
                    <td><input type="radio" required value="no" name="p19" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak segera mandi keramas setelah saya tiba dirumah.
                    </td>
                    <td><input type="radio" required value="yes" name="p20" /></td>
                    <td><input type="radio" required value="no" name="p20" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah.
                    </td>
                    <td><input type="radio" required value="yes" name="p21" /></td>
                    <td><input type="radio" required value="no" name="p21" /></td>
                  </tr>
                  <tr>
                      <th scope="col">DAYA TAHAN TUBUH (IMUNITASI):</th>
                    </td>
                  <td></td>
                  <td></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya dalam sehari tidak kena cahaya matahari minimal 15 menit
                    </td>
                    <td><input type="radio" required value="yes" name="p22" /></td>
                    <td><input type="radio" required value="no" name="p22" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya tidak jalan kaki / berolah raga minimal 10 menit dalam sehari 
                    </td>
                    <td><input type="radio" required value="yes" name="p23" /></td>
                    <td><input type="radio" required value="no" name="p23" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya jarang minum vitamin C & E, dan kurang tidur
                    </td>
                    <td><input type="radio" required value="yes" name="p24" /></td>
                    <td><input type="radio" required value="no" name="p24" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                    Usia saya diatas 60 tahun
                    </td>
                    <td><input type="radio" required value="yes" name="p25" /></td>
                    <td><input type="radio" required value="no" name="p25" /></td>
                  </tr>
                  <tr>
                    <td scope="row">
                      Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik
                    </td>
                    <td><input type="radio" required value="yes" name="p26" /></td>
                    <td><input type="radio" required value="no" name="p26" /></td>
                  </tr>
                  <!-- <tr>
                      <th scope="col">TOTAL JAWABAN YA : <b id="nilaiID"></b></th>
                    </td>
                    <td></td>
                    <td></td>
                  </tr> -->
                </tbody>
              </table>
              <input type="hidden" name="name" id="name" value="<?php echo $_GET['name']?>">
              <input type="hidden" name="address" id="address" value="<?php echo $_GET['address']?>">
              <button type="submit" id="insertID" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
        <br />
        <br />
    </section>
    <!-- Modal -->
    <?php include 'modal.php'; ?>
    <!-- End Modal -->
    <br />
    <br />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script>
      $('#form-submit').on("submit", function(event){  
        event.preventDefault();  
          $.ajax({  
            url:"submit.php",  
            method:"POST",  
            data:$('#form-submit').serialize(),  
            success:function(data){ 
              console.log(data);
              if(data >= 15 && data <= 21) {
                $('#modalNilaiID').modal("show")
                $('#nameID').html("Nama : "+$('#name').val())
                $('#totalID').html("Point : "+data)
                $('#nilaiID').html("Status : Resiko Tinggi Terkena Virus Corona")
              } else if(data >= 8 && data <= 14) {
                $('#modalNilaiID').modal("show")
                $('#nameID').html("Nama : "+$('#name').val())
                $('#totalID').html("Point : "+data)
                $('#nilaiID').html("Status : Resiko Sedang Terkena Virus Corona")
              } else if(data >= 0 && data <= 7) {
                $('#modalNilaiID').modal("show")
                $('#nameID').html("Nama : "+$('#name').val())
                $('#totalID').html("Point : "+data)
                $('#nilaiID').html("Status : Resiko Rendah Terkena Virus Corona")
              }
            }  
          });  
      });

      $('#modalNilaiID').on('hidden.bs.modal', function () {
        window.location = 'home.php';
      })
    </script>
  </body>
</html>
