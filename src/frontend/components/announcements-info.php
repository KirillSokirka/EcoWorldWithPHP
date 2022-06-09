<div class="announcement-info-wrapper">
    <div class="wrapper__info__content">
        <div class="title">
            Допоможіть прибрати набережну
            <hr class="hr" />
        </div>

        <div class="info">
            <label class="label" for="location">Адреса:</label>
            <p class="info__text" id="location">м. Васильків, вул Зарічна</p>
        </div>

        <div class="info">
            <label class="label" for="date">Час проведення:</label>
            <p class="info__text" id="date">20 травня 2022 об 11:00</p>
        </div>

        <div class="info">
            <label class="label" for="people">Вже відгукнулося:</label>
            <p class="info__text" id="people">10 небайдужих</p>
        </div>

        <div class="buttons" id="btn__big_screen">
            <button class="apply__btn">Відгукнутися</button>
            <a type="button"><img class="like__image" src="frontend/images/heart.svg"></a>
        </div>
    </div>

    <div class="info__description">
        <div class="desc__header">
            <p class="desc__header__title">Опис</p>
            <img class="desc__header__img">
        </div>
        <div class="desc__content" id="desc_content" style="display: none;">
            <div class="desc__content__text">
                На цьому суботнику ми будемо прибирати чудову набережну нашого міста.<br>
                Рекомендую взяти з собою:
                рукавички,
                мішки для сміття,
                термос з чаєм та канапки
            </div>
            <div class="desc__content__author">
                Автор оголошення: Олена
            </div>
        </div>
        <hr class="hr" />
    </div>

    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="frontend/images/rubbish-images.jpeg">
            </div>
            <div class="swiper-slide">
                <img src="frontend/images/rubbish-images.jpeg">
            </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <div class="buttons" class="btn__small_screen">
        <button class="apply__btn">Відгукнутися</button>
        <a type="button"><img class="like__image" src="frontend/images/heart.svg"></a>
    </div>

</div>

<script src="frontend/js/announcment-info.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script type="text/javascript">
    const swiper = new Swiper('.swiper', {
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    console.log(swiper);
</script>