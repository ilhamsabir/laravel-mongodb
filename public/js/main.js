$(document).ready(function () {
    console.log('im on');
    $('#main-table').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
});
