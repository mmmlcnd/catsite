jQuery(function ($) {
  $(function () {
    //drawer
    let checkArea = $('#drawer-checkbox'); //チェック判断するラジオボタン
    let tap = $('#drawer-icon'); //ドロワーメニュー
    let gNaviArea = $('#gNavi'); //グローバルナビゲーションエリア
    let pageLink = $('#gNavi ul li a'); //ページ内リンク
    let closeArea = $('#drawer-close'); //クローズエリア

    //タップをしたらクラスをつけたりはずしたりする
    $(tap).on('click', function () {
      $(tap).toggleClass('active');
      $(gNaviArea).toggleClass('tap');
      $(closeArea).toggleClass('tap');
    });

    //ページ内リンクをクリックしたときのクラス管理
    $(pageLink).on('click', function () {
      if ($(gNaviArea).hasClass('tap')) {
        $(gNaviArea).removeClass('tap');
        $(tap).removeClass('active');
        $(closeArea).removeClass('tap');
        $(checkArea).prop('checked', false);
      }
    });

    //クローズエリアをクリックしたときのクラス管理
    $(closeArea).on('click', function () {
      if ($(gNaviArea).hasClass('tap')) {
        $(gNaviArea).removeClass('tap');
        $(tap).removeClass('active');
        $(closeArea).removeClass('tap');
        $(checkArea).prop('checked', false);
        return false; //親要素へのイベントの伝播を停止（メニューのみを閉じる）
      }
    });

    //pagetop(に戻る部分)
    $('[href="#top"]').click(function () {
      $('html,body').animate({ scrollTop: 0 }, 800);
      return false;
    });

    $(window).scroll(function () {
      if ($(this).scrollTop() > 300) {
        $('#pageTop').fadeIn();
      } else {
        $('#pageTop').fadeOut();
      }
    });

    //ヘッダー固定
    let $win = $(window),
      $main = $('main'),
      $ch = $('.homeH'),
      chHeight = $ch.outerHeight(),
      fixedClass = 'fixedH';

    $win.on('load scroll', function () {
      let value = $(this).scrollTop();
      if (value > 100) {
        $ch.addClass(fixedClass);
        $main.css('margin-top', chHeight);
        $('h2').css('color', 'grey');
      } else {
        $ch.removeClass(fixedClass);

        $main.css('margin-top', '0');
        $('h2').css('color', 'black');
      }
    });
  });
});

$(function () {
  // アニメーション判定ロジックを関数として定義
  function checkBoxesVisibility() {
    const scroll = window.scrollY; // 現在のスクロール位置
    const windowHeight = window.innerHeight; // ウィンドウの表示領域の高さ
    const boxes = document.querySelectorAll('.js-boxes'); // アニメーション対象の要素をすべて取得

    boxes.forEach(function (box) {
      const distanceToBox = box.offsetTop; // 要素がページの最上部からどれくらいの距離にあるか

      // 要素が画面内に入ったかどうかを判定
      // (要素のトップが画面の底辺より上にある AND 要素のボトムが画面のトップより下にある)
      // または、簡易的に (画面の底辺が要素のトップを超えた) で判定
      if (scroll + windowHeight > distanceToBox) {
        box.classList.add('is-active');
      } else {
        box.classList.remove('is-active'); // スクロールで見えなくなったらクラスを削除
      }
    });
  }

  // ページロード時に一度実行
  checkBoxesVisibility();

  // ウィンドウがスクロールされたときに実行
  window.addEventListener('scroll', checkBoxesVisibility);

  // アンカーリンクで同一画面内に移動した際に、アニメーションを再チェックする処理を追加
  // グローバルナビゲーションのアンカーリンク処理 (元のコードから抜粋・修正)
  let headH = $('header').outerHeight();
  let animeSpeed = 500;
  let id = $('body').attr('id');

  $('.nav_anc').on('click', function () {
    let currentUrl = location.pathname;
    let url1 = currentUrl.split('/');
    let targetUrl = $(this).children('a').attr('href');
    let url2 = targetUrl.split('/');
    let target;
    let position;
    $('.pulldown').hide();

    // 現在地がTOPページの場合 (例: bodyにid「aboutArea」がある場合)
    if (id === 'aboutArea') {
      if (url2[1] && url2[1].match('^#')) {
        // url2[1]が存在するか確認を追加
        target = $(url2[1]);
        position = target.offset().top - headH;
        $('body,html')
          .stop()
          .animate(
            {
              scrollTop: position,
            },
            animeSpeed,
            function () {
              // アニメーション完了後にアニメーション判定を再度実行
              checkBoxesVisibility();
            }
          );
        return false;
      }
    }
    // 現在地が下層ページの場合
    if (url1[1] === url2[1]) {
      target = $(url2[2]);
      if (target.length) {
        // 対象要素が存在するか確認を追加
        position = target.offset().top - headH;
        $('body,html')
          .stop()
          .animate(
            {
              scrollTop: position,
            },
            animeSpeed,
            function () {
              // アニメーション完了後にアニメーション判定を再度実行
              checkBoxesVisibility();
            }
          );
        return false;
      }
    }
    // 通常のリンク遷移の場合
    // return true; // ここでは何もしないか、あるいは通常のリンク遷移を許可
  });
});
