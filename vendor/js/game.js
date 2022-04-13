/*
   Les constantes
 */
const divRestult = document.querySelector("#result");
const pseudoGame = document.querySelector("pseudoGame");
const progressBar = document.querySelector(".progress-inner");
const timeSpan = document.querySelector(".time");
const timeFinal = document.querySelector(".timeFinal");
const completeBar = document.querySelector(".barProgress");
const winGame = document.querySelector(".winGame");
const loseGame = document.querySelector(".loseGame");

/*Lorsque l'on perd*/
const tabOver= [
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
	[0,0,0,0,0,0,0],
];


/*
   Les variables
 */

/*table dynamique au début du jeu*/
let tabGame= [
    [0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0],
];

/*let tabResult= [
    [1,1,2,2,3,3,4],
    [4,6,6,7,7,8,8],
    [10,10,11,11,12,12,15],
    [15,16,16,17,17,14,14],
];*/

let tabResult = generateArray();

let oldSelection = [];
let nbDisplay = 0;
let ready = true;
let timeStart = false;
let points = 0;
let interval = 120;

displayArray();

/*
   Les fonctions
   *************************************
 */

function generateArray(){
	let nbImagePosition = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
	let ramdomGame = [
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
		[0,0,0,0,0,0,0],
	];
	let ramdom = [];

	for (let i = 0 ; i < 4 ; i++){
		for (let j = 0 ; j < 7 ; j++){
			let end = false;
			while (!end && (nbImagePosition.includes(0) === true) || (nbImagePosition.includes(1) === true)){
				let ramdomImage = Math.floor(Math.random() * 14);
				if (nbImagePosition[ramdomImage] < 2){
					ramdom.push(ramdomImage + 1)
					nbImagePosition[ramdomImage]++;
					end = true;
				}
			}
		}
	}

	/*
			J'ajoute ce que j'ai que j'ai récupéré de manière aléatoire
	 */
	let cmpt = 0;
	for(let i = 0 ; i < ramdomGame.length; i++){
		for (let j = 0 ; j < 7 ; j++){
			ramdomGame[i][j] = ramdom[cmpt];
			cmpt++;
		}
	}

	return ramdomGame;
}


function displayArray(){
    let txt = "";
    for (let i = 0; i < tabGame.length; i++){
        txt += "<div>";
        for (let j = 0; j < tabGame[i].length; j++){
            if(tabGame[i][j] === 0){
                txt += "<img src='http://localhost/oclock/vendor/game/blank.png' class='m-2' style='width: 100px; height: 100px ; margin: 5px' onClick='verif(\""+i+"-"+j+"\")'></img>";
                //txt += "<button class='btn btn-primary' style='width: 100px; height: 100px ; margin: 4px' onClick='verif(\""+i+"-"+j+"\")'>Afficher</button>";
            }
            else{
                txt += "<img src='"+ getImage(tabGame[i][j])+"' class='m-2' style='width: 107px; height: 100px'></img>";
            }
        }
        txt += "</div>";
    }
    divRestult.innerHTML = txt;
}

function getImage(valeur){
    let image = "http://localhost/oclock/vendor/game/";
    switch (valeur){
        case  1 : image += "abricot.png"
            break;
        case 2 : image += "apple.png"
            break;
        case 3 : image += "banane.png"
            break;
        case 4 : image += "cerise.png"
            break;
        case 5 : image += "ceriseJaune.png"
            break;
        case 6 : image += "fraise.png"
            break;
        case 7 : image += "framboise.png"
            break;
        case 8 : image += "good.png"
            break;
        case 9 : image += "jaune.png"
            break;
        case 10 : image += "mangue.png"
            break;
        case 11 : image += "oignon.png"
            break;
        case 12 : image += "orange.png"
            break;
        case 13 : image += "pasteque.png"
            break;
        case 14 : image += "poire.png"
            break;
        case 15 : image += "pommeVerte.png"
            break;
        case 16 : image += "raisin.png"
            break;
        case 17 : image += "vert.png"
            break;
        case 18 : image += "violet.png"
            break;
    }
    return image;
}

function verif(bouton){
    /* Je lance le temps de manière à ce qu'il se déclenche qu'une seule fois*/
    if (timeStart === false){
        timeGame();
    }
    if (ready){
        let ligne = bouton.substr(0,1);
        let colonne = bouton.substr(2,1);

        nbDisplay++;
        tabGame[ligne][colonne] = tabResult[ligne][colonne];
        displayArray();

        /*Si je viens de cliquer sur un premier élément*/
        if (nbDisplay > 1){
            ready = false;
            setTimeout(() =>{
                if (tabGame[ligne][colonne] !== tabResult[oldSelection[0]][oldSelection[1]]){
                    tabGame[ligne][colonne] = 0;
                    tabGame[oldSelection[0]][oldSelection[1]] = 0;
                }
                displayArray();
                nbDisplay = 0;
                ready = true;
                oldSelection = [ligne, colonne];
				winner();
            }, 500)
        }
        else{
            oldSelection = [ligne, colonne];
        }
    }
}

function winner(a, b) {
	if(JSON.stringify(tabGame) === JSON.stringify(tabResult)){
		points++;
		//On donne un point
		alert("win");
		divRestult.style.display = 'none';
		completeBar.style.display = 'none';
		completeBar.style.display = 'none';
		winGame.style.display = 'block';
		timeFinal.innerHTML = interval + "s";
		scorePost();
	}
}

function timeGame(){
    timeStart = true;

    let countDown = setInterval(() => {
        interval--;
        let progressWitdh = interval / 120 * 100;
        if (interval > 0){
            progressBar.style.width = progressWitdh + "%";
            timeSpan.innerHTML = interval + "s";
            checkColors(progressWitdh);
        }
        else{
            clearInterval(countDown);
            progressBar.style.width = "0%";
            timeSpan.innerHTML = "Game Over";
            tabGame = tabOver;
            displayArray();
			divRestult.style.display = 'none';
			completeBar.style.display = 'none';
			completeBar.style.display = 'none';
			loseGame.style.display = 'block';
        }
    }, 1000);
}

function checkColors(width){
    if (width > 60){
        progressBar.style.background = "green";
    }
    else if (width > 30){
        progressBar.style.background = "yellow";
    }
    else {
        progressBar.style.background = "red";
    }
}

function scorePost(){
	const url = "http://localhost/oclock/index.php/game/addScore";

	const pseudo = (document.getElementById('pseudoGame').innerHTML);

	$.ajax({
		type : "POST",  //type of method
		url  : url,  //your page
		data : { score : interval, pseudo: pseudo },// passing the values
		success: function(res){
			//do what you want here...
			alert(res);
		}
	});
}
