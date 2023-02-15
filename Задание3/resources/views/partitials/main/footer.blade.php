<footer>
    <div class="footer__contacts footer-contacts">
        <a href="tel:{{Formatting::tel($tel ?? '88005553535')}}" class="footer-contacts__link footer-contacts__link_tel contacts-link">
            <span class = "contacts-link__action main__link">Позвонить</span>
            <span class = "contacts-link__value">{{Formatting::tel($tel ?? '88005553535')}}</span>
        </a>
    </div>
</footer>
