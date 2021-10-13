$(document).on('click','#btn-edit', function(){
    $('.modal-body #id-game').val($(this).data('id'));
    $('.modal-body #nama').val($(this).data('nama'));
    $('.modal-body #genre').val($(this).data('genre'));
    $('.modal-body #ukuran').val($(this).data('ukuran'));
    $('.modal-body #tahun').val($(this).data('tahun'));
})