jQuery(document).ready(function () {

    function stripOne() {
        var $groups = jQuery('#x1 .groups');
        var $items = $groups.html(); // Salin semua item di dalam carousel

        // Gandakan elemen untuk menciptakan ilusi infinite loop
        $groups.append($items);

        // Perbaikan posisi saat animasi selesai
        $groups.on('animationiteration', function () {
            $groups.css('transform', 'translateX(0)');
        });
    }
    stripOne();



    function stripTwo() {
        var $groups = jQuery('#x2 .groups');
        var $items = $groups.html(); // Salin semua item di dalam carousel

        // Gandakan elemen untuk menciptakan ilusi infinite loop
        $groups.append($items);

        // Perbaikan posisi saat animasi selesai
        $groups.on('animationiteration', function () {
            $groups.css('transform', 'translateX(0)');
        });
    }
    stripTwo();


});
