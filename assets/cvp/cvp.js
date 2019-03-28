

	console.log('element loaded...');


	var thisCVBlock = document.getElementById("customerViewpoint");
	var rating = 2.7;
	var reviewNum = 84;
	var thisToken;
	var xhttp = new XMLHttpRequest();
	var xhttp2 = new XMLHttpRequest();

	var dealershipID = "10300";
	var country = "ROM";


	function writeStar(starLoc,thisStar){
		var thisStarImg = document.createElement("img");
		thisStarImg.id = "star" + starLoc;
		thisStarImg.style.className = "starClass";
		thisStarImg.style.position = "absolute";
		thisStarImg.style.top = "0px";
		thisStarImg.style.width = "19px";
		thisStarImg.style.height = "19px;";
		thisStarImg.style.left = (starLoc * 20) + "px";
		if(thisStar == 0){
			thisStarImg.src = "../assets/cvp/cv_star_blank.png";
		} else if(thisStar == 1){
			thisStarImg.src = "../assets/cvp/cv_star_half.png";
		} else if(thisStar == 2){
			thisStarImg.src = "../assets/cvp/cv_star_full.png";
		}
		document.getElementById("CVstars").appendChild(thisStarImg);
	}


	xhttp2.onreadystatechange = function() {
    	if (xhttp2.readyState == XMLHttpRequest.DONE) {
       		var ratingResponse = JSON.parse(this.responseText);

        	console.log("GOT THIS: " + ratingResponse);
        	rating = ratingResponse.totalRating;
        	reviewNum = ratingResponse.totalCount;

        	var CVratingTxt = rating + " (Based on " + reviewNum + " reviews)";
        	document.getElementById("CVrating").innerHTML = CVratingTxt;

        	//run through and create stars
			var starArray = [];
			var checkInt = Math.floor(rating);
			var i;
			for(i = 0; i < checkInt; i++){
				starArray[i] = 2;
			}
			if(checkInt < rating){
				starArray[i] = 1;
			} else {
				starArray[i] = 0;
			}
			i++;
			for(var l = i; l < 5; l++){
				starArray[l] = 0;
			}

			//write star images
			for(var whichStar = 0; whichStar < starArray.length; whichStar++){
				writeStar(whichStar, starArray[whichStar]);
			}
    	}
	}

	function getRatings(whichToken){
		console.log("SENDING.....  " + whichToken);
        xhttp2.open("GET", "https://ford.podium.com/api/v1/country/"+country+"/dealership/ratings?dealershipID="+dealershipID, true);
    	xhttp2.setRequestHeader("Authorization", whichToken);
    	console.log("GOT HERE.....");
    	xhttp2.send(null);
	}

	
    xhttp.onreadystatechange = function() {
    	
         if (this.readyState == 4 && this.status == 200) {
         	var secureResponse = JSON.parse(this.responseText);
            thisToken = secureResponse.user.token;
            console.log(this.responseText);
            getRatings(thisToken);
            //rating = 2.7;
         }
    };
    xhttp.open("POST", "https://ford.podium.com/api/v1/sessions", true);
    xhttp.setRequestHeader("Content-type", "application/json");

    console.log(JSON.stringify({"email":"romania_fordautotechnic@fordautotechnic.com","password":"471a41be6c69d1ecab74d2402590799b"}));

    xhttp.send(JSON.stringify({"email":"romania_fordautotechnic@fordautotechnic.com","password":"471a41be6c69d1ecab74d2402590799b"}));
