const rollSound = new Audio("song/song.mp3");
$('#mac1').click(e => rollSound.play());
$('#mac2').click(e => rollSound.play());
$('#mac3').click(e => rollSound.play());
const rollSound2 = new Audio("song/song2.mp3");
$('#cell').click(e => rollSound2.play());
$('#cell2').click(e => rollSound2.play());
const rollSound3 = new Audio("song/Song3.mp3");
$('#garr').click(e => rollSound3.play());
$('#garr2').click(e=> rollSound3.play());
const rollSound4 = new Audio("song/song4.mp3");
$('#easter1').click( e=> rollSound4.play());
const rollsound5 = new Audio("song/song5.mp3");
$('#lata').click(e=> rollsound5.play());
$('#lata2').click(e=> rollsound5.play());
$(function(){
	/*maçã*/
	$('#mac1').click(function(){
		$('#mac1').hide();
		$('#mac2').show();
	});
	$('#mac2').click(function(){
		$('#mac2').hide();
		$('#mac3').show();
	});
	/*celular*/
	$('#cell').click(function(){
		$('#cell').hide();
		$('#cell2').show();
	});
	//garrafa
	$('#garr').click(function(){
		$('#garr').hide();
		$('#garr2').show();
	});
//LATA
	$('#lata').click(function(){
		$('#lata').hide();
		$('#lata2').show();
	})
	//janela modal
	$('#mac3').click(function(){
        $('#modal1').show();
	});
	$('#cell2').click(function(){
		$('#modal2').show();
	});
	$('#garr2').click(function(){
		$('#modal3').show();
	});
	$('#lata2').click(function(){
		$('#modal4').show();
	});
	//fechar janela modal
	$('#close').click(function(){
		$('#modal1').hide();
	});
	$('#close2').click(function(){
		$('#modal2').hide();
	});
	$('#close3').click(function(){
		$('#modal3').hide();
	})
	$('#close4').click(function(){
		$('#modal4').hide();
	});
});


var easter = 0;

function easterEgg(){
	easter += 1;
	if (easter == 1) {
		$(function(){
		$('#modal1').hide();
		$('#modaleaster').show();
		$('#close5').click(function(){
		$('#modaleaster').hide();
		easter = 0;
		});
	});
        
	}

}

var easter1 = document.getElementById('easter1').addEventListener("click", easterEgg); 

