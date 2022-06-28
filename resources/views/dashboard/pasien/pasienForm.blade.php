@extends('dashboard.base')

@section('content')

  <div class="container-fluid">
    <div class="fade-in">
      <div class="row">
        <div class="col-12 col-sm-12">

          {{-- FORM SCREENING COVID --}}
          <div class="card">
            <div class="card-header">Formulir <strong>Screening Covid</strong></div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label><strong>1.</strong> Dalam 14 hari terakhir apakah kontak dengan orang yang terkonfirmasi positif COVID-19?</label>
                    <div class="form-check">
                      <input class="form-check-input" id="ya" type="radio" value="ya" name="kontak_covid">
                      <label class="form-check-label" for="ya">Ya</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="tidak" type="radio" value="tidak" name="kontak_covid">
                      <label class="form-check-label" for="tidak">Tidak</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="kontak_erat"><strong>2.</strong> Dalam 14 hari terakhir kontak erat dengan siapa saja?</label>
                    <input class="form-control" id="kontak_erat" type="text" placeholder="Silahkan diisi">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label><strong>3.</strong> Apakah anda tinggal di daerah zona merah?</label>
                    <div class="form-check">
                      <input class="form-check-input" id="ya" type="radio" value="ya" name="zona_merah">
                      <label class="form-check-label" for="ya">Ya</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="tidak" type="radio" value="tidak" name="zona_merah">
                      <label class="form-check-label" for="tidak">Tidak</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label><strong>4.</strong> Apakah di tempat tinggal anda ada yang terkonfirmasi positif COVID-19?</label>
                    <div class="form-check">
                      <input class="form-check-input" id="ya" type="radio" value="ya" name="positif_covid">
                      <label class="form-check-label" for="ya">Ya</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="tidak" type="radio" value="tidak" name="positif_covid">
                      <label class="form-check-label" for="tidak">Tidak</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="riwayat_vaksin"><strong>5.</strong> Riwayat Vaksin</label>
                    <input class="form-control" id="riwayat_vaksin" type="text" placeholder="Silahkan diisi">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row mb-0">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="riwayat_penyakit"><strong>6.</strong> Riwayat penyakit saat ini</label>
                    <input class="form-control" id="riwayat_penyakit" type="text" placeholder="Silahkan diisi">
                  </div>
                </div>
              </div>
              <!-- /.row-->
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12">
          {{-- FORM KELUHAN --}}
          <div class="card">
            <div class="card-header">Formulir <strong>Keluhan</strong></div>
            <div class="card-body">
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="keluhan_utama"><strong>1.</strong> Keluhan utama</label>
                    <textarea style="resize: none;" rows="3" class="form-control" id="keluhan_utama" type="text" placeholder="Silahkan diisi"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label><strong>2.</strong> Gejala yang muncul saat ini</label>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="demam" type="checkbox" value="demam">
                          <label class="form-check-label" for="demam">Demam</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="rasa_lelah" type="checkbox" value="rasa_lelah">
                          <label class="form-check-label" for="rasa_lelah">Rasa Lelah</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="batuk_kering" type="checkbox" value="batuk_kering">
                          <label class="form-check-label" for="batuk_kering">Batuk Kering</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="rasa_nyeri" type="checkbox" value="rasa_nyeri">
                          <label class="form-check-label" for="rasa_nyeri">Rasa Nyeri</label>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="hidung_tersumbat" type="checkbox" value="hidung_tersumbat">
                          <label class="form-check-label" for="hidung_tersumbat">Hidung Tersumbat</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="pilek" type="checkbox" value="pilek">
                          <label class="form-check-label" for="pilek">Pilek</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="nyeri_kepala" type="checkbox" value="nyeri_kepala">
                          <label class="form-check-label" for="nyeri_kepala">Nyeri Kepala</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="konjungtivitas" type="checkbox" value="konjungtivitas">
                          <label class="form-check-label" for="konjungtivitas">Konjungtivitas</label>
                        </div>
                      </div>

                      <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="sakit_tenggorokan" type="checkbox" value="sakit_tenggorokan">
                          <label class="form-check-label" for="sakit_tenggorokan">Sakit Tenggorokan</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="diare" type="checkbox" value="diare">
                          <label class="form-check-label" for="diare">Diare</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="hilang_penciuman" type="checkbox" value="hilang_penciuman">
                          <label class="form-check-label" for="hilang_penciuman">Hilang Penciuman</label>
                        </div>
                        <div class="form-check checkbox">
                          <input class="form-check-input" id="ruam_kulit" type="checkbox" value="ruam_kulit">
                          <label class="form-check-label" for="ruam_kulit">Ruam Kulit</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <hr class="mt-0">

              <strong class="d-block mb-3">Kesehatan Jiwa dan Dukungan Psikologis</strong>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="perasaan"><strong>3.</strong> Bagaimana perasaan anda saat ini?</label>
                    <textarea style="resize: none;" rows="3" class="form-control" id="perasaan" type="text" placeholder="Silahkan diisi"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="pemenuhan_kebutuhan"><strong>4.</strong> Bagaimana pemenuhan kebutuhan sehari-hari anda saat menjalani isolasi mandiri? </label>
                    <textarea style="resize: none;" rows="3" class="form-control" id="pemenuhan_kebutuhan" type="text" placeholder="Silahkan diisi"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <hr class="mt-0">

              <strong class="d-block mb-3">Aspek Budaya</strong>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="pandangan_anda"><strong>5.</strong> Bagaimana pandangan anda mengenai COVID-19?</label>
                    <textarea style="resize: none;" rows="3" class="form-control" id="pandangan_anda" type="text" placeholder="Silahkan diisi"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="pandangan_orang"><strong>6.</strong> Bagaimana pandangan orang disekitar / lingkungan anda mengenai COVID-19?</label>
                    <textarea style="resize: none;" rows="3" class="form-control" id="pandangan_orang" type="text" placeholder="Silahkan diisi"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <hr class="mt-0">

              <strong class="d-block mb-3">Pemeriksaan Fisik</strong>
              <div class="row">
                <div class="col-lg-6 col-xs-12">
                  <div class="form-group">
                    <label for="suhu"><strong>7.</strong> Suhu</label>
                    <input class="form-control" id="suhu" type="number" placeholder="Silahkan diisi">
                  </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                  <div class="form-group">
                    <label for="saturasi_oksigen"><strong>8.</strong> Saturasi Oksigen</label>
                    <input class="form-control" id="saturasi_oksigen" type="number" placeholder="Silahkan diisi">
                  </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                  <div class="form-group">
                    <label for="hr"><strong>9.</strong> HR <small> (denyut jantung dalam 1 menit) </small></label>
                    <input class="form-control" id="hr" type="number" placeholder="Silahkan diisi">
                  </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                  <div class="form-group">
                    <label for="rr"><strong>10.</strong> RR <small> (napas dalam 1 menit) </small></label>
                    <input class="form-control" id="rr" type="number" placeholder="Silahkan diisi">
                  </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                  <div class="form-group">
                    <label for="tekanan_darah"><strong>11.</strong> Tekanan Darah</label>
                    <input class="form-control" id="tekanan_darah" type="number" placeholder="Silahkan diisi">
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <hr class="mt-0">

              <strong class="d-block mb-3">Pemeriksaan Penunjang</strong>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="hasil_swab"><strong>12.</strong> Hasil Lab SWAB</label>
                    <div>
                      <input id="hasil_swab" type="file" name="hasil_swab">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="hasil_lab"><strong>13.</strong> Hasil Lab</label>
                    <div>
                      <input id="hasil_lab" type="file" name="hasil_lab">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label for="hasil_radiologi"><strong>14.</strong> Hasil Radiologi</label>
                    <div>
                      <input id="hasil_radiologi" type="file" name="hasil_radiologi">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.row-->

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection

@section('javascript')

@endsection
