class controller {

  constructor(){

    this.sendButton();
    this.data = {}; // JSON PARA ARMAZENAR DADOS DOS FORMULARIOS
    this.userHits = []; // acertos do usuario
    this.userMistakes = []; // erros do usuario não utilizado, más possivelmente utilizado em possivel refaturação
    this.trueHits = [1,0,0,2,1,0]; // array das respostas certas

  }
  getFormAnswere(){
    document.querySelectorAll("#quest form").forEach((element,index)=>{ // cria e percorre todos os formularios dentro da ID quest
        let num = element.querySelectorAll("p label input"); // entra em P label e input do elemento da vez do forEach acima
        for(let i = 0; i < num.length; i ++){ // percorre todos os inputs para verificar se ele está checked ou não

          if (num[i].checked) {                     // se estiver checked ele atribui o numero do formulario qual

            this.data["form"+index] = i;  // index signifca o objeto da vez do forEach e index o input dentro dele

          }else {
            //empt
          }

        }
      }
    );


  }
  sendButton(){

    document.getElementById('buttonSend').addEventListener("click",e=>{ // adiciona evento de click ao botao enviar
      this.getFormAnswere(); //pepga todas as respostas do formulario
        if (this.validForm()) { // se todas estiverem preenchidas ele executa esse if que remove todo o quiz

          this.initialize();   //

        }else {

          alert("Hmm.. Você esqueceu de responder alguma pergunta..."); // pelo amor de deus lembrar de colocar algo descente

        }


    });

  }

  initialize(){ //initialize o toda interatividade do quiz

    let childs = document.getElementById('quest');

    while(childs.firstChild){ // "Enquanto childs tiver filhos"

      childs.removeChild(childs.firstChild); // Remova os filhos dele

    }

    this.compareRequest(); // verifica quantas a pessoa acertou
    this.divCenterController(); // chama a tela de "Calculando respostas"
  }
  validForm(){ // validação de formularios, verifica se todos estão checked, parte sujeita a refaturamento

    let values = [];          // cria um array vazio
    for (var i = 0; i < 6; i++) { // pega todo mundo do JSON e coloca no array

      values[i] = this.data["form"+i]; //

    } // termina laço
    if (values.indexOf(undefined) == -1) { // verifica se não tem undefined no array

      return true; // retorna true

    }else {

      return false; // retorna false se tiver undefined no array

    }


  }
  divCenterController(){ // responsavel por colocar a mensagem de "verificação de respostas"

      let quest = document.getElementById("quest");

      quest.innerHTML = `<div class="center 1"  style="width:100%; heigth:80px;"><img class="responsive-img" id="loadDino" src="img/dino.gif"><h3>Carregando...</h3></div>`; // div do dinossauro "mensagem de verificação de repostas"

      setTimeout(e=>{ // coloca o aviso de carregamento e processamento de dados

      while(quest.firstChild){ // estrutura de repetição pra remover a mensagem de carregamento

      quest.removeChild(quest.firstChild); // remove a estrutura de carregamento.

        }

        this.step2(); // etapa2, imprime o resultado
      },parseInt(Math.floor(Math.random() * (12 - 4) + 4).toString() + "000")); // gera um inteiro minimo 4 maximo 12, passa pra string, concatena com 000 e passa pra int novamente.



  }
  compareRequest(){

    let userAnswers = Object.values(this.data);

    for (let i = 0; i < userAnswers.length; i++) {

      if (this.trueHits[i] == userAnswers[i]) {

        this.userHits.push(true);

      }else {

        this.userMistakes.push(false);

      }

    }


  }
  step2(){ // responsavel por imprimir o resultado e status final da aplicação
    let textoComplementar = (this.userHits.length > 3) ? "Parabéns você recicla bastante, é um bom usuário e ativo" :
    "Você precisa estudar mais sobre o assunto, por favor acesse nossos conteúdos"; // if ternario para definir texto de complemento
    let quest = document.getElementById("quest");  // seleciona a div central de todo conteudo


    quest.innerHTML = `
      <div id="result" class="center">
      <h3><img class="responsive-img" src="img/dinoDica.png">${textoComplementar}</h3>
      <h4>Você acertou: ${this.userHits.length} de ${this.trueHits.length}</h4>
       <button class="btn waves-effect waves-light" type="submit" name="action" id="buttonReload">Tentar novamente
        <i class="material-icons right">autorenew</i>
        </button>
    </div> <br><br>`; // ${} serve para referenciar variavel dentro do template string, poderia ter usado o inner direto la encima sem ter que atribuir variavel, mas parte sujeita a alteração.

    document.getElementById("buttonReload").addEventListener("click",e=>{

      location.reload();

    });
  }



}
var quiz = new controller();
