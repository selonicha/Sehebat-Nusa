@extends('component.user.navbar')

@section('content')
<div class="explain p-5" style="margin-top:70px !important;margin-left:40px !important;">
    <div class="pb-4">
        <div class="row">
            <div class="fw-bold" style="font-size:2em">Sehebat Nusa</div>
            <div class="fw-semibold"> Apa itu <span class="unique">sehebatnusa.com</span>?</div>
        </div>
        <p style="padding-top:10px;padding-bottom:30px !important;">
            Momentum Idul Adha atau Hari Raya Qurban menjadi momen yang penuh dengan
            nilai-nilai historis <span class="unique-char">pengorbanan</span> dan <span class="unique-char">perjuangan</span> yang dicontohkan oleh Nabi Ibrahim AS.
            dan putranya Nabi Ismail AS. Melalui program <span class="unique">SEHEBAT NUSA (Sebar Hewan
                Qurban Titipan Nusa)</span> diharapkan qurban dapat menjangkau masyarakat di daerah-daerah ekonomi menengah ke bawah di mana daerah tersebut sangat sedikit sekali orang
            yang mampu berqurban. Daerah penyebaran dipilih setelah melakukan survei ke lokasi. Dari
            data yang didapatkan, daerah tersebut masuk ke dalam kriteria yang telah disepakati.
            Sehingga kami berharap program yang kami lakukan ini bisa <span class="unique-char">tepat sasaran</span>
        </p>
        <hr class="" width="" color="var(--primary-color)">
    </div>
    <div class="justify-content-center d-flex align-items-center unique fw-bold" style="font-size:2.5em">Paket Sehebat Qurban</div>
    <div class="row pb-5" data-aos="fade-down-right" data-aos-duration="6000">
        <div class="col-sm-4 justify-content-center d-flex align-items-center fw-semibold">
            <div class="col justify-content-center d-flex align-items-center ">
                <img src="{{asset('asset/image/penyebaran.jpg')}}" style="width:400px;height:400px" class="img-thumbnail" alt="">
            </div>
        </div>
        <div class="col justify-content-center d-flex align-items-center fw-semibold">
            <div class="row">
                <div class="col-12" style="padding-left: 40px;padding-right:40px;">
                    <h3 class="fw-semibold unggul" style="font-size: 1.8em;">Paket Penyaluran Qurban</h3>
                    <h6 style="font-size:1em" class="fw-normal">
                        <ul type="circle">
                            <li>HEBAT 1 (Hewan Qurban Titipan) : Rp. 2.700.000,- (1 ekor domba)</li>
                            <li>HEBAT 2 (Hewan Qurban Titipan) : Rp. 3.500.000,- (1 ekor domba)</li>
                            <li>HEBAT 3 (Hewan Qurban Titipan) : Rp.22.400.000,- (1 ekor sapi)</li>
                            <li>HEBAT 4 (Hewan Qurban Titipan) : Rp. 3.200.000,- (1/7 sapi)</li>
                        </ul>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5" data-aos="fade-down-right" data-aos-duration="6000">
        <div class="col-sm-4 justify-content-center d-flex align-items-center fw-semibold">
            <div class="col justify-content-center d-flex align-items-center ">
                <img src="{{asset('asset/image/penyebaran.jpg')}}" style="width:400px;height:400px" class="img-thumbnail" alt="">
            </div>
        </div>
        <div class="col justify-content-center d-flex align-items-center fw-semibold">
            <div class="row">
                <div class="col-12" style="padding-left: 40px;padding-right:40px;">
                    <h3 class="fw-semibold unggul" style="font-size: 1.8em;">Tasyaqur</h3>
                    <h6 style="font-size:1em" class="fw-normal">
                        Tabungan Syariat Qurban (Tasyaqur) adalah program bagi para Muqorib (orang
                        yang berqurban) untuk memudahkan dalam berqurban dengan cara menabung
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5" data-aos="fade-down-right" data-aos-duration="6000">
        <div class="col-sm-4 justify-content-center d-flex align-items-center fw-semibold">
            <div class="col justify-content-center d-flex align-items-center ">
                <img src="{{asset('asset/image/penyebaran.jpg')}}" style="width:400px;height:400px" class="img-thumbnail" alt="">
            </div>
        </div>
        <div class="col justify-content-center d-flex align-items-center fw-semibold">
            <div class="row">
                <div class="col-12" style="padding-left: 40px;padding-right:40px;">
                    <h3 class="fw-semibold unggul" style="font-size: 1.8em;">Shodaqoh Qurban</h3>
                    <h6 style="font-size:1em" class="fw-normal">
                        Program ini senilai Hewan Qurban utuh atau shodaqah yang tidak dibatasi nilainya.
                    </h6>
                    <h6 style="font-size:1em" class="fw-normal">
                        <dl type="circle">
                            <dt>✓ Shodaqah Qurban yang dimaksud bukan berarti pengganti Hewan Qurban atau patungan</dt>
                            <dd>Untuk membeli Hewan Qurban jika konsumen belum mampu membeli 1 ekor Hewan Qurban, tetapi shodaqah yang dimaksud adalah mengajak untuk memperbanyak shodaqah di bulan Dzulqoidah dan Dzulhijah yang merupakan salah satu dari 4 bulan yang dirahmati Allah.</dd>
                            <dt>✓ Shodaqah Qurban untuk program tebar hewan qurban ini sendiri bisa diperuntukan secara leluasa</dt>
                            <dd>Untuk operasional Penyaluran Hewan Qurban atau diberikan berupa dana langsung kepada Fakir Miskin (Mustahiq) atau juga dibelikan Hewan untuk disembelih dan dibagikan dagingnya kepada Fakir Miskin di momen Idul Qurban (sifatnya shodaqah bukan udhiyah).</dd>
                        </dl>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5" data-aos="fade-down-right" data-aos-duration="6000">
        <div class="col-sm-4 justify-content-center d-flex align-items-center fw-semibold">
            <div class="col justify-content-center d-flex align-items-center ">
                <img src="{{asset('asset/image/iqur.png')}}" style="width:400px;height:400px" class="img-thumbnail" alt="">
            </div>
        </div>
        <div class="col justify-content-center d-flex align-items-center fw-semibold">
            <div class="row">
                <div class="col-12" style="padding-left: 40px;padding-right:40px;">
                    <h3 class="fw-semibold unggul" style="font-size: 1.8em;">I-Qur (Incredible Qurban)</h3>
                    <h6 style="font-size:1em" class="fw-normal">
                        I-Qur adalah program yang membantu penyaluran daging qurban dalam bentuk olahan
                        Kornet/Rendang. Produk ini merupakan optimalisasi pelaksanaan ibadah qurban dengan mengolah dan mengemas daging sapi qurban menjadi daging olahan yang siap dikonsumsi. Produk daging olahan I-Qur mampu menjadi solusi untuk permasalahan pendistribusian daging sapi qurban. Daging sapi olahan SEHEBAT mampu bertahan hingga 2 tahun, sehingga dapat didistribusikan sepanjang tahun. Tentunya daging olahan SEHEBAT dapat langsung diolah dan dinikmati oleh yang berhak menerimanya.
                    </h6>

                </div>
            </div>
        </div>
    </div>
    <div class="row pb-5" data-aos="fade-down-right" data-aos-duration="6000">
        <div class="col-sm-4 justify-content-center d-flex align-items-center fw-semibold">
            <div class="col justify-content-center d-flex align-items-center ">
                <img src="{{asset('asset/image/iqur.png')}}" style="width:400px;height:400px" class="img-thumbnail" alt="">
            </div>
        </div>
        <div class="col justify-content-center d-flex align-items-center fw-semibold">
            <div class="row">
                <div class="col-12" style="padding-left: 40px;padding-right:40px;">
                    <h3 class="fw-semibold unggul" style="font-size: 1.8em;">Qur-E (Qurban Education)</h3>
                    <h6 style="font-size:1em" class="fw-normal">
                        Program ini adalah program edukasi qurban, sosialisasi syariat qurban, bimbingan dan
                        praktik penyembelihan hewan qurban oleh juru sembelih profesional
                    </h6>

                </div>
            </div>
        </div>
    </div>
</div>


@include('component.user.footer')
@endsection