
@extends('layout')

@section('container')
<div class="announcement-info-wrapper">
    <div class="wrapper__info__content">
        <div class="title">
            {{$item->title}}
            <hr class="hr" />
        </div>

        <div class="info">
            <label class="label" for="location">Адреса:</label>
            <p class="info__text" id="location">{{$item->location}}</p>
        </div>

        <div class="info">
            <label class="label" for="date">Час проведення:</label>
            <p class="info__text" id="date">{{$item->date}}</p>
        </div>

        <div class="info">
            <label class="label" for="people">Вже відгукнулося:</label>
            <p class="info__text" id="people">{{$item->personCount}} небайдужих</p>
        </div>

        <div class="buttons" id="btn__big_screen">
            <button class="apply__btn">Відгукнутися</button>
            <a type="button"><img class="like__image" src="../images/heart.svg"></a>
        </div>
    </div>

    <div class="info__description">
        <div class="desc__header">
            <p class="desc__header__title">Опис</p>
            <img class="desc__header__img">
        </div>
        <div class="desc__content" id="desc_content" style="display: none;">
            <div class="desc__content__text">
               {{$item->description}}
            </div>
            <div class="desc__content__author">
                Автор оголошення: Олена
            </div>
        </div>
        <hr class="hr" />
    </div>

    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($item->imagesUrl as $image)
                <div class="swiper-slide">
                    <img src={{$image}}>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <div class="buttons" class="btn__small_screen">
        <button class="apply__btn">Відгукнутися</button>
        <a type="button"><img class="like__image" src="../images/heart.svg"></a>
    </div>

</div>
@endsection

