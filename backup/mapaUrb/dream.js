class buttonsController{

  constructor(){

    this.run();

  }

  run(){
    var buttons = document.querySelectorAll('#botoes > a');

    buttons[0].addEventListener('click',e=>{

      document.querySelector('.maps').innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1011125.0668396153!2d-35.64324789446856!3d-8.131253141268099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sreserva+ecologica!5e0!3m2!1spt-BR!2sbr!4v1559054633540!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>`;

    });
    buttons[1].addEventListener('click',e=>{

      document.querySelector('.maps').innerHTML = `<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63208.25587258368!2d-34.93935298271526!3d-8.048730065028005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sreciclagem!5e0!3m2!1spt-BR!2sbr!4v1558565410677!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>`;

    });

  }


}
var teste = new buttonsController();
