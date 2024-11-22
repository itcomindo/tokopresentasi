window.addEventListener('DOMContentLoaded', (event) => {
    jQuery(function () {
        //JQuery start below.
        //infiniteVerticalSlide start.
        function infiniteVerticalSlide() {
            var container = jQuery('#issues .right');
            var items = container.find('span');
            var itemHeight = items.first().outerHeight(); // Tinggi satu elemen

            function slide() {
                // Ambil elemen pertama (dengan class active)
                var activeItem = container.find('span.active');

                // Lakukan transform untuk menggeser elemen aktif ke atas
                activeItem.animate(
                    { transform: 'translateY(-' + itemHeight + 'px)' },
                    500, // Durasi animasi
                    'swing',
                    function () {
                        // Setelah animasi selesai, pindahkan elemen ke bawah
                        activeItem.removeClass('active'); // Hapus class active
                        container.append(activeItem.css('transform', 'translateY(0)')); // Reset posisi elemen
                    }
                );

                // Tambahkan class active ke elemen berikutnya
                var nextItem = activeItem.next('span');
                if (!nextItem.length) {
                    nextItem = items.first(); // Jika elemen terakhir, mulai dari awal
                }
                nextItem.addClass('active');
            }

            // Jalankan loop infinite
            setInterval(slide, 2000); // Interval pergantian
        }
        infiniteVerticalSlide();
        //infiniteVerticalSlide end.


        //JQuery end above.
    });
});