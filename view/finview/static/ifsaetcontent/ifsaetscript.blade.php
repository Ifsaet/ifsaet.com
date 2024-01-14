<script>
    $(document).ready(function (){
        $(document).off("click",".save").on("click",".save", function () {
            saved();
        });
        const savedStatus = false;
        $(document).off("click",".type").on("click",".type",function(){
            $('.type').attr("selected",false);
            $(this).attr("selected",true);
        });
        $(document).ready(function() {
            // TextArea değişikliklerini dinle
            $('#ifsadetaytext').on('input', function() {
                // TextArea içindeki metni al
                var metin = $(this).val();
                var karakterSayisi = metin.length;
                $('#detailCount').text(karakterSayisi);
            });
        });
        $(document).off("click",".tabbutton").on("click",".tabbutton",function (){
            var content = $(this).attr('content');
            $(".secili").removeClass("secili");
            $(this).addClass("secili");
            $('.active-tab').removeClass('active-tab');
            $('#'+content).addClass('active-tab');
        });
        $(document).off("click","[name='devamet']").on("click","[name='devamet']",function (){
            ifsadetaykontrol();
            var after = $(".secili").attr('after');
            var content = $(".secili").attr('content');
            $('[content="'+content+'"]').removeClass("secili");
            $('[content="'+after+'"]').addClass("secili");
            $('.active-tab').removeClass('active-tab');
            $('#'+after).addClass('active-tab');
            if(content==="ifsamarka")
            {
                $(this).css("display","none");
                $(".save").css("display","block");
            }
            else{
                $(this).css("display","block");
                $(".save").css("display","none");
            }
        });
    });
    function showalert(text,status="success")
    {
        Swal.fire({
            position: 'center',
            icon: status,
            title: text,
            showConfirmButton: false,
            timer: 1500
        })
    }
    function ifsadetaykontrol()
    {
        var metin = $('#ifsadetaytext').val();
        var karakterSayisi = metin.length;
        if(karakterSayisi<100)
        {
            showalert("Lütfen en az 100 karakter giriniz!","error");
            savedStatus = false;
        }
        else if(karakterSayisi>2500)
        {
            showalert("Lütfen en fazla 2500 karakter giriniz!","error");
            savedStatus = false;
        }
    }
    function saved() {
        var data = [];
        var ifsa = $('[name="ifsa"]').val();
        var baslik = $('[name="baslik"]').val();
        var tip = $('.type[selected="selected"]').attr("type");
        var youtube = $('[name="youtube"]').val();
        var marka = $('[name="marka"]').val();
        var token = $('#token').val();
        data.push({"ifsa":ifsa},{"baslik":baslik},{"tip":tip},{"youtube":youtube},{"marka":marka},{"token":token});
        $.ajax({
            method: "POST",
            url: "hash/ifsasaved",
            data:{
                hash: "saved",
                value:data
            },
            success: function (data){
                if (data){
                    showalert("İfşa başarıyla kaydedildi!");
                    savedStatus = true;
                }
                else{
                    showalert("İfşa kaydedilirken bir hata oluştu!","error");
                    savedStatus = false;
                }
            }
        });
    }
    function tempSave()
    {

    }
    function tempView()
    {

    }
</script>