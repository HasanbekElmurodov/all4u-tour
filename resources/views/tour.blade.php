@extends('layouts.app')

@section('css')
@endsection
@section('content')

    <!-- Modal -->
    <div id="recall-modal" class="modal">
        <div class="container-this">
          <div class="close close_modal_span" onclick="closeModal()">&times;</div>
          <form>
            <ul>
              <li>
                <label for="name"
                  ><span
                    >Ismingiz: <span class="required-star">*</span></span
                  ></label
                >
                <input type="text" id="name" name="user_name" />
              </li>
              <li>
                <label for="mail"
                  ><span
                    >Pochta: <span class="required-star">*</span></span
                  ></label
                >
                <input type="email" id="mail" name="user_email" />
              </li>
              <li>
                <label for="phone-number"
                  ><span
                    >Telefon raqam: <span class="required-star">*</span></span
                  ></label
                >
                <input type="text" id="phone-number" name="user_phone_number" />
              </li>
              <li>
                <label for="msg"><span>Xabar</span></label>
                <textarea
                  rows="1"
                  cols="20"
                  aria-valuetext="I Want to travel tp Bukhara "
                ></textarea>
              </li>
              <li>
                <input type="submit" value="Yuborish" />
              </li>
            </ul>
          </form>
        </div>
      </div>
      <!-- Modal End -->

    <!-- Main Section -->
    {{-- <div class="creative_idea"> --}}
        <div class="wrapper">
          <div class="hidde_wrapper">
            <div class="inner_wrapper">
              <button>
                <i class="fa fa-plane plane_animation_icon"></i>
              </button>
            </div>
          </div>
        </div>
      {{-- </div> --}}
      <div class="plane">
        <i class="fas fa-plane"></i>
      </div>
    <div class="containder-fluid">
      <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-md-8 bg-white">
            <div class="tour_name_box">
              <h2 class="tour_name mb-4 mt-4">O'zbekiston klassikasi</h2>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="image_box">
                  <img src="{{asset('/website/assets/img/package-1.jpg')}}" width="100%" />
                </div>
              </div>
              <div class="col-md-8">
                <p>
                  “Classic Uzbekistan” sayyohlik paketi Markaziy Osiyoda
                  joylashgan O‘zbekistonning boy madaniy va tarixiy merosi
                  haqida ajoyib tajribani taqdim etadi. Ushbu tur odatda 8 dan
                  10 kungacha davom etadi va mamlakatning eng mashhur sayyohlik
                  yo'nalishlarini qamrab oladi.
                </p>
              </div>
              <div class="about_cirection col mt-4 mb-4">
                <div class="wrapper">
                  <h5>Tur dasturi:</h5>
                  <div class="directions">
                    <div id="accordion">
                      <div class="accordion">
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >1-kun. Toshkent
                            </span>
                          </div>
                          <div class="accordion__content">
                            Kechki reys bilan Toshkentga yetib kelish.
                            Aeroportda mehmonlarni kutib olish, mehmonxonaga
                            o'tkazish, joylashtirish. Bo'sh vaqt. Mehmonxonada
                            tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >2-kun, Toshkent - Urganch - Xiva (parvoz + 30 km)
                            </span>
                          </div>
                          <div class="accordion__content">
                            Mehmonxonada nonushta. Ekskursiya: <br />
                            • Xasti Imom majmuasi, Chorsu bozori, Toshkent
                            metrosi, Amir Temur maydoni va teatr. Alisher Navoiy
                            (tashqarida), Mustaqillik maydoni, Romanovlar saroyi
                            (tashqarida) Aeroportga o'tish. Urganchga jo'nab
                            ketish. Kelish. Xivaga ko'chirish. Kelish,
                            mehmonxonada joylashtirish. Mehmonxonada tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >3-kun, Xiva
                            </span>
                          </div>
                          <div class="accordion__content">
                            Mehmonxonada nonushta.
                            <br />
                            Ichan qal'aga ekskursiya. Ichan-qal’a shaharchasi
                            bo‘lmish Xiva bag‘riga kirganingizda birinchi tuyg‘u
                            ertakga kirib qolgandek bo‘ladi. Go‘yo Shohirizoda
                            ertaklarining sehrli sahifalaridan tushgan Xiva
                            sizni tor, toshbo‘ronli ko‘chalari, ikki qavatli
                            sopol uylari va hayratlanarli masjidlar, maqbaralar,
                            minoralar va yorqin, rang-barang gumbazlari bilan
                            kutib oladi. Bu yerda, shuningdek, mashhur Xiva
                            gilamlarini xarid qilishingiz yoki yog'ochdan
                            yasalgan suvenirga buyurtma berishingiz mumkin, bu
                            erda hunarmandlar o'zlarining nafis ishlari bilan
                            sizni hayratda qoldiradilar. Qizilqum cho‘li bilan
                            o‘ralgan bu shahar Ipak yo‘li karvonlari
                            yo‘nalishidagi eng muhim dam olish maskanlaridan
                            biri bo‘lgan. Tashrif buyuring:<br />
                            • Muhammad Aminxon madrasasi (1852) – birinchi
                            masjid o‘ng tomonda, Ichan qal’aning bosh darvozasi
                            – Ata Darvoza orqali kiraverishda. Hozirda
                            madrasadan mehmonxona sifatida foydalanilmoqda, bu
                            sayyohlar orasida juda mashhur. <br />
                            • Kalta Minor (1851) - Aminxon madrasasining uzoq
                            burchagida joylashgan. U dastlab musulmon olamidagi
                            eng baland minora sifatida ishlab chiqilgan,
                            diametri 15 m va balandligi 28 m.Ammo Amin Xon
                            vafotidan keyin (1855) loyiha uning vorisi tomonidan
                            bekor qilingan va tugallanmagan holda qolgan. <br />
                            • Juma masjidi (X – XVII asrlar) – masjidning tomini
                            213 ta o‘yilgan ustunlar ushlab turadi. Noyob bino
                            tufayli bu ajoyib akustikaga ega Xivadagi eng salqin
                            joy. <br />
                            • Kunya arki (XVII asr) — maʼmuriy binolari, porox
                            ustaxonasi, sud binosi va oʻziga tegishli masjiddan
                            iborat ichki qalʼa; <br />
                            • Muhammad Rahimxon madrasasi (XIX asr) – me’moriy
                            tuzilishi bilan ajralib turadigan, bir emas, ikkita
                            hovlili madrasa. <br />
                            • Pahlavon Mahmud majmuasi (XIV - XIX asrlar) -
                            Xivadagi noyob koshinlar bilan bezatilgan eng
                            diqqatga sazovor me'moriy yodgorlik. U shoirning
                            xalq qahramoni, tabib va ​​yengilmas polvon Paxlavon
                            Mahmud sharafiga qurilgan. <br />
                            • Islomxo'ja minorasi va madrasasi (1908 - 1910) -
                            balandligi 45 m - Xivadagi eng baland minora va
                            Ichan qal'a panoramasini tomosha qilish uchun ajoyib
                            joy. <br />
                            • Olloqulixon madrasasi va karvonsaroyi (1835) -
                            katta ikki qavatli karvonsaroy va ko'chadan biroz
                            pastroqda o'sha yili qurilgan madrasa. <br />
                            • Tosh Xouli (1825 - 1842) - uchta asosiy binodan
                            iborat: toj kiyish zali, qabulxona va haram.
                            Mehmonxonada tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >4-kun, Xiva – Buxoro (450 km)
                            </span>
                          </div>
                          <div class="accordion__content">
                            <br />
                            Mehmonxonada nonushta. <br />
                            Cho‘l orqali Buxoroga jo‘nab ketish. <br />
                            Yo'lda foto bekati.

                            <br />
                            Buxoroga yetib kelish.
                            <br />
                            Mehmonxonada turar joy. <br />
                            Buxoro – qadimiy shahar sizni sharqiy minoralar
                            bilan o‘ralgan tor ko‘chalari, son-sanoqsiz
                            karvonsaroylari va mahobatli me’moriy inshootlari
                            bilan kutib oladi. Shahar-ertak, ular buni hozirgi
                            vaqtda chaqirishadi. Mehmonxonada tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >5-kun, Buxoro
                            </span>
                          </div>
                          <div class="accordion__content">
                            Mehmonxonada nonushta. Butun kun uchun ekskursiya
                            dasturi: <br />
                            • Somoniylar maqbarasi (IX – X asrlar) – O‘rta
                            Osiyoda birinchi bo‘lib pishiq g‘ishtdan kub
                            shaklida qurilgan, gumbazi yopilgan va g‘ishtning
                            o‘ziga xos geometrik dizayni bilan qurilgan – jahon
                            me’morchiligining durdona asari. <br />
                            • Bolo Hauz masjidi (1712) — sunʼiy suv ombori
                            yaqinidagi mashhur va moʻtabar masjid. <br />
                            • ARK qalʼasi (miloddan avvalgi IV – XIX asr) –
                            oʻrta asrlarda amir saroyi, zarbxona, masjidlar,
                            davlat muassasalari, omborlar, doʻkonlar, qamoqxona
                            va xalq yigʻinlari maydoni boʻlgan butun shahar
                            boʻlgan. <br />
                            • Poykalyan majmuasi (XII—XVI asrlar) — eski Buxoro
                            markazidagi meʼmoriy ansambl — Majidi Kalyan sobori
                            masjidi, Miri Arab madrasasi va Oʻrta Osiyo
                            mintaqasidagi eng baland minora (46 m) — Minori
                            Kalyanni oʻz ichiga oladi. . <br />
                            • Tim Abdullaxon 1577 yilda qurilgan bo‘lib,
                            Afg‘onistondan ipak va jun keltiriladigan Buxorodagi
                            eng nafis savdo zallaridan biri bo‘lgan. <br />
                            • Savdo gumbazlari uchta savdo markazidan iborat:
                            Toki Zargaron (1570) - zargarlar bozori, Toki Telpak
                            Furushon - do'ppi bozori, Toki Sarrafon - sarrof
                            bozori. <br />
                            • Lyabi-Hauz majmuasi (XVI-XVII asrlar) — masjid,
                            Nodir Devon begi madrasasi va karvonsaroydan iborat
                            majmua. Majmua o‘rtasida qari daraxtlar bilan
                            o‘ralgan katta hovuz joylashgan. <br />
                            • Yahudiy ibodatxonasiga tashrif Madrasadagi
                            folklor. Mehmonxonada tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >6-kun, Buxoro – G‘ijduvon – Samarqand (280 km)
                            </span>
                          </div>
                          <div class="accordion__content">
                            Nonushtadan so'ng G'ijduvonga jo'nab ketish. <br />
                            • Narzullayevlar oilasiga tashrif - 7-avlod kulollar
                            sulolasi. Siz keramika ishlab chiqarish jarayoni
                            bilan tanishishingiz va o'z qo'llaringiz bilan
                            mahsulot yaratishga harakat qilishingiz mumkin.
                            Shuningdek, ustaning oilasi bilan yaqindan tanishing
                            va o‘zbek milliy taomlarini tayyorlash bo‘yicha
                            master-klassda qatnashing. Sharq shirinliklari bilan
                            choy ichish. Buxoroga qaytish. Tashrif buyuring:
                            <br />
                            • Sitorai Moxi Xosa (XIX asr) Buxoro amirlarining
                            bir necha avlodining yozgi qarorgohi boʻlib,
                            Buxorodan tashqarida, oʻsha davrdagi mahalliy va
                            Yevropa anʼanalari uygʻunlashgan uslubda qurilgan.
                            Saroy zallari gilamlar va rasmlar bilan bezalgan.
                            Temir yo'l stantsiyasiga o'tkazish. 15:50da
                            Samarqandga poyezdda jo‘nab ketish. 17:20 da yetib
                            kelish. Mehmonxonada turar joy. Registon maydonining
                            tungi panoramasi. Mehmonxonada tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >7-kun, Samarqand
                            </span>
                          </div>
                          <div class="accordion__content">
                            Mehmonxonada nonushta. Samarqand – “Samarqandning
                            go‘zalliklari haqida eshitganlarimning hammasi
                            haqiqat, faqat men tasavvur qilganimdan ham
                            go‘zalroq” – Samarqand haqida Iskandar Zulqarnayn
                            shunday degan edi.Betakror arxitektura ansambllariga
                            ega bu shaharga tashrif buyurib, siz ko'p
                            taassurotlar bilan uzoqlashdi. Butun kun uchun
                            ekskursiya dasturi: <br />
                            • Registon maydoni (XV-XVII asrlar) - uch madrasadan
                            iborat noyob ansambl, eski shaharning markazi va
                            forumlar va festivallar o'tish joyi bo'lgan va
                            hisoblanadi. "Madrasani ko'rgan oy hayratdan
                            barmog'ini tishladi" <br />
                            • Bibixonim masjidi (XIV-XV asrlar) - Temur
                            tomonidan o'sha davrning eng katta masjidi sifatida
                            ishlab chiqilgan loyiha. Masjid 5 yil davomida
                            qurilayotgan edi. "Agar osmon bo'lmaganida uning
                            gumbazi yagona bo'lar edi, agar Somon yo'li
                            bo'lmaganida archa yagona bo'lar edi." <br />
                            • Siyob bozori - Samarqanddagi zamonaviy an'anaviy
                            "sharq" bozori, shunga qaramay, asrlar davomida o'z
                            qiyofasini saqlab, o'zining rang-barangligi, taklif
                            etilayotgan mahsulot va tovarlarning xilma-xilligi
                            bilan sayyohlarni hayratda qoldiradi. <br />
                            • Gur amir maqbarasi (XV asr) – Temuriylar sulolasi
                            dafn etilgan joy. Unutilmas moviy gumbazli noyob
                            me'moriy yodgorlik. O'sha davr jarchilari
                            aytganidek; “Odamlar! Agar osmon yerga tushsa, Gur
                            amir gumbazi uning o‘rnini egallaydi!”. <br />
                            • Shoxi Zinda maqbarasi (XI-XIX asrlar) – “O‘liklar
                            shahri” deb ataladigan joy. Turli xil qurilish
                            vaqtlariga ega 20 dan ortiq noyob binolardan iborat
                            majmua. Bu shahardagi eng qadimiy binolardan biri
                            bo'lib, ziyorat qilish uchun muhim joy hisoblanadi.
                            <br />
                            • "Meros" ipak qog'oz ishlab chiqaruvchi mini-zavod.
                            <br />
                            • “Xudum” gilam fabrikasi ipak gilamlar ishlab
                            chiqarish Mehmonxonada tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >8-kun, Samarqand - Toshkent (poyezd)
                            </span>
                          </div>
                          <div class="accordion__content">
                            Mehmonxonada nonushta. Dasturning davomi: <br />
                            • Xo'ja Doniyor maqbarasi - yahudiylar, nasroniylar
                            va musulmonlar uchun ko'p ziyoratgoh bo'lib, ko'plab
                            an'ana va afsonalar bilan qoplangan. <br />
                            • Ulug‘bek rasadxonasi <br />
                            • Bo'sh vaqt Temir yo'l stantsiyasiga o'tkazish.
                            Toshkentga poyezdda 17:30 da jo‘nab ketish. 19:40 da
                            yetib kelish. Mehmonxonada turar joy. Mehmonxonada
                            tunash.
                          </div>
                        </div>
                        <div class="accordion_item">
                          <div class="accordion_title">
                            <div class="accordion_arrow">
                              <i
                                class="accordion_arrow-item fa fa-arrow-down"
                              ></i>
                            </div>
                            <span class="accordion_title-text"
                              >9-kun, Toshkent
                            </span>
                          </div>
                          <div class="accordion__content">
                            Aeroportga o'tkazish, jo'nab ketish
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 bg-white">
            <div class="turn_on pt-4 pb-4">
              <h5>Turga kiradigan narsalar:</h5>
              <ul>
                <li>
                  Ikki kishilik joy asosida ko'rsatilgan mehmonxonalarda
                  joylashtirish
                </li>
                <li>Ovqatlanish: faqat nonushta</li>
                <li>Butun yo'nalish bo'ylab konditsionerli qulay transport</li>
                <li>Aeroportda kutib olish/uzatish</li>
                <li>Dasturga muvofiq kirish chiptalari</li>
                <li>Marshrut davomida hamrohlik qilish</li>
                <li>
                  Buxoro-Samarqand, Samarqand-Toshkent temir yo'l chiptalari
                </li>
                <li>Toshkent-Urganch ichki reysi</li>
                <li>Buxoroda xalq og‘zaki ijodi</li>
              </ul>
            </div>
            <div class="tunr_off pb-4">
              <h5>Narxga quyidagilar kirmaydi:</h5>
              <ul>
                <li>Xalqaro havo qatnovi</li>
                <li>Alkogolli va alkogolsiz ichimliklar</li>
                <li>
                  Viza narxi va ro'yxatdan o'tkazish (agar Rossiya Federatsiyasi
                  fuqarolari bo'lmasa)
                </li>
                <li>Muzeylarda foto va video suratga olish uchun to‘lovlar</li>
                <li>
                  Mehmonxonalar/aeroportlarda maslahatlar va yuk tashuvchilar
                </li>
                <li>Shaxsiy xarajatlar</li>
                <li>Yuqorida sanab o'tilmagan boshqa xizmatlar</li>
                <li>Tushlik va kechki ovqatlar</li>
              </ul>
            </div>
            <div class="make_order_recall ml-4">
                <button
                  id="recall-btn"
                  onclick="openModal()"
                  class="btn btn-primary mt-1"
                >
                  Turni sotib olish
                </button>
              </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('js')
    <!-- Contact Javascript File -->
    <script src="{{asset('/website/assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('/website/assets/mail/contact.js')}}"></script>
@endsection
