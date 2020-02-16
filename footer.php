    
    <footer class="rodape bg-success">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/datatables.min.js"></script>

        
        <script type="text/javascript">
            
                    $(window).on('load',function(){
                        
                        $('#myModal').modal('show');
                    });
                    setTimeout(function() {$('#myModal').modal('hide');}, 3000);
                      
                </script>
        <script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#listar-dados').DataTable({			
    "autowidth": false,
  
    "language": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        },
        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [-1], //last column
                "orderable": false, //set not orderable
            },
        ],
    });
} );
</script>

    </footer>

</body>
</html>