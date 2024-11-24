document.addEventListener("DOMContentLoaded", function () {
    // Cari semua elemen img dengan class 'ft'
    const images = document.querySelectorAll("img.ft");

    images.forEach(img => {
        // Ambil container dari elemen img
        const container = img.parentElement;

        // Cek apakah elemen memiliki atribut width, height, alt, dan title
        const width = img.getAttribute("width");
        const height = img.getAttribute("height");
        const alt = img.getAttribute("alt");
        const title = img.getAttribute("title");

        // Jika width tidak ada atau tidak memiliki nilai
        if (!width || width.trim() === "") {
            const containerWidth = container.offsetWidth;
            img.setAttribute("width", containerWidth);
        }

        // Jika height tidak ada atau tidak memiliki nilai
        if (!height || height.trim() === "") {
            const containerHeight = container.offsetHeight;
            img.setAttribute("height", containerHeight);
        }

        // Jika alt tidak ada atau tidak memiliki nilai
        if (!alt || alt.trim() === "") {
            img.setAttribute("alt", "photo");
        }

        // Jika title tidak ada atau tidak memiliki nilai
        if (!title || title.trim() === "") {
            img.setAttribute("title", "photo");
        }
    });
});
