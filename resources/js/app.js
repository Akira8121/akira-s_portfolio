import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import "swiper/css/navigation";
import "swiper/css/pagination";

import Alpine from 'alpinejs';
import axios from 'axios';
window.axios = axios;

window.Alpine = Alpine;
Alpine.start();

// ハンバーガーメニューの設定
document.addEventListener('DOMContentLoaded', () => {
  const mobileMenu = document.getElementById('mobile-menu');
  const menuLinks = mobileMenu.querySelectorAll('a');

  const hamburger = document.getElementById('hamburger');
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');

    mobileMenu.classList.toggle('active');

  });

  // メニュー内リンククリックで閉じる
  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('active');
      mobileMenu.classList.remove('active');
    });
  });
});

// WORKSページに実装した機能
if (document.querySelector('.mySwiper')) {
  new Swiper('.mySwiper', {
    loop: true,
    effect: 'fade',
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
  });
}

// タグ絞り込み（URLパラメータ対応）
document.addEventListener('DOMContentLoaded', () => {
  const urlParams = new URLSearchParams(window.location.search);
  const activeTag = urlParams.get('tag');
  if (activeTag) {
    const activeBtn = document.querySelector(`a[href*="tag=${activeTag}"]`);
    if (activeBtn) {
      activeBtn.classList.add("ring-4", "ring-blue-300");
    }
  }
});