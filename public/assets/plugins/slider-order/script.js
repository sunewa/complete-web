/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Dynamic Drag and Drop with jQuery and PHP
*/
$(function() {
    $('#sortable').sortable({
        axis: 'z',
        opacity: 0.4,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
        // change order in the database using Ajax
            $.ajax({
                url: '{{ route('client.slider.order') }}',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                data: {list_order:list_sortable},
                success: function(data) {
                    //finished
                    //console.log(data);
                }
            });
        }
    }); // fin sortable
});
