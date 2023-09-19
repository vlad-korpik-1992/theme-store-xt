<!DOCTYPE html>
<html lang="ru">
<head>
	<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <title><?php wp_title("", true); ?></title>
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__top">
                <a class="logo" href="/">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="На Главную">
                </a>
            </div>
            <img class="catalog-img-absolute-top" src="<?php bloginfo('template_url'); ?>/assets/img/catalog--absolute.png" alt="">
        </div>
        <div class="header__right">
            <nav class="menu">
                <a href="" onclick="openMenu(event)" class="menu__btn">
                    <span class="menu__btn__element"></span>
                </a>
                <ul class="menu__list">
                    <li class="menu__list__items menu-open-one">
                        <a class="menu__list__link" href="<?php echo get_page_link(135)?>">Наши проекты</a>
                    </li>
                    <li class="menu__list__items menu-open-shop">
                        <a class="menu__list__link" href="#">Онлайн магазин</a>
                    </li>
                    <li class="menu__list__items menu-open-donat">
                        <a class="menu__list__link" href="<?php echo get_page_link(24)?>">Донаты</a>
                    </li>
                </ul>
            </nav>
            <div class="social">
                <div class="social__items">
                    <a class="social__items__link" href="#">
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path d="M15.9927 8.00393C17.2354 8.00393 18.4759 7.99257 19.7187 8.00847C20.757 8.02211 21.6794 8.37653 22.4723 9.05585C23.1085 9.59885 23.5492 10.2713 23.7991 11.0665C23.9286 11.48 23.9991 11.9026 23.9991 12.3343C23.9991 14.8016 24.0104 17.2713 23.9945 19.7386C23.9877 20.7701 23.6219 21.6834 22.9517 22.4672C22.2951 23.2374 21.4658 23.7214 20.4707 23.9145C20.2208 23.9622 19.9618 23.994 19.7073 23.994C17.2468 24.0008 14.7863 24.0031 12.3257 23.994C11.3397 23.9917 10.4514 23.6759 9.67662 23.0648C8.80192 22.3718 8.25892 21.4744 8.07262 20.3702C8.03399 20.1453 8.009 19.9136 8.00673 19.6841C8.00219 17.2077 7.9931 14.7312 8.009 12.257C8.01582 11.2278 8.38388 10.3145 9.05638 9.52842C9.74932 8.7196 10.6286 8.24021 11.6714 8.05619C11.86 8.02211 12.0554 8.0062 12.2462 8.00393C13.4935 8.00166 14.7431 8.00393 15.9927 8.00393ZM16.004 22.5445C17.2036 22.5445 18.4055 22.549 19.6051 22.5422C19.8255 22.54 20.0504 22.5172 20.2685 22.4741C21.5703 22.2037 22.545 20.9996 22.545 19.6682C22.545 17.2258 22.5473 14.7835 22.5427 12.3411C22.5427 12.1639 22.5268 11.9844 22.4928 11.8117C22.2065 10.4122 21.0296 9.45799 19.5983 9.45799C17.1968 9.45799 14.7976 9.45572 12.3962 9.46026C12.178 9.46026 11.9577 9.48525 11.7441 9.52842C10.4241 9.80105 9.45624 11.0006 9.45624 12.3479C9.45624 14.7448 9.45624 17.1418 9.45624 19.5387C9.45624 19.675 9.46078 19.8113 9.47669 19.9454C9.56075 20.7428 9.92199 21.3926 10.54 21.897C11.0784 22.3377 11.7055 22.5445 12.403 22.5445C13.6048 22.5445 14.8044 22.5445 16.004 22.5445Z" fill="#7A7A7A"/>
                            <path d="M19.6642 15.9807C19.6665 17.9391 18.0898 19.6113 16.0223 19.6045C13.9979 19.5977 12.3894 17.9846 12.3985 15.9489C12.4076 13.8882 14.1002 12.3024 16.0995 12.3365C18.0625 12.3683 19.6824 13.9905 19.6642 15.9807ZM16.0314 13.7928C14.8249 13.7928 13.8503 14.7652 13.8503 15.9671C13.8525 17.1735 14.8249 18.1459 16.0314 18.1504C17.2287 18.155 18.2011 17.1758 18.2102 15.9693C18.217 14.7743 17.2309 13.7792 16.0314 13.7928Z" fill="#7A7A7A"/>
                            <path d="M20.0027 11.2754C20.4026 11.2754 20.7275 11.6026 20.7275 12.0047C20.7275 12.4046 20.4003 12.7294 19.9982 12.7294C19.5983 12.7294 19.2734 12.4023 19.2734 12.0001C19.2734 11.6003 19.6006 11.2754 20.0027 11.2754Z" fill="#7A7A7A"/>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#CFCFCF"/>
                        </svg>
                    </a>
                </div>
                <div class="social__items">
                    <a class="social__items__link" href="#">
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path d="M13.6473 15.9942C13.0746 15.9942 12.5491 15.9942 12 15.9942C12 15.0924 12 14.2138 12 13.3004C12.5314 13.3004 13.0687 13.3004 13.6355 13.3004C13.6355 12.6545 13.6178 12.0495 13.6414 11.4385C13.6709 10.8102 13.7418 10.1818 14.037 9.60582C14.468 8.78545 15.1647 8.27927 16.0917 8.18618C17.1899 8.07564 18.294 8.05818 19.4277 8C19.4277 8.95418 19.4277 9.83855 19.4277 10.7578C19.0321 10.7578 18.6424 10.752 18.2527 10.7578C18.0224 10.7636 17.7863 10.7811 17.556 10.8218C17.1781 10.8916 16.9951 11.1709 16.9774 11.7295C16.9597 12.2298 16.9715 12.736 16.9715 13.2771C17.8158 13.2771 18.6424 13.2771 19.5044 13.2771C19.4808 13.6087 19.469 13.8996 19.4395 14.1905C19.3922 14.6735 19.3155 15.1564 19.2801 15.6451C19.2623 15.8953 19.1974 16.0058 18.9199 16C18.2822 15.9825 17.6446 15.9942 16.9833 15.9942C16.9833 18.6705 16.9833 21.3236 16.9833 24C15.8614 24 14.7691 24 13.6473 24C13.6473 21.3469 13.6473 18.6938 13.6473 15.9942Z" fill="#7A7A7A"/>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#CFCFCF"/>
                        </svg>
                    </a>
                </div>
                <div class="social__items">
                    <a class="social__items__link" href="#">
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path d="M21.9582 11.0922L19.7449 21.2757C19.5778 21.9942 19.1425 22.1731 18.5238 21.8348L15.1511 19.4102L13.524 20.9373C13.3438 21.1131 13.1935 21.2598 12.8461 21.2598L13.0887 17.9091L19.3389 12.399C19.6108 12.1629 19.2797 12.0316 18.9167 12.2682L11.1897 17.0152L7.86313 15.9992C7.13967 15.7789 7.12657 15.2933 8.014 14.9545L21.0252 10.0639C21.6277 9.84359 22.1547 10.1947 21.9582 11.0927V11.0922Z" fill="#7A7A7A"/>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#CFCFCF"/>
                        </svg>
                    </a>
                </div>
                <div class="social__items">
                    <a class="social__items__link" href="#">
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path d="M9 9.00498C9.27403 9.00498 9.48445 9.00498 9.68997 9.00498C10.8497 9.00498 12.0045 9.00997 13.1643 9C13.3355 9 13.4432 9.04983 13.546 9.19433C14.5687 10.5845 15.5963 11.9647 16.6239 13.3499C16.6631 13.3998 16.7071 13.4496 16.7658 13.5243C16.9713 13.2951 17.172 13.0809 17.3677 12.8616C18.4834 11.6259 19.5942 10.3902 20.7148 9.15945C20.7931 9.07474 20.9301 9.01495 21.0426 9.00997C21.5124 8.99502 21.9822 9.00498 22.5204 9.00498C20.8273 10.8835 19.1783 12.7171 17.5194 14.5608C19.3397 17.0272 21.1552 19.4837 22.9951 21.9751C22.8826 21.9851 22.814 21.995 22.7455 21.995C21.4488 21.995 20.152 21.99 18.8553 22C18.6742 22 18.5568 21.9452 18.4491 21.7957C17.3873 20.3557 16.3205 18.9157 15.2587 17.4806C15.2097 17.4159 15.1608 17.3561 15.0972 17.2714C14.6029 17.8245 14.1185 18.3626 13.634 18.8957C12.7532 19.8773 11.8773 20.8589 10.9867 21.8306C10.9084 21.9203 10.7567 21.9801 10.6344 21.9851C10.1744 22.005 9.70954 21.99 9.17616 21.99C10.9231 20.0418 12.6211 18.1483 14.3436 16.23C12.5722 13.8383 10.8057 11.4465 9 9.00498ZM11.0357 9.9816C11.1188 10.1012 11.1629 10.166 11.2118 10.2307C13.7123 13.614 16.2226 16.9874 18.6987 20.3856C19.0412 20.854 19.374 21.1031 19.9514 21.0184C20.2744 20.9736 20.6071 21.0084 20.9839 21.0084C20.8909 20.8789 20.8322 20.7992 20.7735 20.7244C19.3544 18.8061 17.9402 16.8927 16.5211 14.9743C15.3418 13.3749 14.1527 11.7704 12.9636 10.166C12.9049 10.0862 12.8071 9.99157 12.7239 9.98658C12.1807 9.97164 11.6375 9.9816 11.0357 9.9816Z" fill="#7A7A7A"/>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#CFCFCF"/>
                        </svg>
                    </a>
                </div>
                <div class="social__items">
                    <a class="social__items__link" href="#">
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path d="M21.7075 12.6716C20.9454 12.6716 20.2423 12.4192 19.6777 11.9933C19.0301 11.505 18.5648 10.7889 18.4005 9.96342C18.3593 9.75587 18.3376 9.54491 18.3358 9.33331H16.1589V15.2818L16.1563 18.54C16.1563 19.4111 15.589 20.1497 14.8027 20.4095C14.5671 20.4874 14.3191 20.5203 14.0714 20.5065C13.7438 20.4885 13.4368 20.3897 13.17 20.23C12.6023 19.8905 12.2173 19.2745 12.2069 18.5698C12.1904 17.4684 13.0808 16.5704 14.1814 16.5704C14.3987 16.5704 14.6073 16.6059 14.8027 16.6703V14.46C14.5966 14.4295 14.3869 14.4136 14.1749 14.4136C12.9702 14.4136 11.8436 14.9143 11.0382 15.8164C10.4295 16.4982 10.0643 17.368 10.008 18.28C9.93421 19.4781 10.3726 20.6171 11.2228 21.4574C11.3478 21.5808 11.479 21.6953 11.6161 21.8009C12.3451 22.3619 13.2363 22.666 14.1749 22.666C14.3869 22.666 14.5966 22.6503 14.8027 22.6198C15.6795 22.4899 16.4885 22.0885 17.127 21.4574C17.9115 20.682 18.3449 19.6526 18.3496 18.557L18.3384 13.6914C18.7136 13.9807 19.1245 14.2204 19.5611 14.4044C20.2441 14.6926 20.9684 14.8387 21.7138 14.8384V12.6711C21.7143 12.6716 21.708 12.6716 21.7075 12.6716Z" fill="#7A7A7A"/>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#CFCFCF"/>
                        </svg>
                    </a>
                </div>
                <div class="social__items">
                    <a class="social__items__link" href="#">
                        <svg class="social__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.3627 12.7794C24.3627 12.7794 24.1957 11.5777 23.6843 11.0484C23.0352 10.3535 22.3077 10.3503 21.9744 10.3099C19.5861 10.1334 16.0037 10.1334 16.0037 10.1334H15.9963C15.9963 10.1334 12.4139 10.1334 10.0256 10.3099C9.69174 10.3503 8.96481 10.3535 8.31521 11.0484C7.80374 11.5777 7.63734 12.7794 7.63734 12.7794C7.63734 12.7794 7.46667 14.191 7.46667 15.602V16.9253C7.46667 18.3369 7.63734 19.748 7.63734 19.748C7.63734 19.748 7.80374 20.9497 8.31521 21.479C8.96481 22.1738 9.81761 22.152 10.1973 22.2245C11.5627 22.3586 16 22.4 16 22.4C16 22.4 19.5861 22.3946 21.9744 22.218C22.3077 22.1771 23.0352 22.1738 23.6843 21.479C24.1957 20.9497 24.3627 19.748 24.3627 19.748C24.3627 19.748 24.5333 18.3369 24.5333 16.9253V15.602C24.5333 14.191 24.3627 12.7794 24.3627 12.7794Z" fill="#7A7A7A"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2378 18.5288L14.2373 13.6285L18.8485 16.0871L14.2378 18.5288Z" fill="white"/>
                            <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#CFCFCF"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="basket">
                <a class="backet__link" href="#">
                    <svg class="social__icon--basket" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62 62" fill="none">
                        <path d="M20.3334 40.3334C20.3334 41.0406 20.6143 41.7189 21.1144 42.219C21.6145 42.7191 22.2928 43 23 43C23.7073 43 24.3856 42.7191 24.8857 42.219C25.3858 41.7189 25.6667 41.0406 25.6667 40.3334C25.6667 39.6261 25.3858 38.9478 24.8857 38.4477C24.3856 37.9476 23.7073 37.6667 23 37.6667C22.2928 37.6667 21.6145 37.9476 21.1144 38.4477C20.6143 38.9478 20.3334 39.6261 20.3334 40.3334Z" stroke="#7A7A7A" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M35 40.3334C35 41.0406 35.281 41.7189 35.781 42.219C36.2811 42.7191 36.9594 43 37.6667 43C38.3739 43 39.0522 42.7191 39.5523 42.219C40.0524 41.7189 40.3333 41.0406 40.3333 40.3334C40.3333 39.6261 40.0524 38.9478 39.5523 38.4477C39.0522 37.9476 38.3739 37.6667 37.6667 37.6667C36.9594 37.6667 36.2811 37.9476 35.781 38.4477C35.281 38.9478 35 39.6261 35 40.3334Z" stroke="#7A7A7A" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M37.6667 37.6667H23V19H20.3334" stroke="#7A7A7A" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23 21.6667L41.6667 23L40.3333 32.3334H23" stroke="#7A7A7A" stroke-width="2.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </header>