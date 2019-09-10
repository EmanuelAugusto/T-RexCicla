 //sidenav
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
  });

 //barra de pesquisa

  $(function(){
      $('#search').click(function(){
    $('#video').hide();
    $('#h5Top').hide();
    $('#desa').hide();
    $('#myList').show();
  });

      $('#Fechar').click(function(){
        $('#myList').hide();
         $('#desa').show();
        $('#h5Top').show();
        $('#video').show();
      });
    });
//filtro de pesquisa
    $(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

//janela modal
document.addEventListener('DOMContentLoaded', function() {
    var modal = sessionStorage.getItem('showmodal');
    console.log(modal);
   if (modal === null){
    var elem = document.getElementById('modal1');
   var instances = M.Modal.init(elem);
     var instance = M.Modal.getInstance(elem);
   instance.open();
   sessionStorage.showmodal = 1;
   }
  });