document.addEventListener("DOMContentLoaded", function () {
    const logos = document.querySelectorAll('.logo');

    const setLogo = () => {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const logoSrc = prefersDark
            ? "/images/logoBlanco.png"
            : "/images/logoNegro.png";

        logos.forEach(logo => {
            if (!logo) return;
            logo.src = logoSrc;
        });
    };

    setLogo();
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', setLogo);
});
