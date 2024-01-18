@extends('layout')
@section('content')
    <section class="section faq-section wow fadeInUp mt-5" data-wow-duration="0.8s" id="faqa">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 col-xxl-6">
                    <div class="section__header">
                        <h2 class="section__header-title wow fadeInUp" data-wow-duration="0.8s">Sıkça Sorulan Sorular</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between gy-4 gy-lg-0">
                <h5>Kayıt Oluşturma</h5>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-1" aria-expanded="true" aria-controls="faq-accordion-1">
                                    İfşalama yapmak için kayıt olmak zorunlu mu?
                                </button>
                            </h5>
                            <div id="faq-accordion-1" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Platformda ifşa yapabilmeniz için kayıt olmanız gerekmektedir. Kayıt ol sekmesine
                                        tıklayarak; İsim -Soy isim , e-mail ve şifre bilgilerinizi girmeli sonrasında da
                                        telefon ve e-posta doğrulaması yapmalısınız. Kayıt esnasında vereceğiniz bilgilerin
                                        doğruluğunun, gerektiğinde size ulaşılmasının ve ifşalarınızın çözülmesinde önemli
                                        olduğunu hatırlatmak isteriz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-2" aria-expanded="true" aria-controls="faq-accordion-2">
                                    Kayıt olmak neden gerekli?
                                </button>
                            </h5>
                            <div id="faq-accordion-2" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kayıt olduğunuzda; kurum/markaların size rahatça ulaşarak hızlı şekilde çözüm
                                        sağlamasına fırsat vermiş olursunuz. Ayrıca ifşalarınızı takip edebilir, çözümle
                                        sonuçlanıp sonuçlanmadığını takip edebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-3" aria-expanded="true" aria-controls="faq-accordion-3">
                                    Kayıt olmak ücretli mi?
                                </button>
                            </h5>
                            <div id="faq-accordion-3" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşaet'te bireysel üyelikler ücretsizdir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-4" aria-expanded="true" aria-controls="faq-accordion-4">
                                    Nasıl kayıt oluşturabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-4" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Ana sayfada sağ üstte yer alan 'Kayıt ol/Giriş Yap' sekmesinden 'Kayıt Ol' adımını
                                        seçin.
                                        Açılan sayfadaki 'Hesap Oluşturun' formunu; ad, soyad, e-posta adresinizi ve
                                        şifrenizi girerek doldurun.
                                        'Kayıt ol' butonunu tıklayın.
                                        İsterseniz Facebook veya Google hesabınızla da doğrudan kayıt olabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-5" aria-expanded="true" aria-controls="faq-accordion-5">
                                    Kayıt olurken neden bilgileriniz isteniyor?
                                </button>
                            </h5>
                            <div id="faq-accordion-5" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınıza çözüm sunmak isteyen kurum/markaların size ulaşabilmesi ve size en
                                        doğru şekilde hitap edebilmesi için ad-soyad bilgileriniz istenmektedir.
                                        Kayıt oluştururken hesabınızın doğrulamasının yapılabilmesi, kötü niyetli kişilerin
                                        haksız rekabete sebep olmasının engellenmesi ve e-posta / SMS ile yapılan
                                        bilgilendirme mesajlarını alabilmeniz için e-posta adresiniz ve cep telefonu
                                        numaranız istenmektedir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-6" aria-expanded="true"
                                    aria-controls="faq-accordion-6">
                                    Şifremi nasıl değiştirebilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-6" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Profilimi düzenle sekmesinde yer alan “parolanı değiştir” bölümünde, eski parolanızı
                                        ve yeni parolanızı girerek değiştirebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-7" aria-expanded="true"
                                    aria-controls="faq-accordion-7">
                                    Kayıt olurken verdiğim kişisel bilgilere üçüncü kişiler ulaşabilir mi?
                                </button>
                            </h5>
                            <div id="faq-accordion-7" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşaet’in amacı kurum/markalar ile bireysel kullanıcılar arasında çözüm ortaklığı
                                        sağlamaktır. Ana sayfasında ifşanız herkes tarafından görülebilir. Ancak sadece
                                        adınız gözükür; soyadınız ve iletişim bilgileriniz ise gizli kalır.
                                        Üçüncü kişilerle bilgi paylaşımı yapılmamakta olup ifşalanan kurum/markaların çözüm
                                        sunabilmesine yardımcı olabilmek için ve hukuki zorunluluklardan dolayı, sadece
                                        ifşalanan markalar ile ifşalayanın bilgileri KVKK’ya uygun şekilde paylaşılır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-5">İfşalarınızın Çözülmesi ve Teknik Destek</h5>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-8" aria-expanded="true"
                                    aria-controls="faq-accordion-8">
                                    Kurum/Marka ifşamı ne zaman cevaplayacak? Kurum/markalar cevap vermezse ne yapabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-8" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşanız yapıldığında kurum/markalara iletilir. Ancak kurum/markaların ifşalara
                                        yaklaşımı ve değerlendirmesi farklılık göstermektedir. İfşalar, iletildikten sonra
                                        sorunları çözmek için istekli olan kurum/markalar size kayıt oluştururken verdiğiniz
                                        bilgiler üzerinden ulaşacaktır. Ancak çözüm arayışında olmak, kurum/markaların
                                        isteğine bağlı olduğu için size ulaşıp ulaşmayacakları veya ne zaman ulaşacakları
                                        konusunda İfşaet kesin bilgi verememektedir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-9" aria-expanded="true"
                                    aria-controls="faq-accordion-9">
                                    Kurum/Marka cevap vermezse ne yapabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-9" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınız; ad-soyad, telefon ve e-posta bilgileriniz eksiksiz olarak girildikten
                                        sonra onay aşamasından geçer. İfşalarınız onaylandıktan sonra ilgili kurum/markalara
                                        bildirilir ve İfşaet'te yayımlanır. İfşaet'te paylaşılan ifşalar arama motorlarında
                                        görüleceği için; kurum/markalar ticari itibar kaybetmemek için çözüm arayışında
                                        olacaktır. Ancak İfşaet; her zaman sorunlarınız gerçekten çözüldüğünde size “ifşalar
                                        çözüldü” şeklinde geri bildirimde bulunur. Kurum/marka, ifşayı çözmemiş ancak sadece
                                        yanıt vermişse “ifşanız yanıtlandı” şeklinde geri bildirimde bulunur.
                                        İfşaların çözülüp çözülmediğinin üçüncü kişiler tarafından görülebilmesi için
                                        bireysel kullanıcıların yapacağı “Yorumlar”, “Teşekkür” geri bildirimleri ve
                                        vereceği “yıldızlar” ile beğeni butonuna tıklanma oranı ile anlaşılmaktadır.
                                        Ana sayfada yer alan giriş yap sekmesine basarak, profilinizden ifşalarınızla ilgili
                                        gelişmeleri takip edebilirsiniz. Bu sekme üzerinden ifşalarınızın aldığı beğenileri
                                        ve ifşalarınıza yapılan yorumları takip edebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-10" aria-expanded="true"
                                    aria-controls="faq-accordion-10">
                                    İfşamı daha geniş kitlelere nasıl ulaştırabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-10" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşanızı yazdıktan sonra ve onay sürecinden geçerek yayıma alındıktan sonra,
                                        ifşanızın altında çıkan sosyal medya sekmeleri aracılığıyla ifşalarınızı sosyal
                                        medya hesaplarınızda paylaşabilirsiniz. Böylece ifşanızı geniş kitleler tarafından
                                        görülmesini sağlayabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-11" aria-expanded="true"
                                    aria-controls="faq-accordion-11">
                                    İfşaları çözülen diğer bireysel üyelere nasıl ulaşabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-11" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşası çözüme kavuşmuş olan diğer bireysel kullanıcılara, kendi ifşalarının altında
                                        yer alan “yorum yap” bölümünden ulaşabilirsiniz. İlgili kullanıcılara ulaşmak
                                        istediğinizi iletebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-12" aria-expanded="true"
                                    aria-controls="faq-accordion-12">
                                    İfşaların çözülmesi ne demek?
                                </button>
                            </h5>
                            <div id="faq-accordion-12" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Profil sekmesinde görebileceğiniz ifşalarınızın yanında yer alan “ifşayı
                                        değerlendir” butonuna basarak; “ifşa sürecini değerlendir”, “markayı değerlendir”
                                        bölümünde 4 veya 5 yıldıza bastığınızda ve isteğe bağlı olarak teşekkür mesajı
                                        yazdığınızda "İfşanız Çözüldü" olarak kabul edilecektir.
                                        Çözülmeyen ifşalarınız için de “ifşayı değerlendir” sekmesinde düşük yıldız vererek
                                        olumsuz değerlendirme yapabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-13" aria-expanded="true"
                                    aria-controls="faq-accordion-13">
                                    İfşalarım çözüldüğünde nasıl teşekkür bildirimi yapabilirim ?
                                </button>
                            </h5>
                            <div id="faq-accordion-13" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Ana sayfadan giriş yaptıktan sonra profiliniz üzerinden ifşanızı
                                        görüntüleyebilirsiniz. İfşanızın yanında yer alan “ifşayı değerlendir” Butonuna
                                        tıklayarak teşekkür mesajı paylaşabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-14" aria-expanded="true"
                                    aria-controls="faq-accordion-14">
                                    İfşalarımın daha hızlı çözülebilmesi için ne yapabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-14" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kurum/markalardan satın aldığınız ürün veya hizmetlere ilişkin fatura, makbuz, fiş
                                        vb belgeler ifşanızın kanıtlanmasına yardımcı olur. Ayrıca ifşanıza ilişkin görüntü,
                                        video da paylaşabilir, ifşanızın inandırıcılığını artırabilirsiniz.
                                        İlerleyen süreçte ifşalarınızla ilgili değişiklikler olduğunda profilinizdeki
                                        ifşanızın yanında bulunan “değiştir” butonuna tıklayarak, ifşanızı
                                        güncelleyebilirsiniz.
                                        İfşanızın altında yer alan sosyal medya ikonları aracılığıyla ifşanızın daha geniş
                                        kitleler tarafından görünmesini sağlayabilirsiniz. Böylece ifşanızın kurum/markalar
                                        tarafından daha hızlı ve etkin şekilde çözülmesini sağlayabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-15" aria-expanded="true"
                                    aria-controls="faq-accordion-15">
                                    İfşaet tarafından ifşaların içeriği ve başlığı değiştiriliyor mu?
                                </button>
                            </h5>
                            <div id="faq-accordion-15" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınız herhangi bir hukuki yaptırımla karşılaşmamanız için ekibimiz tarafından
                                        kontrol edilmektedir. Ekibimiz tarafından onaylandığı takdirde yayıma alınmaktadır.
                                        Bu şekilde suç unsuru içeren ve haksız rekabete yol açabilecek ifşaların önüne
                                        geçmiş oluyoruz. Bunu sağlamak için de ifşalarınızda yer alan uygunsuz olduğu
                                        değerlendirilen kelimeler çıkarılmakta ya da en yakın anlamlı kelimeler ile
                                        değiştirilmektedir.
                                        İfşalarınızın daha çok kurum/marka ve üçüncü kişiler tarafından görülmesini sağlamak
                                        için başlıklarının en etkili şekilde olmasını sağlamaya çalışıyoruz.
                                        Bu tür değişiklik yapılması durumunda canlı destek hattı üzerinden platformumuza
                                        ulaşabilirsiniz. Ekibimizle birlikte ifşalarınızın yeniden değerlendirilmesini
                                        sağlayabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-5">Kurumsal/Marka Üyelik</h5>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-16" aria-expanded="true"
                                    aria-controls="faq-accordion-16">
                                    Kurum/Markaların yıldızlar puanları nasıl belirleniyor?
                                </button>
                            </h5>
                            <div id="faq-accordion-16" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Bireysel kullanıcı profilindeki ifşasının yanında yer alan “değerlendir”
                                        sekmesindeki “markayı değerlendir” butonunda verdiği yıldız puanları sonucuna göre
                                        belirlenir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-17" aria-expanded="true"
                                    aria-controls="faq-accordion-17">
                                    İfşaet; kurum/markalara ne tür faydalar sağlar?
                                </button>
                            </h5>
                            <div id="faq-accordion-17" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşaet, kullanıcılarına ulaşarak onların sorunları çözmek isteyen kurum/markalara
                                        ifşaları görmelerini ve çözüm sunma olanağı sağlar. İfşaları görerek sorunları çözen
                                        kurum/markalar, kullanıcılara değer verdiğini gösterir. Bu şekilde üçüncü kişiler
                                        tarafından güvenirliğini artırarak markalarının daha çok tercih edilmesini ve ürün
                                        ile hizmetlerini geliştirmelerini sağlar.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-18" aria-expanded="true"
                                    aria-controls="faq-accordion-18">
                                    Bireysel kullanıcılar tarafından kurum/markalara yazılan teşekkür mesajları doğru ve
                                    güvenilir mi?
                                </button>
                            </h5>
                            <div id="faq-accordion-18" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Bireysel kullanıcılar bir ifşa yaptığında ekibimiz tarafından onay sürecinden
                                        geçirilir. Asılsız mesajlar onaylanmayarak kurum/markalar hakkında haksız ticari
                                        rekabet oluşması engellenir. İfşaet kurum/markalara güvenilir bir platform sunar.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-19" aria-expanded="true"
                                    aria-controls="faq-accordion-19">
                                    Kurum/Markalar kişisel bilgilerime ulaşabilir mi?
                                </button>
                            </h5>
                            <div id="faq-accordion-19" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşaet’in amacı kurum/markalar ile bireysel kullanıcılar arasında çözüm ortaklığı
                                        sağlamaktır. Ana sayfasında ifşanız herkes tarafından görülebilir. Ancak sadece
                                        adınız gözükür; soyadınız ve iletişim bilgileriniz ise gizli kalır.
                                        Üçüncü kişilerle bilgi paylaşımı yapılmamakta olup ifşalanan kurum/markaların çözüm
                                        sunabilmesine yardımcı olabilmek için ve hukuki zorunluluklardan dolayı, sadece
                                        ifşalanan markalar ile ifşalayanın bilgileri KVKK’ya uygun şekilde paylaşılır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-20" aria-expanded="true"
                                    aria-controls="faq-accordion-20">
                                    Kurum/Markalar tarafından hakarete maruz kaldığımda veya tehdit edildiğimde ne
                                    yapabilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-20" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Birçok kurum/marka ifşalara çözüm odaklı yaklaşmasına rağmen kötü niyetli yaklaşım
                                        gösteren kurum/markalar da bulunmaktadır. İfşaet, bu tür durumlarla KVKK
                                        çerçevesinde ilgili bilgileri, belgeleri hukuki mercilerle paylaşmakta ve
                                        sorununuzun çözümüne yardımcı olmaktadır. Ancak bireysel kullanıcılarımızın da
                                        gerekli hukuki yollara başvurma sorumluluğun olduğu da unutulmamalıdır
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-5">İfşa Aşaması</h5>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-21" aria-expanded="true"
                                    aria-controls="faq-accordion-21">
                                    İfşalama Aşaması nasıl ilerler?
                                </button>
                            </h5>
                            <div id="faq-accordion-21" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınız; ad-soyad, telefon ve e-posta bilgileriniz eksiksiz olarak girildikten
                                        sonra onay aşamasından geçer. İfşalarınız onaylandıktan sonra ilgili kurum/markalara
                                        ve platformda yayımlanır. Platformumuzda paylaşılan ifşalar arama motorlarında
                                        görüleceği için; kurum/markalar ticari itibar kaybetmemek için çözüm arayışında
                                        olacaktır. Ancak İfşaet her zaman sorunlarınız gerçekten çözüldüğünde size ifşalar
                                        çözüldü şeklinde geri bildirimde bulunmaktadır. Kurum/marka ifşayı çözmemiş ancak
                                        sadece yanıt vermişse “ifşanız yanıtlandı” şeklinde geri bildirimde bulunuyoruz.
                                        İfşaların çözülüp çözülmediğinin üçüncü kişiler tarafından görülebilmesi için
                                        bireysel kullanıcıların yapacağı “Yorumlar”, “Teşekkür” geri bildirimleri ve
                                        vereceği “yıldızlar” ile beğeni butonuna tıklanma oranı ile anlaşılmaktadır.

                                        Ana sayfada yer alan giriş yap sekmesine basarak, profilinizden ifşalarınızla ilgili
                                        gelişmeleri takip edebilirsiniz. Bu sekme üzerinden ifşalarınız aldığı beğenileri ve
                                        ifşalarınıza yapılan yorumları takip edebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-22" aria-expanded="true"
                                    aria-controls="faq-accordion-22">
                                    İfşalarımı neden İfşaet'te yazmalıyım?
                                </button>
                            </h5>
                            <div id="faq-accordion-22" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Gelişen ve büyüyen dünyada herkesin üstüne düşeni yapması gerektiğini düşünüyoruz.
                                        Haksızlığa uğradığınızda, haksız kazançla karşılaştığınızda, kişisel ve topluma
                                        karşı yapılan yanlışları duyurmak istediğinizde veya sahtekarlık durumlarında
                                        emeğinizi veya duyarlı kişiliğinizi düşünerek yaşanan durumları ifşa etmenizi
                                        sağlıyoruz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-23" aria-expanded="true"
                                    aria-controls="faq-accordion-23">
                                    İfşalamayı herkes yapabilir mi?
                                </button>
                            </h5>
                            <div id="faq-accordion-23" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Haksızlığa uğradığını, haksız kazançla karşılaştığını düşünen; kişisel ve topluma
                                        karşı yapılan yanlışları duyurmak isteyen veya sahtekarlık durumlarında emeğini veya
                                        duyarlı kişiliğini düşünen herkes ifşalama yapabilir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-24" aria-expanded="true"
                                    aria-controls="faq-accordion-24">
                                    İfşalama yaparken dikkat etmem gerekenler nelerdir?
                                </button>
                            </h5>
                            <div id="faq-accordion-24" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Karşılaştığınız haksızlığı/sorunu, anasayfada yer alan “ifşaet” butonuna basarak
                                        detaylı olarak yazın ve açıklayın. Aldığınız ürün, hizmet veya karşılaştığınız
                                        herhangi bir sorunu açık ve net olarak açıklayın. Gereksiz ayrıntılardan kaçının.
                                        Sorunun nasıl çözülmesini istediğinizi de net olarak açıklayın.
                                        İfşanız mutlaka satın aldığını ürün/hizmet veya yaşadığınız sorunla ilgili olmalı.
                                        İfşaet Hizmet Politikası gereği ilgisiz ifşaların yayımlanmasına izin
                                        verilmemektedir. Üçüncü kişileri karşılaştığı veya doğrudan kullanıcıların
                                        karşılaşmadığı sorunlar ve satın almadığı ürün/hizmetlere ilişkin ifşaların
                                        yayımlanmasına izin verilmez.
                                        Marka/kurumlarla çözüm ortaklığı sağlamayan; hakaret ve tehdit içeren, suç unsuru
                                        bulunan ve kurum/markaların haksız şekilde ticari itibar kaybetmesine sebep olacak
                                        kelimeler kullanılmamalıdır. Bu tür durumlarda hukuki yaptırımlarla karşılaşma
                                        olanağı bulunmakta olup bu tür ifşalara platformumuz tarafından onay verilmez.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-25" aria-expanded="true"
                                    aria-controls="faq-accordion-25">
                                    İfşalama yaparken dikkat etmem gerekenler nelerdir?
                                </button>
                            </h5>
                            <div id="faq-accordion-25" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kişisel bilgileriniz sadece kayıt esnasında sizden istenmekte olup ifşa yazma
                                        aşamasında bu tür bilgilerinizi paylaşmayın. İfşalarınızı yazarken yazım ve imla
                                        kurallarına dikkat etmeniz ifşalarınızın daha kolay anlaşılmasına ve çözülmesine
                                        yardımcı olacaktır.
                                        İfşalarına, kurum/markaların yanıt verme hakkı bulunmaktadır. Bu sebeple
                                        ifşalarınızı yazarken bir kurum/marka hakkı bulunmasına dikkat edin. Birden fazla
                                        kurum/marka hakkında ifşalama yapacaksınız ayrı ayrı yapmaya özen gösterin.
                                        Kurum/markalardan satın aldığınız ürün veya hizmetlere ilişkin fatura, makbuz, fiş
                                        vb belgeler ifşanızın kanıtlanmasına yardımcı olur. Ayrıca ifşanıza ilişkin görüntü,
                                        video da paylaşabilir, ifşanızın inandırıcılığını artırabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-26" aria-expanded="true"
                                    aria-controls="faq-accordion-26">
                                    İfşalarımı yazarken neden karakter sınırlandırılması var ?
                                </button>
                            </h5>
                            <div id="faq-accordion-26" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınızı yazarken en az 100 en fazla 2500 karakter kullanmanız istenmektedir.
                                        Karakter sınırlandırmaları; hem ifşanızın daha anlaşılır yazılabilmesi için hem de
                                        gereksiz detaylardan kaçınmanız için var. Bu şekilde ifşalarınızı; kurum/markalar
                                        ile üçüncü kişilerin daha hızlı ve etkin şekilde okumasını sağlayarak çözüme
                                        kavuşturulmasını kolaylaştırıyoruz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-27" aria-expanded="true"
                                    aria-controls="faq-accordion-27">
                                    İfşalarımı değiştirebilir miyim? Eklemeler yapabilir miyim?
                                </button>
                            </h5>
                            <div id="faq-accordion-27" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşanızı yazdıktan sonra profilinize girerek “düzenle” butonuna basabilir ve
                                        ifşanızı değiştirebilirsiniz. Ayrıca video, görsel, metin eklemeleri yapabilirsiniz.
                                        Yine ifşalarınızın altına yanıt ve yorum ekleyebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-28" aria-expanded="true"
                                    aria-controls="faq-accordion-28">
                                    İfşalarıma belgeler eklemem neden önemli?
                                </button>
                            </h5>
                            <div id="faq-accordion-28" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kurum/markalardan satın aldığınız ürün veya hizmetlere ilişkin fatura, makbuz, fiş
                                        vb belgeler ifşanızın kanıtlanmasına yardımcı olur. Ayrıca ifşanıza ilişkin görüntü,
                                        video da paylaşabilir, ifşanızın inandırıcılığını artırabilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-29" aria-expanded="true"
                                    aria-controls="faq-accordion-29">
                                    İfşalarıma hangi formatta belgeler ekleyebilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-29" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınıza mp4, mov, wav, jpg, jpeg, gif, png, pdf, doc, docx, xls, xlsx, txt,
                                        odt, rtf formatlarında belgeler ekleyebilirsiniz. Ek belge limiti ise 100 Mb'dır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-30" aria-expanded="true"
                                    aria-controls="faq-accordion-30">
                                    İfşalarıma belgeleri nasıl ekleyebilirim?
                                </button>
                            </h5>
                            <div id="faq-accordion-30" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Öncelikli olarak ana sayfadan “ifşa et” sekmesine basarak ifşanızı yazmalısınız.
                                        İfşanızı yazdıktan sonra profiliniz üzerinden “ifşanızı değiştir” sekmesinde bulunan
                                        medya bölümünde “dosya yükle” butonuna tıklayarak fotoğraf, video, görsel, metin
                                        ekleyebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-31" aria-expanded="true"
                                    aria-controls="faq-accordion-31">
                                    İfşalarımız onay sürecinden geçiyor mu?
                                </button>
                            </h5>
                            <div id="faq-accordion-31" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalarınız herhangi bir hukuki yaptırımla karşılaşmamanız için ekibimiz tarafından
                                        kontrol edilmektedir. Ekibimiz tarafından onaylandığı takdirde yayıma alınmaktadır.
                                        Bu şekilde suç unsuru içeren ve haksız rekabete yol açan ifşaların önüne geçmiş
                                        oluyoruz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-5">İfşa Et</h5>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-32" aria-expanded="true"
                                    aria-controls="faq-accordion-32">
                                    İfşaet nasıl çalışır?
                                </button>
                            </h5>
                            <div id="faq-accordion-32" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kurumlar/markalar ile olan sorunlarınızı video, görsel veya metin yoluyla bölgenize
                                        ve tüm Türkiye’ye göstereceğiz ve bu sorunların hızlıca çözülmesi için gereken
                                        mecralara ulaşıp sizleri bilgilendireceğiz. <br>

                                        • Çalıştığınız emek verdiğiniz karşılığını alamadığınız haksızlığa uğradınız
                                        kurum/markayı ifşalayabilirsiniz. <br>

                                        • Kurum/Markaları, işletmeleri veya resmi kurumları dilediğiniz gibi
                                        ifşalayabilirsiniz.<br>

                                        • Satın alınan ürün veya hizmetteki kusurları, ihlal edilen haklarınızı ifşalayarak
                                        sesinizi duyurabilirsiniz.<br>

                                        • Bir işletmede çalışanları, çalışan kişilerin sizi sözlü veya fiziksel rahatsız
                                        edici hareketlerini ya da işletme sahibi iseniz görevini kötüye kullanan, yüz
                                        kızartıcı suç işleyen çalışanlarınızı ifşalayabilirsiniz.<br>

                                        • Platformun en iyi yanı ise memnun olduğunuz durumları, aldığınız güzel hizmet veya
                                        ürünü de ifşalayabilmenizdir.<br>

                                        Neyi ifşalamak istiyorsanız biz her zaman yanındayız! İfşa etmek sadece
                                        olumsuzluklar olarak düşünülmemeli iyi olan her şeyi de ifşa edebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="mt-5">İfşaların Değerlendirilmesi, Reddedilmesi ve Silinmesi</h5>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-33" aria-expanded="true"
                                    aria-controls="faq-accordion-33">
                                    Birden fazla ifşalama yapılması durumunda ne olur?
                                </button>
                            </h5>
                            <div id="faq-accordion-33" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Aynı kurum/marka hakkında aynı konu için ifşa yapıldığında durumunda ifşalarınız
                                        onaylanmamakta ve aynı ifşalar yayımlanmamaktadır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-34" aria-expanded="true"
                                    aria-controls="faq-accordion-34">
                                    İfşalarımı silebilir miyim?
                                </button>
                            </h5>
                            <div id="faq-accordion-34" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Ana sayfadan giriş yaptıktan sonra profilinizden “ifşalarım” bölümünde bulunan
                                        ifşanızın altında yer alan ifşayı sil butonuna tıklayarak ifşanızı silebilirsiniz.
                                        Şikayetinizi silmek istediğinizde karşınıza 3 alternatif çıkar: <br>
                                        1. Şikayetim Çözüldü <br>
                                        2. Düzeltme yaparak tekrar göndereceğim <br>
                                        3. Diğer <br>
                                        İlk seçeneği (Şikayetim Çözüldü) kullanarak şikayetinizi sildiğiniz takdirde
                                        yazacağınız teşekkür mesajının ardından şikayet metni silinir, sadece teşekkür
                                        mesajınız ve gülücük sembolü yayında kalır. Diğer seçeneklerle sildiğiniz takdirde
                                        ise şikayetiniz komple silinecektir.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-35" aria-expanded="true"
                                    aria-controls="faq-accordion-35">
                                    İfşalar ne kadar sürede yayımlanıyor?
                                </button>
                            </h5>
                            <div id="faq-accordion-35" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kullanıcılar tarafından ifşalama yapıldıktan sonra ekibimiz tarafından onay
                                        sürecinden gecikmekte ve ilgili kurum/markalara iletilmektedir. İfşalama yoğunluğu
                                        ve mesai saatleri çerçevesinde mümkün olan en kısa sürede ifşalarınız yayıma
                                        alınmaktadır. İfşalarınız yayımlandıktan sonra e-posta/SMS aracılığıyla tarafınıza
                                        bildirim yapılmaktadır. Ayrıca ifşalarınızın yayımlanıp yayımlanmadığını
                                        profilinizden kontrol edebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-36" aria-expanded="true"
                                    aria-controls="faq-accordion-36">
                                    Bütün ifşalar yayımlanıyor mu? Yayımlanan ifşalar platform tarafından silinebiliyor mu?
                                </button>
                            </h5>
                            <div id="faq-accordion-36" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Onay sürecinde kabul edilmeyen ifşalarınız yayımlanmaz. İfşalarınız; suç unusuru
                                        içeren kelimeler içeriyorsa, anlamı güçleştirecek şekilde yazım hatası içeriyorsa,
                                        kişisel bilgileriniz kurum/markaların size ulaşmasını engelleyecek şekilde eksik
                                        girilmişse, kurum/markalar arasında haksız rekabete yol açıyor ve doğrudan reklam
                                        yapmak amacı taşıyorsa, ifşalarınız ayrımcılığa sebep oluyorsa yayımlanmaz. Kabul
                                        edilemeyen ifşalarınızı profilinizden takip edebilirsiniz.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-37" aria-expanded="true"
                                    aria-controls="faq-accordion-37">
                                    Hukuki uyuşmazlık konusu olan ifşalar yayımlanır mı?
                                </button>
                            </h5>
                            <div id="faq-accordion-37" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        Kullanıcılar ile kurum/markalar arasındaki uyuşmazlık hukuki yollara taşınmışsa
                                        ifşalarınız yayımlanmamaktadır. Ancak hukuki uyuşmazlık lehinize sonuçlanmışsa
                                        ifşalar yayıma alınmaktadır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xxl-12 mt-3">
                    <div class="accordion wow fadeInDown" data-wow-duration="0.8s" id="faq">
                        <div class="accordion-item accordion_bg">
                            <h5 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-accordion-38" aria-expanded="true"
                                    aria-controls="faq-accordion-38">
                                    Üçüncü kişiler için ifşalama yapabilir miyim?
                                </button>
                            </h5>
                            <div id="faq-accordion-38" class="accordion-collapse collapse" data-bs-parent="#faq">
                                <div class="accordion-body">
                                    <p class="mb-0">
                                        İfşalamanın doğrudan bir sorunla karşılaşan, doğrudan bir ürün/hizmet satın alan
                                        kullanıcılar tarafından yapılması gerekmektedir. Bu sebeple üçüncü kişiler için
                                        yapılan ifşalar platformumuz tarafından yayıma alınmamaktadır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
