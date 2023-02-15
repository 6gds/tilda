<header class="header">
    <div class="header__contacts header-contacts">
        <a href="tel:{{Formatting::tel($tel ?? '88005553535')}}" class="header-contacts__link header-contacts__link_tel contacts-link">
            <span class = "contacts-link__action main__link">Позвонить</span>
            <span class = "contacts-link__value">{{Formatting::tel($tel ?? '88005553535')}}</span>
        </a>
    </div>
</header>
