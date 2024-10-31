jQuery(function($){

$(function(){
	
	//drawer
	var checkArea=$("#drawer-checkbox");//チェック判断するラジオボタン
	var tap=$("#drawer-icon");//ドロワーメニュー
	var gNaviArea=$("#gNavi");//グローバルナビゲーションエリア
	var pageLink=$("#gNavi ul li a");//ページ内リンク
	var closeArea=$("#drawer-close");//クローズエリア
	
	//タップをしたらクラスをつけたりはずしたりする
	$(tap).on("click",function(){
		$(tap).toggleClass('active');
		$(gNaviArea).toggleClass('tap');
		$(closeArea).toggleClass('tap');
	});
	
	//ページ内リンクをクリックしたときのクラス管理
	$(pageLink).on("click",function(){
		if($(gNaviArea).hasClass('tap')){
			$(gNaviArea).removeClass('tap');
			$(tap).removeClass('active');
			$(closeArea).removeClass('tap');
			$(checkArea).prop('checked',false);
		}
	});
	
	//クローズエリアをクリックしたときのクラス管理
	$(closeArea).on("click",function(){
		if($(gNaviArea).hasClass('tap')){
			$(gNaviArea).removeClass('tap');
			$(tap).removeClass('active');
			$(closeArea).removeClass('tap');
			$(checkArea).prop('checked',false);
			return false;
		}
	});
	
	//pagetop(に戻る部分)
	$('[href="#top"]').click(function(){
		$("html,body").animate({scrollTop:0},800);
		return false;
	});
	
	$(window).scroll(function(){
		if($(this).scrollTop()>300){
			$("#pageTop").fadeIn();
		}else{
			$("#pageTop").fadeOut();
		}
	});
	
	//smoothrollover(画像変わる部分)
	$('a img').hover(function(){
			$(this).attr('src', $(this).attr('src').replace('_off', '_on'));
		}, function(){
			if (!$(this).hasClass('currentPage')) {
			$(this).attr('src', $(this).attr('src').replace('_on', '_off'));
		}
	});
	
//ヘッダーそのまま固定

  var $win = $(window),
      $main = $('main'),
      $ch = $('.homeH'),
      chHeight = $ch.outerHeight(),
      fixedClass = 'fixedH';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > 100 ) {
      $ch.addClass(fixedClass);
      $main.css('margin-top', chHeight);
		$('h2').css('color','grey');
    } else {
      $ch.removeClass(fixedClass);
		
      $main.css('margin-top', '0');
		$('h2').css('color','black');
    }
  });

});

});


$(function () {
    var headH = $("header").outerHeight();
    var animeSpeed = 500;
    var id = $("body").attr("id");
    //グロナビアンカー
    $(".nav_anc").on("click", function () {
        var currentUrl = location.pathname; //URLのパス名を取得
        var url1 = currentUrl.split("/"); //パスを「/」区切りで分割
        var targetUrl = $(this).children("a").attr("href"); //リンク先のURLを取得（リンク先はルートパスで指定）
        var url2 = targetUrl.split("/"); //リンク先URLを「/」区切りで分割
        var target;
        var position;
        $(".pulldown").hide();
        //現在地がTOPページの場合
        if (id === "aboutArea") { //bodyにid「aboutArea」が有る場合
            if (url2[1].match("^#")) {
                target = $(url2[1]);
                position = target.offset().top - headH;
                $("body,html").stop().animate({
                    scrollTop: position
                }, animeSpeed);
                return false;
            }
        }
        //現在地が下層ページの場合
        if (url1[1] === url2[1]) { //それぞれ「/」で区切ったものの1つ目が一致した場合
            target = $(url2[2]);
            position = target.offset().top - headH;
            $("body,html").stop().animate({
                scrollTop: position
            }, animeSpeed);
            return false;
        }
    });
});