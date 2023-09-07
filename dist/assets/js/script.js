"use strict";

"use strict"; /* 厳格にエラーをチェック */

// const { compile } = require("sass");

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  ///////////
  // ローディング
  ///////////
  $("body").css("display", "block");
  var webStorage = function webStorage() {
    if (sessionStorage.getItem("access")) {
      $(".loading").addClass("is-none");
    } else {
      //初回アクセス時の処理
      sessionStorage.setItem("access", 0);
      $(document).ready(function () {
        // ローディング画面を表示

        $(".loading__left-image").addClass("is-active");
        $(".loading__right-image").addClass("is-active");
        // ローディング画面のフェードアウト後にスクロール禁止を解除
        $(".loading").delay(1700).fadeOut(function () {
          // フェードアウトが完了した後に実行されるコールバック関数
          // スクロール禁止を解除
          $("body").removeClass("loading__no-scroll");
          $(".loading__left-image").removeClass("is-active");
          $(".loading__right-image").removeClass("is-active");
        });

        // ローディング中はスクロール禁止
        $("body").addClass("loading__no-scroll");
      });
    }
  };
  webStorage();

  //////////////
  // topへ戻るボタン
  //////////////
  var topBtn = $(".js-page-top");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 130) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });
  $(document).on("click", 'a[href*="#"]', function () {
    var time = 400;
    var header = $(".header__inner").height();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $("html,body").animate({
      scrollTop: targetY
    }, time, "swing");
    return false;
  });

  //////////
  // ハンバーガー
  //////////
  $(function () {
    // ボタンクリックしたら
    $(".js-hamburger").click(function () {
      // アクティブクラスつけ外し
      $(this).toggleClass("active");
      // ナビ表示
      $(".sp-nav").toggleClass("active");

      // ヘッダーの色黒にする
      $(".header").toggleClass("active");
      // bodyに「.active」class付け外し　背景固定
      $("body").toggleClass("active");
    });

    // リンククリックしたら
    $(".js-header a").click(function () {
      // アクティブクラス外す
      $(".js-hamburger").removeClass("active");
      // ナビ表示
      $(".sp-nav").removeClass("active");
      // ヘッダーの色透明にする
      $(".header").removeClass("active");
      // bodyに「.active」class付け外し　背景固定解除
      $("body").removeClass("active");
    });
  });

  ////////////////
  //   ヘッダー　mv過ぎたら変色
  ////////////////

  var header = $(".header");
  var headerHeight = $(".header").height();
  var height = $(".js-mv-height").height();
  $(window).scroll(function () {
    if ($(this).scrollTop() > height - headerHeight) {
      // 指定px以上のスクロールでヘッダーを表示
      header.addClass("is-color");
    } else {
      // 画面が指定pxより上ならヘッダーを非表示
      header.removeClass("is-color");
    }
  });

  ////////////////
  //   メインビュー
  ////////////////

  var swipeOption = {
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    speed: 2000
  };
  new Swiper(".js-mv-swiper", swipeOption);

  ////////////
  // campaignスライダー
  ///////////

  var mySwiper = new Swiper(".js-campaign-swiper", {
    // オプション設定

    // PC時のみページネーション表示
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    autoplay: {
      // スライドの自動再生
      delay: 3000,
      disableOnInteraction: false
    },
    loop: true,
    // スライドの無限ループ

    // スライドの表示枚数：768px未満の場合
    spaceBetween: 25,
    slidesPerView: "auto",
    breakpoints: {
      // スライドの表示枚数：768px以上の場合
      768: {
        spaceBetween: 40
      }
    }
  });
  document.addEventListener("DOMContentLoaded", function () {
    var prevButton = document.querySelector(".swiper-button-prev");
    var nextButton = document.querySelector(".swiper-button-next");

    // prevボタンのクリックイベントを監視します
    prevButton.addEventListener("click", function () {
      // 自動再生を再開します
      mySwiper.autoplay.start();
    });
    // nextボタンのクリックイベントを監視します
    nextButton.addEventListener("click", function () {
      // 自動再生を再開します
      mySwiper.autoplay.start();
    });
  });

  /////////////
  // 画像出現アニメーション
  ////////////

  $(window).on("scroll", function () {
    // .information__imgが存在する場合のみ処理を実行
    if ($(".information__img").length > 0) {
      var windowPosition = $(window).scrollTop() + $(window).height();
      var boxPosition = $(".information__img").offset().top;
      if (windowPosition >= boxPosition) {
        $(".information__img").addClass("is-active");
      }
    }
    if ($(".voice-card__img--1").length > 0) {
      var voicePosition = $(".voice-card__img--1").offset().top;
      if (windowPosition >= voicePosition) {
        $(".voice-card__img--1").addClass("is-active");
      }
    }

    // .voice-card__img--2が存在する場合のみ処理を実行
    if ($(".voice-card__img--2").length > 0) {
      var voicePosition2 = $(".voice-card__img--2").offset().top;
      if (windowPosition >= voicePosition2) {
        $(".voice-card__img--2").addClass("is-active");
      }
    }

    // .price__imgが存在する場合のみ処理を実行
    if ($(".price__img").length > 0) {
      var pricePosition = $(".price__img").offset().top;
      if (windowPosition >= pricePosition) {
        $(".price__img").addClass("is-active");
      }
    }
  });

  //////////
  // info
  /////////

  // 同ページリンク sp
  $(function () {
    $('.js-tab-link a').click(function () {
      //押されたのが.リストの何番目か調べる
      var number = $('.js-tab-link a').index(this);
      //表示領域を全部非表示にする
      $('.sub-information__tab-cards li').hide();
      //押されたのと同じ番目のを表示する
      $('.sub-information__tab-cards li').eq(number).fadeIn();
      //.activeがついてるのを外す
      $('.js-tab-link a').removeClass('active');
      $('.js-tab-info li').removeClass('active');
      //押activeを付与してる      
      $('.js-tab-info li').eq(number).addClass('active');
    });
  });

  // 同ページリンク footer
  $(function () {
    $('.js-tab-link-footer a').click(function () {
      //押されたのが.リストの何番目か調べる
      var number = $('.js-tab-link-footer a').index(this);
      //表示領域を全部非表示にする
      $('.sub-information__tab-cards li').hide();
      //押されたのと同じ番目のを表示する
      $('.sub-information__tab-cards li').eq(number).fadeIn();
      //.activeがついてるのを外す
      $('.js-tab-link-footer a').removeClass('active');
      $('.js-tab-info li').removeClass('active');
      //押activeを付与してる      
      $('.js-tab-info li').eq(number).addClass('active');
    });
  });

  // タブ
  $(function () {
    $('.js-tab-info li').click(function () {
      //押されたのがリストの何番目か調べる
      var index = $('.js-tab-info li').index(this);
      //表示領域を全部非表示にする
      $('.sub-information__tab-cards li').hide();
      //押されたのと同じ番目のを表示する
      $('.sub-information__tab-cards li').eq(index).fadeIn();
      //.activeがついてるのを外す
      $('.js-tab-info li').removeClass('active');
      //押したやつにactiveを付与してる
      $(this).addClass('active');
    });
  });

  // 他ぺージ
  $(function () {
    //ハッシュタグ読み込み
    var hash = location.hash;
    if (hash.length) {
      //ハッシュがあったら
      if (hash.match(/#info/)) {
        //ハッシュタグが「#tab◯」ってなってたら
        //表示領域を全部非表示にする
        $('.sub-information__tab-cards li').hide();
        //メニューに付いてる「class="active"」を削除
        $('.js-tab-info li').removeClass('active');
        //「#tab◯」を「◯」だけにする
        var tabname = hash.slice(5.1);
        //「n番目を表示する」ってのをやりたいんだけど、
        //順番は0から始まるので「#tab1」は「0」、「#tab2」は「1」になる
        //なのでそのままだといっこ多くなっちゃうから1を引く
        tabname = tabname - 1;
        //n番目の内容を表示する
        $('.sub-information__tab-cards li').eq(tabname).fadeIn();
        //n番目のメニューに「class="active"」を付与する
        $('.js-tab-info li').eq(tabname).addClass('active');
      } else {
        //ハッシュタグが「#tab◯」じゃなかったら
        //1番目のメニューに「class="active"」を付与する
        $('.js-tab-info li').eq(0).addClass('active');
        //内容部分を全部非表示にする
        $('.sub-information__tab-cards li').hide();
        //1番目の内容を表示する
        $('.sub-information__tab-cards li').eq(0).fadeIn();
      }
    } else {
      //ハッシュがなかったら（普通にページ開いたときとか）
      //1番目のメニューに「class="active"」を付与する
      $('.js-tab-info li').eq(0).addClass('active');
      //内容部分を全部非表示にする
      $('.sub-information__tab-cards li').hide();
      //1番目の表示内容を表示する
      $('.sub-information__tab-cards li').eq(0).fadeIn();
    }
  });

  ////////////
  // price
  // 他ページから遷移時、リンクを押すと該当箇所にスクロール
  ////////////

  $(document).ready(function () {
    var hash = window.location.hash; // 現在のURLのハッシュ部分を取得
    if (hash) {
      var targetElement = $(hash); // ハッシュに対応する要素を取得
      if (targetElement.length > 0) {
        var targetOffset = targetElement.offset().top; // ハッシュに対応する要素の位置

        // スクロール実行
        $("html, body").animate({
          scrollTop: targetOffset - (headerHeight + 10)
        }, 800);
      }
    }
  });

  ///////////
  // FAQ アコーディオン
  ///////////
  document.querySelectorAll(".js-accordion").forEach(function (elem) {
    elem.addEventListener("click", function () {
      elem.classList.toggle("open");
    });
  });

  ///////////
  // サイドバー アコーディオン
  ///////////
  function toggleAccordion(accordionElement) {
    var findElm = accordionElement.closest(".aside-archive__items").find(".aside-archive__item");
    $(findElm).slideToggle();
    if (accordionElement.hasClass("close")) {
      accordionElement.removeClass("close");
    } else {
      accordionElement.addClass("close");
    }
  }
  $(document).ready(function () {
    $(".js-archive-accordion.open p").each(function () {
      toggleAccordion($(this));
    });
    $(".js-archive-accordion p").on("click", function () {
      toggleAccordion($(this));
    });
  });

  ////////////
  // about　モーダル
  ////////////

  // モーダル表示
  $(".js-modal").click(function () {
    // まず、クリックした画像の HTML(<img>タグ全体)をコピー
    $(".js-background").html($(this).prop("outerHTML"));
    //そして、fadeInで表示する。
    $(".js-background").fadeIn(200);
    $("body").addClass("loading__no-scroll");
    $(".gallery__item").addClass("active");
    return false;
  });

  // モーダル非表示
  // モーダル画像背景 または 拡大画像そのものをクリックで発火
  $(".js-background").click(function () {
    // 非表示にする
    $(".js-background").fadeOut(200);
    $("body").removeClass("loading__no-scroll");
    $(".gallery__item").removeClass("active");
    return false;
  });
}); // 消さない