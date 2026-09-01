import translationsData from './translations.json';

const translations = translationsData;
const languageStorageKey = 'digixtech_language';
const cookieConsentKey = 'digixtech_cookie_consent';
const defaultLanguage = 'th';

function setStoredValue(name, value, days = 365) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    const cookieValue = `${name}=${encodeURIComponent(value)};expires=${expires.toUTCString()};path=/;SameSite=Lax`;

    try {
        document.cookie = cookieValue;
    } catch (e) {
        // Cookie write blocked by browser/privacy mode
    }

    try {
        localStorage.setItem(name, value);
    } catch (e) {
        // localStorage unavailable in some privacy modes
    }
}

function getStoredValue(name) {
    const nameEQ = `${name}=`;
    const cookies = document.cookie.split(';');

    for (let i = 0; i < cookies.length; i++) {
        let c = cookies[i].trim();
        if (c.indexOf(nameEQ) === 0) {
            return decodeURIComponent(c.substring(nameEQ.length));
        }
    }

    try {
        return localStorage.getItem(name);
    } catch (e) {
        return null;
    }
}

function getStoredLanguage() {
    try {
        const savedLanguage = localStorage.getItem(languageStorageKey);
        return translations[savedLanguage] ? savedLanguage : defaultLanguage;
    } catch (e) {
        return defaultLanguage;
    }
}

function applyLanguage(lang) {
    const selectedLanguage = translations[lang] ? lang : defaultLanguage;

    try {
        localStorage.setItem(languageStorageKey, selectedLanguage);
    } catch (e) {
        // Local storage unavailable
    }

    document.documentElement.lang = selectedLanguage;
    document.documentElement.setAttribute('data-lang', selectedLanguage);

    document.querySelectorAll('[data-i18n]').forEach((element) => {
        const key = element.dataset.i18n;
        const nextText = translations[selectedLanguage][key];

        if (!nextText) {
            return;
        }

        element.style.transition = 'opacity 0.2s ease, transform 0.2s ease';
        element.style.opacity = '0';
        element.style.transform = 'translateY(4px)';

        setTimeout(() => {
            // ตรวจสอบว่าเป็น input หรือ textarea สำหรับเปลี่ยน placeholder
            if (element.tagName === 'INPUT' || element.tagName === 'TEXTAREA') {
                element.placeholder = nextText;
            } else {
                // สำหรับ element ทั่วไป (เช่น span, p, label, button)
                element.innerHTML = nextText;
            }
            // element.textContent = nextText;
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, 120);
    });

    const languageSelect = document.getElementById('language-select');
    if (languageSelect) {
        languageSelect.value = selectedLanguage;
    }

    const cookieTitle = document.getElementById('cookie-banner-title');
    const cookieSubtitle = document.getElementById('cookie-banner-subtitle');
    const cookieAccept = document.getElementById('cookie-accept');
    const cookieClose = document.getElementById('cookie-close');

    if (cookieTitle && translations[selectedLanguage].cookie_title) {
        cookieTitle.textContent = translations[selectedLanguage].cookie_title;
    }

    if (cookieSubtitle && translations[selectedLanguage].cookie_subtitle) {
        cookieSubtitle.textContent = translations[selectedLanguage].cookie_subtitle;
    }

    if (cookieAccept && translations[selectedLanguage].cookie_accept) {
        cookieAccept.textContent = translations[selectedLanguage].cookie_accept;
    }

    if (cookieClose && translations[selectedLanguage].cookie_close) {
        cookieClose.textContent = translations[selectedLanguage].cookie_close;
    }
}

function hideCookieBanner() {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.add('hidden');
    }
}

function acceptCookies() {
    setStoredValue(cookieConsentKey, 'accepted', 365);
    hideCookieBanner();
}

document.addEventListener('DOMContentLoaded', () => {
    const languageSelect = document.getElementById('language-select');
    if (languageSelect) {
        languageSelect.value = getStoredLanguage();
        languageSelect.addEventListener('change', (event) => {
            applyLanguage(event.target.value);
        });
    }

    applyLanguage(getStoredLanguage());
    document.documentElement.setAttribute('data-lang-ready', 'true');

    const cookieBanner = document.getElementById('cookie-banner');
    const cookieAccept = document.getElementById('cookie-accept');
    const cookieClose = document.getElementById('cookie-close');

    if (getStoredValue(cookieConsentKey) !== 'accepted') {
        if (cookieBanner) {
            cookieBanner.classList.remove('hidden');
        }
    }

    if (cookieAccept) {
        cookieAccept.addEventListener('click', acceptCookies);
    }

    if (cookieClose) {
        cookieClose.addEventListener('click', hideCookieBanner);
    }
});
