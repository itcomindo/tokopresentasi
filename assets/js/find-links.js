document.addEventListener("DOMContentLoaded", function () {
    // Temukan semua elemen a dengan class 'fl' di dalam elemen div
    const links = document.querySelectorAll("div a.fl");

    links.forEach(link => {
        // Periksa atribut title
        const title = link.getAttribute("title");

        // Jika title tidak ada atau kosong
        if (!title || title.trim() === "") {
            // Ambil teks dari elemen a
            const textContent = link.textContent.trim();

            // Jika teks ada, set nilai title
            if (textContent) {
                link.setAttribute("title", textContent);
            }
        }
    });
});
