<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('my_assets/js/p5/p5.min.js')}}"></script>
<link rel="stylesheet" href="{{ \Illuminate\Support\Facades\URL::asset('my_assets/css/animate.min.css')}}">
<script>
//    $('a').click(function (event) {
//        let url = this.href;
//        event.preventDefault();
//       $('html').addClass('leaving');
//        $("a").off("click");
//        setTimeout(function(){ window.location.href = ''+url+'';  }, 700);
//    });

let currentBox;
//    $('.linkBox').click(function (event) {
//        $('.contend_body').hide();
//            let url = this.href;
//            let element = this;
//            event.preventDefault();
//            $('.linkBox').each(function( index ) {
//                if(this != element){
//                    $(this).addClass('goCorner');
//                    $(this).removeClass('showContent');
//                    $(this).removeClass('showContent-from-corner');
//                }
//                else {
//                    currentBox = this;
//                    bodyId = this.id+'_body';
//                    if($(this).hasClass('goCorner')){
//                        $(this).addClass('showContent-from-corner');
//                    }
//                    else{
//                        $(this).addClass('showContent');
//
//                    }
//                    $('#'+bodyId+' *').hide();
//                    setTimeout(function(){
//                        $('#'+bodyId).fadeIn(1000);
//                        $('#'+bodyId+' *').fadeIn(1000)
//                    },1000);
//                }
//            });
//
//        });


//    function closeModal() {
//        $('.contend_body').hide();
//
//        $('.linkBox').each(function( ) {
//            if(this == currentBox) {
//                $(this).removeClass('showContent');
//                $(this).removeClass('showContent-from-corner');
//                $(this).addClass('goCorner');
//                currentBox = null;
//            }
//        });
//        setTimeout(function(){
//            $('.linkBox').each(function( ) {
//                $(this).removeClass('showContent');
//                $(this).removeClass('showContent-from-corner');
//                $(this).removeClass('goCorner');
//            });
//        },500);
//    }

    $(document).ready(function(){
       $('.pageEffect').addClass('entering');
    });

</script>
